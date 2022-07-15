<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {

    $isbn = $_POST["isbn"];
    $title = $_POST["title"];

    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];
    $id = $_POST['id'];
    $uploadError = '';
    $image = file_upload($_FILES["image"]);

    if ($image->error === 0) {
        ($_POST['image'] == "product.png") ?: unlink("../pictures/$_POST[image]");

        $sql = "UPDATE books SET 
        isbn= '$isbn',
        title= '$title',
        image= '$image->fileName',
        short_description= '$short_description',
        type= '$type',
        author_first_name= '$author_first_name',
        author_last_name= '$author_last_name',
        publisher_name= '$publisher_name',
        publisher_address= '$publisher_address',
        publish_date= '$publish_date',
        status= '$status' WHERE id = {$id}";
    } else {
        $sql = "UPDATE books SET 
        isbn = '$isbn',
        title = '$title',
        short_description = '$short_description',
        type= '$type',
        author_first_name = '$author_first_name',
        author_last_name = '$author_last_name',
        publisher_name = '$publisher_name',
        publisher_address = '$publisher_address',
        publish_date = '$publish_date',
        status= '$status' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql)) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <?php require_once "../components/bootstrap.php" ?>
    <!-- fontawesome kit icons -->
    <?php require_once "../components/fontawesome.php" ?>
    <!-- bootstrap icons -->
    <?php require_once "../components/bootstrap_icons.php" ?>
    <!-- Font Family -->
    <?php require_once "../components/font_family.php" ?>
    <!-- Animate style -->
    <?php require_once "../components/animate.php" ?>

    <!-- my style css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Media</title>
</head>

<body class=" bg-light">

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-secondary align-items-center ">

        <a href="#" class="navbar-brand navbar-dark  ms-3"><img src="../images/logo.png" alt="" height="60vh">Big Library</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navmenu">
            <ul class="navbar-nav navbar-dark mr-auto d-lg-flex justify-content-around align-items-center">
                <li class="nav-item active"><a href="../index.php" class="nav-link ">Home</a></li>
                <li class="nav-item"><a href="../admin.php" class="nav-link ">Media</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">Services</a></li>
                <a href="../index.php" class="btn btn-outline-light m-3"> EXIT the Library <i class="fa-solid fa-right-from-bracket"></i></a>
            </ul>
        </div>

    </nav>

    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../update.php?id=<?php echo $id; ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../admin.php'><button class="btn btn-success" type='button'>Back to Media</button></a>
        </div>
    </div>


    <!-- social media icons -->
    <section class="container-fluid pb-1 bg-secondary text-light">
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
    <script src="../js/script.js"></script>


</body>

</html>