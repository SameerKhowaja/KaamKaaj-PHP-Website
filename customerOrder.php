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
            <a class="navbar-brand" href="customerOrder.php">
                <i class="fa fa-line-chart"></i> KaamKaaj
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="adminPanel.php" class="nav-link smoothScroll">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link contact">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PROJECT -->
    <section class="project section-padding">
        <div class="container-fluid">
            <!-- Heading -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="text-center mb-3">
                        <h2 class="text-center" data-aos="fade-up"><strong>Customer Data</strong></h2>
                    </div>
                </div>
            </div>
            <!-- Filter -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="input-group mb-1" data-aos="fade-up">
                        <span class="input-group-addon form-control col-sm-1"><i class="fa fa-filter fa-lg"></i></span>
                        <input type="text" name="searchTable" id="searchData" class="form-control col-sm-11" placeholder="Search From Table" style="border:1px solid lightblue; color:black;">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addDataModal">Add New Order Data</button>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <table class="table table-hover table-bordered table-responsive-lg" data-aos="fade-up">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">FullName</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Service</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">No.of Labour</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody id="customerTable">

                            <?php 
                                $user_query=mysqli_query($conn, "select * from customerdata")or die(mysqli_error());
								while($row = mysqli_fetch_array($user_query)){
                                    $id = $row['id'];
                                    $fullname = $row['fullname'];
                                    $contact = $row['contact'];
                                    $address = $row['address'];
                                    $service = $row['service'];
                                    $date = $row['date'];
                                    $time = $row['time'];
                                    $labour_count = $row['labour_count'];
                                    $amount = $row['amount'];
							?>
                                <tr class='text-center'>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $fullname; ?></td>
                                    <td><?php echo $contact; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $service; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo $time; ?></td>
                                    <td><?php echo $labour_count; ?></td>
                                    <td><?php echo $amount; ?></td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-warning editModal">Edit</button>
                                            <button type="button" class="btn btn-danger deleteModal">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

    <!-- Edit Data Modal -->
    <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editDataModal">Edit Order Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="customerOrder_Save.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="cusID" id="cusID">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fullname" class="col-form-label">FullName: </label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="contact" class="col-form-label">Contact Number: </label>
                                <input type="text" class="form-control" id="contact" name="contact" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="address" class="col-form-label">Address: </label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="service" class="col-form-label">Service: </label>
                                <input type="text" class="form-control" id="service" name="service" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="date" class="col-form-label">Date: </label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="time" class="col-form-label">Time: </label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="labour_count" class="col-form-label">No.of Labour: </label>
                                <input type="text" class="form-control" id="labour_count" name="labour_count" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="amount" class="col-form-label">Amount: </label>
                                <input type="text" class="form-control" id="amount" name="amount" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="editNow" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Data Modal -->
    <div class="modal fade" id="deleteDataModal" tabindex="-1" role="dialog" aria-labelledby="deleteDataModal" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteDataModal">Delete Order Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="customerOrder_Save.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="cusID1" id="cusID1">
                        <div class="alert alert-danger">Are you Sure you want to Delete this Customer Data?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="delNow" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Data Modal -->
    <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addDataModal">Add New Order Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="customerOrder_Save.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fullname" class="col-form-label">FullName: </label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="contact" class="col-form-label">Contact Number: </label>
                                <input type="text" class="form-control" id="contact" name="contact" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="address" class="col-form-label">Address: </label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="service" class="col-form-label">Service: </label>
                                <input type="text" class="form-control" id="service" name="service" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="date" class="col-form-label">Date: </label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="time" class="col-form-label">Time: </label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="labour_count" class="col-form-label">No.of Labour: </label>
                                <input type="text" class="form-control" id="labour_count" name="labour_count" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="amount" class="col-form-label">Amount: </label>
                                <input type="text" class="form-control" id="amount" name="amount" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="saveNow" class="btn btn-primary">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function(){
            $("#searchData").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#customerTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $(".editModal").on("click", function(){
                $("#editDataModal").modal("show");

                $tr1 = $(this).closest("tr");
                var data = $tr1.children("td").map(function(){
                    return $(this).text();
                }).get();

                $("#cusID").val(data[0]);
                $("#fullname").val(data[1]);
                $("#contact").val(data[2]);
                $("#address").val(data[3]);
                $("#service").val(data[4]);
                $("#date").val(data[5]);
                $("#time").val(data[6]);
                $("#labour_count").val(data[7]);
                $("#amount").val(data[8]);
            });

            $(".deleteModal").on("click", function(){
                $("#deleteDataModal").modal("show");

                $tr2 = $(this).closest("tr");
                var data1 = $tr2.children("td").map(function(){
                    return $(this).text();
                }).get();

                $("#cusID1").val(data1[0]);
            });
        });
    </script>

</body>

</html>