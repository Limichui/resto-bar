<?php 
function caracteresEspeiales($cadena){
	$buscar = array("Ã¡", "Ã©", "Ã­", "Ã³", "Ãº", "Ã±", "ü", "Ã", "Ã‰", "Ã", "Ã“", "Ãš", "Ã‘", "ü", "Â°"); 
	$remplazo = array("á", "é", "í", "ó", "ú", "ñ", "ü", "Á", "É", "Í", "Ó", "Ú", "Ñ", "Ü", "°");
	$cambiado = str_replace($buscar, $remplazo, $cadena);
	return $cambiado;
}
function randon($n){
	$characters = array(
	"a","b","c","d","e","f","g","h","i","j","k","l","m",
	"n","o","p","q","r","s","t","u","v","w","x","y","z",
	"0","1","2","3","4","5","6","7","8","9");
	$keys = array();
	while(count($keys) < $n) {
		$x = mt_rand(0, count($characters)-1);
		if(!in_array($x, $keys)) {
		   $keys[] = $x;
		}
	}
	$random_chars = "";
	foreach($keys as $key){
	   $random_chars .= $characters[$key];
	}
	return $random_chars;	
}
function randonNumero($n){
	$characters = array("0","1","2","3","4","5","6","7","8","9");
	$keys = array();
	while(count($keys) < $n) {
		$x = mt_rand(0, count($characters)-1);
		if(!in_array($x, $keys)) {
		   $keys[] = $x;
		}
	}
	$random_chars = "";
	foreach($keys as $key){
	   $random_chars .= $characters[$key];
	}
	return $random_chars;	
}
function TamanoArchivo($peso , $decimales = 2 ) {
	$clase = array(" Bytes", " KB", " MB", " GB", " TB"); 
	return round($peso/pow(1024,($i = floor(log($peso, 1024)))),$decimales ).$clase[$i];
}
function CambiaAcentos($cadecambia) {
	$buscar = array('\"', "\'","'","\\\\",'"');
	$remplazo = array('&quot;',"&#39;", "&#39;","&#92;","&quot;");
	$cambiado = str_replace($buscar, $remplazo, $cadecambia);
	return $cambiado;
}
function Mayusculas($cadecambia){
	$buscar = array("á", "é", "í", "ó", "ú", "ñ", "ü"); 
	$remplazo = array("Á", "É", "Í", "Ó", "Ú", "Ñ", "Ü");
	$cambiado = str_replace($buscar, $remplazo, $cadecambia);
	return $cambiado;
}
function ContadorPaginasPdf($archivoPDF){
	$stream = fopen($archivoPDF, "r");
	$content = fread ($stream, filesize($archivoPDF));
	if(!$stream || !$content) return 0;
 	$count = 0;
 	$regex  = "/\/Count\s+(\d+)/";
	$regex2 = "/\/Page\W*(\d+)/";
	$regex3 = "/\/N\s+(\d+)/";
 	if(preg_match_all($regex, $content, $matches)) $count = max($matches);
 	return $count[0];
}
function download_file($archivo, $downloadfilename = null) {
    if (file_exists($archivo)) {
        $downloadfilename = $downloadfilename !== null ? $downloadfilename : basename($archivo);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $downloadfilename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($archivo));
        ob_clean();
        flush();
        readfile($archivo);
        exit;
    }
}
function ElimimarArchivosTemparales(){
	$captchaFolder='temporales/*' ;
	$expire_time=1440 ; // 1440 es un dia
	foreach(glob($captchaFolder) as $Filename){
    	$FileCreationTime=filectime($Filename) ;
    	$FileAge=time() - $FileCreationTime ; 
    	if($FileAge > ($expire_time)){
        	unlink($Filename);
		}
	} 
}
?>