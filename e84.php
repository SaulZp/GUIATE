<?php
error_reporting(0);
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
$temp=$res['variable'];

mysql_query("UPDATE materias set e81='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e82='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e83='1' WHERE matricula='$_SESSION[username]'",$con);

mysql_query("UPDATE materias set e84='$temp' WHERE matricula='$_SESSION[username]'",$con);

header("Location: mapa.php");
?>