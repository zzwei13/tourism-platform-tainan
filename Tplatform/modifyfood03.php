<html>

<head>
<title>aftermodifyfood</title>
</head>
<?php
	include("connection.php");
?>
<body>

<?php
	$sid=$_GET["sid"];
	$name=$_GET["name"];
	$tel=$_GET["tel"];
	$address=$_GET["address"];
	$info=$_GET["info"];
	$property=$_GET["property"];
	$opentime=$_GET["opentime"];
	$region=$_GET["region"];
	$oid=$_GET["oid"];

	echo '<p>美食編號sid:'.$sid.'<br>';
	echo '<p>店名name:'.$name.'<br>';
	echo '<p>電話tel:'.$tel.'<br>';
	echo '<p>地址address:'.$address.'<br>';
	echo '<p>簡介info:'.$info.'<br>';
	echo '<p>類別property:'.$property.'<br>';
	echo '<p>營業時間opentime:'.$opentime.'<br>';
	echo '<p>區域region:'.$region.'<br>';
?>

<?php
	$select_db=@mysql_select_db("tainan");;	//選擇資料庫
	if(!$select_db)
	{
		echo '<br>找不到資料庫</br>';
	}
	else{
		//echo '<br>找到資料庫<br>';
		$query="delete from smallfood where sid='".$oid."'";
		mysql_query($query);
		$sql_query="INSERT INTO smallfood VALUES('".$sid."','".$name."','".$tel."','".$address."','".$info."','".$property."','".$opentime."','".$region."')";
		//echo $sql_query.'<br>';
		//$result=mysql_query($sql_query);
		mysql_query($sql_query);
		echo '<br>修改成功</br>';
	}
?>

</body>
</html>