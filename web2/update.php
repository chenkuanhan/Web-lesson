<?php
include_once("setdb.php");

if(!empty($_GET["id"])){
	$sql="select * from health where seq=".$_GET["id"];
	$ro=mysqli_query($link, $sql);
	$row=mysqli_fetch_assoc($ro);
}
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<form method="get" action="add_api.php">
<table border="1">
	<tr>
		<td style="width:80" align=center>姓名</td>
		<td>
			<input name="name" value="<?=$row["name"]?>">
		</td>
	</tr>
	<tr>
		<td style="width:80" align=center>年齡</td>
		<td>
			<input name="age" value="<?=$row["age"]?>">
		</td>
	</tr>
	<tr>
		<td style="width:80" align=center>身高</td>
		<td>
			<input name="hei" value="<?=$row["height"]?>">
		</td>
	</tr>
	<tr>
		<td style="width:80" align=center>體重</td>
		<td>
			<input name="wei" value="<?=$row["weight"]?>">
		</td>
	</tr>	
</table>
<input type="submit" value="送出">
</form>
</body>
</html>