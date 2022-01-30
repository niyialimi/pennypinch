<?php 
session_start();
require_once("req/config.php");
if (!isset($_SESSION['phone']) && !isset($_SESSION['password']) && !isset($_SESSION['coopno']))
{
	
	header("Location:index.php");
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/fav.png">
  <link rel="icon" type="image/png" href="assets/img/fav.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="assets/css/all.css" rel="stylesheet">
  <link href="assets/css/themify-icons.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <title>
   	PennyPinch:: Loan Application
  </title>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="deepblue">
    
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          &nbsp;
        </a>
        <a href="" class="simple-text logo-normal">
         <img src="assets/img/logo5.png">
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
            <a href="memprofile.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>My Profile</p>
            </a>
          </li>
          <li>
            <a href="report.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Report</p>
            </a>
          </li>         
          <li class="active">
            <a href="loanapp.php">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>Loan Application</p>
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
            <a class="navbar-brand" href="#">Loan Application Form</a>
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
                <a class="nav-link" href="#">

                  
                  <p>
                  Welcome Back <strong><?php echo $_SESSION['surname']." ". $_SESSION['firstname']; ?></strong>
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
                  <a class="dropdown-item" href="setting.php">Settings</a>
                  <a class="dropdown-item" href="memprofile.php">My Profile</a>
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
        <div class="col-md-2 col-sm-12 col-xs-12"></div>     
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">My Account Information</h5>
              </div>
              <div class="card-body">
           			<form method="post" data-toggle="validator" action="" id="loan-form" enctype="multipart/form-data" role="form">
            <input type="hidden" value="<?php echo $_SESSION['memid'];?>" name="memid" />
            <div class="row">
           		 <div class="col-md-4 pr-1 form-group">
                        <label for="inputTitle1" class="control-label">Title</label>
                        <div class="input-group">
                           <select class="form-control" id="InputTitle1" name="title" disabled="disabled">
                           <option value="<?php echo $_SESSION['title']; ?>"><?php echo ucfirst($_SESSION['title']."."); ?></option>
                           </select>
                       </div>
                  </div>
                             
            	<div class="col-md-8 pl-1 form-group">
                    <label for="inputName" class="control-label">Name</label>
                    <input type="text" class="form-control" id="inputName" value="<?php echo $_SESSION['surname']." ".$_SESSION['firstname']; ?>" disabled="disabled" required>
                    <div class="help-block with-errors"></div>
                  </div>
                
             </div>
             
                 <div class="row"> 
                   <div class="col-md-7 pr-1 form-group">
                        <label for="loan" class="control-label">Loan Type</label>
                        <div class="input-group">
                           <select class="form-control" id="type" name="type">
                           <?php 
						   $seloan="select * from createloantab";
						   $res=mysqli_query($con,$seloan);
						   if($res)
						   {
							   while($loanrow=mysqli_fetch_array($res))
							   {
								   $_SESSION['eachinterest']=$loanrow['interest'];
                           			echo '<option value="'.$loanrow["crloan_name"].'">'.$loanrow['crloan_name'].'</option>';
								
						  	   }
						   }
                           
						   ?>
                           </select>
                          
                         
						  
                       </div>
                     </div>
                     
                  <div class="col-md-3 px-1 form-group">
                    <label for="inputDate3" class="control-label">Date of Application</label>
                    <input type="text" name="dateofapp" class="form-control" id="dateofapp" value="<?php echo date('d-m-Y');?>" readonly>
                   
                  </div>
                 
                  	<div class="col-md-2 pl-1 form-group">
                        <label for="inputMonth1" class="control-label">Month of Application</label>
                        <div class="input-group">
                       <strong> <?php echo date('F');?><input type="hidden" name="monthofapp" id="monthofapp" value="<?php echo date('F');?>" /></strong>
                        
                       </div>
                  </div>
                </div>
                      
                 <div class="row">                   
                  <div class="col-md-3 pr-1 form-group">
                    <label for="inputcoopno" class="control-label">Cooperative Number</label>
                    <input type="text" name="coopno" value="<?php echo $_SESSION['coopno']; ?>" class="form-control" id="coopno" readonly>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="col-md-3 px-1 form-group">
                    <label for="inputippis" class="control-label">IPPIS Number</label>
                    <input type="text" name="ippis" value="<?php echo $_SESSION['ippis']; ?>" class="form-control" id="ippis" readonly>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <input type="hidden" name="lstatus" value="<?php echo $_SESSION['finalloanstatus']; ?>" />
                  <div class="col-md-6 pl-1 form-group">
                    <label for="inputName4" class="control-label">Amount(#)</label> 
                    <input type="type" name="loanamt" class="form-control" id="loanamt" placeholder="Enter Amount to apply for" required>
                    <div class="help-block with-errors" id="error"></div>
                  </div>
                </div> 
                  
                  <div class="form-group">
                    <label for="inputpurpose" class="control-label">Purpose</label>
                   
                          <textarea class="form-control" rows="2" cols="90" name="purpose" id="purpose" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  	
                 <div align="center" class="bg-info" style="color:white"><span><strong>Guarantor Information</strong></span></div>   
                 <div class="row">
                  <div class="col-md-6 pr-1 form-group">
                    <label for="inputName6" class="control-label">Guarantor 1 (Fullname)</label>
                    <input type="text" name="sure1name" class="form-control" id="sure1name" placeholder="Your Guarantor 1 Fullname" required>
                    <div class="help-block with-errors"></div>
                  </div>
                   
                  <div class="col-md-6 pl-1 form-group">
                    <label for="inputName7" class="control-label">Guarantor 1 (Phone Number)</label>
                    <input type="text" name="sure1phone" class="form-control" id="sure1phone" placeholder="Your Guarantor 1 Phone Number" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 pr-1 form-group">
                    <label for="add" class="control-label">Guarantor 1 (Address)</label>
                    <textarea class="form-control" rows="2" cols="90" name="sure1add" id="sure1add" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  		<div class="col-md-4 px-1 form-group">                        
                          <label for="inputName7" class="control-label">Guarantor 1 Department</label>
                    <input type="text" name="sure1dept" class="form-control" id="sure1dept" placeholder="Your Guarantor Department" required>
                       <div class="help-block with-errors"></div>
                       </div>
                       
                       <div class="col-md-2 pl-1 form-group">                        
                          <label for="inputName7" class="control-label">Guarantor 1 Salary</label>
                    <input type="text" name="sure1salary" class="form-control" id="sure1salary" placeholder="Your Guarantor Salary in Naira" required>
                       <div class="help-block with-errors"></div>
                       </div>
                  </div>  
                   
                 <div class="row">		
                   
                  <div class="col-md-6 pr-1 form-group">
                    <label for="inputName8" class="control-label">Guarantor 2 (Fullname)</label>
                    <input type="text" name="sure2name" class="form-control" id="sure2name" placeholder="Your Guarantor 2 fullname" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                   
                  <div class="col-md-6 pl-1 form-group">
                    <label for="inputName9" class="control-label">Guarantor 2 (Phone Number)</label>
                    <input type="text" name="sure2phone" class="form-control" id="sure2phone" placeholder="Your Guarantor 2 Phone Number" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                 
                 <div class="row">
                  <div class="col-md-6 pr-1 form-group">
                    <label for="" class="control-label">Guarantor 2 (Address)</label>
                    <textarea class="form-control" rows="2" cols="90" name="sure2add" id="sure2add" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  	
                    <div class="col-md-4 px-1 form-group">                        
                          <label for="" class="control-label">Guarantor 2 Department</label>
                    <input type="text" name="sure2dept" class="form-control" id="sure2dept" placeholder="Your Guarantor Department" required>
                       <div class="help-block with-errors"></div>
                       </div>
                  			
                       <div class="col-md-2 pl-1 form-group">                        
                          <label for="" class="control-label">Guarantor 2 Salary</label>
                    <input type="text" name="sure2salary" class="form-control" id="sure2salary" placeholder="Your Guarantor Salary in Naira" required>
                       <div class="help-block with-errors"></div>
                       </div>
                  </div>       
                        
                             <div class="checkbox">
                                <label>
                             
                              <table class="table" border="0" cellspacing="3" cellpadding="4">
                              <tr style="font-weight:bolder;"><td><h5> <input type="checkbox" required />  Attestation</h5></td></tr>
                              <tr><td>
                              <p> I <b><?php echo $_SESSION['surname']." ". $_SESSION['firstname'];?></b>agree to the terms and condition associated with this either bearing interest or not</p>
                         <p>I also hereby agree to pay a fee of <strong>#100</strong> attached to this application and i shall use the money solely for the specific purpose for which it will be granted</p>
                              </td>
                              </tr>
                              </table>
                                  
                                </label>
                              </div>
                        <div id="message"></div>    
                  <div class="form-group" align="center">
                    <button type="submit" id="applybut" name="applybut" class="btn btn-primary">Submit Application</button>
                  </div>
                </form>                
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12"></div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>,PennyPinch Powered By Soft-Apps Solutions Concepts.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
 <script src="assets/js/core/jquery.min.js"></script>
 <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="userapp.js"></script>
  <script src="assets/js/plugins/validator.js"></script>
  <script src="assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
   <script type="text/javascript">
		 //When DOM loaded we attach click event to button
        $(document).ready(function() {           
            //attach keypress to input
            $('#loanamt').keydown(function(event) {
                // Allow special chars + arrows 
				
                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) 
                    || (event.keyCode >= 35 && event.keyCode <= 39)){
                        return;
                }else {
                    // If it's not a number stop the keypress
                    if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                        event.preventDefault(); 
                    }   
                }
				
            });
				$('#loanamt').blur(function(event) {
				 var loanamount=$('#loanamt').val();
				 //alert(loanamount);
				 var type=$("#type").val();
					 var maximum=150000;
					 var maximum2=20000;
					 if(type=="Easy Connect Loan" && loanamount>maximum) {
						
					  document.getElementById('loanamt').value='';
					// alert(type);					 
						$("#error").fadeIn(100).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 150000 choose a lower amount for Easy Connect Loan</strong></div>');
						$("#error").fadeOut(20000).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 150000 choose a lower amount for Easy Connect Loan</strong></div>');
					 } 
					 else if(type=="Short Term Loan" && loanamount>maximum2) {
						
					 //var amt=maximum-loanamount;
					  document.getElementById('loanamt').value='';
					// alert(type);					 
						$("#error").fadeIn(100).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 20000 choose a lower amount for Short Term Loan</strong></div>');
						$("#error").fadeOut(20000).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 20000 choose a lower amount</strong></div>');
					 }
					 
				});
            $('#btnsave').click(function(){
				var loanamount=$('#loanamt').val();				 
				 var type=$("#type").val();
					 var maximum=150000;
				if(type=="Easy Connect Loan" && loanamount>=maximum) {						 					 
						$("#error").fadeIn(100).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 150000 choose a lower amount</strong></div>');
						$("#error").fadeOut(20000).html('<div style="color:#D40000"><strong>The Amount Applied for is Larger than 150000 choose a lower amount</strong></div>');

					 }
				});
			
        });
		</script>
</body>

</html>
