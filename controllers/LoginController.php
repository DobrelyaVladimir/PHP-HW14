<?php

namespace controllers;

use core\Controller;
use models\Users;
class LoginController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->user = $_POST;

    }
    public function index(){

        return $this->render("login");
    }
    public function findUser() {
        $userlist = new Users();
        $users = $userlist->getJSON();
        foreach ($users as $item) {
            if($item["login"] == $this->user["login"] && $item["pass"] == $this->user["pass"]) {
                header("Location:" .url("default", "index"));
            }
        }
    }
}