<?php

namespace Repositories;

use Attributes\Table;
use Attributes\TargetEntity;
use Database\PDOMySQL;

class AbstractRepository
{
    protected $pdo;
    protected $targetEntity;
    protected string $tableName;


    public function __construct(){
        $this->pdo = PDOMySQL::getPdo();
        $entityName = $this->resolveEntityName();
        $this->targetEntity = new $entityName();
        $this->tableName = $this->resolveTableName();
    }

    protected function resolveEntityName(){
        $reflect = new \ReflectionClass($this);
        $attributes = $reflect->getAttributes(TargetEntity::class);

        return $attributes[0]->getArguments()["entityName"];
    }

    protected function resolveTableName(){
        $reflect = new \ReflectionClass($this->targetEntity);
        $attributes = $reflect->getAttributes(Table::class);

        return $attributes[0]->getArguments()["name"];
    }

//______________________________________________________

    /**
    requete pour trouver tous les element d'une table
    retourne tous les éléments.
     **/
    public function findAll(){
        $request = $this->pdo->query("SELECT * FROM $this->tableName");
        $items = $request->fetchAll(\PDO::FETCH_CLASS,get_class($this->targetEntity));

        return $items;
    }

    /**
    requete pour trouver un element de la DB grâce à son id
    faut lui passer l'id de l'element recherché, qu'y va ensuite être retourné.
     **/
    public function findById(int $id){
        $query= $this->pdo->prepare("SELECT * FROM $this->tableName WHERE id=:id");
        $query->execute(["id"=>$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS,get_class($this->targetEntity));
        $item = $query->fetch();

        return $item;
    }

    /**
    requete pour supprimer un element de la DB grâce à son id
    faut passer l'objet à supprimer à la méthode.
     **/
    public function delete(object $object){
        $query = $this->pdo->prepare("DELETE FROM $this->tableName WHERE id = :id") ;
        $query->execute(['id'=>$object->getId()]);
    }
}