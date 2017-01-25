<?php
require 'films.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste Films</title>
</head>
<body>
	<h1>Liste des Films</h1>
	<h2>Les Top 10</h2>
	<ul>
	<?php for($i=1; $i<= 10; $i++):?>
	<li><?= $i." ".$top[$i]["im:name"]["label"];?></li>
<?php endfor; ?></ul>
</body>
</html>