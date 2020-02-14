<?php
function conectarBase($host,$usuario,$clave,$base){

	if (!$enlace = @mysqli_connect($host,$usuario,$clave,$base)){

		return false;
	
	} else{
	
		return $enlace;
	
	}

}

function consultar($enlace,$consulta){

	if (!$datos = @mysqli_query($enlace,$consulta) or @mysqli_num_rows($consulta)<1){
		
		return false; // si fue rechazada la consulta por errores de sintaxis, o ningún registro coincide con lo buscado, devolvemos false

	} else {

		return $datos; // si se obtuvieron datos, los devolvemos al punto en que fue llamada la función
		
	}
}

function tabular($datos){

	// Abrimos la etiqueta table una sola vez:
	$codigo = '<table border="1" cellpadding="3">';

	// Vamos acumulando de a una fila "tr" por vuelta:
	while ( $fila = @mysqli_fetch_array($datos) ){
		
		$codigo .= '<tr>';
		
		// Vamos acumulando tantos "td" como sea necesario:
		$codigo .= '<td>'.utf8_encode($fila["nombre"]).'</td>';
		$codigo .= '<td>'.utf8_encode($fila["equipo"]).'</td>';
		$codigo .= '<td>'.utf8_encode($fila["posicion"]).'</td>';
		$codigo .= '<td>'.utf8_encode($fila["pais"]).'</td>';
	
		// Cerramos un "tr":
		$codigo .= '</tr>';

	}

	// Finalizado el bucle, cerramos por única vez la tabla:
	$codigo .= '</table>';
	
	return $codigo;
	
}

function editarRegistro($datos){
	
	// Extraeremos a $fila el registro:
	if ($fila = mysqli_fetch_array($datos)){
	
		$nombreActual = utf8_encode($fila["nombre"]);
		$equipoActual = utf8_encode($fila["equipo"]);
		$posicionActual = $fila["posicion"]; // La edad es un número
		$paisActual = utf8_encode($fila["pais"]);

		// Aquí acumularemos en $codigo cada dato de $fila ubicado dentro de atributos value de campos
		
		$codigo = '<form action="modificado.php" method="post">
<fieldset><legend>Puede modificar los datos de este registro:</legend>
<p>
<label>Nombre:
<input name="nombre" type="text" value="'.$nombreActual.'">
</label>
</p>
<p>
<label>Equipo:
<input name="apellido" type="text" value="'.$equipoActual.'">
</label>
</p>
<p>
<label>Posicion:
<input name="edad" type="text" value="'.$posicionActual.'">
</label>
</p>
<p>
<label>País:
<input name="pais" type="text" value="'.$paisActual.'">
</label>
</p>
</fieldset>
</form>';

	} else {

		$codigo = false;

	}

	return $codigo;

}
?>