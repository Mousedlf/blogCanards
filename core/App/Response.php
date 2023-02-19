<?php

namespace App;

class Response
{
    /**
    utilité: renvoyer vers une page différente (la home par défault)
    paramètres attendus: attend un tableau avec un type et une action pour pouvoir l'insérer dans l'url
     **/
    public static function redirect(? array $params = null){

        $url = "index.php";

        if($params){

            $url = "?";

            foreach ($params as $paramName=>$paramValue){

                $newParam = $paramName."=".$paramValue."&";
                $url.=$newParam;

            }

        }

        header("Location: ${url}");
        exit();

    }
}