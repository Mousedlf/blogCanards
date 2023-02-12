<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Duck;

#[TargetEntity(entityName: Duck::class)]
class DuckRepository extends AbstractRepository
{
    /**
    requete pour ajouter un element à une table
    faut lui passer un objet.
     **/
    public function insert(Duck $duck){
        $request = $this->pdo->prepare("INSERT INTO {$this->tableName} SET name=:name, description=:description, image=:image");
        $request->execute([
            "name"=>$duck->getName(),
            "description"=>$duck->getDescription(),
            "image"=>$duck->getImage()
        ]);

        return $this->pdo->lastInsertId();
    }

}

