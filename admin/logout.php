<?php
session_start();
unset($_SESSION["user"]); // Destroying All Sessions
header("location:../index.php");
?>