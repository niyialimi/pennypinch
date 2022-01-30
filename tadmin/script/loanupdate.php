<?php
session_start();
require_once("../../req/config.php");
	if (isset ($_POST['btnloan']))
	{
		$rowCount = count($_POST["users"]);
		//$lid=$_POST['loanid'][$i];
		//echo $rowCount;
$clientappid=1;		
for($i=0;$i<$rowCount;$i++) {
	$nid=$_POST['users'][$i];
	
$res = "SELECT memstab.mem_surname,memstab.mem_fname,memstab.mem_oname,loantab.mem_id,loantab.loan_id,loantab.loanstatus,loantab.amount,loantab.loan_month,loantab.loan_type FROM memstab inner join loantab on memstab.mem_id=loantab.mem_id and loantab.loan_id='" . $_POST["users"][$i] . "' where loantab.loanstatus=0 and loantab.clientapp_id='$clientappid'";
$result=mysqli_query($con,$res);
$row[$i]= mysqli_fetch_array($result);

//echo $nid.$row[$i]['loan_type'].$row[$i]['mem_surname']." ".$row[$i]['mem_id']."<br>";

$fullname=$row[$i]['mem_surname']." ".$row[$i]['mem_fname'];
$_SESSION['loantype']=$row[$i]['loan_type'];
$_SESSION['memid']=$row[$i]['mem_id'];
 $loanstatus=$row[$i]['loanstatus'];
 $loanid=$row[$i]['loan_id'];
 
if ($loanstatus==0) $loanstatus=true;
//echo $loanstatus;
$principal=$row[$i]['amount'];
if($_SESSION['loantype']=="Long Term Loan"){$duration=20;$interest=$principal*0.1;$monthlyrepay=floor(($interest+$principal)/20);$loancolumn='long_status';$loandr='long_dr';$repaymonth='lrepay_month';$monthpaid='lmonth_paid';$bal='long_bal';}
else if($_SESSION['loantype']=="Short Term Loan"){$duration=1;$interest=0;$monthlyrepay=floor(($interest+$principal)/1);$loancolumn='short_status';$loandr='short_dr';$repaymonth='srepay_month';$monthpaid='smonth_paid';$bal='short_bal';}
else if($_SESSION['loantype']=="Commodity Loan"){$duration=10;$interest=$principal*0.1;$monthlyrepay=floor(($interest+$principal)/10);$loancolumn='com_status';$loandr='com_dr';$repaymonth='crepay_month';$monthpaid='cmonth_paid';$bal='com_bal';}
else if($_SESSION['loantype']=="Entrepreneurship Loan"){$duration=10;$interest=0;$monthlyrepay=floor(($interest+$principal)/10);$loancolumn='ent_status';$loandr='ent_dr';$repaymonth='erepay_month';$monthpaid='emonth_paid';$bal='ent_bal';}
else if($_SESSION['loantype']=="Easy Connect Loan"){$duration=5;$interest=$principal*0.05;$monthlyrepay=floor(($interest+$principal)/5);
$loancolumn='easy_status';$loandr='easy_dr';$repaymonth='earepay_month';$monthpaid='eamonth_paid';$bal='easy_bal';}

$amount=$row[$i]['amount'];
//$tobal=$amount+$interest;
	$upto="update loantab set loanstatus='$loanstatus' where loantab.loan_id='" . $_POST["users"][$i] . "'";
	$result=mysqli_query($con,$upto);
	if($result)
	{
			/*echo "<script type=text/javascript>alert ('Loan Account Updated Succesfully');</script>";
			echo "<script type=text/javascript>window.location='lmsetting.php'</script>";*/
					$response['status'] = 'success';  
					$response['message'] = 'Request Processed Succesfully';  
					header('Content-type: application/json'); 							
					echo json_encode($response);
			
		}else
		{
		
					$response['status'] = 'error';  
					$response['message'] = 'error Processing Request';  
					header('Content-type: application/json'); 							
					echo json_encode($response);
			
	}
	
//}else die (mysql_error());			
//echo $monthlyrepay;
//echo $row[$i]['loanstatus'];
}

	}
	
	
?>