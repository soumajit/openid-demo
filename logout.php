<?php
session_start();
unset($_SESSION['identity']);
unset($_SESSION['c_name']);
unset($_SESSION['c_email']);
unset($_SESSION['c_ename']);
unset($_SESSION['c_comments']);
session_destroy();
header('Location: index.php');
?>
