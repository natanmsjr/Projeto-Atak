<?php
/**
 * Página de inicial da sistema quando logado
 * @version 1.0
 * @author Natanael Macedo
 */

// Requisita o Autoload
require_once("autoload.php");

// Variáveis necessárias
$config = new Configuration();
$page = new Page($config);

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="pt-br"><![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html lang="pt-br" class="no-js">
    <head>
        <?=$page->getHead()?>
    </head>
    <body class="bg-secondary">
        <!-- Page Content -->
        <div id="wrapper" class="d-flex">
            <?=$page->getSidebar(basename($_SERVER["PHP_SELF"], ".php"))?>
            <!-- Content -->
            <div id="page-content-wrapper">
                <?=$page->getNavbar("Carlos")?>
                <div class="container-fluid py-3">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- Card menu -->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div id="card-menu" class="card rounded shadow">
                                        <div class="card-header border-0 bg-white pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Período</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <ul id="pills-tab" class="nav nav-pills" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-year-tab" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="true" onclick="getStatistic('year', true)">Ano</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="false" onclick="getStatistic('month', true)">Mês</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-week-tab" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="false" onclick="getStatistic('week', true)">Semana</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-day-tab" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="false" onclick="getStatistic('today', true)">Hoje</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bar  chart-->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div id="card-bar-chart" class="card rounded shadow">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Checklist x Monitores</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <canvas id="bar-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Donut chart -->
                                <div class="col-12 col-lg-6 mb-3">
                                    <div id="card-donut-chart" class="card rounded shadow h-100">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Previstos x Realizados</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0 px-0">
                                            <canvas id="donut-chart"></canvas>
                                            <div id="donut-chart-percentage" class="text-center">
                                                <div class="donut-chart-percentage-total w-100 mt-3"><strong>38%</strong> realizado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Progress bar -->
                                <div class="col-12 col-lg-6 mb-3">
                                    <div id="card-progress-bar" class="card rounded shadow h-100">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Não conformidades</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div id="card-body-progress-bar" class="card-body pt-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List -->
                        <div class="col-12 col-lg-6 mb-3">
                            <div id="card-checklist" class="card rounded shadow h-100">
                                <div class="card-header bg-white border-0 pb-0">
                                    <h5 class="border-bottom border-lighter"><b>Checklist em Andamento</b></h5>
                                    <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                </div>
                                <div id="card-body-checklist" class="card-body pt-2">
                                    <div class="table-responsive">
                                        <table id="card-checklist-table" class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Código</th>
                                                    <th scope="col">Planilha</th>
                                                    <th class="text-center" scope="col">Previstos</th>
                                                    <th class="text-center" scope="col">Realizados</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-checklist" class="list">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <?=$page->getScripts()?>
        <script type="text/javascript" src="assets/js/<?=basename($_SERVER["PHP_SELF"], ".php")?>.js"></script>
    </body>
</html>