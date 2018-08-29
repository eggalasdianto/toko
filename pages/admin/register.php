<?php 

if( isset($_POST['register']) ){
	include '../../config/koneksi.php';

	$insert = mysqli_query($conn, "INSERT INTO user VALUES(
		NULL, 
		'".$_POST['username']."',
		'".$_POST['password']."',
		'".$_POST['password2']."',)");
	if ($insert) {
		echo "berhasil daftar";
	} else{
		echo "Daftar Gagal";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
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
<body>
	<center>
		<marquee width="700">Selamat Datang Admin, Registrasi untuk Login</marquee>
		<hr size="7px" width="700px">
		<h1>Silahkan Registrasi Untuk Admin</h1>
		
		<form action="" method="POST">
			<table>
				<tr>
					<td>Username:<input type="name" name="username" placeholder="diisi untuk login"></td>
				</tr>
				<tr>
					<td>Password:<input type="password" name="password" placeholder="diisi untuk login"></td>
				</tr>
				<tr>
					<td>Password:<input type="password" name="password2" placeholder="diisi untuk login"></td>
				</tr>
				<tr>
					<td><button type="submit" name="register">Registrasi</button></td>
				</tr>
				<tr>
					<td><a href="login.php">Silahkan Login</a></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>