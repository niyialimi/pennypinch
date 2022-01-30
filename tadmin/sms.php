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
   	PennyPinch:: SMS
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
          <li>
            <a href="lmsetting.php">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p>Loan Settings</p>
            </a>
          </li>
          <li class="active">
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
                <h5 class="title">Send SMS</h5>
              </div>
              <div class="card-body">
          
        
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
               <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Monthly Alert
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
               <form action="sms.php" name="frmded" role="form" method="post" enctype="multipart/form-data" data-toggle="validator">
          <div class="row">
          <div class="col-md-3 col-sm-2 col-xs-2"></div>
              <div class="col-md-6 col-sm-10 col-xs-10">
                  <!--input type="text" class="form-control" placeholder="Enter Month" id="smsdate" name="smsdate" value="" required /-->
                  <select class="form-control" id="smsdate" name="smsdate" required>
                  <option value="">Select Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                  </select>
              </div>
           <div class="col-md-3 col-sm-2 col-xs-2"></div>
          </div>
           <div align="center"> 
            <button type="submit" id="btnsub" name="btnmsg" class="btn btn-primary">Send Message(s)</button>  
            </div>
		</form>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Send General SMS
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Loan Account
              </div>
            </div>
          </div>
          
        </div>
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
