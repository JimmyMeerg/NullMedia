<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$contactNo=$_POST['contactNo'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="insert into userregistration (firstName, middleName, lastName, gender, contactNo, email, password) values(?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssiss',$firstName,$middleName,$lastName,$gender,$contactNo,$email,$password);
$stmt->execute();
echo"<script>alert('A new user has been added successfully');</script>";
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
	<title>Add New User</title>
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
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add User</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">User Information</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="form-group">
												<label class="col-sm-2 control-label">First name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="firstName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Middle name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="middleName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Last name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="lastName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Gender: </label>
												<div class="col-sm-8">
													<select name="gender" class="form-control" required="required">
														<option value="">Select Gender</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact no. :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="contactNo"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="email"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Password :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="password"  class="form-control">
												</div>
											</div>

											


												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" style="font-size: 15px" name="submit" value="Add user">
												</div>
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

</script>
</body>

</html>