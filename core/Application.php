<?php

namespace core;

class Application{
    private $controllerName;
    private $actionName;

    public function __construct()
    {
        $this->controllerName = $_GET["controller"] ?? "default";
        $this->actionName = $_GET["action"] ?? "index";

        if(strpos($this->actionName, "-") > 0) {
            $mss = explode("-", $this->actionName);
            for($i = 1; $i < count($mss); $i++){
                $mss[$i] = ucfirst($mss[$i]);
            }

            $this->actionName = implode("", $mss);
        }
    }

    public function run(){

        // Приводим название контроллера к верхнему регистру первого символа
        $className = ucfirst($this->controllerName) . "Controller"; // DefaultController
        $class = "controllers\\$className"; // к названию класса добавляем пространство имен

        // проверяем наличие данного класса в системе
        if(!file_exists( "..\\" .  $class . ".php")) throw new \Exception("Not Found Exception");

        // создаем класс контроллера по его полному имени в переменной $class
        $controller = new $class();

        $controller->setControllerName($this->controllerName);

        // вызываем метод в контроллере по его имени в actionName.
        // и выводим все содержимое страницы
        echo $controller->{$this->actionName}();
    }

}