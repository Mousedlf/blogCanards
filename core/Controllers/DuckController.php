<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Duck;

#[DefaultEntity(entityName: Duck::class)]
class DuckController extends AbstractController
{
    public function index(){

        $ducks = $this->repository->findAll();

        return $this->render("ducks/index",[
            "pageTitle"=>"Les canards",
            "ducks"=>$ducks
        ]);

    }
    public function show(){

        $id= null;

        if(!empty ($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect();}

        $duck = $this->repository->findById($id);

        if(!$duck){ return $this->redirect();}

        return $this->render("ducks/show",[
            "pageTitle"=> $duck->getName(),
            "duck"=>$duck,
            "review"=>$review
        ]);

    }
    public function remove(){
        $id= null;

        if(!empty ($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect();}

        $duck = $this->repository->findById($id);

        if(!$duck){ return $this->redirect();}

        $this->repository->delete($duck);

        return $this->redirect();


    }
    public function create(){

        $name=null;
        $description=null;

        if(!empty($_POST['name'])){
            $name= htmlspecialchars($_POST['name']);
        }
        if(!empty($_POST['description'])){
            $description= htmlspecialchars($_POST['description']);
        }

        if($name && $description){

//            $image = new File("duckImage");
//            if($image->isImage()){ $image->upload();}

            $duck = new Duck();
            $duck->setName($name);
            $duck->setDescription($description);
//            $duck->setImage($image->getName());

            $idDuck = $this->repository->insert($duck);

            return $this->redirect([
                "type"=>"duck",
                "action"=>"index",
                "id"=>$idDuck
            ]);
        }

        return $this->render("ducks/create", [
            "pageTitle"=>"Add a new duck"
        ]);
    }

}