<!DOCTYPE html>
<html>

<head>
    <title>Library Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="../css/docs.css" rel="stylesheet" media="screen">
    <link href="../css/diapo.css" rel="stylesheet" media="screen">
    <link href="../css/font-awesome.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="print" href="../css/print.css" />

    <!-- js -->
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.hoverdir.js"></script>

    <script>
        jQuery(document).ready(function() {
            $(function() {
                $('.pix_diapo').diapo();
            });
        });
    </script>
    <noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
					left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
		</noscript>

    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
    <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='../scripts/jquery.hoverIntent.minified.js'></script>
    <script type='text/javascript' src='../scripts/diapo.js'></script>


    <!--sa calendar-->
    <script type="text/javascript" src="../js/datepicker.js"></script>
    <link href="../css/datepicker.css" rel="stylesheet" type="text/css" />

</head>
<?php include('dbcon.php'); ?>

<body>
    <?php include('session.php'); ?>

    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse">
                    <!-- .nav, .navbar-search, .navbar-form, etc -->
                    <ul class="nav">
                        <li class="active"><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                        <li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
                        <li>
                            <a href="borrow.php" data-toggle="dropdown"><i class="icon-file icon-large"></i> Transaction</a>
                            <ul class="dropdown-menu">
                                <li><a href="borrow.php"><i class="icon-pencil icon-large"></i>&nbsp;Borrow</a></li>
                                <li><a href="return.php"><i class="icon-cog icon-large"></i>&nbsp;View Returned Books</a></li>
                                <li><a href="view_borrow.php"><i class="icon-reorder icon-large"></i>&nbsp;View Borrowed Books</a></li>
                            </ul>
                        </li>
                        <li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
                        <li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Member</a></li>
                        <li><a href="archive.php"><i class="icon-list-alt icon-large"></i>&nbsp;Deleted Books</a></li>
                        <li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>


                        <!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
                        <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                    </ul>
                    <div class="pull-right">
                        <div class="admin">Welcome: <?php echo $_SESSION['username_admin'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header"></div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="advance_search.php">
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Title</label>
                    <div class="controls">
                        <input type="text" name="title" id="inputEmail" placeholder="Title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Author</label>
                    <div class="controls">
                        <input type="text" name="author" id="inputPassword" placeholder="Author">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>

    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">

                    <div class="alert alert-info">
                        <Strong>Welcome to Library Management System</strong>&nbsp;
                        <div class="pull-right">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                            ?>
                        </div>
                    </div>


                    <div style="overflow:hidden; width:960px; margin:0 auto; padding:0 20px;">
                        <div class="pix_diapo">

                            <div data-thumb="../images/img_play/1.jpg">
                                <img src="../images/img_play/1.jpg">

                            </div>

                            <div data-thumb="../images/img_play/2.jpg">
                                <img src="../images/img_play/2.jpg">

                            </div>

                            <div data-thumb="../images/img_play/3.jpg" data-time="7000">
                                <img src="../images/img_play/3.jpg">
                            </div>

                            <div data-thumb="../images/img_play/4.jpg" data-time="7000">
                                <img src="../images/img_play/4.jpg">
                            </div>

                            <div data-thumb="../images/img_play/5.jpg" data-time="7000">
                                <img src="../images/img_play/5.jpg">
                            </div>

                            <div data-thumb="../images/img_play/6.jpg" data-time="7000">
                                <img src="../images/img_play/6.jpg">
                            </div>

                            <div data-thumb="../images/img_play/7.jpg" data-time="7000">
                                <img src="../images/img_play/7.jpg">
                            </div>

                            <div data-thumb="../images/img_play/8.jpg" data-time="7000">
                                <img src="../images/img_play/8.jpg">
                            </div>

                            <div data-thumb="../images/img_play/9.jpg" data-time="7000">
                                <img src="../images/img_play/9.jpg">
                            </div>
                            <div data-thumb="../images/img_play/10.jpg" data-time="7000">
                                <img src="../images/img_play/10.jpg">
                            </div>

                        </div>

                    </div>

                    </section>


                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="foot-margin">
                <p><a>Library Management System Since November 5, 2020</a></p>
            </div>
        </div>
    </footer>

</body>

</html>