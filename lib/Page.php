<?php

/**
 * Classe que retorna o padrão das estruturas das páginas
 * @version 1.0
 * @author Natanael Macedo
 */

class Page {
    // Variável privada
    private $config;
    
    // Construtor da classe
    public function __construct($config) {
        $this->config = $config;
    }

    // Imprime as informações padrão do cabeçalho
    public function getHead() {
        $html = 
            '<!-- Meta tags -->
            <meta charset="utf-8">
            <meta http-equiv="Content-Language" content="pt-br">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="author" content="'.$this->config->getAuthor().'">
            <meta name="description" content="'.$this->config->getDescription().'">
            <meta name="theme-color" content="'.$this->config->getTheme().'">
            <!-- Título -->
            <title>'.$this->config->getTitle().'</title>
            <!-- Favicon -->
            <link rel="shortcut icon" href="'.$this->config->getFavicon().'">
            <!-- CSS -->
            <link href="assets/css/fontawesome.css" rel="stylesheet" />
            <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" />
            <link href="assets/css/argon-design-system.min.css" rel="stylesheet" />
            <link href="assets/css/theme.css" rel="stylesheet" />';
        echo $html;
    }

    // Imprime o menu lateral
    public function getSidebar($active) {
        $html =
            '<!-- Sidebar -->
            <nav id="sidebar-wrapper" class="bg-default">
                <div class="sidebar-header py-3 px-5">
                    <img class="img-fluid" src="'.$this->config->getLogo().'" />
                </div>
                <ul id="accordionSidebar" class="list-group">
                    <a class="list-group-item text-truncate '.(($active == 'home') ? "active" : "").'" href="home.php">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'dashboard') ? "active" : "").'" href="#">
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'planilhas') ? "active" : "").'" href="planilhas.php">
                        <i class="fas fa-list"></i> Planilhas
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'registros') ? "active" : "").'" href="#">
                        <i class="fas fa-stream"></i> Registros
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'assinaturas') ? "active" : "").'" href="#">
                        <i class="fas fa-clipboard-list"></i> Assinaturas
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'relatorios') ? "active" : "").'" href="#">
                        <i class="fas fa-user"></i> Relatórios
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'melhorias') ? "active" : "").'" href="#">
                        <i class="fas fa-comments"></i> Melhoria Contínua
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'agenda') ? "active" : "").'" href="#">
                        <i class="fas fa-calendar-alt"></i> Agenda
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'backup') ? "active" : "").'" href="#">
                        <i class="fas fa-life-ring"></i> Backup
                    </a>
                    <a class="list-group-item text-truncate '.(($active == 'configuracoes') ? "active" : "").'" href="#">
                        <i class="fas fa-cog"></i> Configurações
                    </a>
                </ul>
            </nav>';
            echo $html;
    }

    // Imprime o cabeçalho da paginas
    public function getNavbar($user) {
        $html =
            '<!-- Navbar -->
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
                                <span class="nav-link-inner--text">'.$user.' <i class="fas fa-chevron-down"></i></span>
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
            </nav>';
        echo $html;
    }

    // Imprime os scripts padrões
    public function getScripts() {
        $html=
            '<!-- Scripts -->
            <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="assets/js/global-funtions.js"></script>';
        echo $html;
    }
}