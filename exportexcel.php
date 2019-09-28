<!DOCTYPE html>
<html>
<head>
	<title>Export Data ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: bule;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
</style>
<?php
header("Content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=exportexcel.xls");
?>
<center>
	<h1>Export Data Ke Excel Dengan PHP <br/></h1>
</center>

<center>
	<a target="_blank" href="exportexcel.php">Export Ke Excel</a>
</center>

<table>
	<tr>
		<th>no</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No.Tlp</th>
	</tr>
	<tr>
		<td>1</td>
		<td>silva</td>
		<td>rancakalong</td>
		<td>08986101653</td>
	</tr>
</table>
</body>
</html>