<?php
session_start();
require_once("../req/config.php");
$userid=mysqli_real_escape_string($con,ucfirst($_POST['userid']));
$mpass=mysqli_real_escape_string($con,$_POST['password']);

if($userid && $mpass )
{
	//$loggedin=false;
	$logsql="select * from memstab where mem_coopno='$userid' ";
	
	$result=mysqli_query($con,$logsql);
	if (mysqli_num_rows($result))
	{
		while($rows=mysqli_fetch_assoc($result))
		{
			$_SESSION['memid']=$rows['mem_id'];
			//$_SESSION['userid']=$rows['mem_surname'];
			$_SESSION['surname']=$rows['mem_surname'];
			$_SESSION['password']=$rows['mem_pass'];
			$_SESSION['firstname']=$rows['mem_fname'];
			$_SESSION['othername']=$rows['mem_oname'];
			$_SESSION['phone']=$rows['mem_phone'];
			$_SESSION['coopno']=$rows['mem_coopno'];
			$_SESSION['ippis']=$rows['mem_ippis'];
			$_SESSION['title']=$rows['mem_title'];
			$_SESSION['email']=$rows['mem_email'];
			$_SESSION['dept']=$rows['mem_dept'];
			$_SESSION['nation']=$rows['mem_nation'];
			$_SESSION['state']=$rows['mem_state'];
			$_SESSION['address']=$rows['mem_address'];
			$_SESSION['nokname']=$rows['nok_name'];
			$_SESSION['nokemail']=$rows['nok_email'];
			$_SESSION['nokphone']=$rows['nok_phone'];
			$_SESSION['nokaddress']=$rows['nok_address'];			
			$_SESSION['bankname']=$rows['mem_bank'];
			$_SESSION['bankac']=$rows['mem_acctno'];
			$_SESSION['path']=$rows['path'];
			
			//echo $rows['mem_nation']." ".$rows['mem_state'];
			if (password_verify($mpass,$_SESSION['password'])) {
				echo 'valid';
				
			}
			else 
			{
				echo 'notvalid';
   				 
				}
		}
	}
	else 
			{
				//$loggedin=false;
				//header("Location:../index.php");
				die (mysqli_error($con));
			}
	
}
//echo "supply input";
?>
