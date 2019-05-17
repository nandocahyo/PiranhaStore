<?php 
include "root.php"; 
session_start();
if (!isset($_SESSION['username'])) {
	$root->redirect("index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/index.css">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="assets/jquery.js"></script>
</head>
<body>

<div class="sidebar">
	<h3><i class="fa fa-futbol-o"></i> Piranha's Sport</h3>
	<ul><?php
			if ($_SESSION['status']==1) {
				?>
					
					<li><a id="dash" href="home.php"><i class="fa fa-home"></i> Dashboard</a></li>
					<li><a id="barang" href="barang.php"><i class="fa fa-bars"></i> Item</a></li>
					<li><a id="kategori" href="kategori.php"><i class="fa fa-thumb-tack"></i> Kategori</a></li>
					<li><a id="users" href="users.php"><i class="fa fa-user"></i> Kasir</a></li>
					<li><a id="laporan" href="laporan.php"><i class="fa fa-folder"></i> Rekap Data</a></li>
				<?php
			}else{
				?>
					<li><a id="transaksi" href="transaksi.php"><i class="fa fa-money"></i> Transaksi</a></li>
				
				<?php
			}
		?>
		</ul>
</div>
<div class="nav">
	<ul>
		<li><a href=""><i class="fa fa-user"></i> <?= $_SESSION['username'] ?></a>
		<ul>
			<?php
			if ($_SESSION['status']==1) {
				?>
			<li><a href="setting_akun.php"><i class="fa fa-cog"></i> Pengaturan Akun</a></li>
			<?php } ?>
			<li><a href="handler.php?action=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
		</li>
	</ul>
</div>
