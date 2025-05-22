<html>

<head>
<title>afterdeletefood</title>
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

?>

<?php
	$select_db=@mysql_select_db("tainan");	//選擇資料庫
	if(!$select_db)
	{
		echo '<br>找不到資料庫</br>';
	}
	else{
		//echo '<br>找到資料庫<br>';
		$query="delete from smallfood where sid='".$oid."'";
		mysql_query($query);
		//$sql_query="INSERT INTO usr VALUES('".$usrid."','".$passwd."','".$Email."','".$sex."','".$birthday."','".$hobby."','".$star."','".$job."','".$phone."')";
		//echo $sql_query.'<br>';
		//$result=mysql_query($sql_query);
		//mysql_query($sql_query);
		echo '<br>刪除成功</br>';
	}
?>

</body>
</html>