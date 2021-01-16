<?php

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

    setcookie("berita", "", time() - 3600, '/');
?>