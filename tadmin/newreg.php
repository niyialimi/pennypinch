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
   	PennyPinch
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
          <li class="active">
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
                <h5 class="title">Add New Member</h5>
              </div>
              <div class="card-body">
              <form action="" class="addnewform" id="member-form"  enctype="multipart/form-data" method="post" role="form" data-toggle="validator">
                
                <div class="row form-group">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                       <label>Profile Image</label>
                        <div id="image_preview"><img id="previewing" style="width:70px; height:70px; cursor:pointer;" src="" width="70px" height="70px" class="img-thumbnail"/></div><br>
                       <input type="file" name="profileImg" id="file" required style="display:none">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        
                      </div>
                    </div>
                  </div>
                  
                <div class="row">
                    <div class="col-md-2 pr-1 has-feedback">
                      <div class="form-group">
                        <label>Title</label>
                        <select class="form-control" name="mtitle" id="mtitle" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                        <option value="Eng">Eng</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Cooperative Number</label>
                        <input type="text" class="form-control" name="coopno" id="coopno" placeholder="" required readonly>
                      </div>
                    </div>
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label for="">IPPIS Number</label>
                        <input type="text" class="form-control" name="ippisno" id="ippisno" placeholder="">
                      </div>
                    </div>
                    
                  </div>
                  
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" class="form-control" placeholder="Member Surname" name="sname" id="sname" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Member Firstname" name="fname" id="fname" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Middlename</label>
                        <input type="text" class="form-control" placeholder="Member Middle Name (Optional)" name="oname" id="oname">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Organization</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="COOP">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="mphone" id="mphone" placeholder="Member Phone Number e.g 080878654389" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" name="memail" id="memail" placeholder="Member Email e.g example@domain.com">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Sex</label>
                        <select class="form-control" name="msex" id="msex" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control datepick" name="dob" id="dob" placeholder="Member Birthday" required>
                      </div>
                    </div>
                    <div class="col-md-7 pl-1">
                      <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" class="form-control" name="mdept" id="mdept" placeholder="The Department Member is working" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Bank Name</label>
                        <!--input type="text" class="form-control" name="bankname" id="bankname" placeholder="Name of the Bank Member is Using e.g FirstBank" required--><select class="form-control" id="bankname" name="bankname">
                          <option value="">Select Your Bank</option>
                       	   <option value="Access Bank">Access Bank</option>
                           <option value="Diamond Bank">Diamond Bank</option>
                           <option value="Eco Bank">Eco Bank</option>
                           <option value="FCMB">FCMB</option>
                           <option value="First Bank">First Bank</option>
                           <option value="GTBank">GTBank</option>
                           <option value="Heritage Bank">Heritage Bank</option>
                           <option value="IBTC Bank">IBTC Bank</option>
                           <option value="Keystone Bank">Keystone Bank</option>
                           <option value="Skye Bank">Skye Bank</option>
                           <option value="Sterlin Bank">Sterlin Bank</option>
                           <option value="U.B.A">U.B.A</option>
                           <option value="Union Bank">Union Bank</option>
                           <option value="Unity Bank">Unity Bank</option>
                           <option value="Wema Bank">Wema Bank</option>
                           <option value="Zenith Bank">Zenith Bank</option>
                           </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Account Number</label>
                        <input type="text" class="form-control" name="acctno" id="acctno" placeholder="Bank Account Number of Member" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea rows="3" class="form-control" name="maddress" id="maddress" placeholder="Member Residential Address"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Nationality</label>
                        <select name="nation" id="nation" class="form-control" style="width: 100%;">
                                                   
                          </select>
                        
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>State of Origin</label>
                          <select name="state" id="state" class="form-control">                                              
                          </select>
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <div align="center" class="bg-info" style="color:white"><span><strong>Next of Kin Information</strong></span></div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Lastname (Next of Kin)</label>
                        <input type="text" class="form-control" placeholder="Next of Kin Surname" name="noklname" id="noklname" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Firstname (Next of Kin)</label>
                        <input type="text" class="form-control" placeholder="Next of Kin Firstname" name="nokfname" id="nokfname" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Phone Number (Next of Kin)</label>
                        <input type="text" class="form-control" placeholder="PNext of Kin Phone Number" name="nokphone" id="nokphone">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Relationship</label>
                        <input type="text" class="form-control" placeholder="Next of Kin Relationship with Member" name="nokrel" id="nokrel" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Email (Next of Kin)</label>
                        <input type="email" class="form-control" placeholder="Next of Kin email" name="nokemail" id="nokemail" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Address (Next of Kin)</label>
                        <input type="text" class="form-control" placeholder="Next of Kin Address" name="nokaddress" id="nokaddress">
                      </div>
                    </div>
                  </div>
                  <div id="message"></div>
                  <div class="row">
                    <div class="col-md-5">
                     
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" id="enrolmem">Enroll New Member</button>
                      </div>
                    </div>
                    <div class="col-md-3">
                      
                    </div>
                  </div>
                  
                </form>
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
  <script src="../assets/js/plugins/validator.js"></script>
  <script src="../assets/js/plugins/year-select.js"></script>
  <script src="../assets/js/plugins/countries.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  
  <script src="coopapp.js"></script>
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
populateCountries("nation", "state");//auto fill all country
		//$(".select").select2();//auto type country
 });
</script>
<script>
$(document).ready(function(){
	$(document).ready(function(e){
	 		
		$.ajax({
		url: 'script/generatecoopno.php',
		data: '',		
		dataType:'json',
		  success: function(returndata)
		  {
			  var coopno=parseInt(returndata[0]);			  
			  if(coopno<=9){ coopno=coopno + 1; coopno='000'+coopno;}
			  else if(coopno>=10){coopno=coopno + 1; coopno='00'+coopno;}
			  else if(coopno>=100){coopno=coopno + 1; coopno='0'+coopno;}
			  else if(coopno>=1000){coopno=coopno + 1; coopno=coopno;}
			  else if(isNaN(coopno)==true){coopno='000'+1;}
			  $('#coopno').val(coopno);			  
		},
		  error: function(returndata)
		  {
			 alert('error'); 
		  }
		  
		}); return false;
	 });	
	});
</script>
</body>

</html>
