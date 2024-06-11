<?php
include_once("setdb.php");

$sql="select * from health";
$ro=mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($ro);
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<table border="1">
	<tr>
		<td style="width:80" align=center>姓名</td>
		<td style="width:80" align=center>年齡</td>
		<td style="width:80" align=center>身高</td>
		<td style="width:80" align=center>體重</td>
		<td style="width:120" align=center>功能</td>
	</tr>
<?php
	do{
?>	
	<tr>
		<td style="width:80" align=center><?=$row["name"]?></td>
		<td style="width:80" align=center><?=$row["age"]?></td>
		<td style="width:80" align=center><?=$row["height"]?></td>
		<td style="width:80" align=center><?=$row["weight"]?></td>
		<td>
			<input type="button" onclick="location.href='update.php?id=<?=$row["seq"]?>'" value="修改">
		</td>
	</tr>	
<?php
	}while($row=mysqli_fetch_assoc($ro));
?>	
	<tr>
		<td colspan="4" align="center">
			<input type="button" onclick="location.href='add.html'" value="新增">
		</td>
	</tr>
</table>
</body>
</html>