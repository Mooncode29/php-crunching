<?php
$string= file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];
$films = $top[1]["im:name"];

// for($i=1; $i<= 10; $i++){
// 	echo $i.$top[$i]["im:name"]["label"];		
// }
