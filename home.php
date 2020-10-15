<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="pt-br"><![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html lang="pt-br" class="no-js">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Natanael Macedo">
        <meta name="description" content="Projeto Atak">
        <!-- Título -->
        <title>Projeto Atak</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
        <!-- CSS -->
        <link href="assets/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" />
        <link href="assets/css/argon-design-system.min.css" rel="stylesheet" />
        <link href="assets/css/theme.css" rel="stylesheet" />
    </head>
    <body class="bg-secondary">
        <!-- Page Content -->
        <div id="wrapper" class="d-flex">
            <!-- Sidebar -->
            <nav id="sidebar-wrapper" class="bg-default">
                <div class="sidebar-header py-3 px-5">
                    <img class="img-fluid" src="assets/img/brand/EasyPAC.png" />
                </div>
                <ul id="accordionSidebar" class="list-group">
                    <a class="list-group-item text-truncate active" href="home.php">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                    <a class="list-group-item text-truncate" href="home.php">
                        <i class="fas fa-list"></i> Planilhas
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-stream"></i> Registros
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-clipboard-list"></i> Assinaturas
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-user"></i> Relatórios
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-comments"></i> Melhoria Contínua
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-calendar-alt"></i> Agenda
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-life-ring"></i> Backup
                    </a>
                    <a class="list-group-item text-truncate" href="#">
                        <i class="fas fa-cog"></i> Configurações
                    </a>
                </ul>
            </nav>
            <!-- Content -->
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-light bg-light py-2">
                    <div class="container-fluid">
                        <button id="menu-toggle" class="btn btn-link px-0" href="#">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-list-group list-group list-group-horizontal ml-auto">
                            <li class="navbar-list-group-item navbar-item-dot list-group-item dropdown">
                                <a id="navbar-notification" class="btn btn-link px-2 mr-0" href="#" role="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-notification">
                                    <a class="dropdown-item py-1" href="#"><i>Nova Notificação</i></a>
                                </div>
                            </li>
                            <li class="navbar-list-group-item list-group-item">
                                <a class="btn btn-link px-2 mr-0" href="#" role="button">
                                    <i class="fas fa-question-circle"></i>
                                </a>
                            </li>
                            <li class="navbar-list-group-item list-group-item dropdown">
                                <a id="navbar-user" class="btn btn-link px-2 ml-3 mr-0" href="#" role="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-link-inner--text">Usuário <i class="fas fa-chevron-down"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-user">
                                    <a class="dropdown-item py-1" href="#"><i class="fas fa-user"></i> Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item py-1" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                                </div>
                            </li>
                            <li class="navbar-list-group-item list-group-item">
                                <img class="img-fluid" src="assets/img/theme/user.png" style="height: 43px;" />
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid py-3">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- Menu Péríodo -->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card rounded shadow">
                                        <div class="card-header border-0 bg-white pb-0">
                                            <h5 class="border-bottom border-lighter text-dark"><b>Período</b></h5>
                                            <a href="#"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <ul id="pills-tab" class="nav nav-pills mb-3" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ano</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Semana</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Hoje</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Grafico Bar -->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card rounded shadow">
                                        <div class="card-body">
                                            <h5 class="border-bottom border-lighter text-dark"><b>Checklist x Monitores</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Grafico Dounut -->
                                <div class="col-12 col-lg-6 mb-3">
                                    <div class="card rounded shadow">
                                        <div class="card-body">
                                            <h5 class="border-bottom border-lighter text-dark"><b>Previstos x Realizados</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <div class="card rounded shadow">
                                        <div class="card-body">
                                            <h5 class="border-bottom border-lighter text-dark"><b>Não conformidades</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card rounded shadow">
                                        <div class="card-body">
                                            <h5 class="border-bottom border-lighter text-dark"><b>Checklist em Andamento</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/home.js"></script>
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>