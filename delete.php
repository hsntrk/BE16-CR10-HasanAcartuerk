<?php
require_once "actions/db_connect.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $sql = "DELETE FROM books WHERE id = $id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        // header("Location: index.php");
        header("refresh:2;url=admin.php");
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
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

    <title>Delete</title>
</head>

<body class="bg-light">

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

    <!-- Delete Part -->
    <div class="d-flex  justify-content-center align-item-center m-5">
        <div class="card bg-warning text-center" style="width: 25rem;">
            <div class="card-body m-3">
                <h1 class="card-title text-danger"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp; Attention &nbsp;<i class="fa-solid fa-triangle-exclamation"></i></h1>
                <h2 class="card-text">Are you sure you want to delete?</h2>
                <div class="d-flex justify-content-center m-3">
                    <form method="POST">
                        <input type="submit" class="btn btn-lg btn-outline-danger me-5" name="submit" value="Yes">
                    </form>
                    <a class="btn btn-lg btn-outline-success ms-5" href="admin.php">No</a>

                </div>
            </div>
        </div>
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