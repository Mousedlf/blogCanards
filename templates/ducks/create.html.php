<h1 class="fw-bold">NEW DUCK</h1>

<form enctype="multipart/form-data" action="?type=duck&action=create" method="post">
    <input class="form-control" placeholder="name of the duck" type="text" name="name" id="">
    <textarea class="form-control mt-2" placeholder="description of said duck" rows="4" type="text" name="description" id=""></textarea>
    <input type="file" name="duckImage" id="">
    <input class="btn btn-success mt-3"  type="submit" value="Add your fancy new duck">
</form>
