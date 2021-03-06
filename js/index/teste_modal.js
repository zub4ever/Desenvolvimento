$(document).ready(function () {



    Highcharts.chart('container', {
        chart: {
            type: 'variablepie'
        },
        title: {
            text: 'Resumo da folha de pagamento - Dezembro 2021'
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                    'Número de Registros: <b>{point.y}</b><br/>' +
                    'Total em R$:  <b>{point.z}</b><br/>'
        },
        series: [{
                minPointSize: 10,
                innerSize: '50%',
                zMin: 0,
                name: 'countries',
                data: [{
                        name: 'Aposentados FPREV',
                        y: 810,
                        z: '3.157.743,59'
                    }, {
                        name: 'Aposentadorias FFIN',
                        y: 18,
                        z: '196.102,49'
                    }, {
                        name: 'Pensões FPREV',
                        y: 163,
                        z: '387.557,04'
                    }, {
                        name: 'Pensões FFIN',
                        y: 9,
                        z: '43.104,27'
                    }]
            }]
    });

    Highcharts.chart('containerteste', {

        chart: {
            styledMode: true
        },

        title: {
            text: 'Total Dezembro 2021'
        },

        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },

        series: [{
                type: 'pie',
                allowPointSelect: true,
                keys: ['name', 'y', 'selected', 'sliced'],
                data: [
                    ['Total FPREV', 3545300,63, false],
                    ['Total FFIN', 239206.76, false]
                ],
                showInLegend: true
            }]
    });


    Highcharts.chart('container3d', {

        chart: {
            type: 'column',
            styledMode: true
        },

        title: {
            text: 'Total folha 2021'
        },

        yAxis: [{
                className: 'highcharts-color-9',
                title: {
                    text: 'Reais'
                }
            }, {
                className: 'highcharts-color-6',
                opposite: true,
                title: {
                    text: 'Reais'
                }
            }],

        plotOptions: {
            column: {
                borderRadius: 2
            }
        },

        series: [{
                name: 'Aposentadorias FPREV',
                data: [46838023.63]
            }, {
                name: 'Aposentados FFIN',
                data: [3352347.76],
                yAxis: 1
            }]

    });










});