<?php
session_start();

if (isset($_SESSION['username'])){
	
$segundos = time();
$tiempo_transcurrido = $segundos;
$tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ; 
if($tiempo_transcurrido > $tiempo_maximo){
header('location: index.php');
}else{
$_SESSION['inicio'] = time();
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<script type="text/javascript">
suma=0;

function f1(){
suma=suma+2;
alert(suma+"%");
document.getElementById('cambiar').innerHTML ="Porcentaje: "+suma+"%";
}

</script>

<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />

<body>

<nav>
<ul>
<li>FCC</li>
<a href="destruir.php">Cerrar sesion</a>
</ul>
</nav>

<br><br>


<div id="interna">
	
<div id="nomenclatura">
	<h3>Nomenclatura</h3>
	<div id="ap">.</div><label>Materias Aprobadas</label>
	<div id="re">.</div><label>Materias Reprobadas</label>
	<div id="po">.</div><label>Materias por Cursar</label>
	<div id="en">.</div><label>Materias en curso</label><br>
</div><br>

<table id="tabla1" style="overflow-y:scroll">

<tr>
<td><img src="basicas/mate.png" onclick="f1()"></td><td><img src="basicas/cd.png" onclick="f1()"></td>
<td><img src="basicas/ci.png" onclick="f1()"></td><td><img src="basicas/ed.png" onclick="f1()"></td>
<td><img src="basicas/pye.png" onclick="f1()"></td><td><img src="tecnologia/mdr.png" onclick="f1()"></td>
<td><img src="tecnologia/ri.png" onclick="f1()"></td><td><img src="ingenieria/tdc.png" onclick="f1()"></td>
<td></td><td></td>
</tr>

<tr>
<td><img src="basicas/as.png"></td><td><img src="basicas/f1.png"></td>
<td><img src="basicas/f2.png"></td><td><img src="ingenieria/ce.png"></td>
<td><img src="ingenieria/cel.png"></td><td><img src="ingenieria/dd.png"></td>
<td><img src="tecnologia/md.png"></td><td><img src="tecnologia/adr.png"></td>
<td><img src="tecnologia/iysdr.png"></td></td><td>
</tr>

<tr>
<td></td>
<td><img src="basicas/asce.png"></td><td><img src="basicas/md.png"></td><td></td><td></td>
<td><img src="tecnologia/bdi.png"></td><td><img src="ingenieria/adc.png"></td><td></td>
<td><img src="ingenieria/se.png"></td>
</tr>

<tr>
<td><img src="ingenieria/mdlp.png"></td><td><img src="ingenieria/p1.png"></td><td><img src="ingenieria/p2.png"></td>
<td><img src="tecnologia/g.png"></td><td><img src="ingenieria/so1.png"></td><td><img src="ingenieria/so2.png"></td>
<td></td><td><img src="ingenieria/tecia.png"></td><td></td><td><img src="optativa/od.png"></td>
</tr>

<tr>
<td></td><td></td><td><img src="ingenieria/e.png"></td><td><img src="ingenieria/edd.png"></td>
<td><img src="ingenieria/adda.png"></td><td><img src="optativa/adp.png"></td><td><img src="ingenieria/pcp.png"></td>
<td><img src="ingenieria/pda.png"></td><td><img src="ingenieria/ss.png"></td><td><img src="ingenieria/pp.png"></td>
</tr>

<tr>
<td></td><td></td><td></td><td></td><td><img src="ingenieria/is.png"></td><td></td><td><img src="tecnologia/ddaw.png"></td>
<td><img src="ingenieria/ddam.png"></td>
</tr>

<tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><img src="ingenieria/o1.png"></td>
<td><img src="ingenieria/o2.png"></td><td><img src="optativa/pro1.png"></td>
</tr>

</table>
</div>

<br><br>

<table id="tabla2">
<tr>
<td><img src="general/le1.png"></td><td><img src="general/le2.png"></td>
<td><img src="general/le3.png"></td><td><img src="general/le4.png"></td>
</tr>
<tr>
<td><img src="general/FHS.png"></td><td><img src="general/DHPC.png"></td>
</tr>
</table>

<br>
<p id="cambiar">Porcentaje 0%</p>
<!-- ------------------------------------------------------------------------------->
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

//document.getElementById('cambiar').innerHTML ="Porcentaje: "+suma+"%";
</script>
</body>
</html>

<?php
}else{
echo "No puedes ver";
}
?>


