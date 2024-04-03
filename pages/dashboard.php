<?php
    include("realTimeStat.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Horangie Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="../js/handleOnOff.js"></script> -->
    <script src="../js/threshold.js"></script>
    <script src="../js/cekdata.js"></script>
    <script src="../js/handlechart.js"></script>
    <script src="../js/handleStatus.js"></script>

    


    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Horangie Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/dashboard.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Enroll</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Check UID</span>
                    </a>
                </li>
        </div>
        <div class="mt-2 mb-5 d-flex">
            <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Soil Moisture</p>
                                        <h2 class="font-weight-bolder mt-2">
                                            <span id="ceksoil"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Air Temperature</p>
                                        <h2 class="font-weight-bolder mt-2">
                                            <span id="cektemp"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Air Humidity</p>
                                        <h2 class="font-weight-bolder mt-2">
                                            <span id="cekhum"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold" id="title"></p>
                                        <h2 class="font-weight-bolder mt-2 d-none" id="ceksun"></h2>
                                        <h2 class="font-weight-bolder mt-2 d-none" id="cekhindex"></h2>
                                        <h2 class="font-weight-bolder mt-2 d-none" id="cekrain"></h2>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-primary" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-list"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="showValue('ceksun', 'Sunlight')">Sunlight</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="showValue('cekhindex', 'Heat Index')">Heat Index</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="showValue('cekrain', 'Rain Intensity')">Rain Intensity</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <div class="card z-index-3 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-top">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark">Weekly</h6>
                                            <span class="text-xs" id="selected-option-label"></span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-list"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Soil Moisture')">Soil Moisture</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Air Temperature')">Air Temperature</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Air Humidity')">Air Humidity</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Sunlight')">Sunlight</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Heat Index')">Heat Index</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateChart('Rain Intensity')">Rain Intensity</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-top">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark">Daily</h6>
                                            <span class="text-xs" id="selected-option-label"></span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary" type="button" id="dailyDropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-list"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dailyDropdownMenuButton">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Soil Moisture')">Soil Moisture</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Air Temperature')">Air Temperature</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Air Humidity')">Air Humidity</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Sunlight')">Sunlight</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Heat Index')">Heat Index</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateDailyChart('Rain Intensity')">Rain Intensity</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="dailyChartCanvas" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 mb-lg-0 mb-3">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Threshold</h6>
                        </div>
                        <ul class="list-group p-3 pt-0 pb-0">
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Irrigation Pump</h6>
                                        <p id="rangeValue1" class="float-end mb-0"><span id="posIrrPump"><?php echo $irrPump_threshold ?></span></p>
                                    </div>
                                </div>
                                <div class="d-flex col-lg-9">
                                    <input type="range" class="form-range p-1 mt-3" min="0" max="100" step="1"
                                        id="customRange1" value="<?php echo $irrPump_threshold ?>" onchange="thrIrrPump(this.value)">
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Misting Pump</h6>
                                        <p id="rangeValue2" class="float-end mb-0"><span id="posMistPump"><?php echo $mistPump_threshold ?></span></p>
                                    </div>
                                </div>
                                <div class="d-flex col-lg-9">
                                    <input type="range" class="form-range p-1 mt-3" min="0" max="100" step="1" id="customRange2" value="<?php echo $mistPump_threshold ?>" onchange="thrMistPump(this.value)">
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Heater</h6>
                                        <p id="rangeValue3" class="float-end mb-0"><span id="posHeater"><?php echo $heater_threshold ?></span></p>
                                    </div>
                                </div>
                                <div class="d-flex col-lg-9">
                                    <input type="range" class="form-range p-1 mt-3" min="0" max="100" step="1" id="customRange3" value="<?php echo $heater_threshold ?>" onchange="thrHeater(this.value)">
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Lamp</h6>
                                        <p id="rangeValue4" class="float-end mb-0"><span id="posLamp"><?php echo $lamp_threshold ?></span></p>
                                    </div>
                                </div>
                                <div class="d-flex col-lg-9">
                                    <input type="range" class="form-range p-1 mt-3" min="0" max="100" step="1" id="customRange4" value="<?php echo $lamp_threshold ?>" onchange="thrLamp(this.value)">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="card-body px-4 pt-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mt-1 mb-3 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $statIrr == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="statIrr">
                                            <i class="ni ni-mobile-button text-white opacity-10"></i>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $statMist == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="statMist">
                                            <i class="ni ni-tag text-white opacity-10"></i>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $statHeater == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> text-center" id="statHeater">
                                            <i class="ni ni-box-2 text-white opacity-10"></i>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $statLamp == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> text-center" id="statLamp">
                                            <i class="ni ni-satisfied text-white opacity-10"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Manual Control</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $irrPump == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="irrigationIcon">
                                            <i class="ni ni-mobile-button text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Irrigation Pump</h6>
                                            <span class="text-xs"><span id="statusIrrPump"><?php echo $irrPump == 1 ? "On" : "Off"; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckIrrigation" onchange="swapIrrPump(this.checked)" <?php echo $irrPump == 1 ? "checked" : ""; ?>>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $mistPump == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="mistingIcon">
                                            <i class="ni ni-tag text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Misting Pump</h6>
                                            <span class="text-xs"><span id="statusMistingPump"><?php echo $mistPump == 1 ? "On" : "Off"; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckMisting" onchange="swapMistingPump(this.checked)" <?php echo $mistPump == 1 ? "checked" : ""; ?>>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $heater == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="heaterIcon">
                                            <i class="ni ni-box-2 text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Heater</h6>
                                            <span class="text-xs"><span id="statusHeater"><?php echo $heater == 1 ? "On" : "Off"; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckHeater" onchange="swapHeater(this.checked)" <?php echo $heater == 1 ? "checked" : ""; ?>>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 <?php echo $lamp == 1 ? 'bg-success' : 'bg-gradient-dark'; ?> shadow text-center" id="lampIcon">
                                            <i class="ni ni-satisfied text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Lamp</h6>
                                            <span class="text-xs"><span id="statusLamp"><?php echo $lamp == 1 ? "On" : "Off"; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckLamp" onchange="swapLamp(this.checked)" <?php echo $lamp == 1 ? "checked" : ""; ?>>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Restart</h6>
                        </div>
                        <div class="card-body p-4 mt-2">
                            <ul class="list-group">
                                <li class="list-group-item border-0 mb-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 mt-0 text-dark text-sm">Wifi Credential</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 mb-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary">Restart</button>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 mb-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Microcontroller</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 mb-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary">Restart</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-1  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Horangie
                                Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>



    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>

    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>

</body>

</html>