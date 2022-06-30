<?php

namespace controllers;

use core\Controller;

class DefaultController extends Controller {

    public function index(){
        $items = ["item1", "item2", "item3"];

        return $this->render("index", [ "models" => $items ]);
    }

    public function aboutUs(){
        return $this->render("about-us");
    }


}