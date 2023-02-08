<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Duck;
use Entity\Review;

#[DefaultEntity(entityName: Review::class)]
class ReviewController extends AbstractController
{

    public function remove(){

        $id=null;

        if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect();}

        $review= $this->repository->findByid($id);

        if(!$review){ return $this->redirect();}

        $duckId = $review->getDuckId();
        $this->repository->delete($review);

        return $this->redirect([
            "type"=>"duck",
            "action"=>"show",
            "id"=>$duckId
        ]);

    }

    public function create(){

        $content= null;
        $duckId = null;

        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }
        if(!empty($_POST['duckId']) && ctype_digit($_POST['duckId'])){
            $duckId = $_POST['duckId'];
        }

        if($duckId && $content){

            $duck = $this->getRepository(Duck::class)->findById($duckId);
            if(!$duck){ return $this->redirect(); }

            $review = new Review();
            $review->setContent($content);
            $review->setDuckId($duckId);

            $this->repository->insert($review);

            return $this->redirect([
                "type"=>"duck",
                "action"=>"show",
                "id"=>$duck->getId()
            ]);
        }

        return $this->redirect([
            "type"=>"duck",
            "action"=>"index"  //redirection vers duck show et non index!, ajouter id
        ]);

    }

}