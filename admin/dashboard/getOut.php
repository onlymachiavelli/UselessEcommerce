<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
	 header('Location: ../../admin/'); 
}
else{
	session_start();
	session_unset();
	session_destroy();
	header('Location: ../../admin/');
}
?>