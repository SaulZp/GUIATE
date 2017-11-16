<?php
session_start();

error_reporting(0);

$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);

if (isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />

<body>

<nav>
<ul>
<li>FCC</li>
<a href="destruir.php">Cerrar sesion</a>
<br>
<a href="bienvenido.php">Regresar</a>
</ul>
</nav>

<br><br>

<form method="POST" action="Aprovadas.php">&nbsp;
<input type="checkbox" name="vec" value="1">Aprobadas &nbsp;
<input type="submit" value="Cargar">
</form>
<br>
<form method="POST" action="Reprovadas.php">&nbsp;
<input type="checkbox" name="vec2" value="2">Reprobadas &nbsp;
<input type="submit" value="Cargar">
</form>
<br>
<form method="POST" action="Acursar.php">&nbsp;
<input type="checkbox" name="vec3" value="3">A cursar &nbsp;
<input type="submit" value="Cargar">
</form>
<br>
<form method="POST" action="Encurso.php">&nbsp;
<input type="checkbox" name="vec4" value="4">En curso &nbsp;
<input type="submit" value="Cargar">
</form>

<br><br>

<div id="interna">

<table id="tabla1" style="overflow-y:scroll">

<tr>
<td><form method="POST" action="e11.php"><input type="image" src="basicas/mate.png" id="e11"></form></td>
<td><form method="POST" action="e12.php"><input type="image" src="basicas/cd.png" id="e12"></form></td>
<td><form method="POST" action="e13.php"><input type="image" src="basicas/ci.png" id="e13"></form></td>
<td><form method="POST" action="e14.php"><input type="image" src="basicas/ed.png" id="e14"></form></td>
<td><form method="POST" action="e15.php"><input type="image" src="basicas/pye.png" id="e15"></form></td>
<td><form method="POST" action="e16.php"><input type="image" src="tecnologia/mdr.png" id="e16"></form></td>
<td><form method="POST" action="e17.php"><input type="image" src="tecnologia/ri.png" id="e17"></form></td>
<td><form method="POST" action="e18.php"><input type="image" src="ingenieria/tdc.png" id="e18"></form></td>
<td></td><td></td>
</tr>

<tr>
<td><form method="POST" action="e21.php"><input type="image" src="basicas/as.png" id="e21"></form></td>
<td><form method="POST" action="e22.php"><input type="image" src="basicas/f1.png" id="e22"></form></td>
<td><form method="POST" action="e23.php"><input type="image" src="basicas/f2.png" id="e23"></form></td>
<td><form method="POST" action="e24.php"><input type="image" src="ingenieria/ce.png" id="e24"></form></td>
<td><form method="POST" action="e25.php"><input type="image" src="ingenieria/cel.png" id="e25"></form></td>
<td><form method="POST" action="e26.php"><input type="image" src="ingenieria/dd.png" id="e26"></form></td>
<td><form method="POST" action="e27.php"><input type="image" src="tecnologia/md.png" id="e27"></form></td>
<td><form method="POST" action="e28.php"><input type="image" src="tecnologia/adr.png" id="e28"></form></td>
<td><form method="POST" action="e29.php"><input type="image" src="tecnologia/iysdr.png" id="e29"></form></td>
</td><td>
</tr>

<tr>
<td></td>
<td><form method="POST" action="e32.php"><input type="image" src="basicas/asce.png" id="e32"></form></td>
<td><form method="POST" action="e33.php"><input type="image" src="basicas/md.png" id="e33"></form></td><td></td><td></td>
<td><form method="POST" action="e36.php"><input type="image" src="tecnologia/bdi.png" id="e36"></form></td>
<td><form method="POST" action="e37.php"><input type="image" src="ingenieria/adc.png" id="e37"></form></td><td></td>
<td><form method="POST" action="e39.php"><input type="image" src="ingenieria/se.png" id="e39"></form></td>
</tr>

<tr>
<td><form method="POST" action="e41.php"><input type="image" src="ingenieria/mdlp.png" id="e41"></form></td>
<td><form method="POST" action="e42.php"><input type="image" src="ingenieria/p1.png" id="e42"></form></td>
<td><form method="POST" action="e43.php"><input type="image" src="ingenieria/p2.png" id="e43"></form></td>
<td><form method="POST" action="e44.php"><input type="image" src="tecnologia/g.png" id="e44"></form></td>
<td><form method="POST" action="e45.php"><input type="image" src="ingenieria/so1.png" id="e45"></form></td>
<td><form method="POST" action="e46.php"><input type="image" src="ingenieria/so2.png" id="e46"></form></td>
<td></td><td><form method="POST" action="e48.php"><input type="image" src="ingenieria/tecia.png" id="e48"></form></td>
<td></td><td><form method="POST" action="e410.php"><input type="image" src="optativa/od.png" id="e410"></form></td>
</tr>

<tr>
<td></td><td></td>
<td><form method="POST" action="e53.php"><input type="image" src="ingenieria/e.png" id="e53"></form></td>
<td><form method="POST" action="e54.php"><input type="image" src="ingenieria/edd.png" id="e54"></form></td>
<td><form method="POST" action="e55.php"><input type="image" src="ingenieria/adda.png" id="e55"></form></td>
<td><form method="POST" action="e56.php"><input type="image" src="optativa/adp.png" id="e56"></form></td>
<td><form method="POST" action="e57.php"><input type="image" src="ingenieria/pcp.png" id="e57"></form></td>
<td><form method="POST" action="e58.php"><input type="image" src="ingenieria/pda.png" id="e58"></form></td>
<td><form method="POST" action="e59.php"><input type="image" src="ingenieria/ss.png" id="e59"></form></td>
<td><form method="POST" action="e510.php"><input type="image" src="ingenieria/pp.png" id="e510"></form></td>
</tr>

<tr>
<td></td><td></td><td></td><td></td><td>
<td><form method="POST" action="e65.php"><input type="image" src="ingenieria/is.png" id="e65"></form></td>
<td></td><td><form method="POST" action="e67.php"><input type="image" src="tecnologia/ddaw.png" id="e67"></form></td>
<td><form method="POST" action="e68.php"><input type="image" src="ingenieria/ddam.png" id="e68"></form></td>
</tr>

<tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td>
</td><td><form method="POST" action="e78.php"><input type="image" src="ingenieria/o1.png" id="e78"></form></td>
<td><form method="POST" action="e79.php"><input type="image" src="ingenieria/o2.png" id="e79"></form></td>
<td><form method="POST" action="e710.php"><input type="image" src="optativa/pro1.png" id="e710"></form></td>
</tr>

</table>
</div>

<br><br>

<table id="tabla2">
<tr>
<td><form method="POST" action="e81.php"><input type="image" src="general/le1.png" id="e81"></form></td>
<td><form method="POST" action="e82.php"><input type="image" src="general/le2.png" id="e82"></form></td>
<td><form method="POST" action="e83.php"><input type="image" src="general/le3.png" id="e83"></form></td>
<td><form method="POST" action="e84.php"><input type="image" src="general/le4.png" id="e84"></form></td>
</tr>
<tr>
<td><form method="POST" action="e91.php"><input type="image" src="general/FHS.png" id="e91"></form></td>
<td><form method="POST" action="e92.php"><input type="image" src="general/DHPC.png" id="e92"></form></td>
</tr>
</table>

<br>

<br><br>

<script type="text/javascript">
suma=0;

var e11="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e11'];
?>";

var e12="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e12'];
?>";

var e13="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e13'];
?>";

var e14="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e14'];
?>";

var e15="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e15'];
?>";

var e16="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e16'];
?>";

var e17="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e17'];
?>";

var e18="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e18'];
?>";

var e21="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e21'];
?>";

var e22="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e22'];
?>";

var e23="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e23'];
?>";

var e24="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e24'];
?>";

var e25="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e25'];
?>";

var e26="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e26'];
?>";

var e27="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e27'];
?>";

var e28="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e28'];
?>";


var e29 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e29'];
?>";

var e32 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e32'];
?>";

var e33 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e33'];
?>";

var e36 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e36'];
?>";

var e37 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e37'];
?>";

var e39 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e39'];
?>";

var e41 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e41'];
?>";

var e42 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e42'];
?>";

var e43 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e43'];
?>";

var e44 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e44'];
?>";

var e45 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e45'];
?>";

var e46 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e46'];
?>";

var e48 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e48'];
?>";

var e410 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e410'];
?>";

var e53 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e53'];
?>";

var e54 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e54'];
?>";

var e55 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e55'];
?>";

var e56 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e56'];
?>";

var e57 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e57'];
?>";

var e58 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e58'];
?>";

var e59 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e59'];
?>";

var e510 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e510'];
?>";

var e65 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e65'];
?>";

var e67 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e67'];
?>";

var e68 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e68'];
?>";

var e78 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e78'];
?>";

var e79 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e79'];
?>";

var e710 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e710'];
?>";

var e81 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e81'];
?>";

var e82 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e82'];
?>";

var e83 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e83'];
?>";

var e84 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e84'];
?>";

var e91 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e91'];
?>";

var e92 ="<?php 
$reg=mysql_query("SELECT * FROM materias WHERE matricula='$_SESSION[username]'");
$res=mysql_fetch_array($reg);
echo $res['e92'];
?>";

if (e11=="1"){
var element = document.getElementById("e11");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e12=="1"){
var element = document.getElementById("e12");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e13=="1"){
var element = document.getElementById("e13");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e14=="1"){
var element = document.getElementById("e14");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e15=="1"){
var element = document.getElementById("e15");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e16=="1"){
var element = document.getElementById("e16");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e17=="1"){
var element = document.getElementById("e17");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e18=="1"){
var element = document.getElementById("e18");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e21=="1"){
var element = document.getElementById("e21");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}


if (e22=="1"){
var element = document.getElementById("e22");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e23=="1"){
var element = document.getElementById("e23");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e24=="1"){
var element = document.getElementById("e24");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e25=="1"){
var element = document.getElementById("e25");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e26=="1"){
var element = document.getElementById("e26");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e27=="1"){
var element = document.getElementById("e27");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e28=="1"){
var element = document.getElementById("e28");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e29=="1"){
var element = document.getElementById("e29");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e32=="1"){
var element = document.getElementById("e32");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e33=="1"){
var element = document.getElementById("e33");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e36=="1"){
var element = document.getElementById("e36");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e37=="1"){
var element = document.getElementById("e37");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e39=="1"){
var element = document.getElementById("e39");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e41=="1"){
var element = document.getElementById("e41");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e42=="1"){
var element = document.getElementById("e42");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e43=="1"){
var element = document.getElementById("e43");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e44=="1"){
var element = document.getElementById("e44");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e45=="1"){
var element = document.getElementById("e45");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e46=="1"){
var element = document.getElementById("e46");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e48=="1"){
var element = document.getElementById("e48");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e410=="1"){
var element = document.getElementById("e410");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e53=="1"){
var element = document.getElementById("e53");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e54=="1"){
var element = document.getElementById("e54");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e55=="1"){
var element = document.getElementById("e55");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e56=="1"){
var element = document.getElementById("e56");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e57=="1"){
var element = document.getElementById("e57");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e58=="1"){
var element = document.getElementById("e58");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e59=="1"){
var element = document.getElementById("e59");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e510=="1"){
var element = document.getElementById("e510");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e65=="1"){
var element = document.getElementById("e65");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e67=="1"){
var element = document.getElementById("e67");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e68=="1"){
var element = document.getElementById("e68");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e78=="1"){
var element = document.getElementById("e78");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e79=="1"){
var element = document.getElementById("e79");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e710=="1"){
var element = document.getElementById("e710");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e81=="1"){
var element = document.getElementById("e81");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e82=="1"){
var element = document.getElementById("e82");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e83=="1"){
var element = document.getElementById("e83");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e84=="1"){
var element = document.getElementById("e84");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e91=="1"){
var element = document.getElementById("e91");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e92=="1"){
var element = document.getElementById("e92");
element.style.background="#3a7999";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (e11=="2"){
var element = document.getElementById("e11");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e12=="2"){
var element = document.getElementById("e12");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e13=="2"){
var element = document.getElementById("e13");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e14=="2"){
var element = document.getElementById("e14");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e15=="2"){
var element = document.getElementById("e15");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e16=="2"){
var element = document.getElementById("e16");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e17=="2"){
var element = document.getElementById("e17");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e18=="2"){
var element = document.getElementById("e18");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e21=="2"){
var element = document.getElementById("e21");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}


if (e22=="2"){
var element = document.getElementById("e22");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e23=="2"){
var element = document.getElementById("e23");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e24=="2"){
var element = document.getElementById("e24");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e25=="2"){
var element = document.getElementById("e25");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e26=="2"){
var element = document.getElementById("e26");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e27=="2"){
var element = document.getElementById("e27");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e28=="2"){
var element = document.getElementById("e28");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e29=="2"){
var element = document.getElementById("e29");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e32=="2"){
var element = document.getElementById("e32");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e33=="2"){
var element = document.getElementById("e33");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e36=="2"){
var element = document.getElementById("e36");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e37=="2"){
var element = document.getElementById("e37");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e39=="2"){
var element = document.getElementById("e39");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e41=="2"){
var element = document.getElementById("e41");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e42=="2"){
var element = document.getElementById("e42");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e43=="2"){
var element = document.getElementById("e43");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e44=="2"){
var element = document.getElementById("e44");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e45=="2"){
var element = document.getElementById("e45");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e46=="2"){
var element = document.getElementById("e46");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e48=="2"){
var element = document.getElementById("e48");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e410=="2"){
var element = document.getElementById("e410");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e53=="2"){
var element = document.getElementById("e53");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e54=="2"){
var element = document.getElementById("e54");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e55=="2"){
var element = document.getElementById("e55");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e56=="2"){
var element = document.getElementById("e56");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e57=="2"){
var element = document.getElementById("e57");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e58=="2"){
var element = document.getElementById("e58");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e59=="2"){
var element = document.getElementById("e59");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e510=="2"){
var element = document.getElementById("e510");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e65=="2"){
var element = document.getElementById("e65");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e67=="2"){
var element = document.getElementById("e67");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e68=="2"){
var element = document.getElementById("e68");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e78=="2"){
var element = document.getElementById("e78");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e79=="2"){
var element = document.getElementById("e79");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e710=="2"){
var element = document.getElementById("e710");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e81=="2"){
var element = document.getElementById("e81");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e82=="2"){
var element = document.getElementById("e82");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e83=="2"){
var element = document.getElementById("e83");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e84=="2"){
var element = document.getElementById("e84");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e91=="2"){
var element = document.getElementById("e91");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e92=="2"){
var element = document.getElementById("e92");
element.style.background="#FE2E2E";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (e11=="3"){
var element = document.getElementById("e11");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e12=="3"){
var element = document.getElementById("e12");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e13=="3"){
var element = document.getElementById("e13");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e14=="3"){
var element = document.getElementById("e14");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e15=="3"){
var element = document.getElementById("e15");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e16=="3"){
var element = document.getElementById("e16");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e17=="3"){
var element = document.getElementById("e17");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e18=="3"){
var element = document.getElementById("e18");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e21=="3"){
var element = document.getElementById("e21");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}


if (e22=="3"){
var element = document.getElementById("e22");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e23=="3"){
var element = document.getElementById("e23");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e24=="3"){
var element = document.getElementById("e24");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e25=="3"){
var element = document.getElementById("e25");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e26=="3"){
var element = document.getElementById("e26");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e27=="3"){
var element = document.getElementById("e27");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e28=="3"){
var element = document.getElementById("e28");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e29=="3"){
var element = document.getElementById("e29");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e32=="3"){
var element = document.getElementById("e32");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e33=="3"){
var element = document.getElementById("e33");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e36=="3"){
var element = document.getElementById("e36");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e37=="3"){
var element = document.getElementById("e37");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e39=="3"){
var element = document.getElementById("e39");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e41=="3"){
var element = document.getElementById("e41");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e42=="3"){
var element = document.getElementById("e42");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e43=="3"){
var element = document.getElementById("e43");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e44=="3"){
var element = document.getElementById("e44");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e45=="3"){
var element = document.getElementById("e45");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e46=="3"){
var element = document.getElementById("e46");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e48=="3"){
var element = document.getElementById("e48");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e410=="3"){
var element = document.getElementById("e410");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e53=="3"){
var element = document.getElementById("e53");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e54=="3"){
var element = document.getElementById("e54");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e55=="3"){
var element = document.getElementById("e55");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e56=="3"){
var element = document.getElementById("e56");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e57=="3"){
var element = document.getElementById("e57");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e58=="3"){
var element = document.getElementById("e58");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e59=="3"){
var element = document.getElementById("e59");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e510=="3"){
var element = document.getElementById("e510");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e65=="3"){
var element = document.getElementById("e65");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e67=="3"){
var element = document.getElementById("e67");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e68=="3"){
var element = document.getElementById("e68");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e78=="3"){
var element = document.getElementById("e78");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e79=="3"){
var element = document.getElementById("e79");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e710=="3"){
var element = document.getElementById("e710");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e81=="3"){
var element = document.getElementById("e81");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e82=="3"){
var element = document.getElementById("e82");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e83=="3"){
var element = document.getElementById("e83");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e84=="3"){
var element = document.getElementById("e84");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e91=="3"){
var element = document.getElementById("e91");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

if (e92=="3"){
var element = document.getElementById("e92");
element.style.background="#F4FA58";
element.style.padding= "8px";
element.style.borderRadius = "25px";
//suma=suma+2;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if (e11=="4"){
var element = document.getElementById("e11");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e12=="4"){
var element = document.getElementById("e12");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e13=="4"){
var element = document.getElementById("e13");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e14=="4"){
var element = document.getElementById("e14");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e15=="4"){
var element = document.getElementById("e15");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e16=="4"){
var element = document.getElementById("e16");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e17=="4"){
var element = document.getElementById("e17");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e18=="4"){
var element = document.getElementById("e18");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e21=="4"){
var element = document.getElementById("e21");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}


if (e22=="4"){
var element = document.getElementById("e22");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e23=="4"){
var element = document.getElementById("e23");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e24=="4"){
var element = document.getElementById("e24");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e25=="4"){
var element = document.getElementById("e25");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e26=="4"){
var element = document.getElementById("e26");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e27=="4"){
var element = document.getElementById("e27");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e28=="4"){
var element = document.getElementById("e28");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e29=="4"){
var element = document.getElementById("e29");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e32=="4"){
var element = document.getElementById("e32");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e33=="4"){
var element = document.getElementById("e33");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e36=="4"){
var element = document.getElementById("e36");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e37=="4"){
var element = document.getElementById("e37");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e39=="4"){
var element = document.getElementById("e39");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e41=="4"){
var element = document.getElementById("e41");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e42=="4"){
var element = document.getElementById("e42");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e43=="4"){
var element = document.getElementById("e43");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e44=="4"){
var element = document.getElementById("e44");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e45=="4"){
var element = document.getElementById("e45");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e46=="4"){
var element = document.getElementById("e46");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e48=="4"){
var element = document.getElementById("e48");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e410=="4"){
var element = document.getElementById("e410");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e53=="4"){
var element = document.getElementById("e53");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e54=="4"){
var element = document.getElementById("e54");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e55=="4"){
var element = document.getElementById("e55");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e56=="4"){
var element = document.getElementById("e56");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e57=="4"){
var element = document.getElementById("e57");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e58=="4"){
var element = document.getElementById("e58");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e59=="4"){
var element = document.getElementById("e59");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e510=="4"){
var element = document.getElementById("e510");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e65=="4"){
var element = document.getElementById("e65");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e67=="4"){
var element = document.getElementById("e67");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e68=="4"){
var element = document.getElementById("e68");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e78=="4"){
var element = document.getElementById("e78");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e79=="4"){
var element = document.getElementById("e79");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e710=="4"){
var element = document.getElementById("e710");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e81=="4"){
var element = document.getElementById("e81");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e82=="4"){
var element = document.getElementById("e82");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e83=="4"){
var element = document.getElementById("e83");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e84=="4"){
var element = document.getElementById("e84");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e91=="4"){
var element = document.getElementById("e91");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

if (e92=="4"){
var element = document.getElementById("e92");
element.style.background="#01DF01";
element.style.padding= "8px";
element.style.borderRadius = "25px";
suma=suma+2;
}

//document.getElementById('cambiar').innerHTML ="Porcentaje: "+suma+"%";
</script>

</body>
</html>

<?php
}else{
echo "No puedes ver";
}
?>
