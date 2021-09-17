<?php include("cabecalho.php"); ?>
<div class="jumbotron d-flex justify-content-center bg-light">
    <div class="text-black">
        <div class="ml-auto mt-auto mr-auto mb-auto">
            <div class="d-flex justify-content-center">
                <img class="img-fluid" width="100px" src="img/logo2.png" alt="" style="width: 90px;">
            </div>
            <h2 class="text-left font-weight-bold text-uppercase py-1 text-white">Licitações e Contratos</h2>
        </div>
    </div>
</div>
<div class="container">
    <section class="home-about-area-comunicacao section-gap_listas relative">
        <div class="row">
            <div align="center">
                <div class="btn-group">
                    <a class="btn btn-primary" href="#">Atas de Registro de Preço</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"> </a>
                    <ul class="dropdown-menu">
                        <!--  <li><a class="dropdown-item" href="#">2019</a></li> -->
                        <li><a class="dropdown-item" href="atas_de_registro_de_precos_2018.php" target="_blank">2018</a></li>
                        <li><a class="dropdown-item" href="atas_de_registro_de_precos_2017.php" target="_blank">2017</a></li> 
                        <li><a class="dropdown-item" href="atas_de_registro_de_precos_2016.php" target="_blank">2016</a></li>
                        <li><a class="dropdown-item" href="atas_de_registro_de_precos_2015.php" target="_blank">2015</a></li>
                        <li><a class="dropdown-item" href="atas_de_registro_de_precos_2014.php" target="_blank">2014</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn btn-primary" href="#">Contratos</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contratos_2021.php" target="_blank">2021</a></li>
                        <li><a class="dropdown-item" href="contratos_2020.php" target="_blank">2020</a></li>
                        <li><a class="dropdown-item" href="contratos_2019.php" target="_blank">2019</a></li>
                        <li><a class="dropdown-item" href="contratos_2018.php" target="_blank">2018</a></li>
                        <li><a class="dropdown-item" href="contratos_2017.php" target="_blank">2017</a></li> 
                        <li><a class="dropdown-item" href="contratos_2016.php" target="_blank">2016</a></li>
                        <li><a class="dropdown-item" href="contratos_2015.php" target="_blank">2015</a></li>
                        <li><a class="dropdown-item" href="contratos_2014.php" target="_blank">2014</a></li>
                    </ul>
                </div>
                <!-- <a href="adesoes_a_atas.php" class="btn btn-primary btn-lg">
                  <span class="glyphicon glyphicon-new-window"></span> Adesões a atas
                </a> -->
                <a href="lc-editais.php" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-minus"></span> Editais
                </a>
                <a href="dispensa.php" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-minus"></span> Dispensa
                </a>
                <a href="aditivo.php" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-minus"></span> Aditivos
                </a>
                <a href="adesoes.php" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-minus"></span> Termos de Adesão
                </a>
                <hr/>
                <br><br><br>
                <div class="row d-flex justify-content-center">
                    <a class="btn btn-large btn-primary" onClick="history.go(-1)" role="button" Style="cursor:pointer;"><i class="glyphicon glyphicon-share-alt"></i><span> Voltar</span></a>
                </div>
            </div>
         </div>
    </section>
    <br>
</div>
<?php include("rodape.php"); ?>