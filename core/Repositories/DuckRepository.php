<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Duck;

#[TargetEntity(entityName: Duck::class)]
class DuckRepository extends AbstractRepository
{
    //methode insert
    public function insert(Duck $duck){
        $request = $this->pdo->prepare("INSERT INTO {$this->tableName} SET name=:name, description=:description"); //image=:image
        $request->execute([
            "name"=>$duck->getName(),
            "description"=>$duck->getDescription()
        ]);

        return $this->pdo->lastInsertId();
    }

}

/* "image"=>$duck->getImage() */
/*    remettre ligne image dans DB*/
