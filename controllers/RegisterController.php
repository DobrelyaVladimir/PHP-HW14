<?php
namespace controllers;
use core\Controller;
use models\Users;

class RegisterController extends Controller
{
    public $user;
    public function __construct()
    {
      $this->user = $_POST;

    }

    public function index(){

        return $this->render("registration");
    }
    public  function  checkUsers () {
        if (isset($this->user) && !empty($this->user["login"]) && !empty($this->user["pass"]) && !empty($this->user["pass"]) && $this->user["pass"] == $this->user["confirmPass"]) {
            $userlist = new Users();
            $users = $userlist->getJSON();
            $flag = true;
            foreach ($users as $item) {
                if ($item["login"] == $this->user["login"]) {
                    $flag = false;
                    echo "Такой пользователь уже существует";
                }
            }
            if ($flag == true) {
                $users[] = ["login" => $this->user["login"], "pass" => $this->user["pass"], "email" => $this->user["email"], "phone" => $this->user["phone"]];
                $userlist->setJSON($users);
                header("Location:" . url("login", "index"));
            }
        } else echo "Данные введены не верно";
    }
}
