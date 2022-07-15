<?php
require_once "actions/db_connect.php";

$id = $_GET["id"];
$publisher_name = $_GET["publisher_name"];
$sql = "SELECT * from books where publisher_name = $publisher_name";
$result = mysqli_query($connect, $sql);
$body = "";


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $body .= "<tr>
        <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
        <td>" . $row['title'] . "</td>
        <td>" . $row['isbn'] . "</td>
        <td>" . $row['status'] . "</td>
        <td> <a href='publisher.php?id=" . $row['publisher_name'] . "'>
        <button class='btn btn-outline-secondary btn-sm' type='button'>{$row['publisher_name']} </button></a></td>
        <td>
        <a href='details.php?id=" . $row['id'] . "'>
        <button class='btn btn-info btn-sm' type='button'>Details</button></a>
        <a href='update.php?id=" . $row['id'] . "'>
        <button class='btn btn-primary btn-sm' type='button'>Update</button></a>
        <a href='delete.php?id=" . $row['id'] . "'>
        <button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
        </td>
        </tr>";
    }
} else {
    $body = "<tr><td colspan='6'><center>No Data Available </center></td></tr>";
}


mysqli_close(($connect));

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

    <title>Publisher</title>
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class="text-center fw-bold fs-1"><?php echo $publisher_name; ?>
            </div>
            <hr>
            <?php
            echo $body;
            ?>
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