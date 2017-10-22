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

</body>
</html>

<?php
}else{
echo "No puedes ver";
}
?>


