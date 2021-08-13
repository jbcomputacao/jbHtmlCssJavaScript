<!--
  
Versão: 1.2.0 
Data:26.08.2020 

-->
<!doctype html>
<html>
    <head http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>Atendimento PROCON</title>
        <link rel="icon" href="favicon.png" type="image/png">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"> 
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
        <script type="text/javascript" src="js/MascaraValidacao.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/MascaraValidacao.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    </head>
    <body>
        <!--Classe php para enviar mensagens-->
        <?php
        if (isset($msg))
        {
            echo "<p id=\"msg\">$msg</p>";
        }
        ?>

        <form action="enviar.php" id="formprocon" method="post" onsubmit='enviar()' accept-charset="utf-8" enctype="multipart/form-data">
            <fieldset>
                <div class="sjdhds_topo">   	
                    <div class="sjdhds_topo1"> 		
                        <div style="align-items: center;">
                            <a href="#"><img src="imagem\topo-centro.jpg" alt="logo"></a>
                        </div> 
                    </div>

                    <div class="sjdhds_topo2"> 		
                        <div class="sjdhds_menu">     
                            <a style="color: white; margin-right:20px;" href="http://www.bahia.ba.gov.br/node/3831"> Sites do Governo</a>
                            <a style="color: white; margin-right:20px;" href="http://www.transparencia.ba.gov.br/"> Transparência </a>
                            <a style="color: white; margin-right:20px;" href="http://www.ouvidoriageral.ba.gov.br" target="_blank"> Ouvidoria Geral </a> 
                            <a style="color: white;" href="http://www2.ba.gov.br/modules/conteudo/conteudo.php?conteudo=8"> Acessibilidade </a>                   
                        </div>
                    </div>			
                </div>

                <!--Tirei uma div daqui </div>, nao sei para que ela estava aqui-->

                <!--Header_section-->
                <header id="header_wrapper">
                    <div class="col-lg-12">
                        <div class="col-lg-1">

                        </div>	
                        <div class="col-lg-2">
                            <div  style="align-items: right;">
                                <picture style="margin-top: 00px; margin-left: 0px;">
                                    <source media="(max-width: 299px)" srcset="imagem\logo-200w.jpg">
                                    <source media="(max-width: 600px)" srcset="imagem\logo-400w.jpg">
                                    <a href="http://www.ba.gov.br/" target="_blank"><img src="imagem\logo-800w.jpg"></a>
                                </picture>					

                            </div>
                        </div>				
                        <div class="col-lg-8">
                            <div class="header_box">

                                <picture style="margin-top: 00px; margin-left: 0px;">
                                    <source media="(max-width: 399px)" srcset="imagem\covid-400w.jpg">
                                    <source media="(max-width: 600px)" srcset="imagem\covid-800w.jpg">
                                    <a href="http://www.saude.ba.gov.br/temasdesaude/coronavirus/" target="_blank"><img src="imagem\covid-800w.jpg"></a>
                                </picture>																																																		
                            </div>
                        </div>	

                    </div>
                </header>

                <div class="col-lg-12">		
                    <br>			
                    <div class="row">

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




                <!--Header_section--> 
                <section id="sobre"><!--Aboutus-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-3">

                                </div>
                                <div class="col-lg-7">			
                                    <div class="col-lg-7">
                                        <!-- Área para preenchimento a esquerda-->	
                                        <picture style="margin-top: 00px; margin-left: 0px;">
                                            <source media="(max-width: 399px)" srcset="imagem\procon-200w.jpg">
                                            <source media="(max-width: 600px)" srcset="imagem\procon-400w.jpg">
                                            <img src="imagem\procon-800w.jpg">
                                        </picture>	

                                        <div style="margin-top: 00px; margin-left: 0px;"> 
                                            <b><FONT SIZE= +1 FACE=Times COLOR="#000">FAÇA AQUI O SEU REQUERIMENTO!</FONT></b>
                                        </div>

                                        <br>
                                    </div>							
                                    <div class="col-lg-12">	
                                        <div class="col-lg-3">

                                        </div>

                                        <div class="col-lg-7">	



                                        </div>
                                    </div><!-- /.member-top -->	
                                    <div class="col-lg-12">
                                       <strong>ATENÇÃO!</strong>Para solicitação, retirada do documento requerido ou andamento processual e, ainda, xerox ou vista do processo, o Requerente deverá comprovar a sua legitimidade e interesse no mesmo, através de documento de identificação e/ou instrumento de procuração e substabelecimento já acostado aos autos ou no ato praticado. 
                                    
                                    </div>     										
                                    <div class="col-lg-12">
                                        O prazo para emissão de certidões e de Guia de recolhimento de multa", como também para vistas e xerox de processos, será comunicado por e-mail e/ou telefone e o atendimento será agendado para trazer maior conforto e segurança. Assim, é necessário que e-mail e telefone sejam informados para que o contato pelo Procon-BA seja realizado com sucesso.
                                    </div>         
                                    <div class="col-lg-12">
                                        <br>
                                        O Procon-BA emite certidões de âmbito estadual (certidão negativa ou positiva) acerca da existência ou não de procedimentos registrados no órgão, em nome de pessoas físicas ou jurídicas. 
                                    </div> 												 
                                    <div class="col-lg-12">
                                        <br>												
                                        Ressaltamos que os formulários se limitam a 20 solicitações e que os requerimentos de processos devem ser devidamente identificados pelos seus respectivos números, sejam eles do Sistema SINDEC, que corresponde a uma seqüência numérica identificando a unidade, posto, ano e número específico. Ex. 0110-000.026-1 (numeração antiga) ou 29.001.007.20-076589 (numeração atual); ou ainda do sistema SAPRO, (gerado por Auto de Infração), que correspondente a seqüência numérica identificando ano, posto e número específico. Ex.: 2020.01.12.

                                        

                                    </div>  

                                    
                                    <div class="col-lg-12">
                                        <br>												
                                        Em caso de requerimento de certidão:  
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
                                        
                                        - Em caso de pessoa jurídica: a razão social, o nome fantasia e o CNPJ, além de dados de contato.  
                                        - Em caso de pessoa física: o nome completo e o CPF e seus dados de contato.

                                           
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

                                    <div class="col-lg-12">
                                        <br>
                                    </div> 
                                    <div class="col-lg-12">
                                        <div class="col-lg-1">

                                        </div> 											

                                    </div> 

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
                        <div class="row">
                            <div class="col-lg-3">

                            </div>
                            <div class="col-lg-9">	
                                <div id="dadosprocon" class="form">
                                    <div class="sep-dados">
                                        <div> 				
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Dados para Solicitação </FONT></b></h4> 
                                        </div>              
                                    </div> 		  

                                    <!-- Campo do Nome Completo: --> 
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Nome Completo: *</b>
                                            </div>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="nome" class="input-text" type="text" name="nome" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                        </div>
                                    </div> 	

                                    <!-- Data do Nascimento --> 
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Data de Nascimento: *</b>
                                            </div>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="datenas" type="date" class="input-text-menor"  name="datenas" value="" onChange="ValidaData(datenas)">
                                        </div>
                                    </div> 							

                                    <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->  						
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>CPF:</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="cpf" name="cpf" type="text" class="input-text-menor" onBlur="validaFormato(this);" onkeypress="$(this).mask('000.000.000-00')"  name="cpf" value=""  onFocus="if (this.value === this.defaultValue)
                                                        this.value = '';" required="required" onBlur="if (this.value === '')
                                                                    this.value = this.defaultValue;""><br/> <div id="divResultado"></div>         
                                        </div>          
                                    </div>  
                                    <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo--> 		  
                                    <div class="sep-dados">
                                        <div> 				
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Dados para Solicitação </FONT></b></h4> 
                                        </div>             
                                    </div> 	
                                    <br/><br/>

                                    <!-- Campo do Nome Completo: --> 
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Nome do solicitante: </b>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <input id="nome" class="input-text" type="text" name="nome" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                        </div>
                                    </div> 



                                    <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->  						
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>CPF:</b>
                                        </div>
                                        <div class="col-lg-5">
                                            <input id="cpf" name="cpf" type="text" class="input-text-menor" onBlur="validaFormato(this);" onkeypress="$(this).mask('000.000.000-00')"  name="cpf" value=""  onFocus="if (this.value === this.defaultValue)
                                                        this.value = '';" required="required" onBlur="if (this.value === '')
                                                                    this.value = this.defaultValue;
                                                                > <br/> < div id ="divResultado"></div>    

                                    </div>  

                                    <div class="row">                 
                                        <div class="col-lg-3">
                                            <b>CNPJ:</b>
                                        </div>

                                        <div class="col-lg-5">
                                            <input id="cnpj" name="cnpj" type="text" onkeypress="$(this).mask('00.000.000/0000-00')" onChange="ValidarCNPJ(this)" class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>         
                                        </div>         
                                    </div>  

                                    <!-- Campo de RG - verificar ainda JS e jquery para teste desse campo-->		  		  
                                    <div class="row">           
                                        <div class="col-lg-3">
                                            <b>RG - Identidade:</b>
                                        </div>

                                        <div class="col-lg-5">
                                            <input name="rg" id="rg" type="text" class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>
                                        </div>  
                                    </div>


                                    <!-- Campo de Telefone com mascara JS e jquery para teste desse campo -->         
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Telefone: *</b>
                                        </div>

                                        <div class="col-lg-5">
                                            <input class="input-text-menor" type="text" name="telefone" onkeypress="$(this).mask('(00) 00000-0000')"  onFocus="if (this.value === this.defaultValue)
                                                        this.value = '';" required="required" onBlur="if (this.value === '')
                                                                    this.value = this.defaultValue;">

                                        </div>
                                    </div>

                                    <!-- Campo de Solicitante na qualidade  de ... é campo da profissão lembrar de mudar as ids de estado para profissao -->       

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Solicitante na qualidade de: *</b>
                                        </div>
                                        <div class="col-lg-9">
                                            <div  class="div-select" >
                                                <select id="tiposolicitante" name="tiposolicitante" >
                                                    <option> - - -   S e l e c i o n e         - - - </option>
                                                    <option value="Consumidor">C o n s u m i d o r</option>
                                                    <option value="Advogado">A d v o g a d o</option>
                                                    <option value="Estagiario">E s t a g i á r i o</option>
                                                    <option value="Preposto">P r e p o s t o</option>
                                                </select>  
                                            </div>         
                                            <br>
                                        </div>
                                    </div>   

                                    <div class="row">				 
                                        <div style="margin-left: 20px;"> 				
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Documentos de Representação do Solicitante:</FONT></b></h4> 
                                        </div>             	
                                        <br>
                                    </div>

                                    <!-- Campo do DOCUMENTO  DE REPRESENTANTE: --> 
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Documento de Representação do Solicitante: </b>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col-lg-7">
                                            <input id="docrepsolicitante" class="input-text" type="text" name="docrepsolicitante" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                        </div>
                                        <BR>
                                    </div> 

                                    <!-- Campo de Telefone com mascara JS e jquery para teste desse campo-->         
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Telefone do Solicitante: *</b>
                                        </div>

                                        <div class="col-lg-5">
                                            <input id="telefonesolicitante"class="input-text-menor" type="text" name="telefonesolicitante" onkeypress="$(this).mask('(00) 00000-0000')"  onFocus="if (this.value === this.defaultValue)
                                                        this.value = '';" required="required" onBlur="if (this.value === '')
                                                                    this.value = this.defaultValue;">
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="col-descricao">
                                                <b>Escritório do Representante: </b>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col-lg-7">
                                            <input id="escritoriorepresentante" class="input-text" type="text" name="escritoriorepresentante" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                        </div>
                                        <BR>
                                    </div> 

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Telefone do Escritório: *</b>
                                        </div>

                                        <div class="col-lg-5">
                                            <input class="input-text-menor" type="text" id="telefoneescritorio" name="telefoneescritorio" onkeypress="$(this).mask('(00) 00000-0000')"  onFocus="if (this.value === this.defaultValue)
                                                        this.value = '';" required="required" onBlur="if (this.value === '')
                                                                    this.value = this.defaultValue;">
                                            <br>
                                        </div>
                                    </div>
                                    <!-- ---------------------------------------------------- inicio e Continuação 08.09.2020 ------------------------------- -->
                                    <script type="text/javascript">

                                        function adicionar() {
                                            //adicionar numeros de Processos em Linhas 
                                            var proc = document.getElementById("processo").value;
                                            var vx = document.getElementById("vistaxerox").value;
                                            var lista = document.getElementById("lista").innerHTML;

                                            var opcao = "";
                                            lista = (lista + proc + "  -  " + vx + "\n");
                                            document.getElementById("lista").innerHTML = lista;



                                            if (lista === opcao) {
                                                alert('Deseja inserir Outro?!!!');
                                            } else {
                                                if (document.getElementById("lista").length >= 3) {
                                                    alert("Quantidade maxima permitida");
                                                    lista.focus();
                                                    var cont = lista;
                                                    return;
                                                }
                                            }

                                        }

                                        function remover() {

                                            document.getElementById("lista").innerHTML = lista;
                                            lista.pop();

                                        }




                                        function alertprocesso() {
                                            alert('Deseja Continuar Inserindo? ');
                                        }


                                        function alertprocesso() {
                                            alert('Deseja Continuar Inserindo? ');
                                        }

                                        // Analisar esse ponto e verificar os erros... cansaço para tentar verificar no termino da noite...


                                    </script>
                                    <br/>
                                    <div class="row">		
                                        <div class="col-lg-3">
                                            <b>Deseja Solicitar : *</b>
                                            </br>
                                            </br>
                                        </div>
                                    </div>

                                    <div class="row">		
                                        <div class="col-lg-3">
                                            <b>Número de Processo: *</b>
                                        </div>

                                        <div id="geral">
                                            <select style="width:250px; heigth:850px;" id="vistaxerox" name="vistaxerox" >
                                                <option> S e l e c i o n e</option>
                                                <option value=""></option>
                                                <option value="Arquivamento">A r q u i v a m e n t o </option>
                                                <option value="Certidão">C e r t i d ã o </option>
                                                <option value="Vistas">V i s t a s</option>
                                                <option value="Xerox">X e r o x</option>
                                            </select>  
                                            <input type="text" id="processo" name="processo" onFocus="if (this.value === this.defaultValue)
                                                     this.value = '';" required="required" onBlur="if (this.value === '')
                                                                 this.value = this.defaultValue;"/>
                                        
                                        <button type="button" onclick="adicionar()" class="btn btn-success">Adicionar</button>

                                        <button type="button" onclick="remover()" class="btn btn-danger">Remover</button>

                                        <br>
                                        <br>
                                        <div class="col-lg-9">
                                            <textarea name="lista" disabled="" style="margin: 10px 220px "  type="text" id="lista" rows="6" cols="60"></textarea>
                                        </div>
                                        </div>
                                    </div>


                                </div>	
                            </div>
                    </section>
                    </div>    

                    <!-- Formulario End -->
                    </div>  


                    <div class="main">		
                        <!-- Tirei duas div daqui </div>, nao sei para que ela estava aqui -->

                        <section class="page_section">
                            <!--sjdhds_footer
                            <a href="#"><img style="magin-top:-7px; magin-left:0px; padding-left:0px; padding-top:-7px; height: 7px;" src="imagem\separadorazul_rodape.jpg"></a>	
                            -->
                            <div class="sjdhds_footer">
                                <div class="col-lg-12">
                                    <br>		
                                    <div class="col-lg-4" style=" magin-top:0px 0px 0px 0px; height: 7px; background:#e41618;">
                                        <br>
                                        <a href="#"><img style="float: right; padding-left: 0px" src="imagem\barra_rodape.jpg" alt="logo"></a>
                                    </div> 
                                    <div class="col-lg-8" style=" magin-top:0px 0px 0px 0px;   height: 7px; background:#037cc5;">
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
                                                    <small>CGO-TIC &copy; 2020 <a href="http://justicasocial.ba.gov.br">Justiça Social</a>.</small><small><b> v.</b> 1.2.0</small>
                                                </div>	
                                            </div> 		

                                        </div> 					
                                    </div> 	
                                </div> 		

                            </div>

                        </section> 

                        <!--Footer-->

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



                        </fieldset>

                        </form>
                        </body>
                        </html>