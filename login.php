<?php
/**
 * Página de Login do sistema
 * @version 1.0
 * @author Natanael Macedo
 */

// Requisita o Autoload
require_once("autoload.php");

// Variáveis necessárias
$session = new Session();
$config = new Configuration();
$page = new Page($config);

// Testa se já existe uma Sessão válida
/*if(!$session->sessionLoggedValid()) {
    $sessio->startSession();
}*/

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
        <div class="container">
            <div class="row shadow-sm my-lg-5">
                <div class="col-12 col-lg-6 theme-login">
                    <div class="row my-6 my-lg-8">
                        <div class="col-12 text-center">
                            <img class="img-fluid d-lg-none" src="assets/img/brand/EasyPAC.png" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 bg-white">
                    <div class="row mt-8">
                        <div class="col-12 offset-lg-2 col-lg-8 text-center mb-3">
                            <h5 class="text-uppercase text-login">Easypac</h5>
                            <small class="text-muted">Bem-vindo! Faça o login em sua conta.</small>
                        </div>
                    </div>
                    <!-- Form Login -->
                    <form id="form-login">
                        <div class="row mb-8">
                            <div class="col-12 offset-lg-2 col-lg-8">
                                <div id="div-feedback-login" class="mb-3"></div>
                                <div id="div-input-user" class="form-group">
                                    <input type="text" class="form-control" id="user" name="user" required />
                                    <label for="user">Usuário</label>
                                </div>
                                <div id="div-input-password" class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" required />
                                    <label for="password">Senha</label>
                                </div>
                                <div class="clearfix my-3">
                                    <div id="div-input-remember" class="custom-control custom-checkbox d-inline float-left">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" />
                                        <label class="custom-control-label" for="remember">Manter conectado</label>
                                    </div>
                                    <div id="div-link-forgot" class="d-inline float-right text-right">
                                        <label><a class="text-reset" href="#" onclick="forgotPassword()">Esqueceu a senha?</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 offset-lg-4 col-lg-4 mt-3">
                                <button type="submit" class="btn btn-default btn-block" id="button-login">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            <small><a class="text-reset" href="#"><sub>Termos de Uso.</sub></a> <a class="text-reset" href="#"><sub>Política de Privacidade.</sub></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=$page->getScripts()?>
        <script type="text/javascript" src="assets/js/<?=basename($_SERVER["PHP_SELF"], ".php")?>.js"></script>
    </body>
</html>