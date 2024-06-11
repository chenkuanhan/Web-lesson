<?php
include_once("setdb.php");

  if(!empty($_GET["name"])){
	  $sql="insert into health value(null, '".$_GET["name"]."', ".$_GET["age"].", ".$_GET["hei"].", ".$_GET["wei"].")";
	  //echo $sql;
	  mysqli_query($link, $sql);
  }
?>
<script>location.href="index.php";</script>