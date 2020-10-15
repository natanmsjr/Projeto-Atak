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
        <!-- Scripts -->
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/login.js"></script>
    </body>
</html>