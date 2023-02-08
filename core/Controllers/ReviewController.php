<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Review;

#[DefaultEntity(entityName: Review::class)]
class ReviewController extends AbstractController
{

    public function remove(){

    }

    public function create(){

    }

}