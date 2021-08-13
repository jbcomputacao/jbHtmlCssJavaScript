<!--
  
Versão: 2.0
Data:14.11.2020

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
   // $qualidade = ($_POST['qualidade']);
    // echo $qualidade;
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
                                                        <b><FONT SIZE= +1 FACE=Times COLOR="#000">FAÇA AQUI O SEU REQUERIMENTO!</FONT></b>
                                                    </div>

                                                </div>                          
                                                <div class="col-lg-12"> 
                                                    <div class="col-lg-3">

                                                    </div>

                                                    <div class="col-lg-7">  



                                                    </div>
                                                </div><!-- /.member-top -->                                         
                                                <div class="col-lg-12">
                                                    <br>

                                                </div>         

                                                <div class="col-lg-12">
                                                   <strong>ATENÇÃO!</strong>&nbsp; Para solicitação, retirada do documento requerido ou andamento processual e, ainda, xerox ou vista do processo, o Requerente deverá comprovar a sua legitimidade e interesse no mesmo, através de documento de identificação e/ou instrumento de procuração e substabelecimento já acostado aos autos ou no ato praticado. 
                                               </div>                                  
                                               <div class="col-lg-12">
                                                <br>                                                
                                                O prazo para emissão de certidões e de guia de recolhimento de multa, como também para vistas e xerox de processos, será comunicado por e-mail e/ou telefone e o atendimento será agendado para trazer maior conforto e segurança. Assim, é necessário que e-mail e telefone sejam informados para que o contato pelo Procon-BA seja realizado com sucesso.

                                            </div>  

                                            <div class="col-lg-12">
                                                <br>                                                
                                                O Procon-BA emite certidões de âmbito estadual (certidão negativa ou positiva) acerca da existência ou não de procedimentos registrados no órgão, em nome de pessoas físicas ou jurídicas. 

                                            </div>  

                                            <div class="col-lg-12">
                                                <br>  
                                                Ressaltamos que os formulários se limitam a 20 solicitações e que os requerimentos de processosdevem ser devidamente identificados pelos seus respectivos números, sejam eles do Sistema SINDEC, que corresponde a uma seqüência numérica identificando a unidade, posto, ano e número específico. Ex. 0110-000.026-1 (numeração antiga) ou 29.001.007.20-076589 (numeração atual); ou ainda do sistema SAPRO, (gerado por Auto de Infração), que correspondente a seqüência numérica identificando ano, posto e número específico. Ex.: 2020.01.12.
                                            </div>  

                                            <div class="col-lg-12">
                                                <br>                                                
                                                Em caso de requerimento de certidão negativa:
                                            </div>  


                                            <div class="col-lg-12">
                                                <h5><b>Quem pode solicitar e como retirá-la:  </b></h5>      
                                            </div> 

                                            <div class="col-lg-12">
                                                A própria parte interessada ou seu representante legal/procurador devidamente habilitado, mediante comprovação nos autos ou juntada dos respectivos documentos de identificação e/ou instrumento de procuração, que deverá ser apresentada para juntada no ato da retirada.  

                                            </div>  

                                            <div class="col-lg-12">
                                                <h5><b>Como requerer:    </b></h5>       
                                            </div> 

                                            <div class="col-lg-12">
                                               Registrar de forma clara e inequívoca através do requerimento online qual a certidão desejada, que deverá conter:  

                                           </div> 

                                           <div class="col-lg-12">
                                            <div class="col-lg-1">

                                            </div>  
                                            <div class="col-lg-11">
                                                - Em caso de pessoa jurídica: a razão social, o nome fantasia e o CNPJ, além de dados de contato.
                                            </div>                                      

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">

                                            </div>  
                                            <div class="col-lg-11">
                                                - Em caso de pessoa física: o nome completo e o CPF e seus dados de contato. 
                                            </div>                                      

                                        </div>                                  

                                        <div class="col-lg-12">
                                            <h5><b>Quando retirar:    </b></h5>      
                                        </div> 

                                        <div class="col-lg-12">
                                           O Procon-BA entrará em contato com a parte requerente, agendando o seu retorno para retirada da documentação solicitada, mediante comprovação de legitimidade.   
                                       </div>  

                                       <div class="col-lg-12">
                                        <h5><b>Validade da certidão      </b></h5>       
                                    </div> 

                                    <div class="col-lg-12">
                                        A certidão tem validade de 30 (trinta) dias a contar da data de sua expedição.      
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



                    <section class="page_section" id="contact">
                        <div id="formulario" class="row">
                            <div class="col-lg-3">

                            </div>

                            <div class="col-lg-9">  
                                <div id="dadosprocon"   class="form">
                                    <div class="sep-dados">
                                        <div>               
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Dados do Solicitante </FONT></b></h4> 
                                        </div>             
                                    </div>  
                                    <br/> 

                                    <!-- Campo do Nome Completo: --> 
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Nome do solicitante: *</b>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <input id="nome" style="min-width: 240px;" class="input-text" type="text" name="nome" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                        </div>
                                    </div> 

                                    <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->                        
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>CPF:*</b>
                                        </div>
                                        <div class="col-lg-4" >
                                            <input id="cpf" style="width: 240px;" name="cpf" type="text" class="input-text-menor" required="required" onkeypress="$(this).mask('000.000.000-00')" onBlur="validaFormato(this);" name="cpf" value=""  onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;""
                                            > <br/><div id ="divResultado"></div>    
                                        </div>

                                        <div class="col-lg-2">
                                            <b>RG:</b>
                                        </div>

                                        <div class="col-lg-3">
                                            <input name="rg" type="text" class="input-text-menor" value=""      onkeypress="return (apenasNumeros(event))" id="rg" style="width: 240px;">

                                        </div> 

                                    </div>  


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Telefone do Solicitante: *</b>
                                        </div>
                                        <div>
                                            <div class="col-lg-4" >
                                                <input id="telefonesolicitante" style="width: 240px;" class="input-text-menor" required="required" type="text" name="telefonesolicitante"   onkeypress="$(this).mask('(00)00000-0000')" onFocus="if (this.value === this.defaultValue)                                                 this.value = '';" required="required" onBlur="if (this.value === '')
                                                this.value = this.defaultValue;"> 

                                            </div>
                                        </div>



                                    </div> 


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>E-mail do solicitante *: </b>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <input id="email" style="min-width: 240px;" class="input-text" type="email" required="required" name="email" value=""  onChange="validaEmail(email)" required="required"><span class="required"></span>
                                        </div>
                                    </div>                              

                                    <div id="div_escritorio" class="row">
                                        <div class="col-lg-3">
                                            <b>Escritório do Representante: *</b>
                                        </div>
                                        <div class="col-lg-4">
                                            <input id="escritoriorepresentante" style="width: 240px;" required="required" class="input-text" type="text" name="escritoriorepresentante" value="">
                                        </div>  

                                        <div class="col-lg-2">
                                            <b>Telefone: *</b>
                                        </div>

                                        <div class="col-lg-3">
                                            <input class="input-text-menor" style="width: 240px;" required="required"  type="text" id="telefoneescritorio" name="telefoneescritorio" onkeypress="$(this).mask('(00) 00000-0000')"  >


                                        </div>

                                    </div>  

                                    <!-- Campo de Solicitante na qualidade  de ... é campo da profissão lembrar de mudar as ids de estado para profissao -->       


                                    <!-- ---------------------------------------------------- inicio e Continuação 08.09.2020 ------------------------------- -->


                                    <div class="sep-dados">
                                        <div>               
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Requerimentos</FONT></b></h4> 
                                        </div>             
                                    </div>  
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Deseja Solicitar : *</b>
                                        </div>
                                        <div class="col-lg-6">
                                            <div  class="div-select" id="divsolicitacao" name="divsolicitacao" onChange="ValidaNome(nome)" required="required">
                                                <span class="required"></span>
                                                <select id="solicitacao" name="solicitacao" style="width: 240px;" >
                                                    <option value="Selecione"> Selecione </option>
                                                    <option value="Andamento de Processo">Andamento de Processo</option>
                                                    <option value="Certidão de Arquivamento">Certidão de Arquivamento</option>                                              
                                                    <option value="Boleto">Guia de Recolhimento de Multa</option>                                              
                                                    <option value="Certidão Negativa">Certidão Negativa</option>                                                
                                                    <option value="Vistas de Processo">Vistas de Processo</option>
                                                    <option value="Xerox de Processo">Xerox de Processo</option>
                                                </select>                                           
                                            </div> 
                                        </div>
                                    </div>  

                                    <div id="div_processo" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <b>Número de Processo: *</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input-text-menor" style="width: 240px;" id="processo" name="processo" onkeypress="$(this).mask('00000000000000000')" onChange="ValidaNome(nome)"><span class="required"></span>                                          
                                            </div>
                                            <br>
                                        </div>

                                    </div>  

                                    <!-- Nova inserção de campo para empresa  na divisao de processo -->
                                    <div id="div_processo_empresa" style="display: none;">

                                        <div class="row">
                                          <div class="col-lg-3">
                                           <b>Nome da empresa representada:</b>
                                       </div>

                                       <div class="col-lg-6">
                                        <input id="empresa" style="min-width: 240px;" class="input-text" type="text" name="empresa" value=""  onChange="ValidaNome(nome)" ><span class="required"></span>
                                    </div>                                        
                                </div>               
                            </div>  


                            <div id="div_certidao" style="display: none;"> 
                               <div class="row">
                                  <div class="col-lg-3">
                                     <b>Dados para Certidão Negativa:</b>          
                                     <br/>
                                 </div>
                             </div>  
                             <br/>

                             <div class="row">                 
                                <div class="col-lg-3">
                                    <b>CNPJ * :</b>
                                </div>

                                <div class="col-lg-9">
                                    <input id="cnpjcertidao" name="cnpjcertidao" type="text" onkeypress="$(this).mask('00.000.000/0000-00')" onChange="ValidarCNPJ(this)"  class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>         
                                </div>         
                            </div>  

                            <div class="row">
                              <div class="col-lg-3">
                                 <b>Razão Social:</b>
                             </div>

                             <div class="col-lg-8">
                                 <input id="razaosocial" style="min-width: 240px;" class="input-text" type="text" name="razaosocial" value=""  onChange="ValidaNome(nome)"  ><span class="required"></span>
                             </div>                                                                                  
                         </div> 
                         <div class="row">

                         </div> 
                         <div class="row">
                          <div class="col-lg-3">
                             <b>Endereço:</b>
                         </div>

                         <div class="col-lg-8">
                             <input id="endereco" style="min-width: 240px;" class="input-text" type="text" name="endereco" value=""  onChange="ValidaNome(nome)" ><span class="required"></span>
                         </div>                                      
                     </div>                                 

                 </div> 

                 <div class="row">
                    <div class="col-lg-3">
                    </br>
                </div>
                <div class="col-lg-6">
                    <button type="button" onclick="adicionar()" class="btn btn-success">Adicionar</button>                                  
                </div>
            </div>  

            <div class="row">

                <div class="col-lg-12">

                    <div name="jgrid" id="divJGrid" class="grid-container">
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-lg-3">
                </br>
            </div>
            <div id="div_remover"  class="col-lg-6">
                <button type="button"  onclick="RemoveRowSelecionada()" class="btn btn-danger">Remover</button>                                         
            </div>
        </div>  

        <div class="row">
            <div class="col-lg-3">
            </br>
        </div>

    </div>  

    <div class="row"> 
        <!--- 1-certo Nova Insercção de informação em mensagem            -->         
        <div class="container">
            <div class="starter-template">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="div_row_error2" class="alert alert-danger" role="alert"><strong></strong> <span id="div_alert_span_error2"></span></div>
                        <div id="div_row_success2" class="alert alert-success" role="alert"><strong></strong> <span id="div_alert_span_success2"></span></div>

                    </div>
                </div>
            </div>
        </div>
        <!---  Nova Insercção de informação em mensagem            -->  
    </div>                                          

    <div class="row">              

        <div class="col-lg-12"> 
            <div id="div_botao_enviar" style="display: none"; role="alert"><span id="div_alert_span_success2"></span>
                <input class="input-btn" type="submit" id="btn-enviar"  value="enviar"> 
            </div>
            <div id="div_enviando"   role="alert"><span id="div_txt_enviando"></span>
                <input class="enviando" type="hidden" id="btn-enviando"  value="AGUARDE: Enviando formulário!"> 
            </div>                                          
            <div id="div_envio_solicitacao" class="alert alert-success" role="alert"><strong></strong> 
                <span id="div_alert_envio_solicitacao"></span>
            </div>

            <div>
                <h3><b><FONT FACE=Times COLOR="#B22111">(Campos com * são obrigatórios) </FONT></b></h3>       
            </div>
        </div>  

        <div class="col-lg-12"> 
            <input id="requisicoes" style="visibility: hidden;"    style="min-width: 240px;" class="input-text" type="text" name="requisicoes" value=""  onChange="ValidaNome(nome)" ><span class="required"></span>
            <input class="input-text-menor" style="visibility: hidden;"   type="text" id="qualidadede" name="qualidadede"  >
        </div>  



    </div>
</div>  
</div>
</section>

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
                <script type="text/javascript" src="js/pedido.js"></script>  
                <script type="text/javascript" src="js/MascaraValidacao.js"></script> 
                <script type="text/javascript" src="js/valida-documento.js"></script> 
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
            
            <script type="text/javascript" src="js/pedido.js"></script>

        </form>

    </body>
    </html>


