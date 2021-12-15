<?php
include("cabecalho.php");
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/index/teste.js"></script>
    <script src="js/index/teste_modal.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="css/higcharts.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <!------ Inicio da Modal ---------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="images/comunicado_12.jpeg">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>
    <!------ Fim Modal ---------->
    <!-- Inicio Carousel -->
    <section class="service-area section-gap-a">
        <div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel" align="center"  data-interval="5000">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#slideshow" data-slide-to="1"></li>
                <li data-target="#slideshow" data-slide-to="2"></li>
                <li data-traget="#slideshow" data-slide-to="3"></li>
            </ul>
            <!-- O slideshow -->
            <div class="carousel-inner">  
                <div class="carousel-item active">
                    <a href="http://riobranco.ac.gov.br/" target="_blank">
                        <img src="images/prefeitura_banner.png" class="img-fluid " alt="Prefeitura de Rio Branco">
                    </a>  
                </div>
                <div class="carousel-item">
                    <a href="sobre-o-recadastramento.php">
                        <img src="images/RecadastramentoOnline.png" class="img-fluid " alt="Recadastramento Online">
                    </a>  
                </div>
                <div class="carousel-item">
                    <a href="http://dirf.rbprev.riobranco.ac.gov.br/sisced/">
                        <img src="images/Banner_Cedula_C.png"  alt="Cedula C" class="img-fluid" />
                    </a>
                </div>
            </div>
            <!-- controles -->
            <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slideshow" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- FIM SLIDE-->
    </section>
    <!-- Fim carousel -->
    <br>
    <h3 class='text-center'>Serviços</h3>
    <main class="page-contents">
        <div class="cards">
            <div class="contents">
                <h1 class="titles">Contracheque</h1>
                <p class="copys">Emissão de contracheque</p>
                <button class="btns">Ver mais</button>
            </div>
        </div>
        <div class="cards">
            <div class="contents">
                <h2 class="titles">Calendário</h2>
                <p class="copys">Calendário de reuniões dos conselhos e pagamentos</p>
                <button class="btns">Ver mais</button>
            </div>
        </div>
        <div class="cards">
            <div class="contents">
                <h2 class="titles">DAP</h2>
                <p class="copys">Guia de arrecadção previdenciária</p>
                <button class="btns">Ver mais</button>
            </div>
        </div>

        <div class="cards">
            <div class="contents">
                <h2 class="titles">Cédula C</h2>
                <p class="copys">Emitir cédula para IR</p>
                <button class="btns">Ver mais</button>
            </div>
        </div>
    </main>
    <!--INicio canais de comunicação-->
    
        <section>
            <div class="container">
                <div class="title text-center">
                    <h2 class="mb-10 text-dark">Canais de Comunicação</h2>
                </div>

                <div class="row">
                    <p align="justify" style="text-indent:10mm;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Inicio do Teste -->
                                <div class="card_comunicacao">
                                    <div class="card-image_comunicacao"></div>
                                    <div class="card-text_comunicacao">

                                        <h2>Atendimento</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card_comunicacao">
                                    <div class="card-image_comunicacao card2"></div>
                                    <div class="card-text_comunicacao card2">

                                        <h2>Dúvidas</h2>
                                        <p>Adipisicing elit. Ducimus, repudiandae corrupti amet temporibus omnis provident illum maxime quod. Lorem ipsum dolor</p>
                                    </div>       
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <!-- card3 -->    
                                <div class="card_comunicacao">
                                    <div class="card-image_comunicacao card3"></div>
                                    <div class="card-text_comunicacao card3">

                                        <h2>Regras</h2>
                                        <p>Repudiandae corrupti amet temporibus omnis provident illum maxime. Ducimus, lorem ipsum dolor adipisicing elit</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card_comunicacao">
                                    <div class="card-image_comunicacao card4"></div>
                                    <div class="card-text_comunicacao card4">

                                        <h2>Requerimentos</h2>
                                        <p>Repudiandae corrupti amet temporibus omnis provident illum maxime. Ducimus, lorem ipsum dolor adipisicing elit</p>
                                    </div>

                                </div>
                            </div>  				  
                        </div>
                    </div>
                    </p>              
                </div>        		
            </div>
        </section>
  
    <!-- Folha de pagamento -->

    <script src="js/vendor/highcharts/highcharts.js"></script>
    <script src="js/vendor/highcharts/highcharts-3d.js"></script>
    <script src="js/vendor/highcharts/modules/variable-pie.js"></script>
    <script src="js/vendor/highcharts/modules/exporting.js"></script>
    <script src="js/vendor/highcharts/modules/export-data.js"></script>
    <script src="js/vendor/highcharts/modules/accessibility.js"></script>
    <script src="js/index/teste_modal.js"></script>
    <link rel="stylesheet" href="js/vendor/highcharts/css/highcharts.css">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-2">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">
                    </p>
                </figure>
            </div>
            <div class="col-lg-3 py-2">
                <figure class="highcharts-figure">
                    <div id="containerteste"></div>
                    <p class="highcharts-description">

                    </p>
                </figure>
            </div>
            <div class="col-lg-3 py-2">
                <figure class="highcharts-figure">
                    <div id="container3d"></div>
                    <p class="highcharts-description">

                    </p>
                </figure>


            </div>
        </div>
    </div>
    <!--Fim do teste-->
    <!--inICIO DO CAROUSEL -->
    <section>
        <div class="container">
            <div class="title text-center">
                <h2 class="mb-10 text-dark">Outros Links</h2>
            </div>         
            <div class="row">
                <p align="justify" style="text-indent:10mm;">
                <div class="container">
                    <div class="row">
                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                            <div class="MultiCarousel-inner">
                                <div class="item">
                                    <div class="pad15">
                                        <a href="http://www.riobranco.ac.gov.br/">
                                            <img src="images/IconsIndex/Frame_3.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="https://www.gov.br/trabalho-e-previdencia/pt-br">
                                            <img src="images/IconsIndex/Group_2.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="https://www.riobranco.ac.leg.br/">
                                            <img src="images/IconsIndex/Group_3.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="http://www.diario.ac.gov.br/">
                                            <img src="images/IconsIndex/Group_4.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="https://cadprev.previdencia.gov.br/Cadprev/pages/index.xhtml">
                                            <img src="images/IconsIndex/cadprev.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="https://www.gov.br/inss/pt-br">
                                            <img src="images/IconsIndex/inss.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="https://tceac.tc.br/">
                                            <img src="images/IconsIndex/tribunalcontas.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <a href="http://www.rbprev.riobranco.ac.gov.br/sistemas.php">
                                            <img src="images/IconsIndex/sistemas.png" alt="alt"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary leftLst"><</button>
                            <button class="btn btn-primary rightLst">></button>
                        </div>
                    </div>
                </div>
                </p>
                <hr>
            </div>
        </div>
    </section>


    <!-- FIM CAROUSEL -->
    <!-- inicio -->
    <div class="bg-image" style=" background-image: url(https://lh3.googleusercontent.com/ekeYUBvOwQD3Xs05_J_0WDZczFAch7COs8KfYatolU1uH_5gCS8ycUqibi-jM9REYmisSb0ZUkmtZTxEL-PYqEeO5QmwXIt3sRa8v-GZ2PNaEPZBPngiOVTVxcst0ECh1g_qrk8eT7GBPVqSJ8C0JPaf91owOuf9g2mC3gqtUIgqi0tK8Maq38b752HlXhBf-oBgl7Tq3QgrnPnufxZ_UMlSqjefl62QDKlh_Lnbs_wp6rMZqkWCKbZ6RtcU_l2MtK73NrgBfjZjzOPGpZDdqGE7sg-vn_iJ_BbIbHVdChzAfuZrCVavQKcVs49NpSvCdC6BxxZFyAu7CRJTZdNpWsokl81uQU8aXBvU6NdCj7aEreKoQilXhK_XJHTbAKrEyx8k4yEowRp87vkzeCq1V_HqIq9zcx1poavlnu7FTVz7YavjXZHOo5KoDgH9xvCR3Tfs23qrLUjr7OuaQi9pbxkLlDHZy_CRp3yL6Cj71EkquNH5klkmMRZ6RvIQIHARE2wF4CzR-psn6MJxEx-YmwkHWvKjSqhoBFu1JOOlSQtVdLnfosXHHonoGcaDQ93L8GCQdpbhWqCyCZFhqXirXqaF_IQf8xj2RjMNGYxYeapa4fmlUTXNS_uOEP2YZLProJ1r10gfbapFLh0OET3owIdKxRRvWDVn5oBw62s7jMy2UrciDxCsZwI1tIKw6gnqkPn65TXylxBREdfNvfvu7tKTEQ=w1440-h581-no?authuser=0);
         position:relative;">
        <div class="container">
            <div class="title text-center">
                <h2 class="mb-10 text-dark">RBPREV EM NÚMEROS</h2>
            </div>        
            <div class="row">
                <p align="justify" style="text-indent:10mm;">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 py-2">
                                    <img src="images/IconsIndex/rbprevnumber.png" alt="alt"/>	
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <hr>
                                    <div class="card border-primary mb-3">
                                        <p align="justify">
                                            O RBPREV em números traz informações sobre o Regime Próprio de Previdência do Município de Rio Branco. A publicação apresenta informações referentes às atividades desenvolvidas pelo RBPREV na gestão dos Fundos Previdenciário e Financeiro, tanto concernente às concessões dos benefícios previdenciários quanto à gestão financeira e meta atuarial.
                                        </p>
                                    </div>
                                    <div class="card bg-dark">
                                        <a href="rbprevEmNumeros.php" class="card-link">
                                            <div class="card-body text-center">
                                                <p class="card-text"><font color="#fff">RBPREV em Números</font></p>
                                            </div>
                                        </a>
                                    </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
                <hr>
            </div>
        </div>
    </div>
    <!-- Fim -->
    <!-- Inicio -->

    <section>
        <div class="container">
            <div class="title text-center">
                <h2 class="mb-10 text-dark">Últimas Notícias</h2>
            </div>

            <div class="row">
                <p align="justify" style="text-indent:10mm;">
                <div class="container">
                    <div class="row">
                        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                            <div class="col">
                                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                                        <ul class="d-flex list-unstyled mt-auto">
                                            <li class="me-auto">
                                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                            </li>
                                            <li class="d-flex align-items-center me-3">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                                <small>Earth</small>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                                <small>3d</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                                        <ul class="d-flex list-unstyled mt-auto">
                                            <li class="me-auto">
                                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                            </li>
                                            <li class="d-flex align-items-center me-3">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                                <small>Pakistan</small>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                                <small>4d</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                                        <ul class="d-flex list-unstyled mt-auto">
                                            <li class="me-auto">
                                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                            </li>
                                            <li class="d-flex align-items-center me-3">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                                <small>California</small>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                                <small>5d</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                </p>
                <hr>
            </div>
        </div>
    </section>
    <!-- FIm -->
</body>
<?php include("rodape.php"); ?>







