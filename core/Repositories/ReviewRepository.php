<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Duck;
use Entity\Review;

#[TargetEntity(entityName: Review::class)]
class ReviewRepository extends AbstractRepository
{
    public function insert(Review $review){
        $request = $this->pdo->prepare("INSERT INTO {$this->tableName} SET content=:content, duck_id=:duck_id");
        $request->execute([
           "content"=>$review->getContent(),
           "duck_id"=>$review->getDuckId()
        ]);

        return $this->pdo->lastInsertId();
    }

    public function findAllByDuck(Duck $duck){
        $request = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE duck_id=:duck_id");
        $request->execute([
           "duck_id"=>$duck->getId()
        ]);

        $reviews = $request->fetchAll(\PDO::FETCH_CLASS,get_class($this->targetEntity));
        return $reviews;
    }


}