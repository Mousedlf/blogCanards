
<a href="?type=duck&action=index" class="btn btn-secondary mb-3">Go back</a>

<div class="w-100 d-flex justify-content-between">
    <h3 class="text-uppercase"><?= $duck-> getName() ?></h3>
    <a href="?type=duck&action=remove&id=<?= $duck->getId() ?>" class="btn btn-danger">Delete duck</a>
</div>

<hr>
<p><?= $duck-> getDescription() ?></p>


<h4 class="mt-5">Comments</h4>

    <?php foreach ($reviews as $review) : ?>

        <div class="border bg-light border-dark p-2 d-flex justify-content-between mb-1 ">
                <p class="p-0 m-0"><?= $review->getContent() ?></p>
                <a href="?type=review&action=remove&id=<?= $duck->getId() ?>" class="btn btn-danger btn-sm">Delete comment</a>
        </div>

    <?php endforeach; ?>

<form action="?type=review&action=create" method="post" class="mt-2">
    <input type="text" name="content" id="" placeholder="new comment">
    <input class="btn btn-dark btn-sm" type="submit" value="send" >
    
</form>