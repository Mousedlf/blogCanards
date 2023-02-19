<?php

namespace App;


class View
{

    /**
    afficher une page c'est-à-dire le template de base ainsi que du contenu.
    a besoin de pointer vers le template visé et possibilité d'y insérer dans un tableau des données supplémentaires comme le "pageTitle"
     **/
    public static function render($templateName, $data){

               extract($data);


                    ob_start();
                    require_once ("templates/${templateName}.html.php");

                $pageContent = ob_get_clean();

                ob_start();

                require_once ('templates/base.html.php');

                echo ob_get_clean();
        }
}