<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
echo "Le dictionnaire contient ".count($dico)." "."mots";
$compteur = 0;
foreach($dico as $value){
	$wordLength = strlen($value);
	if($wordLength === 15){
		$compteur++;
	};
}
echo "le dico contient"."\n".$compteur."\n"."mots de 15 caractères";


