<?php include('file.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/media.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
        rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- NACOS Election -->
                <img src="assets/img/logo-removebg-preview.png" alt="">
            </div>
            <button id="menu-btn" class="hamburger">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>

            </button>
            <div class="tabs">

                <style>

                </style>
                <ul class="hide">
                    <li>
                        <a href="">Home</a>
                        <!-- </li> -->

                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>

                        <a href="" class="registerBtn">Register</a>
                        <!-- <div class="select">

                            <a href="">As Candidate</a>


                            <a href="">As Candidate</a>

                        </div> -->

                    </li>
                    <li>

                        <a href="" class="registerBtn">View results</a>

                    </li>
                </ul>

            </div>

        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <?php
                for ($i = 0; $i < $array_length; $i++) {
                ?>
                    <div class="col shadow">
                        <div class="image">
                            <img src=<?php echo $users[$i][3]?> alt="">
                        </div>
                        <div class="title">
                            <h3><?php echo ucfirst($users[$i][0]);?></h3>
                            <h5>Running to be: <span class="fw"><?php echo $users[$i][1];?></span></h5>
                        </div>
                        <div class="body">
                            <h6><?php echo $users[$i][2]?>.</h6>
                        </div>
                        <div class="footer">
                            <a href="" class="shadow">View Manifesto</a>
                            <a href="">Vote</a>
                        </div>
                    </div>
                <?php
                }
                ?>
              
            </div>
        </div>
    </section>
    <script src="assets/js/nav.js"></script>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.about-text', {
            delay: 500,
            origin: 'left'
        });
        ScrollReveal().reveal('.about .profileImg', {
            delay: 600,
            origin: 'bottom'
        });
        ScrollReveal().reveal('.about-content p', {
            delay: 700,
            origin: 'left',
            interval: 200
        });
        ScrollReveal().reveal('.about-content h4', {
            delay: 800,
            origin: 'left'
        });
        ScrollReveal().reveal('.about-content .row .col ul li', {
            delay: 900,
            origin: 'bottom',
            interval: 100
        });
        // scroll effect for the experience
        ScrollReveal().reveal('.experience-content h3 a', {
            delay: 600,
            origin: 'bottom',
            interval: 200
        });
        ScrollReveal().reveal('.company-text h4', {
            delay: 700,
            origin: 'left',
            interval: 200
        });
        ScrollReveal().reveal('.company-logo', {
            delay: 800,
            origin: 'bottom',
            interval: 200
        });

        // scroll effect for the projects
        ScrollReveal().reveal('.col-project', {
            delay: 500,
            origin: 'bottom',
            interval: 200
        });
    </script>
    <script src="assets/js/scroll.js"></script>

</body>

</html>