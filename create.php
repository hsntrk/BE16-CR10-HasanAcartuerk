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
        <legend class='h2 text-center bg-secondary bg-gradient text-white p-4'>Add Media to the Database</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="isbn" placeholder="isbn" /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="title" /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="image" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="short description" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="Book, CD, DVD" /></td>
                </tr>
                <tr>
                    <th>Author First Name</th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="Author First Name" /></td>
                </tr>
                <tr>
                    <th>Author Last Name</th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="Author Last Name" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" /></td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td><input class='form-control' type="date" name="publish_date" /></td>
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
                    <th></th>
                    <td>
                        <button class='btn btn-outline-success btn-lg m-3 ps-5 pe-5' type="submit" name="submit" value="CREATE">Insert</button>

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