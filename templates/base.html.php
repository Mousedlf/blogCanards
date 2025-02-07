
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
<nav class="navbar navbar-expand-lg bg-body-warning ">
    <div class="container">
            <ul class="navbar-nav m-auto my-3 ">
                <li class="nav-item mx-5">
                    <a class="nav-link active" href="?type=duck&action=index">All ducks</a>
                </li>
                <a class="navbar-brand fw-bold mx-5" href="index.php">QUACK</a>
                <li class="nav-item mx-5">
                    <a class="nav-link active" href="?type=duck&action=create">Add a duck</a>
                </li>

            </ul>

    </div>
</nav>

<div class="container mt-5">


            <?= $pageContent ?>


</div>



</body>
</html>