
<a href="?type=duck&action=index" class="btn btn-warning">Go back</a>
<p>coin coin</p>

<h3 class=""><?= $duck-> getName() ?></h3>
<a href="?type=duck&action=remove&id=<?= $duck->getId() ?>" class="btn btn-danger">Delete duck</a>
<hr>
<p><?= $duck-> getDescription() ?></p>


<?php foreach ($reviews as $review) : ?>

<p><?= $review->getContent() ?></p>

<?php endforeach; ?>
