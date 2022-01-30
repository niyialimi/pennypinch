<?php
session_start();
require_once('../../req/config.php');
$sname=mysqli_real_escape_string($con,ucfirst($_POST['sname']));
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$oname=mysqli_real_escape_string($con,$_POST['oname']);
$msex=mysqli_real_escape_string($con,$_POST['msex']);
$mtitle=mysqli_real_escape_string($con,$_POST['mtitle']);
$mphone=mysqli_real_escape_string($con,$_POST['mphone']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$memail=mysqli_real_escape_string($con,$_POST['memail']);
$maddress=mysqli_real_escape_string($con,$_POST['maddress']);
$nation=mysqli_real_escape_string($con,$_POST['nation']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$mdept=mysqli_real_escape_string($con,$_POST['mdept']);
$acctno=mysqli_real_escape_string($con,$_POST['acctno']);
$bankname=mysqli_real_escape_string($con,$_POST['bankname']);
$ippisno=mysqli_real_escape_string($con,$_POST['ippisno']);
$coopno=mysqli_real_escape_string($con,$_POST['coopno']);
$pwd=mysqli_real_escape_string($con,$_POST['sname']);
$pwd=password_hash($pwd,PASSWORD_BCRYPT);
$nokfname=mysqli_real_escape_string($con,$_POST['nokfname']);
$noklname=mysqli_real_escape_string($con,$_POST['noklname']);
$nokname=$noklname." ".$nokfname;
$nokrel=mysqli_real_escape_string($con,$_POST['nokrel']);
$nokphone=mysqli_real_escape_string($con,$_POST['nokphone']);
$nokemail=mysqli_real_escape_string($con,$_POST['nokemail']);
$nokaddress=mysqli_real_escape_string($con,$_POST['nokaddress']);
$path = "";
date_default_timezone_set('Africa/Lagos');
$clientappid=1;
$logsql="select * from memstab where mem_phone='$mphone' ";;
$result=mysqli_query($con,$logsql);
if (mysqli_num_rows($result))
{
		$response['status'] = 'error';  
		$response['message'] = 'Member Already registered';  
		header('Content-type: application/json'); 							
		echo json_encode($response);
}else
{
	if (($_FILES['profileImg']['name'])=='')
	{
		
			$sql="INSERT INTO memstab (clientapp_id,mem_surname, mem_fname, mem_oname, mem_sex, mem_title, mem_phone, mem_dob, mem_email,mem_dept,mem_coopno,mem_ippis,mem_bank,mem_acctno, mem_address,mem_pass, mem_nation, mem_state, nok_name,nok_rel, nok_phone, nok_email, nok_address) VALUES ('$clientappid','$sname','$fname','$oname','$msex','$mtitle','$mphone','$dob','$memail','$mdept','$coopno','$ippisno','$bankname','$acctno','$maddress','$pwd','$nation','$state','$nokname','$nokrel','$nokphone','$nokemail','$nokaddress')";
			if(mysqli_query($con,$sql))
			{
				
					$response['status'] = 'success';  
					$response['message'] = 'New Candidate Added';  
					header('Content-type: application/json'); 							
					echo json_encode($response);
			}
			
			else
			{
				$response['status'] = 'error';  
					$response['message'] = 'Error Adding New Member, Please Try Again';  
					header('Content-type: application/json'); 							
					echo json_encode($response);
				
			}
	}else if (($_FILES['profileImg']['name'])!='')
	{
		$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["profileImg"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["profileImg"]["type"] == "image/png") || ($_FILES["profileImg"]["type"] == "image/jpg") || ($_FILES["profileImg"]["type"] == "image/jpeg")
) && ($_FILES["profileImg"]["size"] < (100000*1024))//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions))

{
	if ($_FILES["profileImg"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
		}
			else
			{
				if (file_exists("memimage/" . $_FILES["profileImg"]["name"])) 
				{
				//echo $_FILES["profileImg"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
					$response['status'] = 'error';  
					$response['message'] = 'Image Too Large';  
					header('Content-type: application/json'); 							
					echo json_encode($response);
				}
			else
			{			
				$path="memimage/" . $_FILES["profileImg"]["name"];
				$sql="INSERT INTO memstab (clientapp_id,mem_surname, mem_fname, mem_oname, mem_sex, mem_title, mem_phone, mem_dob, mem_email,mem_dept,mem_coopno,mem_ippis,mem_bank,mem_acctno, mem_address, mem_pass, mem_nation, mem_state, nok_name, nok_rel, nok_phone, nok_email, nok_address, path) VALUES ('$clientappid','$sname','$fname','$oname','$msex','$mtitle','$mphone','$dob','$memail','$mdept','$coopno','$ippisno','$bankname','$acctno','$maddress','$pwd','$nation','$state','$nokname','$nokrel','$nokphone','$nokemail','$nokaddress','$path')";
					move_uploaded_file($_FILES["profileImg"]["tmp_name"],"../../memimage/".$_FILES["profileImg"]["name"]);
				if(mysqli_query($con,$sql))
						{
							
							$response['status'] = 'success';  
							$response['message'] = 'New Member Added Successfully!';  
							header('Content-type: application/json'); 							
							echo json_encode($response);
						}
			
							
						else
						{
							/*$response['status'] = 'error';  
							$response['message'] = 'Error Adding New Member, Please Try Again';  
							header('Content-type: application/json'); 							
							echo json_encode($response);*/
							die(mysqli_error($con));
						}
				
			}
		  }
		}
	}
}
?>
