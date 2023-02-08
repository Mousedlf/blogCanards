<?php

namespace Controllers;


use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class HomeController extends AbstractController
{

    public function index(){
        return $this->render("home/index", ["pageTitle"=>"home"]);
    }

}