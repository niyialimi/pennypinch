<?php 
session_start();
require_once("../../req/config.php");
		 $numquery="select MAX(mem_id) as count from memstab";
		 $result=mysqli_query($con,$numquery);
		
		 $array=mysqli_fetch_row($result);
		 
					echo json_encode($array);
		 
		
					
		 ?>