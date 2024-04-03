<?php
    include("connect.php");

    $rain = isset($_GET["rain"]) ? $_GET["rain"] : null;
    $temp = isset($_GET["temp"]) ? $_GET["temp"] : null;
    $soil = isset($_GET["soil"]) ? $_GET["soil"] : null;
    $hum = isset($_GET["hum"]) ? $_GET["hum"] : null;
    $hindex = isset($_GET["hindex"]) ? $_GET["hindex"] : null;
    $sun = isset($_GET["sun"]) ? $_GET["sun"] : null;

    mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor (rain, temp, soil, hum, hindex, sun) VALUES ('$rain', '$temp', '$soil', '$hum', '$hindex', '$sun')");

    if($simpan) {
        echo "Berhasil Dikirim";
    } else {
        echo "Gagal Terkirim: " . mysqli_error($koneksi);
    }
?>
