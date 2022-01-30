<?php
require_once('../req/config.php');
session_start();
$dateofapp=mysqli_real_escape_string($con,$_POST['dateofapp']);

$memid=mysqli_real_escape_string($con,$_POST['memid']);
$dateofapp=mysqli_real_escape_string($con,$_POST['dateofapp']);
$monthofapp=mysqli_real_escape_string($con,$_POST['monthofapp']);
$coopno=mysqli_real_escape_string($con,$_POST['coopno']);
$ippis=mysqli_real_escape_string($con,$_POST['ippis']);
$type=mysqli_real_escape_string($con,$_POST['type']);
$loanamt=mysqli_real_escape_string($con,$_POST['loanamt']);
$purpose=mysqli_real_escape_string($con,$_POST['purpose']);
$sure1name=mysqli_real_escape_string($con,$_POST['sure1name']);
$sure1phone=mysqli_real_escape_string($con,$_POST['sure1phone']);
$sure1add=mysqli_real_escape_string($con,$_POST['sure1add']);
$sure1salary=mysqli_real_escape_string($con,$_POST['sure1salary']);
$sure1dept=mysqli_real_escape_string($con,$_POST['sure1dept']);
$sure2name=mysqli_real_escape_string($con,$_POST['sure2name']);
$sure2phone=mysqli_real_escape_string($con,$_POST['sure2phone']);
$sure2add=mysqli_real_escape_string($con,$_POST['sure2add']);
$sure2dept=mysqli_real_escape_string($con,$_POST['sure2dept']);
$sure2salary=mysqli_real_escape_string($con,$_POST['sure2salary']);
$loanstatus=false;
$clientappid=1;
$seloan="select * from createloantab where crloan_name='$type'";
		 $res=mysqli_query($con,$seloan);
		  if($res)
		   {
			   while($loanrow=mysqli_fetch_array($res))
			   {
				   $_SESSION['interest']=$loanrow['interest'];
				   $sl="INSERT INTO loantab (clientapp_id,mem_id, mem_coopno, mem_ippis,  date, loan_month, loan_type, amount, interest, purpose, surety1_name, surety1_address, surety1_phone, surety1_salary, surety1_dept, surety2_name, surety2_address, surety2_phone, surety2_salary, surety2_dept, loanstatus) VALUES ('$clientappid','$memid','$coopno','$ippis','$dateofapp','$monthofapp','$type','$loanamt','".$_SESSION['interest']."','$purpose','$sure1name','$sure1add','$sure1phone','$sure1salary','$sure1dept','$sure2name','$sure2add','$sure2phone','$sure2salary','$sure2dept',  '$loanstatus')";					
					
						if(mysqli_query($con,$sl))
						{
							
							$response['status'] = 'success';  
							$response['message'] = 'Loan Application Successfully and Will Be Reviwed!';  
							header('Content-type: application/json'); 							
							echo json_encode($response);
							
							
							
						}
						else{die('Error : ' . mysqli_error($con));}
			   }
		   }
	
					

	  
  
?>


						