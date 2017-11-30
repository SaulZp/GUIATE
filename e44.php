<?php
error_reporting(0);
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
$temp=$res['variable'];

mysql_query("UPDATE materias set e43='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e32='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e21='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e44='$temp' WHERE matricula='$_SESSION[username]'",$con);

header("Location: mapa.php");
?>