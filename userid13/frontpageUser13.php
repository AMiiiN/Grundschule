<?php include '../functions.php'; session_start(); ?><?php $file = "userid".$_SESSION["u_id"]."/gallery_id".$_SESSION["u_id"].".php";echo printStartInFileTable($_SESSION["u_id"], $file); ?>
