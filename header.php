<?php
require_once "config.php";
if(!ISSET($_SESSION['nik'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PEDULI DIRI</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	</head>
	<body>
	
	<div class="container">
	  <div class="header">
		<div class="logo"><img src="smk_logo.png" width=100 height=100/></div>
		<div class="nav">
			<div class="judul">PEDULI DIRI</div>
			<div class="menu">
			Catatan Perjalanan<br>
			<a href="index.php">Home</a> |
			<a href="isidata.php">Catatan Perjalanan</a> |
			<a href="listdata.php">Isi Data</a> |
			<a href="logout.php">Logout</a>			
			</div>
		</div>
	  </div>
		
