
<a href="?type=duck&action=index" class="btn btn-secondary mb-3">Go back</a>

<div class="w-100 d-flex justify-content-between">
    <h3 class="text-uppercase"><?= $duck-> getName() ?></h3>
    <a href="?type=duck&action=remove&id=<?= $duck->getId() ?>" class="btn btn-danger">Delete duck</a>
</div>

<hr>
<p><?= $duck-> getDescription() ?></p>


<?php foreach ($reviews as $review) : ?>

<p><?= $review->getContent() ?></p>

<?php endforeach; ?>
