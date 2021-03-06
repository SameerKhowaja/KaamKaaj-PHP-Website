<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<?php include('dbconfig.php'); ?>

<body>
    <?php include('session.php'); ?>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg" style="position: fixed;">
        <div class="container">
            <a class="navbar-brand" href="adminPanel.php">
                <i class="fa fa-line-chart"></i> KaamKaaj
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="customerOrder.php" class="nav-link smoothScroll">Customer Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link contact">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- PROJECT -->
    <section class="project section-padding" id="project">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                        Welcome, <strong><?php echo $_SESSION['username'] ?></strong>
                    </h2>

                    <div class="owl-carousel owl-theme" id="project-slide">
                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Marketing</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Sweet Go Agency</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="images/project/project-image02.jpg" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Website</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Smart Ladies</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="images/project/project-image03.jpg" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Branding</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Shoes factory</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="images/project/project-image04.jpg" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Social Media</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Race Bicycle</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="images/project/project-image05.jpg" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Video</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Ultimate HealthCare</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>