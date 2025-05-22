<html>

<head>
<title>新增美食</title>
</head>

<body>
<form method="get" action="addfood02.php">
	<p align="center"><font size="4" face="微軟正黑體" color=#2d3e4e>新增美食</font></p>

<hr>
<TT>
<center>
<table border="0" width="28%">

	<td align="left" width="30%"><p><a href ="displayfood.php" style="color:#2d3e4e">檢視目前資料</a></p></td>

	<tr bgcolor=#e8eceb>
	<td align="left" width="30%">sid</td>
	<td align="right"><input type=text maxLength="4" size="30" name="sid"></td>

	<tr>
	<td align="left">name</td>
	<td align="right"><input type=text maxLength="20" size="30" name="name"></td>

	<tr bgcolor=#e8eceb>
	<td align="left">tel</td>
	<td align="right"><input type=text maxLength="15" size="30" name="tel"></td>

	<tr>
	<td align="left">address</td>
	<td align="right"><input type=text maxLength="30" size="30" name="address"></td>


	<tr bgcolor=#e8eceb >
	<td align="left">info</td>
	<td align="right"><input type=text maxLength="1200" size="30" name="info"></td>

	<tr>
	<td align="left">property</td>
	<td align="right"><input type=text maxLength="10" size="30" name="property"></td>

	<tr bgcolor=#e8eceb>
	<td align="left">opentime</td>
	<td align="right"><input type=text maxLength="50" size="30" name="opentime"></td>

	<tr>
	<td align="left">region</td>
	<td align="right"><input type=text maxLength="10" size="30" name="region"></td>

</table>
<p align="center">
	<input value="確定新增" type="submit">
	<input value="清空" type="reset">
</form>

</body>
</html>