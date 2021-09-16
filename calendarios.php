<?php include("cabecalho.php"); ?>
<div class="jumbotron d-flex justify-content-center bg-light">
    <div class="text-black">
        <div class="ml-auto mt-auto mr-auto mb-auto">
            <div class="d-flex justify-content-center">
                <img class="img-fluid" width="100px" src="img/logo2.png" alt="" style="width: 100px;">
            </div>
            <h2 class="text-left font-weight-bold text-uppercase py-1 text-white">Calendários</h2>
        </div>
    </div>
</div>
<section style="text-align: center;">
    <div class="container" style="margin-top: 5%; margin-bottom: 10%; background-color: #43a9e012; padding: 50px;">
        <h2>CALENDÁRIOS</h2><br>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="btn-group mt-10" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Calendarios  de Reuniões
                    </button>
                    <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                        <a class="dropdown-item" href="calendario-caps.php"> CAPS</a>
                        <a class="dropdown-item" href="calendario-confis.php"> CONFIS</a>
                        <a class="dropdown-item" href="calendario-comite.php"> Comitê de Investimentos</a>
                    </div>
                </div>

                <div class="btn-group mt-10" role="group">
                    <a href="http://rbprev.riobranco.ac.gov.br/documentos/calendario_pag.pdf" class="btn btn-primary" aria-haspopup="true" aria-expanded="false">
                        Calendário de Pagamentos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("rodape.php"); ?>