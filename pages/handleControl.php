<?php
    include("connect.php");
    
    $device = $_GET["device"];
    $stat = $_GET["stat"];

    // Menentukan kolom yang sesuai berdasarkan jenis perangkat
    if ($device == "irrigation") {
        $column = "pumpIrrigation";
    } elseif ($device == "misting") {
        $column = "pumpMist";
    } elseif ($device == "heater") {
        $column = "heater";
    } elseif ($device == "lamp") {
        $column = "lamp";
    } else {
        // Jika jenis perangkat tidak dikenali, keluarkan pesan kesalahan
        echo "Error: Unknown device type.";
        exit();
    }

    // Melakukan update berdasarkan status yang diminta
    if ($stat == "On") {
        mysqli_query($koneksi, "UPDATE tb_device SET $column = 1");
        echo "On";
    } else {
        mysqli_query($koneksi, "UPDATE tb_device SET $column = 0");
        echo "Off";
    }
?>
