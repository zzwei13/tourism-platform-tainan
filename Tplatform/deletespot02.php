<html>

<head>
<title>刪除景點</title>
</head>
<?php
	include("connection.php");
?>
<body>
<p align="center"><font size="4" face="微軟正黑體" color=#2d3e4e>刪除景點</font></p>
<hr>
<?php
	$filename=$_GET["sid"];
	$select_db=@mysql_select_db("tainan");	//選擇資料庫
	if(!$select_db)
	{
		echo '<br>找不到資料庫</br>';
	}
	else{
		//echo '<br>找到資料庫</br>';
		$sql_query="select * from smallspot where sid='".$filename."'";
		$result=mysql_query($sql_query);
		
		if(mysql_num_rows($result)==1){
			//echo '<TT>景點刪除';
			echo '<form method="get" action="deletespot03.php"><center><table border=0 width=40%>';
			$row=mysql_fetch_array($result);
	?>

	<table border="0" width="28%">

	<td align="left" width="30%"><p><a href ="displayspot.php" style="color:#2d3e4e">檢視目前資料</a></p></td>

	<tr bgcolor=#e8eceb>
	<td align="left" width="30%">sid</td>
	<td align="right"><?echo $row[0]?></td>

	<tr>
	<td align="left">name</td>
	<td align="right"><?echo $row[1]?></td>

	<tr bgcolor=#e8eceb>
	<td align="left">tel</td>
	<td align="right"><?echo $row[2]?></td>

	<tr>
	<td align="left">address</td>
	<td align="right"><?echo $row[3]?></td>

	<tr bgcolor=#e8eceb >
	<td align="left">info</td>
	<td align="right"><?echo $row[4]?></td>

	<tr>
	<td align="left">property</td>
	<td align="right"><?echo $row[5]?></td>

	<tr bgcolor=#e8eceb>
	<td align="left">opentime</td>
	<td align="right"><?echo $row[6]?></td>

	<tr>
	<td align="left">region</td>
	<td align="right"><?echo $row[7]?></td>
	<input type=hidden name=oid value=<?echo $row[0]?>>

		<tr>
		<td align=right><input type="submit" value="確認刪除">
		<td><input type="reset" value="重新設定">
<?
			
		}
		else{
			echo '你的帳號不存在';
		}
	}
?>

	

</body>
</html>