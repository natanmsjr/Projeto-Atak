/**
 * Funções globais utilizadas no sistema
 * @version 1.0
 * @author Natanael Macedo
 */

// Variáveis necessárias
var buttonText = '',
buttonTextLoading = '<i class="fas fa-spinner fa-spin"></i> Carregando',
loading = false;

 /**
 * Exibe feedback de erro no form de login
 * @param {object} feedback 
 * @param {boolean} message 
 */
function feedbackForm(feedback, message) {
    let alert =
        '<div class="alert alert-danger alert-dismissible fade show p-2 pl-4" role="alert">' +
            '<small><strong>Ops!</strong> ' + message + '</small>' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
            '</button>' +
        '</div>';
    feedback.empty().append(alert);
}

/**
 * Adiciona uma estrutura oculta de modal ao body
 * */
function addModal() {
    let div = $('<div/>');
	div.attr({
		id: 'modal-point',
		class: 'modal fade'
	});
    div.attr("data-backdrop", "static").attr("data-keyboard", "false").attr("tabindex", "-1").attr("role", "dialog").attr("aria-hidden", "true");
    $('body').append(div);
	$('#modal-point').on('hidden.bs.modal');
}

/**
 * Fecha o modal aberto
 */
function removeModal() {
    $('#modal-point').modal('hide');
}

/**
 * Função que exibe o modal
 */
function showModal(html) {
    $('#modal-point').empty().append(html).modal('show');
}

/**
 * Função que gera um modal para feedback de carregamento
 */
function loadingModal() {
    let html =
        '<div class="modal-dialog modal-dialog-centered modal-sm" role="document">' +
            '<div class="modal-content">' +
                '<div class="modal-header border-0 text-right pb-0">' +
                    '<button type="button" class="close" data-dismiss="modal">' +
                        '<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>' +
                    '</button>' +
                '</div>' +
                '<div class="modal-body text-center pt-0">' +
                    '<h4><i class="fas fa-spinner fa-spin fa-lg fa-2x mb-3 mr-2"></i> <br/>Por favor, aguarde</h4>' +
                '</div>' +
            '</div>' +
        '</div>';
    showModal(html);
}

/**
 * Função que gera um modal para feedback de erro
 */
function erroModal() {
    let html =
        '<div class="modal-dialog modal-dialog-centered modal-sm" role="document">' +
            '<div class="modal-content">' +
                '<div class="modal-header border-0 text-right pb-0">' +
                    '<button type="button" class="close" data-dismiss="modal">' +
                        '<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>' +
                    '</button>' +
                '</div>' +
                '<div class="modal-body text-center pt-0">' +
                    '<h4><i class="fas fa-times fa-lg fa-2x mb-3 mr-2 text-danger"></i> <br/>Ops! Ocorreu um erro</h4>' +
                    '<button type="button" class="btn btn-outline-default" onclick="removeModal()">Entendi</button>' +
                '</div>' +
            '</div>' +
        '</div>';
    showModal(html);
}

/**
 * Exibe a mensagem de "Carregando..." no botão de submissão do login
 * @param {object} button 
 * @param {boolean} status 
 */
function loadingButton(button, status) {
    if(status) {
        buttonText = button.html();
        button.empty().html(buttonTextLoading).prop("disabled", true);
    } else {
        button.empty().html(buttonText).prop("disabled", false);
        buttonText = "";
    }
}

 // Evento de clique para abertura e fechamento do menu lateral
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

/**
 * Faz logoff do usuário do sistema  (temporário até resolver o problema da conexão)
 * */
function logout() {
    location.href = "../login.php";
}
/**
 * Inicia funções assim que terminar o carregamento da página
 */
$(document).ready(function() {
    addModal();
});