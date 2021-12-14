$(document).ready(function () {



        Highcharts.chart('container', {
            chart: {
                type: 'variablepie'
            },
            title: {
                text: 'Countries compared by population density and total area.'
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                        'Número de Registros: (square km): <b>{point.y}</b><br/>' +
                        'Total em R$:  <b>{point.z}</b><br/>'
            },
            series: [{
                    minPointSize: 10,
                    innerSize: '20%',
                    zMin: 0,
                    name: 'countries',
                    data: [{
                            name: 'Aposentados FPREV',
                            y: 505370,
                            z: 92.9
                        }, {
                            name: 'France',
                            y: 551500,
                            z: 118.7
                        }, {
                            name: 'Poland',
                            y: 312685,
                            z: 124.6
                        }, {
                            name: 'Czech Republic',
                            y: 78867,
                            z: 137.5
                        }, {
                            name: 'Italy',
                            y: 301340,
                            z: 201.8
                        }, {
                            name: 'Switzerland',
                            y: 41277,
                            z: 214.5
                        }, {
                            name: 'Germany',
                            y: 357022,
                            z: 235.6
                        }]
                }]
        });
    });