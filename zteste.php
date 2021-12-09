<?php include("cabecalho.php"); ?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/index/teste.js"></script>
    <script src="js/index/teste_modal.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
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
    <div class="container px-4 py-5" id="custom-cards">
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
    
    
    
    <!--inICIO DO CAROUSEL -->
    <div class ="row">
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
    </div>
    <!-- FIM CAROUSEL -->
    <!-- inicio -->
    <div class="bg-image" style=" background-image: url('https://lh3.googleusercontent.com/S70mUfNVAso-xiZbOdiTitEmwsSfU0HVMKJsBFaCc3vcZtgiSgptSvUP39tS12Mf-_zNVMb3UulMth0MBvX49mk_tZyvBrUmRuHN0puqd9N0kDpTn9o5HBTDm2T53Tw1JzyWFkiCGGh5MuLOgCAj-nn0SUZfYITv3D8um440JDsaEOZ9uyPQThtPZ6mbmQKoG6RcIaM99pSfNIv5VGEeVNA6i8ru_p6Do8AEADhPy1dLCtoKPDlBa1womMr8N-XPhJWH0Cj7lCXMHHElj1e_zcuP6pfHoyTpR11QcsHtiMaXRn1TF7PTj1zDr-cQ-NJutWkvRZIPzxRuDsaoV4Ah_mTEhWRwKAqAwNZRBX0tEexkRmotuBmJtfS8T-OGraxfXh5Ab6gkGoFf_1Vq38asEdnk5PKKpCk1QIJir0HAM42bjGfTE_ZVLwF5QOxmoAKlnXLcEOXXvQ4HADm3Ziv-dF43coueaYiIKlQZ3GEjqKRqmooIgIlMx3yrSL_TVzZueV4WIJY8xfpySdpiNYQQJY04FUoWrMdpe8O3QW6BEq82tHhOjKGGtRqWfYxlbmygAo84-JKMUKE323tvG7omMNFMZ2Bki1KTjZGe5zFdfUqxZy2J-ouWPQUap__N7Up6CQcbGcxQqTRGsmb8k548L74NfGhPVj1KHpzTcoVvuYuKE3o_A1K4bM404fzFGitsoDXX7UZ458OhhSucrpdRr8oL9A=w1440-h581-no?authuser=0');
         height: 420px;">
        <div class="container px-1 py-1" id="custom-cards">        
            <div class="card-body">
                <h3 class="text-center text-white">RBPREV NÚMEROS</h3>
                <div class="card-body">       
                    <div class="col-6 col-lg-6">
                        <img src="images/IconsIndex/rbprevnumber.png" alt="alt"/>
                    </div>                                           
                    <div class="card border-primary mb-3">
                        <div class="card-body text-primary">
                            <p class="card-text text-justify">
                                O RBPREV em números traz informações sobre o Regime Próprio de Previdência do Município de Rio Branco. A publicação apresenta informações referentes às atividades desenvolvidas pelo RBPREV na gestão dos Fundos Previdenciário e Financeiro, tanto concernente às concessões dos benefícios previdenciários quanto à gestão financeira e meta atuarial.               
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="card bg-dark">
                        <a href="rbprevEmNumeros.php" class="card-link">
                            <div class="card-body text-center">
                                <p class="card-text"><font color="#fff">RBPREV em Números</font></p>
                            </div>
                        </a>
                    </div>
                    <!-- comment -->
                    <!-- comment -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fim -->
    <!-- Inicio -->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">NOTÍCIAS RBPREV</h2>

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


    <!--Fim do teste-->
</body>
<?php include("rodape.php"); ?>