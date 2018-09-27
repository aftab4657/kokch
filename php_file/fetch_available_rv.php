<?php

	require 'connection.php';
	$date = $_POST['date'];

	//  Convert text to date
	$time = strtotime($date);
	$date = date('Y-m-d',$time);
	

	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	} 

	$rows = array();
	$sql = "SELECT `id`, `rv_name`, `start_date`, `end_date` FROM `rv_availability` WHERE !(start_date <= '$date' AND end_date >= '$date')";	
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $rows[] = $row;
    }
	}
	print json_encode($rows);
$con->close();
?>