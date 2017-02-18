<?php
	#Conexión a Base de Datos
	$bd_host = "localhost";   
	$bd_usuario = "admin";   
	$bd_clave = "*******";   
	$bd_datos = "leybook"; 

	$conexion = mysql_connect($bd_host, $bd_usuario, $bd_clave);   
	mysql_select_db($bd_datos, $conexion); 

	sleep(2);
	ini_set('max_execution_time', 2000);
	for ($i=1701; $i <= 1800; $i++) {
	    $no = $i.'/pdf';
	    $url = 'https://www.leybook.com/doc/'.$no;
	    $url2 = file_get_contents('https://www.leybook.com/doc/'.$i);

	    if($url2){
		    preg_match_all("'<strong>(.*?)</strong>'si", $url2, $info, PREG_PATTERN_ORDER);

		    $titulo = utf8_decode(trim(strip_tags($info[0][0])));
		    $materia = utf8_decode(trim(strip_tags($info[0][1])));
		    $rango = utf8_decode(trim(strip_tags($info[0][2])));
		    $numero = trim(strip_tags($info[0][3]));
		    $aprobado = str_replace("/","", trim(strip_tags($info[0][5])));
		    $publicado = str_replace("/","", trim(strip_tags($info[0][6])));

		    #Guardar Leyes PDF en C:/LeyBook/
		    $pdf = file_get_contents($url);
		    file_put_contents('C:/LeyBook/'.$i.'_'.$materia.'_'.$rango.'_'.$numero.'_'.$aprobado.'_'.$publicado.'.pdf', $pdf);

		    echo 'Se ha descargado Ley Book #'.$i.' '.utf8_encode($materia).' '.utf8_encode($rango).'<br>';		

		   	$query = "INSERT INTO libros (codigo, titulo, materia, rango, numero, aprobado, publicado) VALUES ('.$i.', '$titulo', '$materia', '$rango', '$numero', '$aprobado', '$publicado')";
			$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		}
		else{
			echo 'No Existe Ley Book #'.$i.'<br>';
		}
	}
?>
