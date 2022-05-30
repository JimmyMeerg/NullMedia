
	<?php include('includes/manager_header.php');?>
	<div class="ts-main-content">
	<?php include('includes/manager_sidebar.php');?>
      
        
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
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
    
</head>


<?php
$host="localhost";
$dbuser="root";
$dbpass="";
$db="fkreserv";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);


// Create connection
$conn = new mysqli($host,$dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM room_category";
$result = $conn->query($sql);
if(isset($_REQUEST[ 'submit'])) 
{ while($row = $result->fetch_assoc()){
    extract($_REQUEST); 
    $result=$user->edit_room_cat($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price,$room_cat);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('".$result."');
         </script>";
    }

   
} }
?>


<body>
   
<div class="container">
        <div class="well">
            <h2>Add Room List</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Room Type Name:</label>
                    <input type="text" class="form-control" name="roomname" value="<?php echo $row['rboomname'] ?>" required>
                </div>
                 <div class="form-group">
                    <label for="qty">Status:</label>&nbsp;
                    <select name="status">
                    <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                      <option value="1">AVAILABLE</option>
                      <option value="2">BOOKED</option>
                      <option value="3">NOT AVAILABLE</option>
                
                    </select>
                </div>
            
              >
                <div class="form-group">
                    <label for="Facility">Date</label>
                    <textarea class="form-control" name="facility"><?php echo $row['date'] ?></textarea>
                </div>
               <div class="form-group">
                    <label for="price">Technician In Charge</label>
                    <input type="text" class="form-control" name="tic" value="<?php echo $row['tic'] ?>" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>

               <br>
                <div id="click_here">
                    <a href="resources_list.php">Back to Room List</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>