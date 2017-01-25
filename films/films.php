<?php
$string= file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];
$films = $top[1]["im:name"]["label"];

function searchRanking($film, $liste){
	foreach($liste as $key => $value){
		if($value["im:name"]["label"] === $film){
			return ($key+1);
		}
	}
}
function searchDirector($director, $liste){
	foreach ($liste as $key => $value) {
		if($value["im:name"]["label"] === $director){
			return($value["im:artist"]["label"]);
		}
	}
}

