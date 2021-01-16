<?php

require_once('og.php');

    $dugaan =$_POST['dugaan'];
    $pro =$_POST['pro'];
    $kontra =$_POST['kontra'];
    $narasi =$_POST['narasi'];
    $sumberPro =$_POST['sumberPro'];
    $desSumberPro =$_POST['desSumberPro'];
    $narasumberPro =$_POST['narasumberPro'];
    $desNarasumberPro =$_POST['desNarasumberPro'];
    $dataPro =$_POST['dataPro'];
    $sumberKon =$_POST['sumberKon'];
    $desSumberKon =$_POST['desSumberKon'];
    $narasumberKon =$_POST['narasumberKon'];
    $desNarasumberKon =$_POST['desNarasumberKon'];
    $dataKon =$_POST['dataKon'];
    $berita = $_COOKIE['berita'];


    echo $berita;
    echo $dataKon."asd";

    $graph = OpenGraph::fetch('https://oto.detik.com/catatan-pengendara-mobil/d-5336846/gaib-mobil-tesla-bisa-melihat-hantu-di-kuburan?tag_from=wp_beritautama');    
    var_dump($graph->keys());
    //var_dump($graph->schema);
    foreach ($graph as $key) {
        echo $key;
    }
?>