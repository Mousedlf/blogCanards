<?php

namespace App;

class Kernel
{
    /**
     lecture de l'url avec le type (controller appelé) et l'action (methode appelée) et pointe par défaut vers Home->index
     **/
    public static function run(){

        $type = "home";
        $action = "index";

        if(!empty($_GET['type'])){ $type = $_GET['type']; };
        if(!empty($_GET['action'])){ $action = $_GET['action']; };

        $type = ucfirst($type);
        $controllerName = "\Controllers\\".$type."Controller";


        $controller = new $controllerName();

        $controller->$action();

        }

}