<?php
	$location="localhost";
	$account="root";
	$password="summ0605";//91u09n17a
	if(isset($location) && isset($account) && isset($password))
	{
		$link=mysql_pconnect($location,$account,$password);
		if(!$link){
			//echo '無法連接資料庫';
			exit();
		}
		else{
			//echo '成功';
		}
	}
?>