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
                        <!-- List -->
                        <div class="col-12 mb-3">
                            <h3>Planilhas</h3>
                            <div class="row">
                                <div class="col-12 col-lg-6 order-last order-lg-first">
                                    <p class="py-2 mb-0">Lista de Planilhas: <span class="total">12</span> resultados encontrados</p>
                                </div>
                                <div class="col-12 col-lg-6 order-first order-lg-last">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 pr-lg-0 mb-3 mb-lg-0">
                                            <button class="btn btn-default btn-block"><i class="fas fa-plus-circle"></i> Criar nova planilha</button>
                                        </div>
                                        <div class="col-12 col-lg-7 mb-3 mb-lg-0">
                                            <form id="form-search-list" class="form-inline">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="search-list" name="search" placeholder="Pesquisa..." required />
                                                    <button id="button-search-list" type="submit" class="btn btn-link text-default"><i class="fas fa-filter fa-lg"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-1 border-light" />
                        </div>
                        <div class="col-12 mb-3">
                            <div class="table-responsive">
                                <table id="table-planilhas" class="table table-hover table-striped table-bordered mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Código</th>
                                            <th scope="col">Descrição</th>
                                            <th class="text-center" scope="col">Versão</th>
                                            <th class="text-center" scope="col">Data Cadastro</th>
                                            <th class="text-center" scope="col">Tipo Apontamento</th>
                                            <th class="text-center" scope="col">Situação</th>
                                            <th class="text-center" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr id="table-planilhas-tr-0">
                                            <td>AAA001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(0)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(0)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-1">
                                            <td>BBB001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(1)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(1)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-2">
                                            <td>CCC001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(2)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(2)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-3">
                                            <td>AAA001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(3)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(3)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-4">
                                            <td>BBB001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(4)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(4)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-5">
                                            <td>CCC001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(5)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(5)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-6">
                                            <td>AAA001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(6)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(6)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-7">
                                            <td>BBB001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(7)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(7)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-8">
                                            <td>CCC001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(8)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(8)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-9">
                                            <td>AAA001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(9)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(9)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-10">
                                            <td>BBB001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(10)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(10)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="table-planilhas-tr-11">
                                            <td>CCC001</td>
                                            <td>Nononoo nonono nnnoooo nononnnooo nonono noo</td>
                                            <td class="text-center">1.0</td>
                                            <td class="text-center">01/01/2020</td>
                                            <td class="text-center">Dia/Turno</td>
                                            <td class="text-center">Ativo</td>
                                            <td class="text-center">
                                                <a class="text-reset px-1" href="javascript:void(0)" onclick="editRegister(11)"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>
                                                <a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(11)"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="pagination-planilhas" class="col-12 bg-white border py-2 mb-3">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                        <form id="form-pagination" class="form-inline text-muted d-flex justify-content-end">
                                            <label for="pagination-select">Itens por página</label>
                                            <select id="pagination-select" class="form-control mx-2" name="pagination" required>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3 mb-lg-0 text-center text-lg-left text-muted">
                                        <div class="py-lg-2">
                                            <a class="mx-2 text-reset" href="#"><i class="fas fa-chevron-left"></i></a> 1-12 de 12 <a class="mx-2 text-reset" href="#"><i class="fas fa-chevron-right"></i></a>
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
        <?=$page->getScripts()?>
        <script type="text/javascript" src="assets/js/<?=basename($_SERVER["PHP_SELF"], ".php")?>.js"></script>
    </body>
</html>