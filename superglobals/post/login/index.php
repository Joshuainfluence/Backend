<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap5.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 mt-5">
                <h3>Login account</h3>
                <!-- Error alert -->
                <?php
                if (isset($_SESSION['error'])) {
                ?>
                    <div class="alert alert-danger mt-2 mb-2"><?= $_SESSION['error'] ?></div>
                <?php
                }
                ?>

                <!-- Success alert -->
                <?php
                if (isset($_SESSION['success'])) {
                ?>
                    <div class="alert alert-success mt-2 mb-2"><?= $_SESSION['success'] ?></div>
                <?php
                }
                ?>
                <div class="card">
                    <div class="card-body">
                        <form action="login.php" method="post">
                           
                            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Enter email">
                            <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Enter password">
                            <input type="submit" value="Login" class="btn btn-lg btn-primary w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php unset($_SESSION['error'], $_SESSION['success']) ?>