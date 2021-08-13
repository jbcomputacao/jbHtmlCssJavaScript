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
                                    Prezados usuários!
                                    </div>       
                                      <div class="col-lg-12">
                                    <br>
                                    </div>									
                                    <div class="col-lg-12">
                                    O serviço encontra-se em manutenção com previsão de retorno as 09:00 do dia 04/03/2021!  
                                    </div>   

                                      <div class="col-lg-12">
                                    <br>
                                    </div>

                                    <div class="col-lg-12">
                                        Contamos com sua compreensão.  
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


                    <script type="text/javascript">


                        var form_being_submitted = false;
 
                        $(document).ready(function (e) {

                            $('#div_row_success').hide();
                            $('#div_row_error').hide();
                            $('#div_row_success2').hide();
                            $('#div_row_error2').hide();
                            $('#div_envio_solicitacao').hide();
                            $('#div_remover').hide();			
							
							$("#tiposolicitacao").change(function () {
								solicitacao ();
							});	

							$("#tiposolicitante").change(function () {
								solicitante ();
							});									

							$("#solicitacao").change(function () {
                                var pedi = document.getElementById("solicitacao").value;								
 
								if (pedi === "Certidão Negativa")
								{	
 
									$('#div_certidao').css("display","inherit");	
									$('#div_processo').css("display","none");									
 
								}
								else
								{
									$('#div_certidao').css("display","none");	
									$('#div_processo').css("display","inherit");										
 								

									
								}								
								
								
							});	
                            // => Execute on click submit buttom
                            $("#tiposolicitacao").click(function ()
                            {

                                                var inpObj = document.getElementById("formcartorio");
                                                if (inpObj.checkValidity())
                                                {
													alert (linha);
                                                    if (linha === 0 )
                                                        alert('Requerimento não preenchido!');													
													
                                                    if (form_being_submitted)
                                                        alert('Sua solicitação está sendo processada. Favor Aguardar!');

                                                    form_being_submitted = true;
                                                    //$("#btn-enviar").prop("type", "hidden");
                                                    $("#btn-enviando").prop("type", "textarea");
                                                    //window.location.href = "enviar.php";
                                                }
							}
													
							
							);
                        }
                        );
                        // => ENVIAR
						function solicitacao()
                        {
							var pedi = document.getElementById("tiposolicitacao").value;
							var orig = document.getElementById("tiposolicitante").value;							
							if (pedi === "Reclamação")
 								window.location.assign("./reclamacao.php");
							else
							if (!(pedi === "Selecione")	&& !(orig === "Selecione"))	
								if (orig === "Consumidor")
									window.location.assign("./consumidor.php");
								else													
									window.location.assign("./pedido.php");		
								 						
                        }
							function solicitante()
							{
							var pedi = document.getElementById("tiposolicitacao").value;
							var orig = document.getElementById("tiposolicitante").value;		
							if (pedi === "Selecione")	
								alert("Informe o tipo de solicitação");
else								
							if (pedi === "Requisição")
								if (orig === "Consumidor")
									window.location.assign("./consumidor.php");
								else						
 								
 								window.location.assign("./pedido.php");							
								
                        }					
						
                        function reclamacao()
                        {

							window.location.assign("./reclamacao.php");
                        }						
						
                        function fxdgdg()
                        {

                            var btn = document.getElementById('btn-enviar');
                            btn.disabled = true;
                            btn.innerText = 'Enviando...';
                        }

                        function desabilitaBotao() {
                            document.getElementById("#btn-enviar").disabled = true;
                        }

                        $("#cbtn-enviar").on("click", function () {
                            $(this).prop("disabled", true);
                        });
                        //alert('ENVIAR');

                        // => Just show alerts
                        function alertErrorShow(message) {
                            $('#div_row_error2').hide();
                            $('#div_row_success2').hide();
                            $('#div_row_success').hide();
                            $('#div_alert_span_error').html(message);
                            $('#div_row_error').show();
                        }

                        // => Just show alerts
                        function alertSuccessShow(message) {
                            $('#div_row_error2').hide();
                            $('#div_row_success2').hide();
                            $('#div_row_error').hide();
                            $('#div_alert_span_success').html(message);
                            $('#div_row_success').show();
                        }
                        // => Just show alerts
                        function alertErrorShow2(message) {
                            $('#div_row_error').hide();
                            $('#div_row_success').hide();
                            $('#div_row_success2').hide();
                            $('#div_alert_span_error2').html(message);
                            $('#div_row_error2').show();
                        }

                        // => Just show alerts
                        function alertSuccessShow2(message) {
                            $('#div_row_error').hide();
                            $('#div_row_success').hide();
                            $('#div_row_error2').hide();
                            $('#div_alert_span_success2').html(message);
                            $('#div_row_success2').show();
                        }
                        function alertEnvioShow(message) {
                            $('#div_row_error').hide();
                            $('#div_row_success').hide();
                            $('#div_row_error2').hide();
                            $('#div_row_success2').hide();
                            $('#div_botao_enviar').hide();
                            $('#div_alert_envio_solicitacao').html(message);
                            $('#div_envio_solicitacao').show();
                        }
                    </script>

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

        </form>

    </body>
</html>


