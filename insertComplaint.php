<?php 
$username = $_POST['username'];
$date =$_POST['date'];
$complaintType = $_POST['complaintType'];
$complaintDes = $_POST['complaintDes'];

if (!empty($username) || !empty($date) || !empty($complaintType) || !empty($complaintDes)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "fkreserv";

    //connection
    conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 

    if (mysqli_connect_error()) {
        die (Connect Error(.mysqli_connect_error().).mysqli_connect_error());
    } else {
        $SELECT = "SELECT  "
    }

} else {
    echo "All field are required";
    die ();
}
?>