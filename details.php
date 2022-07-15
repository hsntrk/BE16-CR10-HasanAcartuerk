<?php
require_once "actions/db_connect.php";

$id = $_GET["id"];
$sql = "select * from books where id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <?php require_once "components/bootstrap.php" ?>
    <!-- fontawesome kit icons -->
    <?php require_once "components/fontawesome.php" ?>
    <!-- bootstrap icons -->
    <?php require_once "components/bootstrap_icons.php" ?>
    <!-- Font Family -->
    <?php require_once "components/font_family.php" ?>
    <!-- Animate style -->
    <?php require_once "components/animate.php" ?>

    <!-- my style css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Details</title>
</head>

<body class=" bg-light">

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-secondary align-items-center ">

        <a href="#" class="navbar-brand navbar-dark  ms-3"><img src="images/logo.png" alt="" height="60vh">Big Library</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navmenu">
            <ul class="navbar-nav navbar-dark mr-auto d-lg-flex justify-content-around align-items-center">
                <li class="nav-item active"><a href="index.php" class="nav-link ">Home</a></li>
                <li class="nav-item"><a href="admin.php" class="nav-link ">Media</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">Services</a></li>
                <a href="index.php" class="btn btn-outline-light m-3"> EXIT the Library <i class="fa-solid fa-right-from-bracket"></i></a>
            </ul>
        </div>

    </nav>

    <!-- media library from php -->
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3 d-flex p-2 justify-content-between'>
            <a href="create.php"><button class='btn btn-outline-info' type="button">Add MEDIA to your library</button></a>

        </div>

        <p class='h2 text-center bg-secondary bg-gradient text-white p-4'>Details of the <?= $row["type"] ?> from the Author <?= $row["author_first_name"] ?> </p>

        <div class="card mb-3" style="max-width: 80vw">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src='pictures/<?= $row["image"] ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><?= $row["type"] ?></h2>
                        <hr>
                        <h4 class="card-title"><?= $row["title"] ?></h4>
                        <hr>
                        <p class="card-text">
                            <strong>ISBN:</strong> <?= $row["isbn"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Description:</strong> <?= $row["short_description"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Author Name:</strong> <?= $row["author_first_name"] ?> <?= $row["author_last_name"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Publisher Name:</strong> <?= $row["publisher_name"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Publisher Address:</strong> <?= $row["publisher_address"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Status Availability: </strong> <?= $row["status"] ?>
                        </p>
                        <p class="card-text"><small class="text-muted">publishing date <?= $row["publish_date"] ?></small></p>
                        <a href="details.php?id=<?= $row["id"] ?>">
                            <button class="btn btn-info btn-sm" type="button">Details</button></a>
                        <a href="update.php?id=<?= $row["id"] ?>">
                            <button class="btn btn-primary btn-sm" type="button">Update</button></a>
                        <a href="delete.php?id=<?= $row["id"] ?>">
                            <button class="btn btn-danger btn-sm" type="button">Delete</button></a>
                    </div>
                </div>

            </div>
        </div>
        <a href="admin.php" class="btn btn-outline-info btn-lg ps-4 pe-4 mb-5 mt-3"><i class="fa-solid fa-backward"></i>&ensp; Return to Media &ensp;
        </a>
    </div>


    <!-- social media icons -->
    <section class=" container-fluid pb-1 bg-secondary text-light">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="m-1 p-1 d-lg-flex justify-content-center">
                    <button type="button" class="btn m-1"><i class="fa-brands fa-facebook"></i></button>
                    <button type="button" class="btn m-1"><i class="fa-brands fa-twitter"></i></button>
                    <button type="button" class="btn m-1"><i class="fa-brands fa-google"></i></button>
                    <button type="button" class="btn m-1"><i class="fa-brands fa-instagram"></i></button>
                    <button type="button" class="btn m-1"><i class="fa-brands fa-linkedin"></i></i></button>
                    <button type="button" class="btn m-1"><i class="fa-brands fa-github"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark text-white">
        <div class="container d-flex justify-content-center">
            <p class="text-white m-0">&copy 2022 Hasan Acartürk</p>
        </div>
    </footer>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- my script js -->
    <script src="js/script.js"></script>





</body>

</html>