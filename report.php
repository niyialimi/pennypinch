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
   	PennyPinch:: My Report
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
          <li class="active">
            <a href="report.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Report</p>
            </a>
          </li>         
          <li>
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
            <a class="navbar-brand" href="#">My Account Report</a>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">My Account Information</h5>
              </div>
              <div class="card-body">
           			<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Savings Account Report
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <div class="table-responsive">
                     <table class="table table-striped table-primary table-bordered">
              <thead align="center">
                <tr>
                
                  <th width="4%" style="text-align:center; font-size:14px;"><strong>S/N</strong></th>
                  <th width="14%" style="text-align:center; font-size:14px;"><strong>Month</strong></th>
                  <th width="20%" style="text-align:center; font-size:14px;"><strong>Monthly Savings  (#)</strong></th>                  
                  <th width="8%" style="text-align:center;font-size:14px;"><strong>Cash Cr (#) </strong></th>
                  <th width="8%" style="text-align:center;font-size:14px;"><strong>IPPIS Cr (#) </strong></th>
                  <th width="8%" style="text-align:center;font-size:14px;"><strong>Dr (#)</strong></th>
                  <th width="20%" style="text-align:center;font-size:14px;"><strong>Current Balance  (#)</strong></th>      
                  <th width="8%" style="text-align:center; font-size:14px;"><strong>Date</strong></th>
                </tr>
              </thead>
               <?php //echo $_SESSION['coopno'];
					$sn=0;
			$newquery="select savingtab.*,savingtab.saving_bal As mymonthbal,statustab.*,statustab.saving_bal As mytotalbal from savingtab inner join statustab on savingtab.mem_id=statustab.mem_id where savingtab.mem_id='$_SESSION[memid]'";
			   $saveoutput=mysqli_query($con,$newquery);
			   if(mysqli_num_rows($saveoutput))
			   {
				   $initialbal=0;
				   while($rows=mysqli_fetch_assoc($saveoutput))
				   {
					$sn++;
					$savingcr=$rows['saving_cr'];
					$savingdr=$rows['saving_dr'];
					$ippiscr=$rows['ippis_cr'];
					$cbal=$rows['current_bal'];
					$savingsbbf=$rows['savings_bbf'];
					$savingbal=$rows['mymonthbal'];
					$savingmonth=$rows['saving_month'];
					$nod=$rows['nature_of_debit'];
					$date=$rows['date'];
					$monthlysave=$savingbal;
					$totalbal=$cbal+$savingsbbf;
					
					 ?>
              <tbody>
               <tr>
                  <td align="center"><?php echo $sn; ?></td>
                  <td align="center"><?php echo $savingmonth; ?></td>
                  <td align="center"><?php echo $monthlysave; ?></td>                  
                  <td align="center"><?php echo $savingcr; ?></td>
                  <td align="center"><?php echo $ippiscr; ?></td>
                  <td align="center"><?php echo $savingdr; ?></td>
                  <td align="center"><?php echo $totalbal; ?></td>
                  <td align="center"><?php echo $date; ?></td>
                </tr>
                </tbody>
                <?php
				   }
			   }
					?>
                    </table>
                    </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Loan Account Report
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Loan Account
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Shares
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       Shares
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
  <script src="assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
</body>

</html>
