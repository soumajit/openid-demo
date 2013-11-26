<?php
session_start();
if(isset($_SESSION['identity'])){
	if($_POST['name'])
		$_SESSION['c_name'] = $_POST['name'];
	if($_POST['email'])
        	$_SESSION['c_email'] = $_POST['email'];
        if($_POST['comm'])
		$_SESSION['c_comments'] = $_POST['comm'];
	header('Location: index.php?comments=on');
}
else{
	if($_POST['name'])
		$_SESSION['c_name'] = $_POST['name'];
	if($_POST['email'])
		$_SESSION['c_email'] = $_POST['email'];
	if($_POST['comm'])
		$_SESSION['c_comments'] = $_POST['comm'];
	header('Location: login.php');	
}

