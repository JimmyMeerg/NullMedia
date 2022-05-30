
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
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title"> Complaint Summarization </h2>

						<div class="row">
					    <div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Username: </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Date: </label>
									<input type="password" placeholder="Date" name="date" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Time: </label>
									<input type="text" placeholder="Time" name="time" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Complaint Type: </label> 
										<br>
										<select name="complaintType" id="complaintType">
											<option value="damaged">Damaged Equipment</option>
											<option value="inproper">Improper Setup</option>
										</select> 
										<br>
									<label for="" class="text-uppercase text-sm">The Description of the Complaint: </label>
									<input type="text" placeholder="The Description of the Complaint" name="complaintDes" class="form-control mb">
									

									<input type="submit" name="Submit" class="btn btn-primary btn-block" value="Submit" >
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