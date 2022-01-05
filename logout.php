<?php
include("logout.html");
session_start();
ob_start();
session_destroy();
header("Refresh: 2; url=girisForm.php");
ob_end_flush();
?>