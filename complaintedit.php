<?php
  include("connection.php");
  error_reporting(0);
  $id=$_GET["ID"];
  if($_GET['submit'])
  {
    $id=$_GET["ID"];
    $fname=$_GET["username"];
    $lname=$_GET["date"];
    $gender=$_GET["complaintType"];
    $email=$_GET["complaintDes"];
    $query = "UPDATE `complaint` SET username='$username', date='$date', Gender='$complaintType', complaintDes='$complaintDes' ";
    $data = mysqli_query($conn, $query);
    
    if($data)
    {
      header("Location: complaint.php");
    } else {
      echo "Failed to Updated Record";
    }
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
					
						<h2 class="page-title"> Complaint Status </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Complaint Form</div>
									<div class="panel-body">

									<table border="2" cellspacing="8">
										<tr>
										<th>No  </th>
										<th>Username  </th>
										<th>Date & Time </th>
										<th>Complaint Type </th>
										<th>The Description of the Complaint  </th>
										</tr>

										<?php
										include("connection.php");
										error_reporting(0);
										$query = "SELECT * FROM complaint ";
										$data = mysqli_query($conn, $query);
										$total = mysqli_num_rows($data);

										if($total != 0)
										{
										while($result=mysqli_fetch_assoc($data))
										{
											echo "
											<tr>
											<td>".$result['ID']."</td>
											";
											echo "
											<td>".$result['username']."</td>
											<td>".$result['date']."</td>
											<td>".$result['complaintType']."</td>
											<td>".$result['complaintDes']."</td>
											<td><a href = 'complaintedit.php?ID=$result[ID]' onclick='return checkedit()'> Edit / Update </td>
											<td><a href = 'complaintdelete.php?ID=$result[ID]'onclick='return checkdelete()'> Delete </td>
											</tr>
											";
										}
										}else{
										echo"No records found";
										}
										?>
									</table>

									</div>
									</div>
								</div>
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