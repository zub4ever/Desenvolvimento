<?php
include("cabecalho.php");
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="js/index/teste.js"></script>
    <script src="js/index/teste_modal.js"></script>
    <script src="js/index/certificados.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/certificados.css">
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
                <a href="http://portalcidadao.riobranco.ac.gov.br/contracheque/"><button class="btns">Ver mais  </button></a>
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
                <a href="http://aplicacoes.rbprev.riobranco.ac.gov.br/DAP/"><button class="btns">Ver mais  </button></a>
            </div>
        </div>

        <div class="cards">
            <div class="contents">
                <h2 class="titles">Cédula C</h2>
                <p class="copys">Emitir cédula para IR</p>
                <a href="http://dirf.rbprev.riobranco.ac.gov.br/sisced/"><button class="btns">Ver mais  </button></a>
            </div>
        </div>
    </main>
    <!--INicio canais de comunicação-->
    <section>
        <div class="bg-image" style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_canais.png');
             position:relative;">
            <div class="container">
                <div class="title text-center">
                    <h2 class="mb-10 text-white">Canais de Comunicação</h2>
                </div>

                <div class="row">
                    <p align="justify" style="text-indent:10mm;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="http://www.rbprev.riobranco.ac.gov.br/atendimento_ao_segurado.php" target="_blank" class="card-link text-dark">
                                    <!-- Inicio do Teste -->
                                    <div class="card_comunicacao">
                                        <div class="card-image_comunicacao"></div>
                                        <div class="card-text_comunicacao">
                                            <h2>Atendimento</h2>
                                            <p>Telefone e e-mails de contato para retirada de dúvidas e questionamentos.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="http://www.rbprev.riobranco.ac.gov.br/duvidas-frequentes.php" target="_blank" class="card-link text-dark">
                                    <div class="card_comunicacao">
                                        <div class="card-image_comunicacao card2"></div>
                                        <div class="card-text_comunicacao card2">

                                            <h2>Dúvidas</h2>
                                            <p>Principais dúvidas relativas ao  Regime Próprio de Previdência Social.</p>
                                        </div>       
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <!-- card3 -->   
                                <a href="" target="_blank" class="card-link text-dark">
                                    <div class="card_comunicacao">
                                        <div class="card-image_comunicacao card3"></div>
                                        <div class="card-text_comunicacao card3">

                                            <h2>Regras</h2>
                                            <p>Cartilhas para conferência de regras  para a aposentadeoria.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="http://www.rbprev.riobranco.ac.gov.br/documentos.php" target="_blank" class="card-link text-dark">
                                    <div class="card_comunicacao">
                                        <div class="card-image_comunicacao card4"></div>
                                        <div class="card-text_comunicacao card4">

                                            <h2>Requerimentos</h2>
                                            <p>Requerimentos de pensão, aposentadoria, requisições de junta médico e outros formulário.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>  				  
                        </div>
                    </div>

                </div>        		
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
    <hr>
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
    <hr>


    <!-- FIM CAROUSEL -->
    <!-- inicio -->
    <div class="bg-image" style=" background-image: url('http://rbprev.riobranco.ac.gov.br/images/IconsIndex/background_rb_number.png');
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
    <hr>
    <section>
        <link rel="stylesheet" href="css/noticias.css">
        <div class="title text-center">
            <h2 class="mb-10 text-dark">Notícias</h2>
        </div>
        <div class="content-wrapper">

            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-xl-8 stretch-card grid-margin">
                        <a href="http://www.riobranco.ac.gov.br/2021/09/20/prefeitura-de-rio-branco-promove-curso-de-atuaria-para-servidores-do-rbprev-2/" class="card-link">
                            <div class="position-relative">
                                <img
                                    src="https://i1.wp.com/www.riobranco.ac.gov.br/wp-content/uploads/2021/09/CURSO-ATUARIO-RBPREV-20092021-3.jpeg?resize=800%2C445"
                                    alt="banner"
                                    class="img-fluid"
                                    />
                                <div class="banner-content">                                                                                             
                                    <h1 class="mb-2">
                                        RBPREV promove curso atuarial para servidores
                                    </h1>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 stretch-card grid-margin">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h2>Mais noticias</h2>

                                <div
                                    class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                                    >
                                    <div class="pr-3">
                                        <a href="" class="card-link text-white">
                                            <h5>Secretários se reúnem com diretor presidente da RBPREV</h5>

                                        </a>
                                    </div>
                                    <div class="rotate-img">
                                        <img
                                            src="https://i2.wp.com/www.riobranco.ac.gov.br/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-09-at-17.19.34.jpeg?resize=800%2C445"
                                            alt="thumb"
                                            class="img-fluid img-lg"
                                            />
                                    </div>
                                </div>
                                <br>
                                <div
                                    class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
                                    >
                                    <div class="pr-3">
                                        <a href="" class="card-link text-white">
                                            <h5>RBPREV recebe selo do Programa Nacional de Prevenção à Corrupção- PNPC</h5>

                                        </a>
                                    </div>
                                    <div class="rotate-img">
                                        <img
                                            src="http://rbprev.riobranco.ac.gov.br/noticias/2021/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-23-at-10.47.26.jpeg"
                                            alt="thumb"
                                            class="img-fluid img-lg"
                                            />
                                    </div>
                                </div>
                                <br>
                                <div
                                    class="d-flex pt-4 align-items-center justify-content-between"
                                    >
                                    <div class="pr-3">
                                        <a href="" class="card-link text-white">
                                            <h5>Conheça: A Lei do superendividamento, e os benefícios que ela traz aos consumidores</h5>

                                        </a>
                                    </div>
                                    <div class="rotate-img">
                                        <img
                                            src="http://rbprev.riobranco.ac.gov.br/noticias/2021/wp-content/uploads/2021/08/Voce-conhece-a-lei-do-Superendividamento-1024x1024.png"
                                            alt="thumb"
                                            class="img-fluid img-lg"
                                            />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>
    </section>
    <hr>
    <!-- FIm -->
    <!-- incio  -->
    <div class="title text-center">
        <h2 class="mb-10 text-dark">Certificados</h2>
    </div>
    <div class="containerCarousel">

        <div class="element-card">
            <div class="front-facing">
                <img
                    src="images/IconsIndex/cert_proGestao.png"
                    alt=""/>
                <p class="title">Pró-Gestão</p>

            </div>
            <div class="back-facing">
                <p>Programa de Certificação Institucional e Modernização da Gestão dos Regimes Próprios de Previdência Social da União, dos Estados, do Distrito Federal e dos Municípios.</p>
                <p><a class="btn" href="http://www.rbprev.riobranco.ac.gov.br/documentos/rpps_pro_gestao.pdf" target="_blank">Ver mais</a></p>
            </div>
        </div>



        <div class="element-card">
            <div class="front-facing">
                <img
                    src="images/IconsIndex/cert_GreenCarbon.png"
                    alt=""
                    />
                <h1 class="title">Green Carbon</h1>


            </div>
            <div class="back-facing">
                <p>O projeto Green Carbon by NDD, tem como objetivo, reduzir a emissão de dióxido de carbono da natureza plantando árvores.</p>
                <p><a class="btn" href="http://www.rbprev.riobranco.ac.gov.br/documentos/CertificadoGreenCarbon.pdf" target="_blank">Ver mais</a></p>
            </div>
        </div>

        <div class="element-card">
            <div class="front-facing">
                <img
                    src="images/IconsIndex/cert_Prevencao.png"
                    alt=""/>
                <p class="title">Prevenção corrupção</p>

            </div>
            <div class="back-facing">
                <p>O Programa Nacional de Prevenção à Corrupção- PNPC é uma proposta inovadora adotada pela Estratégia Nacional de Combate à Corrupção e à Lavagem de Dinheiro (Enccla).</p>
                <p><a class="btn" href="http://rbprev.riobranco.ac.gov.br/noticias/2021/index.php/2021/08/23/rbprev-recebe-selo-do-programa-nacional-de-prevencao-a-corrupcao-pnpc/" target="_blank">Ver mais</a></p>
            </div>
        </div>

    </div>


    <!-- Fim -->


</body>
<?php include("rodape.php"); ?>







