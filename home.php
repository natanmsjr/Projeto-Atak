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
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                                        Ano
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                        Mês
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                        Semana
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                        Hoje
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart Bar -->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div id="card-chart-bar" class="card rounded shadow">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Checklist x Monitores</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Chart donut -->
                                <div class="col-12 col-lg-6 mb-3">
                                    <div id="card-chart-donut" class="card rounded shadow h-100">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Previstos x Realizados</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                </div>
                                                <div class="col-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chart progress -->
                                <div class="col-12 col-lg-6 mb-3">
                                    <div id="card-chart-progess" class="card rounded shadow h-100">
                                        <div class="card-header bg-white border-0 pb-0">
                                            <h5 class="border-bottom border-lighter"><b>Não conformidades</b></h5>
                                            <a class="card-info text-muted" href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <p class="mb-1"><span class="font-weight-bold">803</span> <small class="text-muted">Linkedin</small></p>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="card-body pt-2">
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
                                            <tbody class="list">
                                                <tr>
                                                    <td>APP003</td>
                                                    <td>Verificação de Higiene Pré-operacional e Operacional</td>
                                                    <td class="text-center">1300</td>
                                                    <td class="text-center">987</td>
                                                </tr>
                                                <tr>
                                                    <td>APP003</td>
                                                    <td>Verificação de Higiene Pré-operacional e Operacional</td>
                                                    <td class="text-center">1300</td>
                                                    <td class="text-center">987</td>
                                                </tr>
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