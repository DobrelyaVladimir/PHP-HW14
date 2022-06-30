<?php
namespace  models;

class Users
{



    public function getJSON(){
        $fileName = "../store/users.json";
        $strJSON = "[]";
        if(file_exists($fileName)){
            $strJSON = file_get_contents($fileName);
        }

        return json_decode($strJSON, true);
    }
    public function setJSON($users){
        $strJSON = json_encode($users);
        file_put_contents("../store/users.json", $strJSON);
    }
}