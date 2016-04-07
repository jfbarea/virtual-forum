<html>
<head></head>
<body>

<form action="guardar_datos.php" method="post" class="formulario" enctype="multipart/form-data">

	<input name="id" id="id" type="hidden" value="1" />
	<input name="articleid" id="articleid" type="hidden" value="6" />
	<input type="hidden" name="MAX_FILE_SIZE" value="0" />
	<input name="condiciones" id="condiciones" type="hidden" value="Aceptadas4ee127a3e0c5d2.02961446" />

	<label class="etiqueta" id="NOMBRElbl" for="NOMBRE"> Nombre<sup style="color:red;">*</sup>:</label>
	<input type="text" class="cuadrotexto" name="nombre" value=""  title="" />
	<!--<p class="salto" />-->
	&nbsp;
	<label class="etiqueta" id="APELLIDOSlbl" for="APELLIDOS"> Apellidos<sup style="color:red;">*</sup>:</label>
	<input type="text" class="cuadrotexto" name="apellidos" value="" title="" />
	<label class="etiqueta" id="DNIbl" for="DNI"> DNI<sup style="color:red;">*</sup>:</label>
	<input type="text" class="cuadrotexto" name="dni" value="" title="" />
	<p class="salto" />

	<!--<p class="salto" />-->

	<p class="salto" />

	<label class="etiqueta" id="ESTUDIOSlbl" for="centro"> Centro<sup style="color:red;">*</sup>:</label>
	<select name="centro" size="" >
		<option value="-1"></option>
		<option value="ETSI_Aeronautica_y_del_Espacio">ETSI Aerona&uacute;tica y del Espacio</option>
		<option value="ETSI_Montes_Forestal_y_del_Medio_Natural">ETSI Montes, Forestal y del Medio Natural</option>
		<option value="ETS_de_Arquitectura">ETS de Arquitectura</option>
		<option value="ETSI_Aeronauticos">ETSI Aeron&aacute;uticos</option>
		<option value="ETSI_Agronomos">ETSI Agr&oacute;nomos</option>
		<option value="ETSI_Caminos_Canales_y_Puertos">ETSI Caminos, Canales y Puertos</option>
		<option value="ETSI_Montes">ETSI Montes</option>
		<option value="ETSI_Navales">ETSI Navales</option>
		<option value="ETSI_Telecomunicacion">ETSI Telecomunicaci&oacute;n</option>
		<option value="Facultad_de_Ciencias_de_la_Actividad_Fisica_y_del_Deporte_INEF">Facultad de Ciencias de la Actividad F&iacute;sica y del Deporte (INEF)</option>
		<option value="ETS_de_Edificacion">ETS de Edificaci&oacute;n</option>
		<option value="EUIT_Aeronautica">EUIT Aeron&aacute;utica</option>
		<option value="EUIT_Agricola">EUIT Agr&iacute;cola</option>
		<option value="EUIT_Forestal">EUIT Forestal</option>
		<option value="Centro_de_Investigacion_del_Transporte_TRANSyT">Centro de Investigaci&oacute;n del Transporte (TRANSyT)</option>
		<option value="Centro_de_Estudios_e_Inv_para_la_Gestion_de_Riesgos_Agrarios_y_Medioamb">Centro de Estudios e Inv. para la Gesti&oacute;n de Riesgos Agrarios y Medioamb.</option>
		<option value="Instituto_de_Sistemas_Optoelectronicos_y_Microtecnologia">Instituto de Sistemas Optoelectr&oacute;nicos y Microtecnolog&iacute;a</option>
		<option value="Instituto_de_Energia_Solar">Instituto de Energ&iacute;a Solar</option>
		<option value="Instituto_de_Ciencias_de_la_Educacion_ICE">Instituto de Ciencias de la Educaci&oacute;n (ICE)</option>
		<option value="Centro_de_Materiales_y_Dispositivos_Avanzados_para_TIC_CEMDATIC">Centro de Materiales y Dispositivos Avanzados para TIC (CEMDATIC)</option>
		<option value="ETSI_Industriales">ETSI Industriales</option>
		<option value="ETSI_de_Minas_y_Energia">ETSI de Minas y Energ&iacute;a</option>
		<option value="ETSI_Diseno_Industrial">ETSI Dise&#241;o Industrial</option>
		<option value="ETSI_Civil">ETSI Civil</option>
		<option value="Centro_de_Electronica_Industrial_CEI">Centro de Electr&oacute;nica Industrial (CEI)</option>
		<option value="Instituto_de_Fusion_Nuclear">Instituto de Fusi&oacute;n Nuclear</option>
		<option value="Centro_de_Automatica_y_Robotica_CAR_Centro_Mixto_UPM-CSIC">Centro de Autom&aacute;tica y Rob&oacute;tica (CAR). Centro Mixto UPM-CSIC</option>
		<option value="ETS_de_Ingenieros_Informaticos">ETS de Ingenieros Inform&aacute;ticos</option>
		<option value="Centro_domotica_Integral_CEDINT">Centro dom&oacute;tica Integral (CEDINT)</option>
		<option value="Centro_de_Inv_en_Biotecnologia_y_Genomica_de_Plantas_CBGP">Centro de Inv. en Biotecnolog&iacute;a y Gen&oacute;mica de Plantas (CBGP)</option>
		<option value="Insituto_de_Microgravedad_Ignacio_Da_Riva">Insituto de Microgravedad "Ignacio Da Riva"</option>
		<option value="E_USOC">E-USOC</option>
		<option value="CESVIMA">CESVIMA</option>
		<option value="ETSI_en_Topografia_Geodesia_y_Cartografia">ETSI en Topograf&iacute;a, Geodesia y Cartograf&iacute;a</option>
		<option value="ETSI_de_Sistemas_Informaticos">ETSI de Sistemas Inform&aacute;ticos</option>
		<option value="ETSI_y_Sistemas_de_Telecomunicacion">ETSI y Sistemas de Telecomunicaci&oacute;n</option>
		<option value="Centro_Laser">Centro L&aacute;ser</option>
		<option value="Instituto_de_Investigacion_del_Automovil">Instituto de Investigaci&oacute;n del Autom&oacute;vil</option>
		<option value="Centro_de_Investigacion_en_Tecnologias_del_SW_y_Sist_Multimedia_CITSEM">Centro de Investigaci&oacute;n en Tecnolog&iacute;as del SW y Sist. Multimedia (CITSEM)</option>
		<option value="Centro_Superior_de_Diseno_de_Moda_de_Madrid">Centro Superior de Dise&#241;o de Moda de Madrid</option>
		<option value="Facultad_de_Bellas_Artes">Facultad de Bellas Artes</option>
		<option value="Facultad_de_Ciencias_Biologicas">Facultad de Ciencias Biol&oacute;gicas</option>
		<option value="Facultad_de_Ciencias_de_la_Documentacion">Facultad de Ciencias de la Documentaci&oacute;n</option>
		<option value="Facultad_de_Ciencias_de_la_Informacion">Facultad de Ciencias de la Informaci&oacute;n</option>
		<option value="Facultad_de_Ciencias_Economicas_y_Empresariales">Facultad de Ciencias Econ&oacute;micas y Empresariales</option>
		<option value="Facultad_de_Ciencias_Fisicas">Facultad de Ciencias F&iacute;sicas</option>
		<option value="Facultad_de_Ciencias_Geologicas">Facultad de Ciencias Geol&oacute;gicas</option>
		<option value="Facultad_de_Ciencias_Matematicas">Facultad de Ciencias Matem&aacute;ticas</option>
		<option value="Facultad_de_Ciencias_Politicas_y_Sociologia">Facultad de Ciencias Pol&iacute;ticas y Sociolog&iacute;a</option>
		<option value="Facultad_de_Ciencias_Quimicas">Facultad de Ciencias Qu&iacute;micas</option>
		<option value="Facultad_de_Comercio_y_Turismo">Facultad de Comercio y Turismo</option>
		<option value="Facultad_de_Derecho">Facultad de Derecho</option>
		<option value="Facultad_de_Educacion_Centro_de_Formacion_del_Profesorado">Facultad de Educaci&oacute;n � Centro de Formaci&oacute;n del Profesorado</option>
		<option value="Facultad_de_Enfermeria_Fisioterapia_y_Podologia">Facultad de Enfermer&iacute;a, Fisioterapia y Podolog&iacute;a</option>
		<option value="Facultad_de_Estudios_Estadisticos">Facultad de Estudios Estad&iacute;sticos</option>
		<option value="Facultad_de_Farmacia">Facultad de Farmacia</option>
		<option value="Facultad_de_Filologia">Facultad de Filolog&iacute;a</option>
		<option value="Facultad_de_Filosofia">Facultad de Filosof&iacute;a</option>
		<option value="Facultad_de_Geografia_e_Historia">Facultad de Geograf&iacute;a e Historia</option>
		<option value="Facultad_de_Informatica">Facultad de Inform&aacute;tica</option>
		<option value="Facultad_de_Medicina">Facultad de Medicina</option>
		<option value="Facultad_de_Odontologia">Facultad de Odontolog&iacute;a</option>
		<option value="Facultad_de_optica_y_Optometria">Facultad de &oacute;ptica y Optometr&iacute;a</option>
		<option value="Facultad_de_Psicologia">Facultad de Psicolog&iacute;a</option>
		<option value="Facultad_de_Trabajo_Social">Facultad de Trabajo Social</option>
		<option value="Facultad_de_Veterinaria">Facultad de Veterinaria</option>
		<option value="Otros_Centros">Otros Centros</option>
	</select>
	<p class="salto" />


	<!--<p class="salto" />-->

	<p class="salto" />
	<br>


	<label class="etiqueta" id="ficherolbl" for="fichero"> Curr&iacute;culum (CV)<sup style="color:red;">*</sup>:</label>
	<input name="fichero" type="file"/>
	<P style="font-size:10px;margin-left:120px;margin-top:0px;">Archivo en PDF, m&aacute;ximo 3MB </p>
	<p class="salto" />
	<P style="font-size:10px;margin-top:0px;">Los campos marcados con * son obligatorios</p>

	<hr>
