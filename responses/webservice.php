<?php
/**
 * Respone que emula um webserve para recebimento de dados
 * @version 1.0
 * @author Natanael Macedo
 */

// Cabelho do JSON
header('Content-Type: application/json');

// Se o token for diferente volta para o login

// Verifica se foi passado o Post corretamente
if(isset($_POST, $_POST["periodo"])) {
    // Inicia a variável que será retornada
    $dados = array();

    switch($_POST["periodo"]) {
        case "year":
            $dados = array(
                // Dados Bar chart
                array(
                    "labels" => array('Carlos', 'Karol', 'Mariana', 'Felipe'),
                    "data" => array(
                        array(650, 490, 560, 400),
                        array(410, 300, 520, 120)
                    )
                ),
                // Dados Donut chart
                array(
                    "labels" => array('Realizados', 'Previstos'),
                    "data" => array(
                        array(38, 62)
                    )
                ),
                // Progress bars
                array(
                    array(
                        "total" => 803,
                        "label" => "Linkedin",
                        "color" => "primary",
                        "progress" => 50
                    ),
                    array(
                        "total" => 323,
                        "label" => "Behance",
                        "color" => "info",
                        "progress" => 70
                    ),
                    array(
                        "total" => 297,
                        "label" => "Instagram",
                        "color" => "danger",
                        "progress" => 75
                    ),
                    array(
                        "total" => 717,
                        "label" => "Dribbble",
                        "color" => "orange",
                        "progress" => 80
                    ),
                ),
                // Checklist
                array(
                    array(
                        "codigo" => "APP003",
                        "planilha" => "Verificação de Higiene Pré-operacional e Operacional",
                        "previstos" => "1300",
                        "realizados" => "987"
                    ),
                    array(
                        "codigo" => "CHK001",
                        "planilha" => "Registro de Produto",
                        "previstos" => "770",
                        "realizados" => "427"
                    ),
                    array(
                        "codigo" => "PAC087.1",
                        "planilha" => "Registro de Temperatura dos Ambientes",
                        "previstos" => "300",
                        "realizados" => "180"
                    ),
                    array(
                        "codigo" => "PAC088.1",
                        "planilha" => "Registro de Produção - Desossa",
                        "previstos" => "3800",
                        "realizados" => "2978"
                    ),
                    array(
                        "codigo" => "CHK1898",
                        "planilha" => "Validadação dos Produtos - Ficha Técnica",
                        "previstos" => "4500",
                        "realizados" => "3454"
                    ),
                    array(
                        "codigo" => "TMP1801",
                        "planilha" => "Recolhimento dos Produtos e Devolução",
                        "previstos" => "850",
                        "realizados" => "256"
                    ),
                    array(
                        "codigo" => "PAC0878",
                        "planilha" => "Registro de Expedição dos Produtos - Caixaria",
                        "previstos" => "1200",
                        "realizados" => "710"
                    ),
                    array(
                        "codigo" => "PPT0098",
                        "planilha" => "Controle de Manutenção de Frota - Caminhões",
                        "previstos" => "52",
                        "realizados" => "37"
                    ),
                    array(
                        "codigo" => "1403410",
                        "planilha" => "Manutenção das Gondolas - Supermercados",
                        "previstos" => "115",
                        "realizados" => "48"
                    ),
                    array(
                        "codigo" => "5715182",
                        "planilha" => "Controle de Manutenção da Frota - Pneus",
                        "previstos" => "484",
                        "realizados" => "218"
                    ),
                ) 
            );
        break;
        case "month":
            $dados = array(
                // Dados Bar chart
                array(
                    "labels" => array('Carlos', 'Soraya', 'Danilo', 'Jonas'),
                    "data" => array(
                        array(579, 175, 367, 159),
                        array(145, 723, 500, 15)
                    )
                ),
                // Dados Donut chart
                array(
                    "labels" => array('Realizados', 'Previstos'),
                    "data" => array(
                        array(90, 10)
                    )
                ),
                // Progress bars
                array(
                    array(
                        "total" => 257,
                        "label" => "Linkedin",
                        "color" => "primary",
                        "progress" => 20
                    ),
                    array(
                        "total" => 687,
                        "label" => "Behance",
                        "color" => "info",
                        "progress" => 50
                    ),
                    array(
                        "total" => 976,
                        "label" => "Instagram",
                        "color" => "danger",
                        "progress" => 95
                    ),
                    array(
                        "total" => 697,
                        "label" => "Dribbble",
                        "color" => "orange",
                        "progress" => 70
                    ),
                ),
                // Checklist
                array(
                    
                    array(
                        "codigo" => "CHK1898",
                        "planilha" => "Validadação dos Produtos - Ficha Técnica",
                        "previstos" => "4500",
                        "realizados" => "3454"
                    ),
                    array(
                        "codigo" => "TMP1801",
                        "planilha" => "Recolhimento dos Produtos e Devolução",
                        "previstos" => "850",
                        "realizados" => "256"
                    ),
                    array(
                        "codigo" => "PAC0878",
                        "planilha" => "Registro de Expedição dos Produtos - Caixaria",
                        "previstos" => "1200",
                        "realizados" => "710"
                    ),
                    array(
                        "codigo" => "PPT0098",
                        "planilha" => "Controle de Manutenção de Frota - Caminhões",
                        "previstos" => "52",
                        "realizados" => "37"
                    ),
                    array(
                        "codigo" => "1403410",
                        "planilha" => "Manutenção das Gondolas - Supermercados",
                        "previstos" => "115",
                        "realizados" => "48"
                    ),
                    array(
                        "codigo" => "5715182",
                        "planilha" => "Controle de Manutenção da Frota - Pneus",
                        "previstos" => "484",
                        "realizados" => "218"
                    ),
                ) 
            );
        break;
        case "week":
            $dados = array(
                // Dados Bar chart
                array(
                    "labels" => array('Carlos', 'Nelson', 'Carla', 'Gustavo'),
                    "data" => array(
                        array(459, 257, 149, 789),
                        array(236, 453, 412, 653)
                    )
                ),
                // Dados Donut chart
                array(
                    "labels" => array('Realizados', 'Previstos'),
                    "data" => array(
                        array(100, 0)
                    )
                ),
                // Progress bars
                array(
                    array(
                        "total" => 120,
                        "label" => "Linkedin",
                        "color" => "primary",
                        "progress" => 10
                    ),
                    array(
                        "total" => 593,
                        "label" => "Behance",
                        "color" => "info",
                        "progress" => 50
                    ),
                    array(
                        "total" => 480,
                        "label" => "Instagram",
                        "color" => "danger",
                        "progress" => 48
                    ),
                    array(
                        "total" => 863,
                        "label" => "Dribbble",
                        "color" => "orange",
                        "progress" => 67
                    ),
                ),
                // Checklist
                array(
                    array(
                        "codigo" => "APP003",
                        "planilha" => "Verificação de Higiene Pré-operacional e Operacional",
                        "previstos" => "1300",
                        "realizados" => "987"
                    ),
                    array(
                        "codigo" => "1403410",
                        "planilha" => "Manutenção das Gondolas - Supermercados",
                        "previstos" => "115",
                        "realizados" => "48"
                    ),
                    array(
                        "codigo" => "5715182",
                        "planilha" => "Controle de Manutenção da Frota - Pneus",
                        "previstos" => "484",
                        "realizados" => "218"
                    ),
                    array(
                        "codigo" => "PAC087.1",
                        "planilha" => "Registro de Temperatura dos Ambientes",
                        "previstos" => "300",
                        "realizados" => "180"
                    ),
                    array(
                        "codigo" => "PAC0878",
                        "planilha" => "Registro de Expedição dos Produtos - Caixaria",
                        "previstos" => "1200",
                        "realizados" => "710"
                    ),
                    array(
                        "codigo" => "PPT0098",
                        "planilha" => "Controle de Manutenção de Frota - Caminhões",
                        "previstos" => "52",
                        "realizados" => "37"
                    ),
                    array(
                        "codigo" => "CHK001",
                        "planilha" => "Registro de Produto",
                        "previstos" => "770",
                        "realizados" => "427"
                    ),
                ) 
            );
        break;
        case "today":
            $dados = array(
                // Dados Bar chart
                array(
                    "labels" => array('Carlos', 'Jailson', 'Inês', 'Fernanda'),
                    "data" => array(
                        array(687, 120, 632, 630),
                        array(129, 357, 456, 582)
                    )
                ),
                // Dados Donut chart
                array(
                    "labels" => array('Realizados', 'Previstos'),
                    "data" => array(
                        array(10, 90)
                    )
                ),
                // Progress bars
                array(
                    array(
                        "total" => 900,
                        "label" => "Linkedin",
                        "color" => "primary",
                        "progress" => 98
                    ),
                    array(
                        "total" => 687,
                        "label" => "Behance",
                        "color" => "info",
                        "progress" => 60
                    ),
                    array(
                        "total" => 357,
                        "label" => "Instagram",
                        "color" => "danger",
                        "progress" => 435
                    ),
                    array(
                        "total" => 807,
                        "label" => "Dribbble",
                        "color" => "orange",
                        "progress" => 23
                    ),
                ),
                // Checklist
                array(
                    array(
                        "codigo" => "1403410",
                        "planilha" => "Manutenção das Gondolas - Supermercados",
                        "previstos" => "115",
                        "realizados" => "48"
                    ),
                    array(
                        "codigo" => "PAC087.1",
                        "planilha" => "Registro de Temperatura dos Ambientes",
                        "previstos" => "300",
                        "realizados" => "180"
                    ),
                    array(
                        "codigo" => "PAC0878",
                        "planilha" => "Registro de Expedição dos Produtos - Caixaria",
                        "previstos" => "1200",
                        "realizados" => "710"
                    ),
                ) 
            );
        break;
    }

    exit(json_encode(array(
        "success" => array(
            "message" => "Informações recuperadas com sucesso",
            "value" => $dados
        )
    )));
} else {
    exit(json_encode(array(
        "error" => array(
            "message" => "Não foi recuperar as informações",
            "value" => $dados
        )
    )));
}