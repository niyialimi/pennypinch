<?php
require_once('../../req/config.php');
session_start();

$loanname=mysqli_real_escape_string($con,$_POST['loanname']);
$status=mysqli_real_escape_string($con,$_POST['status']);
$interest=mysqli_real_escape_string($con,$_POST['interest']);
$duration=mysqli_real_escape_string($con,$_POST['duration']);
$date=date('Y-m-d');
$loanstatus=false;
$clientappid=1;
	$path="";
	$sl="INSERT INTO createloantab (clientapp_id,crloan_name,interest,duration,status,date_created) VALUES ('$clientappid','$loanname','$interest','$duration','$status','$date')";					
					
						if(mysqli_query($con,$sl))
						{
							
							$response['status'] = 'success';  
							$response['message'] = 'New Loan Created Successfully!';  
							header('Content-type: application/json'); 							
							echo json_encode($response);
							
							
							
						}
						else{die('Error : ' . mysqli_error($con));}
					

	  
  
?>


						