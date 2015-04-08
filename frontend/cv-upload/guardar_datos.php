<script type="text/javascript" src="../js/funciones.js" ></script>
<script type="text/javascript" src="../js/hover.js" ></script>

<div style = "width:600px;height:450px;margin:auto;text-align:center;border:0px solid;
              background-image: url(../images/f_up_ok.png);background-repeat:no-repeat;
               font-family:arial;">
	<br>
     <br>
     <br>
     <br>
     <br>
     <br>
   <p style="text-align:center;">
<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$centro = $_POST['centro'];

if(!empty($_POST['amadeus'])){$amadeus = $_POST['amadeus'];}else{$amadeus = '';}
if(!empty($_POST['ibermatica'])){$ibermatica = $_POST['ibermatica'];}else{$ibermatica = '';}
if(!empty($_POST['intalentia'])){$intalentia = $_POST['intalentia'];}else{$intalentia = '';}
if(!empty($_POST['sisteplant'])){$sisteplant = $_POST['sisteplant'];}else{$sisteplant = '';}
if(!empty($_POST['trazos'])){$trazos = $_POST['trazos'];}else{$trazos = '';}
if(!empty($_POST['hp'])){$hp = $_POST['hp'];}else{$hp = '';}
if(!empty($_POST['kpmg'])){$kpmg = $_POST['kpmg'];}else{$kpmg = '';}
//$ibermatica = $_POST['ibermatica'];
//$intalentia = $_POST['intalentia'];
//$sisteplant = $_POST['sisteplant'];
//$trazos = $_POST['trazos'];
//$hp = $_POST['hp'];

//Variables para subir el fichero del CV
$destino = '../cvs/';
$tamano = $_FILES [ 'fichero' ][ 'size' ];    //tamaño
$fichero = $_FILES [ 'fichero'] ['name'];     //nombre
$tipo_archivo = $_FILES ['fichero'] ['type']; //tipo

//comprobacion de los datos recibidos
if( ($nombre == '') || ($apellidos == '')||
  ($centro == '')|| ($fichero == '')) //ver si todos los campos están rellenos
{
	echo '<h2>Debe rellenar todos los campos marcados con *</h2>';
}

else if( $tamano > 3145728) //Tamaño mayor de 3 MB
{	
	echo "<h2>El tama&#241;o es superior al permitido (3MB)</h2>" ;
}
else if( !strpos($tipo_archivo,"pdf")) //El archivo no es un pdf
{
    echo "<h2>El archivo tiene que tener formato pdf</h2>";
}
else
{
	//alimentamos el generador de aleatorios
	mt_srand (time());
	//generamos un número aleatorio
	$numero_aleatorio = mt_rand(0,10); 
	//$nombre_a_subir = $numero_aleatorio . $fichero;
	$nombre_a_subir = $nombre .' '. $apellidos . '.pdf';

if(!$amadeus == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $amadeus . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a Amadeus</p>";
}	

if(!$ibermatica == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $ibermatica . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a Iberm&aacute;tica</p>";
}	

if(!$intalentia == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $intalentia . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a Intalentia</p>";
}	

if(!$sisteplant == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $sisteplant . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a Sisteplant</p>";
}	

if(!$trazos == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $trazos . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a Trazos</p>";
}	

if(!$hp == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $hp . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a HP</p>";
}	

if(!$kpmg == '')
{	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . $kpmg . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido a KPMG</p>";
}	
	echo "<h1>&#161;Enhorabuena&#33;</h1>";
	echo "<h2>&#161;Archivo subido&#33;</h2>";
}

?>

	<br>
     <a href = "../index.php"> Volver atr&aacute;s </a>
  </p>
</div>

