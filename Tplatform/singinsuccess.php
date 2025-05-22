<html>

<head>
<title>連接資料庫</title>
</head>
<?php
	include("connection.php");
?>
<style>
#rank a:hover,a:visited,a:link,a:active{
    text-decoration: none;
	font-size:20px;
}
</style>
<body>

<?php
	$filename=$_GET["usrid"];
	$select_db=@mysql_select_db("tainan");	//選擇資料庫
	if(!$select_db)
	{
		echo '<br>找不到資料庫</br>';
	}
	else{
		//echo '<br>找到資料庫</br>';
		$sql_query="select * from usr where usrid='".$filename."'";
		$result=mysql_query($sql_query);
		
		if(mysql_num_rows($result)==1){
			//echo '<TT>登入成功';
			echo '<center>';
			//echo '<form method="get" action="26.php"><center><table border=0 width=40%>';
			$row=mysql_fetch_array($result);
	?>
<br><br><br><br>
		<tr>
		<div id="rank">
    	<p><a href ="addspot.php" style="color:#2d3e4e">新增景點</a></font></p>
		<p><a href ="addfood.php" style="color:#2d3e4e">新增美食</a></font></p>
		<p><a href ="modifyspot.php" style="color:#2d3e4e">修改景點</a></font></p>
		<p><a href ="modifyfood.php" style="color:#2d3e4e">修改美食</a></font></p>
		<p><a href ="deletespot.php" style="color:#2d3e4e">刪除景點</a></font></p>
		<p><a href ="deletefood.php" style="color:#2d3e4e">刪除美食</a></font></p>
		</div>
<?
			
		}
		else{
			echo '你的帳號不存在';
		}
	}
?>

	

</body>
</html>