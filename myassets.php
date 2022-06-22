<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Assets Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
    	body {
		font-size: 14px;
		padding: 10px;
	}
    </style>
</head>
<body>
<header>
  <div class="p-5 text-center" >
    <h1 class="mb-1" style="font-size:22px">
      <b>Laporan Senarai Inventori</b>
    </h1>
  </div>
</header>

</body>
<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '';
$db_name = 'myasset_malaysia'; 

// Establish DB connections
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die(mysqli_connect_error());

/** 
 * SQL
 */
//Retrieve code and stock description for class 1
$result = mysqli_query($connection, "SELECT sps_stok_class1.code as c1_code, sps_stok_class1.stok_desc as c1_stokdesc, sps_stok_class2.code as c2_code, sps_stok_class2.stok_desc as c2_stokdesc FROM sps_stok_class1 JOIN sps_stok_class2 ON sps_stok_class1.code = sps_stok_class2.class1 ");
while($row = mysqli_fetch_array($result)) 
{
    echo "Class 2 code-" . $row['c2_code']. " Description: " . $row["c2_stokdesc"]. " --- " . $row["c1_stokdesc"]. "<br>";
}
?>

<table style="width:100;">
    <thead>
        <tr>
        </tr>
    </thead>
</table>


</html>