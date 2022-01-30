<?php
function userCheck()
{
    return (isset($_SESSION['login']) && $_SESSION['login']=true && isset($_SESSION['thriftuname']) && isset($_SESSION['trhriftpassword']));
}

if(!userCheck())
    {
		header("Location: ../tadmin/index.php");
		exit();
	}

?>