<?php
include("cabecalho.php");
include('db/consultas.php');
// Include WordPress

/* define('WP_USE_THEMES', false);
  require('./noticias/2021/wp-load.php');
  $query = new WP_Query(array(
  'posts_per_page' => 3,
  'no_found_rows' => true,
  ));
  //
  // Define quantos posts serão exibidos
  query_posts('showposts=3'); */
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/cardsComunicacao/style.css">
</head>
<body>

    <style>
       containerTeste {
            font-size: 14px;
            color: #666666;
            font-family: "Open Sans";
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            var ls1 = sessionStorage.getItem("modal1");
            // var ls2 = sessionStorage.getItem("modal2");
            if (!ls1) {
                $(window).on('load', () => {
                    $('#avisoModal').modal('show');
                    sessionStorage.setItem("modal1", true);
                    // 				$('#exampleModal1').modal('show');
                    // window.open('cedula_c_tutorial.php', '_self');
                    // 				sessionStorage.setItem("modal2", true);
                });
            }
        });

    </script>

    <div class="modal fade" id="avisoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="images/COMUNICADO.png">
                </div>
            </div>
        </div>
    </div>	


    <!--<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                    <img class="img-fluid" src="images/recadastramento_online.jpeg">
                            </div>
                            <div class="container d-flex">
                                    <a class="trd-btn" href="https://forms.gle/KK5foNjzbv2bdsnz7">Formulário</a>
                                    <a class="trd-btn" href="https://wa.link/8bg39q">Fale conosco via WhatsApp<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" width="24" height="24" focusable="false"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg></a>
                            </div>
                            <hr>
                    </div>
            </div>
            </div>-->
    <!-- SLIDE -->
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
                <!-- <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center min-vh-100">
                                <a href="sobre-o-recadastramento.php">
                                        <img src="images/banner_recadastramento.jpg" alt="Recadastramento" class="img-fluid" />
                                </a>
                        </div>
                        </div> -->
                <!-- <div class="carousel-item">
                        <a href="documentos/novembro_azul.pdf">
                                <img src="images/novembro_azul.png" alt="" class="img-fluid" />
                        </a>
                        </div> -->
                <!-- <div class="carousel-item">
                        <a href="http://rbprev.riobranco.ac.gov.br/noticia_p080819.php">
                                <img src="images/ReceitaComprev.png" alt="Comprev" class="img-fluid" />
                        </a>
                        </div>
                        <div class="carousel-item">
                        <a href="http://rbprev.riobranco.ac.gov.br/artigo_fprev.php">
                                <img src="images/bannersitefprev.png" alt="" class="img-fluid" />
                        </a>
                        </div> -->
                <!-- <div class="carousel-item active">
                        <a href="documentos/cartilha_reforma.pdf">
                                <img src="images/cartilha_reforma.png" alt="" class="img-fluid" />
                        </a>
                        </div>-->

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

                <!-- <div class="carousel-item active">
                        <a href="outubro_rosa.php" target="_blank">
                        <img src="images/outubro_rosa.png" class="img-fluid " alt="Outubro rosa">
                        </a>  
                </div> -->

                <!-- <div class="carousel-item active">
                        <a href="https://sistema.ouvidorias.gov.br/publico/AC/RioBranco/manifestacao/RegistrarManifestacao" target="_blank">
                        <img src="images/Banner_ouvidoria-rbr.png"  class="img-fluid " alt="Prefeitura de Rio Branco">
                        </a>  
                </div> -->
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

    <br>    <br>    <br>    <br>    <br>


    <!-- AREA DE SERVICOS -->


    <div class="containerTeste">
        <div class="row pt-5 m-auto">
            <div class="col-md-3 col-lg-3 pb-3">

                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="css/cardsComunicacao/ateniment.png" alt="Avatar" />
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Atendimento</h4>
                        <p class="card-text justify-content-sm-center"> Telefone e e-mails de contato para retirada de dúvidas e questionamentos.</p>
                    </div>
                    
                </div>
                <!-- Copy until here -->

            </div>
            <div class="col-md-3 col-lg-3 pb-3">

                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="css/cardsComunicacao/duvi.png" alt="Avatar" />
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Duvidas frequentes</h4>
                        <p class="card-text">Principais dúvidas relativas ao  Regime Próprio de Previdência Social</p>
                    </div>
                    
                </div>
                <!-- Copy until here -->

            </div>
            <div class="col-md-3 col-lg-3 pb-3">

                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="css/cardsComunicacao/rule.png" alt="Avatar" />
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Regras aposentadoria</h4>
                        <p class="card-text justify-content-sm-center"> Cartilhas para conferência de regras  para a aposentadeoria.</p>
                    </div>
                   
                </div>
                <!-- Copy until here -->

            </div>
            <div class="col-md-3 col-lg-3 pb-3">

                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="css/cardsComunicacao/requerimento.png" alt="Avatar" />
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Requerimentos</h4>
                        <p class="card-text">Requerimentos de pensão, aposentadoria, requisições de junta médico e outros formulário.</p>
                    </div>
                    
                </div>
                <!-- Copy until here -->

            </div>
        </div>
    </div>






















    
    
</body>
<?php include("rodape.php"); ?>

