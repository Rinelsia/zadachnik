<?php

// обработка адресной строки
// разделяем строку адреса на составляющие, выбераем путь после '/'
/**
* 
*/
class action
{
	


function urlParse(){
	
	$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	$uri=trim($uri, '/') ? : "index";
	        
	// создаем адресный массив
	$uri_arr = explode('/', $uri);
	$url = $uri_arr["0"];
	$action_arr = array(
		"index" => [
			"1"=>'\..\view/template.php',
		],
	);

	// записываем имя функции. 
	$urls= $action_arr[$url];
	var_dump($uri_arr);
	foreach ($urls as $key => $value) {
		include_once  __DIR__.$value;
	}
}
}

?>