<?php
session_start();
session_destroy();
	unset($_SESSION['user']);
	header("Location: ../index.php");
/*if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");
}*/
?>