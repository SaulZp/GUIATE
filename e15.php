<?php
error_reporting(0);
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
$temp=$res['variable'];

mysql_query("UPDATE materias set e11='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e12='1' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e13='1' WHERE matricula='$_SESSION[username]'",$con);

$n1=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$n2=mysql_fetch_array($n1);
$n3=$n2['e14'];

if($n3==1){
mysql_query("UPDATE materias set e14='1' WHERE matricula='$_SESSION[username]'",$con);
}else mysql_query("UPDATE materias set e14='3' WHERE matricula='$_SESSION[username]'",$con);

mysql_query("UPDATE materias set e15='$temp' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e16='3' WHERE matricula='$_SESSION[username]'",$con);
mysql_query("UPDATE materias set e17='0' WHERE matricula='$_SESSION[username]'",$con);

mysql_query("UPDATE materias set e27='3' WHERE matricula='$_SESSION[username]'",$con);

header("Location: mapa.php");
?>