<?php

function url($controller = "default", $action = "index", $params = [] ){
    $pramsText = "";
    foreach ($params as $keyParam => $value){
        $pramsText .= "&$keyParam=$value";
    }
    $url = "?controller=$controller&action=$action$pramsText";

    return $url;
}