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
$rutacvs = 'cvs';
//if(!empty($_POST['amadeus'])){$amadeus = $_POST['amadeus'];}else{$amadeus = '';}
//if(!empty($_POST['ibermatica'])){$ibermatica = $_POST['ibermatica'];}else{$ibermatica = '';}
//if(!empty($_POST['intalentia'])){$intalentia = $_POST['intalentia'];}else{$intalentia = '';}
//if(!empty($_POST['sisteplant'])){$sisteplant = $_POST['sisteplant'];}else{$sisteplant = '';}
//if(!empty($_POST['trazos'])){$trazos = $_POST['trazos'];}else{$trazos = '';}
//if(!empty($_POST['hp'])){$hp = $_POST['hp'];}else{$hp = '';}
//if(!empty($_POST['kpmg'])){$kpmg = $_POST['kpmg'];}else{$kpmg = '';}
//$ibermatica = $_POST['ibermatica'];
//$intalentia = $_POST['intalentia'];
//$sisteplant = $_POST['sisteplant'];
//$trazos = $_POST['trazos'];
//$hp = $_POST['hp'];

//Variables para subir el fichero del CV
$destino = 'cvs';
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
else
{
	//alimentamos el generador de aleatorios
	mt_srand (time());
	//generamos un número aleatorio
	$numero_aleatorio = mt_rand(0,10); 
	//$nombre_a_subir = $numero_aleatorio . $fichero;
	$nombre_a_subir = $nombre .' '. $apellidos . '.pdf';
	
	copy( $_FILES [ 'fichero' ][ 'tmp_name' ], $destino . '/' . $centro . '/' . $nombre_a_subir);
	echo "<p>Subido correctamente</p>";
}	



?>

	<br>
     <a href = "https://www.forumbestmadrid.org/subidaCV/formularioweb.php"> Volver atr&aacute;s </a>
  </p>
</div>

