<?php

namespace Controllers;


use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class HomeController extends AbstractController
{
    /**
    fait que retourner la methode render (affichage d'une page)
     **/
    public function index(){
        return $this->render("home/index", ["pageTitle"=>"home"]);
    }

}