<?php
require_once('og.php');

$graph = OpenGraph::fetch('https://oto.detik.com/catatan-pengendara-mobil/d-5336846/gaib-mobil-tesla-bisa-melihat-hantu-di-kuburan?tag_from=wp_beritautama');    

var_dump($graph);

var_dump($graph->type);

?>