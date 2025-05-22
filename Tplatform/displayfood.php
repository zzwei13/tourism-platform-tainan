<html>

<head>
<title>顯示目前資料</title>
</head>
<?php
	include("connection.php");
?>
<body>
<?php
	$select_db=@mysql_select_db("tainan");	//選擇資料庫
	if(!$select_db)
	{
		echo '<br>找不到資料庫</br>';
	}
	else{

		$sql_query="select * from smallfood";
		$result=mysql_query($sql_query);
		//echo '<p>Test:'.$sql_query.'<br>';
		echo '<p>資料筆數:'.mysql_num_rows($result).'<br>';
		

		echo '<table border=1>';
		echo '<tr>';
		echo '<td>sid';
		echo '<td>name';
		echo '<td>tel';
		echo '<td>address';
		echo '<td>info';
		echo '<td>property';
		echo '<td>opentime';
		echo '<td>region';

		while($row=mysql_fetch_array($result))
		{
		echo '<tr>';
		echo '<td>'.$row[0];
		echo '<td>'.$row[1];
		echo '<td>'.$row[2];
		echo '<td>'.$row[3];
		echo '<td>'.$row[4];
		echo '<td>'.$row[5];
		echo '<td>'.$row[6];
		echo '<td>'.$row[7];
		echo '<td>'.$row[8];
	
		}
		echo '</table>';
	}
?>

</body>
</html>