<!--
  
Versão: 1.0
Data:08.09.2020 

-->
<!doctype html>
<html>
<head http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Atendimento Copap</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"> 
    <link href="css/jsGrid.css" rel="stylesheet" type="text/css">
    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />

    <style>
        #divResultado{
            font-family: serif;
            font-size: 12px;
            color: blue;
            margin-top: 5px;
        }
    </style>
    <script src="valida-documento.js"></script>
    <script type="text/javascript" src="MascaraValidacao.js"></script>
    <script type="text/javascript" src="js/MascaraValidacao.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/MascaraValidacao.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>
<body>
    <!--Classe php para enviar mensagens-->
    <?php
    session_start();
    if (isset($msg)) {
        echo "<p id=\"msg\">$msg</p>";
    }
    ?>

    <form action="enviarpedido.php" id="formcartorio" method="post" onsubmit='enviar()' accept-charset="utf-8" enctype="multipart/form-data">
        <fieldset>
            <div class="sjdhds_topo">   	
                <div class="sjdhds_topo1"> 		
                    <div style="align-items: center;">
                        <a href="#"><img src="imagem\topo-centro.jpg" alt="logo"></a>
                    </div> 
                </div>

                <div class="sjdhds_topo2"> 		
                    <div class="sjdhds_menu">     
                        <nav id="nav" role="navigation">
                            <a href="#nav" title="Show navigation">Show navigation</a>
                            <a href="#" title="Hide navigation">Hide navigation</a>
                            <ul class="clearfix">
                                <li><a style="color: white; margin-right:5px;" href="http://www.bahia.ba.gov.br/node/3831"> Sites do Governo</a></li>	
                                <li><a style="color: white; margin-right:5px;" href="http://www.transparencia.ba.gov.br/"> Transparência </a></li>		
                                <li><a style="color: white; margin-right:15px;" href="http://www.ouvidoriageral.ba.gov.br" target="_blank"> Ouvidoria Geral </a> </li>
                                <li><a style="color: white;" href="http://www2.ba.gov.br/modules/conteudo/conteudo.php?conteudo=8"> Acessibilidade </a>  </li>					
                            </ul>
                        </nav>                  
                    </div>
                </div>			

            </div>

            <header id="header_wrapper">
                <div class="col-lg-12">

                    <div class="col-lg-3">

                    </div>	
                    <div class="col-lg-3">
                        <div  style="align-items: right;">
                            <picture style="margin-top: 20px; margin-left: 0px;">
                                <source media="(max-width: 299px)" srcset="imagem\governo_bahia_procon.png">
                                    <source media="(max-width: 600px)" srcset="imagem\governo_bahia_procon.png">
                                        <a href="http://www.ba.gov.br/" target="_blank"><img src="imagem\governo_bahia_procon.png"></a>
                                    </picture>					

                                </div>
                            </div>	

                        </div>
                    </header>


                    <div class="col-lg-12">		
                        <br>			
                        <div class="row">
                          <div class="col-lg-1">	
                          </div>
                          <!--page_section-->
                          <div class="sjdhds_logos"><!--client_logos-->
                            <picture style="margin-top: 00px; margin-left: 0px;">
                                <source media="(max-width: 399px)" srcset="imagem\justicasocial-200w.jpg">
                                    <source media="(max-width: 600px)" srcset="imagem\justicasocial-600w.jpg">
                                        <img src="imagem\justicasocial-800w.jpg">
                                    </picture>
                                </div>

                            </div>			

                        </div>
                        <section id="sobre"><!--Aboutus-->	

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">


                                        <br>
                                        <div class="col-lg-3">

                                        </div>
                                        <div class="col-lg-7">			
                                            <div class="col-lg-7">
                                                <!-- Área para preenchimento a esquerda-->	


                                                <div style="margin-top: 00px; margin-left: 0px;"> 
                                                    <b><FONT SIZE= +1 FACE=Times COLOR="#000">PROCON ONLINE!</FONT></b>
                                                </div>

                                            </div>							
                                            <div class="col-lg-12">	
                                                <div class="col-lg-3">

                                                </div>

                                                <div class="col-lg-7">	



                                                </div>
                                            </div><!-- /.member-top -->											
                                            <div class="col-lg-12">
                                                Devido ao distanciamento social, a Superintendência de Proteção e Defesa do Consumidor, Procon-BA, Órgão vinculado à Secretaria de Justiça, Direitos Humanos e Desenvolvimento Social, busca alternativas e medidas para ampliar o seu atendimento, 
                                                proporcionando maior comodidade e agilidade nos serviços que são prestados à população baiana. São eles:
                                            </div>       
                                            <div class="col-lg-12">
                                                <br>
                                                1. Orientações e registro de reclamações individuais, dentre outros;
                                            </div>                  
                                            <div class="col-lg-12">
                                                <br>
                                                2. Andamento de processos, solicitação de Vistas e Xerox de processos, Emissão de Certidões e Guia de recolhimento de multa", dentre outros.
                                            </div>                    
                                            <div class="col-lg-12">
                                                <br>
                                                Pensando nisso foi lançado o <strong>“Formulário de Atendimento”</strong>, uma ferramenta online destinada aos consumidores para efetuar o registro de reclamações individuais ou buscar orientações a respeito de seus direitos e obrigações.
                                            </div> 												 
                                            <div class="col-lg-12">
                                                <br>												
                                                A novidade agora é o lançamento do <strong>“Cartório Virtual”</strong>, mais uma ferramenta online destinada aos consumidores e/ou fornecedores para efetuar o registro de seus requerimentos e solicitações processuais.
                                            </div>  

                                            <div class="col-lg-12">
                                                <br>												
                                                Se você é <strong>CONSUMIDOR</strong> e quer registrar uma reclamação, ou simplesmente busca uma orientação, clique em <strong>“RECLAMAÇÃO/ORIENTAÇÃO”</strong> no botão de <strong>“SOLICITAÇÃO”</strong> logo abaixo. Neste caso, será direcionado ao formulário de atendimento.
                                            </div>   

                                            <br>									
                                            <div class="col-lg-4">
                                             <div id="xtiposolicitacao" style="display:none"    role="alert"><span id="div_alert_span_success2"></span>
                                                <input class="input-btn" style="width: 360px;" onclick="reclamacao()"  " id="btn-enviar"  value="  FAÇA SUA RECLAMAÇÃO INDIVIDUAL AQUI"> 
                                            </div>

                                        </div> 
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <div class="sep-dados">

                                                    <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Solicitação</FONT></b></h4> 
                                                </div>                                                               
                                                <select id="tiposolicitacao" name="tiposolicitacao"style="width: 240px;"  >
                                                    <option value="Selecione">Selecione</option>
                                                    <option value="Reclamação">Reclamação</option>
                                                    <option value="Requisição">Cartório</option>

                                                </select>  


                                            </div> 
                                        </div>

                                        <br>												
                                        <div class="col-lg-12">
                                            <br>
                                            Entretanto, se você precisa dos serviços do Cartório clique em <strong>“CARTÓRIO”</strong> no botão de <strong>“SOLICITAÇÂO”</strong>. Neste caso, será necessária a sua identificação como Consumidor, Advogado, Estagiário ou Preposto.
                                        </div>                    
                                        <div class="col-lg-12">
                                            <br>
                                            Assim, no botão <strong>“NA QUALIDADE DE”</strong>, identifique-se para que seja direcionado ao formulário apropriado. 
                                        </div>                    

                                        <div class="col-lg-12">

                                          <div class="col-lg-4">
                                             <div id="div_botao_enviar" style="display:none"   role="alert"><span id="div_alert_span_success2"></span>
                                                <input class="input-btn" style="width: 360px;"  type="submit" id="btn-enviar"  value="CARTÓRIO ON LINE - FAÇA SUA SOLICITAÇÃO AQUI!”"> 
                                            </div>

                                        </div> 										
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            <div class="sep-dados">

                                                <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Solicitante na Qualidade de</FONT></b></h4> 
                                            </div>                                                               
                                            <select id="tiposolicitante" name="tiposolicitante"style="width: 240px;"  >
                                                <option value="Selecione">Selecione</option>
                                                <option value="Consumidor">Consumidor</option>
                                                <option value="Advogado">Advogado</option>
                                                <option value="Estagiario">Estagiário</option>
                                                <option value="Preposto">Preposto</option>
                                            </select>  

                                        </div>
                                    </div> 
                                    

                                    <div class="col-lg-2">
                                        <br>												

                                    </div>  
                                    <div class="col-lg-12">
                                        <br>												
                                        <strong>ATENÇÃO:</strong>Leia atentamente as orientações referentes aos formulários, pois a não observância das regras e orientações poderá influenciar no resultado esperado.
                                    </div>  
                                    
                                    <div class="col-lg-12">
                                        <br>												
                                        Para <strong>DENÚNCIAS</strong> à Diretoria de Fiscalização acesse o aplicativo <strong>PROCON BA MOBILE</strong> disponível em IOS e Andróide ou, ainda, através do <strong>E-mail: denuncia.procon@sjdhds.ba.gov.br</strong>.   
                                    </div>  


                                    <div class="col-lg-2">
                                        <br>												

                                    </div>    



                                    <div class="col-lg-12">
                                        Acompanhe a SJDHDS nas redes sociais: Facebook, Twitter, Flickr e Instagram.  
                                        <input id="qualidade" style="visibility: hidden;"    style="min-width: 240px;" class="input-text" type="text" name="qualidade" value="" " > 										
                                    </div>

                                    <br>




                                </div> 		
                            </div>

                            

                            <div>
                                <div class="col-lg-2">
                                    <div class="form-esq">
                                        <!-- Área para preenchimento a esquerda-->								
                                    </div>	
                                </div>						
                            </div>
                        </div>

                    </div>
                </div>   




                <!-------------------------------   Finalização do Codigo com Upload .....  ----------------------- -->

                <section class="page_section">
                        <!--sjdhds_footer
                        <a href="#"><img style="magin-top:-7px; magin-left:0px; padding-left:0px; padding-top:-7px; height: 7px;" src="imagem\separadorazul_rodape.jpg"></a>	
                    -->
                    <div class="sjdhds_footer">

                        <div class="row" style=" magin-top:10px 0px 0px 0px; height: 7px;  background:#e41618;">
                            <br>
                        </div> 						
                        <div class="col-lg-12">
                            <div class="col-lg-3" style=" magin-top:0px 0px 0px 0px; height: 7px; ">
                                <br>

                            </div> 
                            <div class="col-lg-9" style=" magin-top:0px 0px 0px 0px;   height: 7px; ">
                                <br>
                                <div class="row">
                                    <h5><b> <FONT FACE=Arial-Narrow COLOR="#808080"> SJDHDS - Secretaria de Justiça, Direitos Humanos e Desenvolvimento Social</FONT></b></h5>		 

                                    <div class="col-lg-11">
                                        <FONT FACE=Arial-Narrow COLOR="#808080"> 3ª Avenida, Plataforma 4, nº 390, 1º andar, CAB</FONT>
                                    </div> 
                                    <div class="col-lg-11">
                                        <FONT FACE=Arial-Narrow COLOR="#808080"> CEP 41.745-005 - Salvador - Bahia</FONT>	

                                    </div> 
                                    <div class="col-lg-11">

                                        <a href="https://www.google.com/maps/place/Secretaria+De+Justi%C3%A7a,+Direitos+Humanos+E+Desenvolvimento+Social/@-12.9491998,-38.4358037,17z/data=!3m1!4b1!4m5!3m4!1s0x7161002f9d9d161:0x964cdb1f6533d3cc!8m2!3d-12.949205!4d-38.433615?hl=pt" target="_blank">
                                            <img src="imagem\Localizacao SJDHDS.png" alt="logo"></a><a href="https://www.google.com/maps/place/Secretaria+De+Justi%C3%A7a,+Direitos+Humanos+E+Desenvolvimento+Social/@-12.9491998,-38.4358037,17z/data=!3m1!4b1!4m5!3m4!1s0x7161002f9d9d161:0x964cdb1f6533d3cc!8m2!3d-12.949205!4d-38.433615?hl=pt" target="_blank"> <strong>Localização</strong></a>. 
                                        </div> 		

                                        <div class="col-lg-11">
                                            <br>
                                            Exerça sua cidadania.<a href="http://www.ouvidoria.ba.gov.br/" target="_blank"> <strong>Fale com a Ouvidoria.</strong></a>. 
                                        </div> 
                                    </div> 				
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <br>
                                            <div class="float-right d-none d-sm-inline-block">
                                                <small>CGO-TIC &copy; 2020 <a href="http://justicasocial.ba.gov.br">Justiça Social</a>.</small><small><b> v.</b> 1.0.0</small>
                                            </div>	
                                        </div> 		

                                    </div> 					
                                </div> 	
                            </div> 		

                        </div>

                    </section> 

                    <!--Footer-->

                </section>				
                <script src="js/jquery.js"></script>
                <script type="text/javascript" src="js/index.js"></script>
                 <script type="text/javascript" src="js/MascaraValidacao.js"></script> 
                <script type="text/javascript" src="js/valida-documento.js"></script> 
                <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
                <script type="text/javascript" src="js/jquery.nav.js"></script> 
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.isotope.js"></script>
                <script type="text/javascript" src="js/wow.js"></script> 
                <script type="text/javascript" src="js/custom.js"></script>
                <script src="js/jquery.flexslider.js"></script>					
                <script src="js/jsGrid.js"></script>

            </fieldset>
            <script type="text/javascript" src="js/index.js"></script>
        </form>

    </body>
    </html>


