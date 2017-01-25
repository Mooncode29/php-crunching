<?php
$string= file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];
$films = $top[1]["im:name"]["label"];

function searchRanking($liste, $film){
	for($i=0; $i<= 100; $i++){
		if($liste[$i]["im:name"]["label"] === $film){
		return ($i+1);
		}
	}
}


