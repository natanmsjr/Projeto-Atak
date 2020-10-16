/**
 * Funções da Tela de Home
 * @version 1.0
 * @author Natanael Macedo
 */

var barChart = null,
    donutChart = null;

/**
 * Retorna as informações de configuração do gráfico em barra
 * @param {array} arrayData 
 */
function barCharData(arrayData) {
    let data = {
        labels: arrayData.labels,
        datasets: [{
            label: 'Previstos',
            backgroundColor: '#5e72e4',
            borderColor: '#5e72e4',
            borderWidth: 1,
            data: arrayData.data[0]
        }, {
            label: 'Realizados',
            backgroundColor: '#adb5bd',
            borderColor: '#adb5bd',
            borderWidth: 1,
            data: arrayData.data[1]
        }]
    };
    return data;
}

/**
 * Inicializa o gráfico em barra
 * @param {array} data 
 */
function initBarChart(data) {
    barChart = new Chart($('#bar-chart'), {
        type: 'bar',
        data: barCharData(data),
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            }
        }
    });
}

/**
 * Atualiza o gráfico em barra
 * @param {array} arrayData 
 */
function updateBarChart(arrayData) {
    barChart.data.labels = [];
    barChart.data.datasets[0].data = [];
    barChart.data.datasets[1].data = [];

    barChart.data.labels = arrayData.labels;
    barChart.data.datasets[0].data = arrayData.data[0];
    barChart.data.datasets[1].data = arrayData.data[1];
    
    barChart.update();
}

/**
 * Retorna as informações de configuração do gráfico em donut
 * @param {array} arrayData 
 */
function donutChartData(arrayData) {
    let data = {
        labels: arrayData.labels,
        datasets: [{
            backgroundColor: ['#5e72e4', '#f5365c'],
            data: arrayData.data[0]
        }]
    };
    return data;
}

/**
 * Inicializa o gráfico em donut
 * @param {array} data 
 */
function initDonutChart(data) {
    donutChart = new Chart($('#donut-chart'), {
        type: 'doughnut',
        data: donutChartData(data),
        options: {
            responsive: true,
            legend: {
                display: false,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }, 
            cutoutPercentage: 80
        }
    });
}

/**
 * Atualiza o gráfico em donut
 * @param {array} arrayData 
 */
function updateDonutChart(arrayData) {
    donutChart.data.labels = [];
    donutChart.data.datasets[0].data = [];

    donutChart.data.labels = arrayData.labels;
    donutChart.data.datasets[0].data = arrayData.data[0];

    donutChart.update();

    $(".donut-chart-percentage-total").empty().append("<strong>" +  arrayData.data[0][0] + "%</strong> realizado");
}

/**
 * Preenche a lista de progresso
 * @param {array} data 
 */
function getProgessBar(data) {
    let html = '';
    $.each(data, function(index, value) {
        html +=
            '<div class="row">' +
                '<div class="col-12 mb-3">' +
                    '<p class="mb-1"><span class="font-weight-bold">' + value.total + '</span> <small class="text-muted">' + value.label + '</small></p>' +
                    '<div class="progress">' +
                        '<div class="progress-bar bg-'+ value.color + '" role="progressbar" style="width: ' + value.progress + '%" aria-valuenow="' + value.progress + '" aria-valuemin="0" aria-valuemax="100"></div>' +
                    '</div>' +
                '</div>' +
            '</div>';
    });
    $('#card-body-progress-bar').empty().append(html);
}

/**
 * Preenche a checklist
 * @param {array} data 
 */
function getChecklist(data) {
    let html = '';
    $.each(data, function(index, value) {
        html +=
            '<tr>' +
                '<td>' + value.codigo + '</td>' +
                '<td>' + value.planilha + '</td>' +
                '<td class="text-center">' + value.previstos + '</td>' +
                '<td class="text-center">' + value.realizados + '</td>' +
            '</tr>';
    });

    $('#table-checklist').empty().append(html);
}

/**
 * Obtem os dados estatísticos conforme o período
 * @param {string} period 
 * @param {boolean} upload 
 */
function getStatistic(period, upload) {
    $.ajax({
        data: {periodo: period},
        dataType: 'json',
        type: 'POST',
        url: 'responses/webservice.php',
        success: function(result) {
            if(result.hasOwnProperty("success")) {
                if(upload) {
                    updateBarChart(result.success.value[0]);
                    updateDonutChart(result.success.value[1]);
                } else {
                    initBarChart(result.success.value[0]);
                    initDonutChart(result.success.value[1]);
                }
                getProgessBar(result.success.value[2]);
                getChecklist(result.success.value[3]);
            }
            if(result.hasOwnProperty("erro")) {
                erroModal();
            }
        },
        error: function(request, status, erro) {
            removeModal();
            erroModal();
            console.log("Problema ocorrido: " + status);
            console.log("Descição: " + erro);
            console.log("Informações da requisição: \n" + request.getAllResponseHeaders());
        }
    });
}

// Inicia os gráficos assim que a páginas é carregada
$(document).ready(function() {
    getStatistic("year", false);
});