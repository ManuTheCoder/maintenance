<?php
header("Content-Type: application/json");
define("cardCount", 10);
$db = json_decode(file_get_contents("db.json"));
$db_keys = array_rand($db, cardCount);
$suggested=[];

foreach($db_keys as $key) {
	 $suggested[] = array_values($db)[$key]; 
	}
echo json_encode($suggested, (isset($_GET['pretty']) ? JSON_PRETTY_PRINT:null));
?>