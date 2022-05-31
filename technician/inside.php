<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$accomodation=$_POST['accomodation'];
$username=$_POST['username'];
$task=$_POST['task'];
$query="insert into booking(accomodation,username,task) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sss',$accomodation,$username,$task);
$stmt->execute();
echo"<script>alert('Succssfully');</script>";
}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>FK RESOURCES BOOKING SYSTEM</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>

<body>
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
<br><br>
                        <h2 class="page-title"> Room Booking </h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Booking Form</div>
                                    <div class="panel-body">

                                        <form method="post" action="" name="booking" class="form-horizontal" onSubmit="return valid();">


                                                <div class="form-group">
                                                <label class="col-sm-2 control-label"> Accomodation : </label>
                                                <div class="col-sm-8">
                                                    <select name="accomodation" class="form-control" required="required">
                                                        <option value="">MFSK01</option>
                                                        <option value="MFSK02">MFSK02</option>
                                                        <option value="LFSK03">LFSK03</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"> Username : </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="username" id="username" class="form-control" required="required">
                                                </div>
                                            </div>


                                        <div class="form-group">
                                                <label class="col-sm-2 control-label"> Task Setup : </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="task" id="task" class="form-control" required="required">
                                                </div>
                                            </div>



                                            <div class="col-sm-6 col-sm-offset-4">
                                                <button class="btn btn-default" type="submit">Cancel</button>
                                                <input type="submit" name="submit" Value="Submit" class="btn btn-primary">
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
