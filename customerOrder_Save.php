<?php 
    include('dbconfig.php');

    // Edit Data
    if (isset($_POST['editNow'])){
        if(isset($_POST['fullname']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['service']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['labour_count']) && isset($_POST['amount'])){
            $id = $_POST['cusID'];
            $fullname = $_POST['fullname'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $service = $_POST['service'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $labour_count = $_POST['labour_count'];
            $amount = $_POST['amount'];

            $query_run = mysqli_query($conn,"update customerdata set fullname='$fullname', contact='$contact', address='$address', service = '$service', date = '$date', time = '$time', labour_count = '$labour_count', amount = '$amount' where id = '$id'")or die(mysqli_error());
            if($query_run){
                header('location: customerOrder.php');
            }else{
                echo "<script>alert('Error in Updating Data');</script>";
            }
        }
        else{
            echo "<script>alert('Error Values Missing');</script>";
        }
    }

    // Add Data
    elseif (isset($_POST['saveNow'])){
        if(isset($_POST['fullname']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['service']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['labour_count']) && isset($_POST['amount'])){
            $fullname = $_POST['fullname'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $service = $_POST['service'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $labour_count = $_POST['labour_count'];
            $amount = $_POST['amount'];

            $query_run = mysqli_query($conn,"insert into customerdata (fullname, contact, address, service, date, time, labour_count, amount) values('$fullname','$contact','$address','$service','$date','$time','$labour_count','$amount')")or die(mysqli_error());
            if($query_run){
                header('location: customerOrder.php');
            }else{
                echo "<script>alert('Error in Creating New Data');</script>";
            }
        }
        else{
            echo "<script>alert('Error Values Missing');</script>";
        }
    }

    // Delete Data
    if (isset($_POST['delNow'])){
        $id = $_POST['cusID1'];

        $query_run = mysqli_query($conn,"delete from customerdata where id='$id'") or die(mysqli_error());
        if($query_run){
            header('location: customerOrder.php');
        }else{
            echo "<script>alert('Error in Deleting Data');</script>";
        }
    }
?>