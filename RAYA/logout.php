<?php
session_start();

$_SESSION['user'] = "";
header("Location: http://localhost/RAYA/index.php");
?>
