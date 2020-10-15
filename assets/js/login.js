/*!
  * login.js v1.0
  * By Natanael Macedo da Silva Junior - 10/2020
  */

// Variáveis necessárias
var buttonText = '',
    buttonTextLoading = 'Carregando...',
    loading = false;

/**
 * Exibe feedback de erro no form de login
 * @param {object} feedback 
 * @param {boolean} message 
 */
function feedbackForm(feedback, message) {
    let alert =
        '<div class="alert alert-danger alert-dismissible fade show p-2 pl-4" role="alert">' +
            '<small><strong>Erro!</strong> ' + message + '</small>' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
            '</button>' +
        '</div>';
    feedback.empty().append(alert);
}

/**
 * Verifica se os input estão preencidos e permite a transformação do input e label
 */
function checkInputs() {
    $('input[name="user"], input[name="passowrd"], input[name="email"]').blur(function(e) {
        e.preventDefault();
        ($(this).val() != "") ? $(this).addClass("transformed") : $(this).removeClass("transformed");
    });
}

/**
 * Exibe modal de recuperação de senha
 */
function forgotPassword() {
    let div = $('#modal-point');
    let email = ($('input[name="email"]').val() != "") ? $('input[name="email"]').val() : "";
    $.ajax({
        dataType: "html",
        type: "POST",
        url: "inc/forgot-password.php",
        success: function(result) {
            div.empty().append(result);
            $('#modal-point').modal('show');
            checkInputs();
        },
        error: function() {
            div.empty().append("<p>Não foi possível identifica sua soliitação</p>");
            $('#modal-point').modal('show');
            checkInputs();
        }
    });
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
/**
 * Retorna json com as informações do usuário logado
 * @param {string} token 
 */
function getUserInfo(token) {
    $.ajax({
        //crossDomain: true,
        data: {},
        dataType: 'json',
        /*headers: {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept',
        },*/
        type: 'GET',
        url: 'http://177.125.219.2:8077/api/forcadevendas/dadosvendedor',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer {' + token +'}');
        },
        success: function(result) {
            console.log(result);
            return result;
        },
        error: function(request, status, erro) {
            return "{}"
        }
    });
    return "{}";
}

/**
 * Substitui a ação padrão de submissão do formulário de login
 * */
$('#form-login').submit(function(e) {
    e.preventDefault();
    if(loading) return false;
    loading = true;
    var json = JSON.stringify({
        usuario: $(this).serializeArray()[0].value,
        senha: $(this).serializeArray()[1].value,
        idDispositivo: null,
        idAplicativo: 0
    });
    $.ajax({
        //crossDomain: true,
        data: json,
        dataType: 'text',
        /*headers: {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept',
        },*/
        type: 'POST',
        url: 'http://177.125.219.2:8077/api/auth-integracao.axd',
        beforeSend: function() {
            loadingButton($('#button-login'), true);
        },
        success: function(result) {
            console.log(result);
            getUserInfo(result);
            loading = false;
            loadingButton($('#button-login'), false);
        },
        error: function(request, status, erro) {
            loading = false;
            loadingButton($('#button-login'), false);
            feedbackForm($("#div-feedback-login"), "Não foi possível fazer o login.");
            console.log("Problema ocorrido: " + status);
            console.log("Descição: " + erro);
            console.log("Informações da requisição: \n" + request.getAllResponseHeaders());
        },
        complete: function (jqXHR, status) {
            (status == "success") ? location.href = "home.php" : null;
        }
    });
});

/**
 * Inicia funções assim que terminar o carregamento da página
 */
$(document).ready(function() {
    addModal();
    checkInputs();
});