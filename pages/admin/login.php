<?php 
include '../../config/koneksi.php';


?>
<html>
<head>
<title> penyewaan lapangan futsal </title>
		<style type="text/css">
			 html{
 				width: 100%;
 				height: 100%;
			    background-image: url("../../asset/foto red/futsal.jpg");
				}
		table {
 			border:solid #dcdcdc 1px;
 			padding:25px;
 			box-shadow: 0px 0px 1px rgba(0,0,0,0.2);
			}
			table tr,td {
 				padding:15px;
 			
				}
			table tr td input {
 				width:100%;
 				height:45px;
 				border-radius:10px;
 				padding-left:5px;
 				font-family:Verdana, Geneva, sans-serif;
				}
			table tr td button{
				float: right;
				height: 30px;
				width: 80px;
			}
			table tr td a{
				float: right;
			}


		</style>
	</head>
	<br/>
	<center><marquee width="700">Selamat Datang Admin, Silahkan Login</marquee></center>
	<hr size="7px" width="700px">
	<br />
		<body>
			<center>
		<h2> Data Untuk Mengatur Penyewaan Lapanangan Futsal </h2>
		<h1>Login Admin</h1>
			<form action="#" method="POST">
		<table>
		<tr>
			<td>UserName<input type="text" name="username" placeholder="Masukan Username Admin"></td>
		</tr>
		<tr>
			<td>Password<input type="password" name="password" id="password" placeholder="masukkan Password Admin"></td>
		</tr>
		<tr>
		<td><button type="submit">Login</td>
		</tr>
		<tr>
		<td><a href="register.php">Silahkan Registrasi</a></td>
	</tr>
		</table>
	</body>
</html>
