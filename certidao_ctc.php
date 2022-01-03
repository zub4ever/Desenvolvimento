<?php include("cabecalho.php"); ?>
<div class="jumbotron d-flex justify-content-center bg-light">
    <div class="text-black">
        <div class="ml-auto mt-auto mr-auto mb-auto">
            <div class="d-flex justify-content-center">
                <img class="img-fluid" width="100px" src="img/logo2.png" alt="" style="width: 90px;">
            </div>
            <h2 class="text-left font-weight-bold text-uppercase py-1 text-white">Certidão de Tempo de Contribuição</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="card text-dark">
        <div class="container" style="padding-bottom: 20px;">
            <div class="row justify-content-center">
                <h2 class="mb-10">CERTIDÃO DE TEMPO DE CONTRIBUIÇÃO</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-3 mt-3"></div>
                <div class="col-sm-12 col-lg-4 mt-3">
                    <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Certidões Emitidas <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="documentos/certidao_contribuicao_2021.pdf" class="dropdown-item">2021</a></li>
                        <li><a href="documentos/certidao_contribuicao_2020.pdf" class="dropdown-item">2020</a></li>
                        <li><a href="documentos/certidao_contribuicao_2019.pdf" class="dropdown-item">2019</a></li>
                        <li><a href="documentos/certidao_contribuicao_2018.pdf" class="dropdown-item">2018</a></li>
                        <li><a href="documentos/certidao_contribuicao_2017.pdf" class="dropdown-item">2017</a></li>
                        <li><a href="documentos/certidao_contribuicao_2016.pdf" class="dropdown-item">2016</a></li>
                        <li><a href="documentos/certidao_contribuicao_2015.pdf" class="dropdown-item">2015</a></li>
                        <li><a href="documentos/certidao_contribuicao_2014.pdf" class="dropdown-item">2014</a></li>
                        <li><a href="documentos/certidao_contribuicao_2013.pdf" class="dropdown-item">2013</a></li>
                        <li><a href="documentos/certidao_contribuicao_2012.pdf" class="dropdown-item">2012</a></li>
                        <li><a href="documentos/certidao_contribuicao_2011.pdf" class="dropdown-item">2011</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-4 mt-3">
                    <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informações <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="informacoes_ctc.php" class="dropdown-item">Informações sobre a CTC</a></li>
                    </ul>
                </div>
            </div>   
        </div>
    </div>
</div>

<div class="container pb-3 mb-3 ">
   <div class="d-flex justify-content-around">
        <a class="btn btn-outline-primary" onClick="history.go(-1)" role="button" style="width: 20%">
            <i class="fa fa-arrow-circle-left"></i>
            <span>Voltar</span>
        </a>
    </div>
</div>

<?php include("rodape.php"); ?>
