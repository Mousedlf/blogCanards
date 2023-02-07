
<div class="row">

    <?php foreach($ducks as $duck): ?>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $duck-> getName() ?></h5>
                    <p class="card-text"><?= $duck-> getDescription() ?></p>
                    <a href="?type=duck&action=show&id=<?= $duck->getId() ?>" class="btn btn-warning">See more</a>
            </div>
        </div>


    <?php endforeach; ?>

</div>

