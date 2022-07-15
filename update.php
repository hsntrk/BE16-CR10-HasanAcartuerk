<?php
require_once "actions/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $isbn = $data["isbn"];
        $title = $data["title"];
        $image = $data["image"];
        $short_description = $data["short_description"];
        $type = $data["type"];
        $author_first_name = $data["author_first_name"];
        $author_last_name = $data["author_last_name"];
        $publisher_name = $data["publisher_name"];
        $publisher_address = $data["publisher_address"];
        $publish_date = $data["publish_date"];
        $status = $data["status"];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
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

    <title>Media</title>
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

    <fieldset class="container manageProduct w-75 mt-3">
        <legend class='h2 text-center bg-secondary bg-gradient text-white p-4'>Update Request Media <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>COVER</th>
                    <td>
                        <legend><img class='img-thumbnail' src='pictures/<?php echo $image ?>' alt=""></legend>
                    </td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="isbn" placeholder="isbn" value="<?php echo $isbn ?>" /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="title" value="<?php echo $title ?>" /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="image" value="<?php echo $image ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="short description" value="<?php echo $short_description ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="Book, CD, DVD" value="<?php echo $type ?>" /></td>
                </tr>
                <tr>
                    <th>Author First Name</th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="Author First Name" value="<?php echo $author_first_name ?>" /></td>
                </tr>
                <tr>
                    <th>Author Last Name</th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="Author Last Name" value="<?php echo $author_last_name ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publisher_name ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisher_address ?>" /></td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td><input class='form-control' type="date" name="publish_date" value="<?php echo $publish_date ?>" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td> <select name="status">
                            <option value="available">Available</option>
                            <option value="reserved">Reserved</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />

                    <input type="hidden" name="image" value="<?php echo $image ?>" />
                    <th></th>
                    <td>
                        <button class='btn btn-outline-success btn-lg m-3 ps-5 pe-5' type="submit" name="submit">Update</button>

                        <a href="admin.php" class="btn btn-outline-danger btn-lg m-3 ps-4 pe-4"> Cancel &ensp; <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

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
    <script src="js/script.js"></script>


</body>

</html>