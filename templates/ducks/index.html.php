
<div class="row">

    <?php foreach($ducks as $duck): ?>

        <div class="card col-3 p-0 m-2" >
            <img src="images/<?= $duck->getImage() ?>" class="card-img-top" height="200px" alt="...">
            <div class="card-body p-4">
                <h5 class="card-title"><?= $duck-> getName() ?></h5>
                    <a href="?type=duck&action=show&id=<?= $duck->getId() ?>" class="btn btn-primary">See more</a>
            </div>
        </div>

    <?php endforeach; ?>

</div>

