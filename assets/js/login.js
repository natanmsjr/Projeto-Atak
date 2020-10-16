/**
 * Funções da Tela de Login
 * @version 1.0
 * @author Natanael Macedo
 */

 //Variáveis necessárias
 var urlBase = "http://177.125.219.2:8077/api/",
    urlLogin = urlBase + "auth-integracao.axd",
    urlInfo = urlBase + "forcadevendas/dadosvendedor";

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
    let email = ($('input[name="email"]').val() != "") ? $('input[name="email"]').val() : "";
    $.ajax({
        dataType: "html",
        type: "POST",
        url: "inc/forgot-password.php",
        success: function(result) {
            showModal(result);
            checkInputs();
        },
        error: function() {
            showModal("<p>Não foi possível identifica sua soliitação</p>");
            checkInputs();
        }
    });
}

/*Teste da requisição dos dados do usuário
$('#form-login').submit(function(e) {
    e.preventDefault();
    if(loading) return false;
    loading = true;
    var arrayJson = JSON.stringify({
        usuario: $(this).serializeArray()[0].value,
        senha: $(this).serializeArray()[1].value,
        idDispositivo: null,
        idAplicativo: 0
    });
    $.ajax({
        crossDomain: true,
        data: arrayJson,
        dataType: 'json',
        type: 'POST',
        url: urlLogin,
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
});*/

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
        data: json,
        dataType: 'json',
        type: 'POST',
        url: 'responses/login.php',
        beforeSend: function() {
            loadingButton($('#button-login'), true);
        },
        success: function(result) {
            if(result.hasOwnProperty("success")) {
                console.log(result);
                location.href = "../home.php";
            }
            if(result.hasOwnProperty("erro")) {
                feedbackForm($("#div-feedback-login"), "Não foi possível fazer o login.");
            }
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
        }
    });
});

/**
 * Inicia funções assim que terminar o carregamento da página
 */
$(document).ready(function() {
    checkInputs();
});