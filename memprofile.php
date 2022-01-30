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
   	PennyPinch
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
          <li class="active">
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
            <a class="navbar-brand" href="#">My Profile</a>
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
        <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo $_SESSION['path']; ?>" alt="...">
                    <h5 class="title"><?php echo $_SESSION['surname']." ". $_SESSION['firstname']." ".$_SESSION['othername']; ?></h5>
                  </a>
                  <p class="description">
                    <?php echo $_SESSION['email'];?>
                  </p>
                </div>
                <p class="description text-center">
                  Coop Number: <strong><?php echo $_SESSION['coopno'];?></strong>
                  <br> Phone Number: <?php echo $_SESSION['phone'];?></strong>
                  <br> Dept: <?php echo $_SESSION['dept'];?></strong>
                </p>
              </div>
              <hr>
              <div class="button-container">
              <a href="loanapp.php" rel="tooltip" title="Apply for Loan">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="now-ui-icons design-2_ruler-pencil"></i>
                </button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Your Last Name" value="<?php echo $_SESSION['surname']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Your First Name" value="<?php echo $_SESSION['firstname']; ?>" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">                  
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="oname" id="oname" placeholder="Your Other Name" value="<?php echo $_SESSION['othername']; ?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Ippis No</label>
                        <input type="text" class="form-control" name="ippisno" id="ippisno" value="<?php echo $_SESSION['ippis']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $_SESSION['email']; ?>" required>
                      </div>
                    </div>
                  </div>
                  
                 
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Your Current Number" name="phone" id="phone" value="<?php echo $_SESSION['phone']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="<?php echo $_SESSION['nation']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>State Of Origin</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['state']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description"><?php echo $_SESSION['address']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  
                   <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Next of Kin Fullname</label>
                        <input type="text" class="form-control" name="nokname" id="nokname" placeholder="Your Next of Kin Name" value="<?php echo $_SESSION['nokname']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Next of Kin Phone</label>
                        <input type="text" class="form-control" name="nokphone" id="nokphone" placeholder="Your Next of Kin Phone Number" value="<?php echo $_SESSION['nokphone']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Next of Kin Address</label>
                        <input type="text" class="form-control" name="nokemail" id="nokemail" placeholder="Next of Kin Email (Optional)"  value="<?php echo $_SESSION['nokaddress']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div align="center"> 
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" id="edituserbut">Update My Profile</button>
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
