<?php
session_start();
require_once('../req/config.php');
//require_once('../req/loginstatus.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fav.png">
  <link rel="icon" type="image/png" href="../assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   	PennyPinch:: Member Details
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="../assets/css/all.css" rel="stylesheet">
  <link href="../assets/css/themify-icons.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/js/plugins/datepicker/bootstrap-datepicker.css">
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="deepblue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          &nbsp;
        </a>
        <a href="" class="simple-text logo-normal">
         <img src="../assets/img/logo5.png">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="dashboard.php">
              <i class="now-ui-icons business_bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="newreg.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Add New Member</p>
            </a>
          </li>
          <li>
            <a href="memdetail.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member Details</p>
            </a>
          </li>          
          
          <li>
            <a href="deduct.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Monthly Deduction</p>
            </a>
          </li>
          <li>
            <a href="applog.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Application Log</p>
            </a>
          </li>
          <li class="active">
            <a href="lmsetting.php">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p>Loan Settings</p>
            </a>
          </li>
          <li>
            <a href="sms.php">
              <i class="now-ui-icons tech_mobile"></i>
              <p>Manage SMS</p>
            </a>
          </li>
          <li>
            <a href="inmessage.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>In Message</p>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>Logout</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Member</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">


            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="analytic.php">
                  <i class="now-ui-icons business_chart-bar-32"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Analytics</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Quick Option</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="lmreset.php">Loan reset</a>
                  <a class="dropdown-item" href="crloan.php">Create Loan</a>
                  <a class="dropdown-item" href="addadmin.php">Add New Admin</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Loan Applicant List</h5>
              </div>
              <div class="card-body">
                <table width="500" class="table table-striped table-bordered bootstrap-datatable datatable responsive" border="0" cellspacing="3" cellpadding="4">
  <tr style="font-weight:bolder;">
   <td>&nbsp;</td>
    <td>Member name</td>
    <td>Loan Status</td>
    <td>Loantype</td>
    <td>Amount Applied</td>
    <td>Application Month</td>
    <td>Total Repayment</td>
    <td>Duration</td>
  </tr>
  <form action="script/loanupdate.php" method="post" enctype="multipart/form-data">
   <?php
   $month=date('F');
   $sn=0;
   $newquery="select memstab.mem_surname,memstab.mem_fname,memstab.mem_oname,loantab.mem_id,loantab.loan_id,loantab.amount,loantab.loan_month,loantab.loanstatus,loantab.loan_type,loantab.interest from memstab inner join loantab on memstab.mem_id= loantab.mem_id where loantab.loanstatus=0 ";//and loantab.loan_month='$month' ";
   $output=mysqli_query($con,$newquery);
   $numrow=mysqli_num_rows($output);//number of rows selected only affect select,for insert,update,delete use mysqli_affected_rows($output)
   if(mysqli_num_rows($output))
   {
	   while($rows=mysqli_fetch_assoc($output))
	   {
		$sn++;
		$_SESSION['mem_id']=$rows['mem_id'];   
		$_SESSION['surname']=$rows['mem_surname'];
		$_SESSION['firstname']=$rows['mem_fname'];
		$_SESSION['othername']=$rows['mem_oname'];
		$_SESSION['loantype']=$rows['loan_type'];
		$_SESSION['loanid']=$rows['loan_id'];
		$_SESSION['amount']=$rows['amount'];
		$_SESSION['loanmonth']=$rows['loan_month'];
		$_SESSION['loanstatus']=$rows['loanstatus'];
		$_SESSION['interest']=$rows['interest'];
		
		$_SESSION['calcinterest']=((($_SESSION['interest'])/100)*($_SESSION['amount']));
		$_SESSION['totalrepay']=($_SESSION['amount'])+($_SESSION['calcinterest']);
	  

  ?>
  <tr>
  <td><input type="checkbox" name="users[]" value="<?php echo $_SESSION['loanid']; ?>" ></td>
    <td height="58"><?php echo $_SESSION['surname']." ".$_SESSION['firstname']; ?></td>
    	<td>Not Granted<input type="hidden" name="memid" value="<?php echo $_SESSION['loanid']; ?>" />
            <input type="hidden" name="loanid[]" value="<?php echo $numrow; ?>" />
         </td>
        <td><?php echo $_SESSION['loantype']; ?></td>
		
     <td><?php echo $_SESSION['amount']; ?></td>
    <td><?php echo $_SESSION['loanmonth']; ?></td> 
    
    <td><input type="text" class="form-control" value="<?php echo $_SESSION['totalrepay']; ?>" name="monthlyrepay" placeholder="Amount to be payed monthly"readonly /></td>
     <td><?php 
	 	$seloan="select duration from createloantab where crloan_name='".$_SESSION['loantype']."'";
		  $res=mysqli_query($con,$seloan);
			  if($res)
			   {
				   while($crow=mysqli_fetch_array($res))
				   {
					   echo $crow['duration']."Month(s)";
				   }
			   }
	  ?></td> 
  </tr>
   <?php
	  }
   }
   ?>
   
  <tr>
    <td colspan="8" align="center"><button type="submit" id="btnsub" name="btnloan" class="btn btn-primary">Grant Member Loan</button>
    </td>  
    </tr>
    </form>
</table>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, <strong>PennyPinch</strong> Powered By <strong>Soft-Apps Solutions Concepts</strong>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jQuery-2.1.4.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="../assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="../assets/js/plugins/year-select.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <script>
$(document).ready(function (e) {
// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
};
});

 $("#previewing").click(function() {
			$("input[id='file']").click();
		});
</script>
<script type="text/javascript">
 $(document).ready(function () {
        $(".datepick").datepicker({ 
		format: 'yyyy-mm-dd', 
		autoclose: true, 
		todayBtn: 'linked',
		 weekStart: 1,
		 todayHighlight: 1
		});
		
		$('.yearselect').yearselect();
		$('.yearselect').yearselect({
		start: 1990,
		end: 2025
});
 });
</script>
</body>

</html>
