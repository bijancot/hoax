<?php
$graph = OpenGraph::fetch('https://oto.detik.com/catatan-pengendara-mobil/d-5336846/gaib-mobil-tesla-bisa-melihat-hantu-di-kuburan?tag_from=wp_beritautama');    
var_dump($graph->keys());
//var_dump($graph->schema);
foreach ($graph as $key) {
    echo $key[0];
}

?>