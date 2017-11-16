<?php
error_reporting(0);
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

$temp=$_POST['vec'];

mysql_query("UPDATE materias set variable='$temp' WHERE matricula='$_SESSION[username]'",$con);

header("Location: mapa.php");
?>