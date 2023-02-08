
<a href="?type=duck&action=index" class="btn btn-secondary mb-3">Go back</a>

<div class="w-100 d-flex justify-content-between">
    <h3 class="text-uppercase"><?= $duck-> getName() ?></h3>
    <a href="?type=duck&action=remove&id=<?= $duck->getId() ?>" class="btn btn-danger">Delete duck</a>
</div>

<hr>
<p><?= $duck-> getDescription() ?></p>


<h4 class="mt-5">Comments</h4>

    <?php foreach ($reviews as $review) : ?>

         <p class="border border-dark p-2"><?= $review->getContent() ?></p>

    <?php endforeach; ?>
