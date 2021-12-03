<?php

include('connect.php');
include('db/funcoes.php');


// ----------------------------------------------------------------------------------------------------------------//
// ---------------------------------------PENSÕES CONCEDIDAS-------------------------------------------------------//


//-----------------------------------------------------------------------------------------------------------------//
// ---------------------------------------FOLHA DE PAGAMENTOS------------------------------------------------------//
$folhapagtoQ = "SELECT 
    `qtdAposentadoFffin` AS qtd_apo_ffin,
    `valorAposFfin` AS val_apo_ffin,
    `qtdAposentadoFprev` AS qtd_apo_fprev,
    `valorAposFprev` AS val_apo_fprev,
    `qtdPensionistaFprev` AS qtd_pen_fprev,
    `valorPenFprev` AS val_pen_fprev,
    `qtdPensionistaFfin` AS qtd_pen_ffin,
    mes,
    `qtdTotalFfin` AS qtd_total_ffin,
    `qtdTotalFprev` AS qtd_total_fprev,
    `valorTotalFprev` AS val_total_fprev,
    `valorTotalFfin` AS val_total_ffin,
    `valorPenFfin` AS val_pen_ffin
FROM
    folhapagamento
ORDER BY id DESC
LIMIT 1;";
$folhapagto = mysqli_query($con, $folhapagtoQ) or die(mysqli_error());

// -----------------------------------------------------------------------------------------------------------------//
$folhapagtoDQ = "SELECT 
    `qtdAposentadoFffin` AS qtd_apo_ffin,
    SUM(`valorAposFfin`) AS val_apo_ffin,
    `qtdAposentadoFprev` AS qtd_apo_fprev,
    SUM(`valorAposFprev`) AS val_apo_fprev,
    `qtdPensionistaFprev` AS qtd_pen_fprev,
    SUM(`valorPenFprev`) AS val_pen_fprev,
    `qtdPensionistaFfin` AS qtd_pen_ffin,
    mes,
    `qtdTotalFfin` AS qtd_total_ffin,
    `qtdTotalFprev` AS qtd_total_fprev,
    SUM(`valorTotalFprev`) AS val_total_fprev,
    SUM(`valorTotalFfin`) AS val_total_ffin,
    SUM(`valorPenFfin`) AS val_pen_ffin
FROM
    folhapagamento
WHERE
    mes IN (12 , 13);";

$folhapagtod = mysqli_query($con, $folhapagtoDQ) or die(mysqli_error());


$somaTotal = "SELECT
`qtdTotalFfin` AS qtd_total_ffin,
    `qtdTotalFprev` AS qtd_total_fprev,
    SUM(`valorTotalFprev`) AS val_total_fprev2021,
    SUM(`valorTotalFfin`) AS val_total_ffin2021 FROM folhapagamento
    WHERE ano = 2021;";


$somaTotal2021 = mysqli_query($con, $somaTotal) or die(mysqli_error());
?>