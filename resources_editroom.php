
	<?php include('includes/manager_header.php');?>
	<div class="ts-main-content">
		<?php include('includes/manager_sidebar.php');?>
        
<?php
session_start();
?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FK Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    

    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>FK Booking</title>
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
<script type="text/javascript">

</script>
    
</head>

<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$db="fkreserv";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
$con = new mysqli($host,$dbuser, $dbpass, $db);


if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $roomname = $_POST['roomname'];
    $status = $_POST['status'];
    $location = $_POST['location'];
    $tic = $_POST['tic'];


    $query = "UPDATE room_category SET id='$id', roomname='$roomname', status='$status', location='$location',tic='$tic'";
    


    if($query)
    {
        $_SESSION['status'] = "Room Updated Successfully";
        header("Location: resources_editroom.php");

    }
    else
    {

        $_SESSION['status'] = "Not Updated";
        header("Location: resources_editroom.php");
    }



}


?>


<body>
    <div class="container">
        <div class="well">

        <?php
        if(isset($_SESSION['status']))
        {
            echo "<h4>".$_SESSION['status']."<h4>";
            unset($_SESSION['status']);


        }
        
        
        ?>


            <h2>Update Room </h2>
            <hr>
            <form action="" method="POST" name="room_category">
               
                <div class="form-group">
                    <label for="roomname">ID:</label>
                    <input type="text" class="form-control" name="id" required>
                </div>
                <div class="form-group">
                    <label for="roomname">Room  Name:</label>
                    <input type="text" class="form-control" name="roomname"  required>
                </div>
                 <div class="form-group">
                    <label for="qty">Status:</label>&nbsp;
                    <select name="status">
                    <option value="" ></option>
                      <option value="AVAILABLE">AVAILABLE</option>
                      <option value="BOOKED">BOOKED</option>
                      <option value="3">NOT AVAILABLE</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="roomname">Location:</label>
                    <input type="text" class="form-control" name="location"  required>
                </div>
                <div class="form-group">
                    <label for="roomname">Technician:</label>
                    <input type="text" class="form-control" name="tic"  required>
                </div>

                <br>
                <br>
                <br>
                <br>
                <center> <button type="status" class="btn btn-lg btn-primary button" name="status">Update</button>

                <br>
                
                <br>
                <br>
                <div id="click_here">
                    <a href="resources_list.php">Back to Room Lists</a>
                </div> </center>


            </form>
        </div>
    </div>

</body>

</html>