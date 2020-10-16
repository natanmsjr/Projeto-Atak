/**
 * Funções da tela de Planilhas
 * @version 1.0
 * @author Natanael Macedo
 */

/**
 * Função de cadastro de nova planilha
 */
function addRegister() {
    $.ajax({
        dataType: "html",
        type: "POST",
        url: "inc/add-register.php",
        success: function(result) {
            showModal(result);
            $('#form-add-register').submit(function(e) {
                e.preventDefault();
                let id = Object.keys($('tr[id^="table-planilhas-tr-"]')).length - 1;
                let dateAux = $(this).serializeArray()[3].value.split("-");
                let date = dateAux[2] + "/" + dateAux[1] + "/" + dateAux[0];
                let html = 
                    '<tr id="table-planilhas-tr-' + id + '">' +
                        '<td>' + $(this).serializeArray()[0].value + '</td>' +
                        '<td>' + $(this).serializeArray()[1].value + '</td>' +
                        '<td class="text-center">' + $(this).serializeArray()[2].value + '</td>' +
                        '<td class="text-center">' + date + '</td>' +
                        '<td class="text-center">' + $(this).serializeArray()[4].value + '</td>' +
                        '<td class="text-center">' + $(this).serializeArray()[5].value + '</td>' +
                        '<td class="text-center">' +
                            '<a class="text-reset px-1" href="#"><i class="fas fa-pencil-alt"></i></a>' +
                            '<a class="text-reset px-1" href="#"><i class="fas fa-file-medical"></i></a>' +
                            '<a class="text-dark px-1" href="javascript:void(0)" onclick="removeRegister(' + id + ')"><i class="fa fa-trash-alt"></i></a>' +
                        '</td>' +
                    '</tr>';
                $('#table-planilhas tbody').append(html);
                updateTotal();
                removeModal();
            })
        },
        error: function() {
            showModal("<p>Não foi possível identifica sua soliitação</p>");
        }
    });
}

/**
 * Função de remoção de um registro da tabela
 * @param {int} id 
 */
function removeRegister(id) {
    let html = 
        '<div class="modal-dialog modal-dialog-centered modal-sm" role="document">' +
            '<div class="modal-content">' +
                '<div class="modal-header border-0 text-right pb-0">' +
                    '<button type="button" class="close" data-dismiss="modal">' +
                        '<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>' +
                    '</button>' +
                '</div>' +
                '<div class="modal-body text-center pt-0">' +
                    '<h6 class="mb-3">Deseja excluir essa planilha?</h6>' +
                    '<button class="btn btn-outline-success" onclick="$(\'#table-planilhas-tr-' + id + '\').remove(), updateTotal(), removeModal()">Sim</button>' +
                    '<button class="btn btn-outline-danger" onclick="removeModal()">Não</button>' +
                '</div>' +
            '</div>' +
        '</div>';
    showModal(html);
}

/**
 * Função que atualiza o total de registros
 */
function updateTotal() { 
    let total = Object.keys($('tr[id^="table-planilhas-tr-"]:visible')).length - 2;
    $('.total').empty().text(total);
}

/**
 * Função de filtragem da tabela
 * @param {string} text
 */
function filter(text) {
    $('tr[id^="table-planilhas-tr-"]').filter(function() {
        $(this).toggle($(this).text().indexOf(text) > -1);
    });
    updateTotal();
}

/**
 * Função de evento que modifica a ação padrão de submissão do formulário de busca
 */
$('#form-search-list').submit(function(e) {
    e.preventDefault();
    filter($(this).serializeArray()[0].value);
});

/**
 * Função de evento que verifica se o campo de busca está vazio no blur
 */
$("#search-list").blur(function() {
    ($(this).val() == "") ? $('tr[id^="table-planilhas-tr-"]').toggle(true) : null;
    updateTotal();
});