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
  <link href="../assets/js/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/js/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/js/plugins/datatables/buttons.dataTables.min.css" rel="stylesheet" />
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
          <li class="active">
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
                <h5 class="title">Member Details</h5>
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form>
                	<table width="100%" class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="tab" cellspacing="2" cellpadding="2">
<thead>
  <tr style="font-weight:bolder;" align="center">
  	<td width="5%">S/N</td>
    <td width="8%">Coop Number</td>
    <td width="5%">Title</td>
    <td width="26%">Full Name</td>
    <td width="10%">Phone</td>
    <td width="10%">Email</td>
    <td width="7%">Loan Status</td>
    <td width="21%">Action</td>
  </tr>
</thead>
<tbody>
  <tr>
   <?php
   $sn=1;
   $newquery="select * from memstab";
   $output=mysqli_query($con,$newquery);
   if(mysqli_num_rows($output))
   {
	   while($rows=mysqli_fetch_assoc($output))
	   {
		   
		$_SESSION['mem_id']=$rows['mem_id'];
  ?>
   	<td align="center"><?php echo $sn; ?></td>
    <td align="center"><?php echo $rows['mem_coopno']; ?></td>
    <td align="center"><?php echo ucfirst($rows['mem_title'])."."; ?></td>
    <td align="center"><?php echo ucfirst($rows['mem_surname'])." ".ucfirst($rows['mem_fname'])." ".ucfirst($rows['mem_oname']); ?></td>
    <td align="center"><?php echo $rows['mem_phone']; ?></td>
    <td align="center"><?php echo $rows['mem_email']; ?></td>
    <td align="center">OFF Loan</td>
    
    <td align="center">
    <a href="#" class="btn btn-info btn-simple btn-xs" rel="tooltip" title="View Member Full Details" id="viewbut" data-id="<?php echo $rows['mem_id']; ?>"><i class="now-ui-icons education_paper"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-simple btn-xs" rel="tooltip" title="Edit Member Details" id="editbut" data-id="<?php echo $rows['mem_id']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-simple btn-xs" rel="tooltip" title="Delete Member" id="deletebut" data-id="<?php echo $rows['mem_id']; ?>" ><i class="now-ui-icons ui-1_simple-remove"></i></a>
    </td>
  </tr>
    <?php
	$sn++;
	   }
   }
	?>
    </tbody>
</table>
                </form>
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
  <script src="../assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="../assets/js/plugins/year-select.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/plugins/datatables/jszip.min.js"></script>
    <script src="../assets/js/plugins/datatables/pdfmake.min.js"></script>
    <script src="../assets/js/plugins/datatables/vfs_fonts.js"></script>
    <script src="../assets/js/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../assets/js/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../assets/js/plugins/datatables/buttons.print.min.js"></script>
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
<script>
		$(document).ready(function() {
			$('#tab').DataTable({
				dom: 'lBfrtip',
				//dom: 'Bfrtip',
				//(makes the  dropdown or length control disappear but adding l to it makes it appear)
				
        buttons: [
           // 'copyHtml5',
            //'excelHtml5',
			//'pageLength',
			{
				extend: 'csvHtml5' ,
				title: 'Member List'
			},       
			{
				extend: 'excelHtml5' ,
				title: 'Member List'
			},     
            {
				extend: 'pdfHtml5',
				title: 'Member List'
			},
			
			{  extend: 'print',
				title: 'Member List',
				messageTop: 'List Of Society Members',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="" style="position:absolute; top:0; left:0;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }} 
        ]
				
				});
		} );
	</script>
</body>

</html>
