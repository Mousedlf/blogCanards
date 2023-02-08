
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-warning">
<nav class="navbar navbar-expand-lg bg-body-warning d-flex justify-content-center ">
    <div class="container-fluid ">
        <a class="navbar-brand fw-bold" href="index.php">QUACK</a>
        <img src="" alt="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="?type=duck&action=index">All ducks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="?type=duck&action=create">Add a duck</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<div class="container mt-5">


            <?= $pageContent ?>


</div>



</body>
</html>