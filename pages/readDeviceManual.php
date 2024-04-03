<?php
    include("connect.php");

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_device");

    $data = mysqli_fetch_array($sql);
    $deviceStat = array(
        'pumpIrrigationStat' => $data["pumpIrrigation"],
        'pumpMistStat' => $data["pumpMist"],
        'heaterStat' => $data["heater"],
        'lampStat' => $data["lamp"]
    );

    echo json_encode($deviceStat);
?>
