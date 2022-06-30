<?php


namespace core;


class Controller
{
    protected $layoutDir = "layouts";
    protected $layoutTemplate = "master";
    protected $controllerName;

    public function setControllerName($name){
        $this->controllerName = $name;
    }

    protected function render($view, $params = []){
        // базовый шаблон
        $layout = "../views/" . $this->layoutDir . "/" . $this->layoutTemplate . ".php";

        // отдельное представление
        $viewTemplate = "../views/" . $this->controllerName . "/" . $view . ".php";

        // запускаем запись любого include или require или echo в буфер
        ob_start();
        if(count($params) > 0) extract($params);
        include_once $viewTemplate;
        // получаем данные из буфера и записываем в переменную
        $content = ob_get_contents();

        // очищает буфер
        ob_end_clean();

        $totalContent = "";

        ob_start();
        include_once $layout;
        $totalContent = ob_get_contents();
        ob_end_clean();
        return $totalContent;
    }
}