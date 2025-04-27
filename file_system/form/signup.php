<?php
session_start();
$title = 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="bootstrap/bootstrap5.min.css">
    <link rel="stylesheet" href="font_awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../index.css">
    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</head>

<body>
    <header class="container-fluid bg-dark">
        <div class="row" style="width: 100%;">
            <div class="col-sm-12 col-md-12 col-lg-12 fw-bold text-center">
                <h1 class="fw-bold fs-1 ing">
                    <span class="first">I</span><span class="second">N</span><span class="third">F</span><span class="fourth">L</span><span class="fifth">U</span><span class="second">E</span><span class="fifth">N</span><span class="first">C</span><span class="second">E </span> <span class="first">D</span><span class="fourth">I</span><span class="third">G</span><span class="second">I</span><span class="first">T</span><span class="fifth">A</span><span class="second">L</span>
                </h1>
                <h3 class=" text-light fs-5 fw-lighter">Get all digital accessories</h3>
            </div>
        </div>
    </header>
    <div class="container-fluid bg-dark">
        <div class="row d-flex justify-content-center align-center">
            <!-- <div class="col-md-12 col-lg-6 mt-5 front">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="col-md-3 carousel-item active">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/product-6.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/delivery.png" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/Lenovo-Tab-P12-Pro.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/lll.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/cat-4.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/product-7.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 carousel-item">
                            <div class="card" style="width: 100%;">
                                <div class="w-100" style="height: 38rem;">
                                    <img src="../images/iphone 13.jpg" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div> -->
            <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                <form action="signup_val.php" method="POST">
                    <div class="card bg-dark">
                        <?php if (isset($_SESSION['reject'])) : ?>
                            <div class="alert alert-danger mt-3"><?= $_SESSION['reject'] ?></div>
                        <?php endif ?>
                        <div class="card-header bg-dark text-light">
                            <h4>Create an account</h4>
                        </div>
                        <div class="form-group text-center">
                            <a href="login.php" class="text-decoration-none text-primary">Login if you already have an account with us</a>
                        </div>

                        <div class="card-body">
                            <div class="form-floating mt-2">
                                <input class="form-control" type="text" name="firstname" id="floatInput" placeholder="Enter first name here">
                                <label for="floatInput">First Name</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="text" name="lastname" id="floatInput" placeholder="Enter last name here">
                                <label for="floatInput">Last Name</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="date" name="date" id="date" class="form-control">
                                <label for="floatInput">Date of birth</label>
                            </div>
                            <div class="form-floating mt-3 text-light">
                                <h2>Select gender</h2>
                            </div>
                            <div class="form-group text-light">
                                <input type="radio" name="male" id="male">
                                <label for="radio">Male</label>
                            </div>
                            <div class="form-group text-light">
                                <input type="radio" name="male" id="female">
                                <label for="radio">Female</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="email" name="email" id="floatInput" placeholder="Enter your email address here">
                                <label for="floatInput">Email Address</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="text" name="username" id="floatInput" placeholder="Enter your username here">
                                <label for="floatInput">Username</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="password" name="password" id="floatInput" class="form-control">
                                <label for="floatInput">Password</label>
                            </div>
                            <div class="form-group">
                                <?php if (isset($_SESSION['confirm'])) : ?>
                                    <div class="alert alert-danger mt-3"><?= $_SESSION['confirm'] ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-floating mt-3">

                                <input type="password" name="password_con" id="floatInput" class="form-control">
                                <label for="floatInput">confirm password</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="number" name="number" id="floatInput" class="form-control">
                                <label for="floatInput">Phone Number</label>
                            </div>
                            <!-- <div class="form-floating mt-3">
                                <a href="pages/save_signup.php" class="btn btn-outline-primary text-light text-decoration-none">Save</a>
                            </div> -->
                            <!-- <div class="form-floating mt-3">
                                <a href="" class="btn btn-outline-primary">Save</a>
                            </div> -->
                        </div>
                        <div class="card-footer">
                            <div class="form-floating">
                                <button type="submit" class="bat btn-lg text-light w-100">Create Account</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>
<?php
unset($_SESSION['reject'], $_SESSION['confirm'])
?>