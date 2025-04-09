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
                <h3>Create an account</h3>
            <div class="card">
                <div class="card-body">
                    <form action="signup.php" method="post">
                        <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Enter usernam">
                        <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Enter email">
                        <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Enter password">
                        <input type="submit" value="Signup" class="btn btn-lg btn-primary w-100">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php unset($_SESSION['error'], $_SESSION['success'])?>