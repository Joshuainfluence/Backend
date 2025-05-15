<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap5.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-3">
                <h1>Upload your image here</h1>
                <?php
                if (isset($_SESSION['error'])) {
                ?>
                    <div class="alert alert-danger mt-2"><?= $_SESSION['error']?></div>
                <?php
                }
                ?>

                <?php
                if (isset($_SESSION['success'])) {
                ?>
                    <div class="alert alert-success mt-2"><?= $_SESSION['success']?></div>
                <?php
                }
                ?>
                <form action="val.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="fileupload" id="fileupload" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Upload" class="btn btn-primary w-100 btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php unset($_SESSION['error'], $_SESSION['success'])?>