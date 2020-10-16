/**
 * Funções globais
 * @version 1.0
 * @author Natanael Macedo
 */

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
 * Inicia funções assim que terminar o carregamento da página
 */
$(document).ready(function() {
    addModal();
});