<!--
	<p>
	Empresas a las que desea enviar su CV:
	</p>

	<label class="etiqueta" id="ficherolbl" for="amadeus">Amadeus</label><input type="checkbox" name="amadeus" value="amadeus">
	<label class="etiqueta" id="ficherolbl" for="ibermatica">Iberm&aacute;tica</label><input type="checkbox" name="ibermatica" value="ibermatica">
	<label class="etiqueta" id="ficherolbl" for="intalentia">Intalentia</label><input type="checkbox" name="intalentia" value="intalentia">
	<label class="etiqueta" id="ficherolbl" for="sisteplant">Sisteplant</label><input type="checkbox" name="sisteplant" value="sisteplant">
	<label class="etiqueta" id="ficherolbl" for="trazos">Trazos</label><input type="checkbox" name="trazos" value="trazos">
	<label class="etiqueta" id="ficherolbl" for="hp">HP</label><input type="checkbox" name="hp" value="hp">
	<label class="etiqueta" id="ficherolbl" for="kpmg">KPMG</label><input type="checkbox" name="kpmg" value="kpmg">
-->
	<div class="randomtext "><p> </p>
		<br>
		<p style="text-align: center;">Al pulsar el bot&oacute;n Enviar acepta las
		<a class="caption" href="condiciones.html" style="color:white;" target="_blank" title="Condiciones Competici&oacute;n Ingenier&iacute;a BEST-Madrid">condiciones de uso de este servicio
		</a>
		</p>
	</div>

	<div class="btnenviar">
		<input name="submit_bt" id="submit_bt" type="submit" value="ENVIAR"  />
	</div>
</form>

<style>

.btnenviar
{
	text-align:center;
}

.randomtext
{
	font-family: arial;
	font-size:12px;
}

.etiqueta
{
	font-family:arial;
}

.formulario
{
	background-color: rgba(0, 0, 0, 0.7);
	padding:50px;
	padding-left:80px;
	width:660px;
	color:white;
}

.cuadrotexto
{

	border: 1px solid;
	border-color: grey;
}


</style>
</body>
</html>
