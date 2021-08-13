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
                        <nav id="nav" role="navigation">
                            <ul class="clearfix">
                                <li><a style="color: white; margin-right:5px;"  href="http://www.bahia.ba.gov.br/node/3831"> Sites do Governo</a></li>	
                                <li><a style="color: white; margin-right:5px;"  href="http://www.transparencia.ba.gov.br/"> Transparência </a></li>		
                                <li><a style="color: white; margin-right:15px;" href="http://www.ouvidoriageral.ba.gov.br" target="_blank"> Ouvidoria Geral </a> </li>
                                <li><a style="color: white;"                    href="http://www2.ba.gov.br/modules/conteudo/conteudo.php?conteudo=8"> Acessibilidade </a>  </li>					
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




                        <!--Header_section--> 
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
                                                <b><FONT SIZE= +1 FACE=Times COLOR="#000">FAÇA AQUI A SUA RECLAMAÇÃO! </FONT></b>
                                            </div>
                                            <br>
                                        </div>							
                                        <!-- /.member-top -->											
                                        <div class="col-lg-12">
                                           
                                            <div class="col-lg-12">
                                             
                                                <strong>ATENÇÂO!</strong> A ferramenta ficará disponível temporariamente e é destinada ao consumidor que não encontrar a empresa reclamada na Plataforma <a href="http://www.consumidor.gov.br"> <strong>consumidor.gov.br</strong></a>, também disponível pelos aplicativos IOS e Android. 
                                                
                                            </div> 												 
                                            
                                            <div class="col-lg-12">
                                               <br>
                                               <h5><b>ORIENTAÇÕES:</b></h5>		 
                                           </div> 

                                           <div class="col-lg-12">

                                            Antes de preencher seu formulário, digite o nome da empresa reclamada no link disponível na plataforma <a href="http://www.consumidor.gov.br"> <strong>consumidor.gov.br</strong></a>, pois não serão aceitas reclamações através deste Formulário de Atendimento quando a empresa reclamada estiver cadastrada naquela plataforma. 
                                        </div>  
                                        <div class="col-lg-12">
                                            <br>
                                            Preencha todos os dados obrigatórios, descreva o fato e o pedido, anexe a documentação, pois na ausência de clareza ou dos dados indispensáveis para apuração e resolução do seu problema, a sua reclamação não será analisada pelo fornecedor e nem registrada no banco de dados do PROCON-BA.		 
                                        </div>  
                                        <div class="col-lg-12">
                                            <br>
                                            Caso seja necessária a apresentação de nova documentação, procure encaminhá-la no prazo solicitado, pois,caso contrário, sua reclamação não será analisada, devendo iniciar novo processo de preenchimento do formulário.
                                        </div> 
                                        <div class="col-lg-12">
                                            <br>
                                            Neste momento, somente serão tratadas reclamações contra empresas que não participem da plataforma consumidor.gov.br. O tamanho de cada documento anexo à solicitação (procuração, nota fiscal, foto, etc.) não pode exceder 2MB.
                                            
                                        </div>									
                                        <div class="col-lg-12">
                                            <br>
                                            Não serão registradas/tratadas reclamações que não estejam acompanhadas dos documentos abaixo:
                                            
                                        </div>

                                        <div class="col-lg-12">
                                            <br>
                                        </div> 
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">

                                            </div> 											
                                            <div class="col-lg-11">
                                                1.	Documentos pessoais do consumidor, como: RG, CPF, CTPS.
                                            </div> 												
                                            <div class="col-lg-1">

                                            </div> 											
                                            <div class="col-lg-11">
                                                2.	Documentos pessoais do procurador acompanhado de procuração disponível no seguinte link:  <a href="./anexo/procuracao.doc"> <strong>procuração.gov.br</strong></a>.
                                            </div>
                                            <div class="col-lg-1">

                                            </div> 											
                                            <div class="col-lg-11">
                                                3. Documentos que comprovam a relação de consumo como: notas e cupons fiscais, faturas, contas de água e luz, contratos, pedidos, folhetos ou anúncios publicitários, recibos, boletos bancários, comprovantes de despesas médicas, ordem de serviço, etc.
                                                <br>
                                                
                                            </div>															 
                                            <br>
                                        </div> 

                                    </div> 		

                                </div>
                                <br>
                                <p></p>
                                <div>
                                    <br>
                                    <div class="col-lg-2">
                                        <div class="form-esq">
                                            <!-- Área para preenchimento a esquerda-->								
                                        </div>	
                                    </div>						
                                </div>
                            </div>

                        </div>


                        <br>

                        <section class="page_section" id="contact">
                            <div class="row">
                                <div class="col-lg-3">

                                </div>
                                <div class="col-lg-9">	
                                    <div id="dadosprocon" class="form">
                                        <div class="sep-dados">
                                            <div> 				
                                                <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Dados do Consumidor</FONT></b></h4> 
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
                                        <div class="row">                 
                                            <div class="col-lg-3">
                                                <b>CNPJ:</b>
                                            </div>

                                            <div class="col-lg-9">
                                                <input id="cnpj" name="cnpj" type="text" onkeypress="$(this).mask('00.000.000/0000-00')" onChange="ValidarCNPJ(this)" class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>         
                                            </div>         
                                        </div>  					
                                        <!-- Campo de RG - verificar ainda JS e jquery para teste desse campo-->		  		  
                                        <div class="row">           
                                            <div class="col-lg-3">
                                                <b>RG - Identidade:</b>
                                            </div>
                                            <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->          
                                            <div class="col-lg-9">
                                                <input name="rg" type="text" class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>
                                            </div>         
                                        </div>  

                                        <div class="row">
                                            <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->     
                                            <div class="col-lg-3">
                                                <b>Sexo: *</b>		 
                                            </div>
                                            <div class="col-lg-9">
                                                <div>
                                                    <select id="sexo" name="sexo">
                                                        <option>Selecione</option>
                                                        <option value="Feminino">Feminino</option>
                                                        <option value="Masculino">Masculino</option>
                                                    </select>  
                                                </div>     
                                                <br>
                                            </br>
                                        </div>
                                    </div>    

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Endereço: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input class="input-text" id="endereco" type="text" name="endereco" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">
                                        </div>
                                    </div>   	  

                                    <div class="row"> 		
                                        <div class="col-lg-3">
                                            <b>Bairro: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="bairro" class="input-text-menor" type="text" name="bairro" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">	           
                                        </div>
                                    </div>   

                                    <div class="row">		
                                        <div class="col-lg-3">
                                            <b>Número: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="numero" class="input-text-menor" type="text" name="numero" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">         
                                        </div>
                                    </div>   

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Complemento: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="complemento" class="input-text" type="text" name="complemento" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">
                                        </div>
                                    </div>   

                                    <div class="row">
                                        <!-- Campo de CEP-->            
                                        <div class="col-lg-3">
                                            <b>CEP: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="cep" name="cep" type="text" class="input-text-menor" value="" onkeypress="$(this).mask('00.000-000')"  onBlur="validaFormato(this);" required="required" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>    
                                        </div>
                                    </div>   


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Estado: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <div  class="div-select" >
                                                <select id="estado" name="estado" >
                                                    <option>Selecione</option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                    <option value="EX">Estrangeiro</option>
                                                </select>  
                                            </div>           
                                        </div>
                                    </div>   


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Cidade: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="cidade" class="input-text" type="text" name="cidade" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">	
                                        </div>
                                    </div>   

                                    <div class="row">	
                                        <div class="col-lg-3">
                                            <b>E-mail: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input input id="email" class="input-text" type="text" name="email"  value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">	           
                                        </div>
                                    </div>   


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b>Telefone: *</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input class="input-text-menor" type="text" name="telefone" onkeypress="$(this).mask('(00) 00000-0000')"  onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">
                                        </div>
                                    </div>

                                    <div class="row">				 
                                        <div style="margin-left: 20px;"> 				
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Documentos Pessoais do Consumidor ou Procurador:</FONT></b></h4> 
                                        </div>             					 	
                                    </div>



                                    <div class="row">		
                                        <div class="col-lg-3">
                                            <b>Documento: *</b>	
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="arquivo1" name="arquivo1" class="input-file" required="required" type="file">
                                        </div>	
                                    </div>   

                                    <div class="row">		
                                        <br>
                                        <div class="col-lg-3">
                                            <b> Procuração:</b>
                                        </div>

                                        <div class="col-lg-9">
                                            <input id="arquivo2" name="arquivo2" class="input-file" type="file">
                                            <!--- 1-certo Nova Insercção de informação em mensagem            -->         
                                            <div class="container">
                                                <div class="starter-template">

                                                    <div class="row">
                                                        <div class="col-lg-8">

                                                            <div id="div_row_error" class="alert alert-danger" role="alert"><strong> </strong> <span id="div_alert_span_error"></span></div>
                                                            <div id="div_row_success" class="alert alert-success" role="alert"><strong> </strong> <span id="div_alert_span_success"></span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---  Nova Insercção de informação em mensagem            --> 													
                                        </div>    
                                    </div>  



                                   




                                    <!-------------------------------   Finalização do Codigo com Upload .....  ----------------------- -->


                                    <div class="row">				 
                                        <div style="margin-left: 20px;"> 				
                                            <h4><b><FONT SIZE= +q FACE=Times COLOR="#004080">Dados do Fornecedor / Empresa Reclamada:</FONT></b></h4> 
                                        </div>             					 	
                                    </div>

                                    <div class="row">	
                                        <!--  Campo do Nome Completo do Reclamado: --> 
                                        <div class="col-lg-3">
                                            <b>Nome Completo Reclamado:</b>	 
                                        </div>        
                                        <div class="col-lg-9"> 
                                            <input id="nomeempresa" class="input-text" onChange="ValidaNome(nomeempresa)" type="text" name="nomeempresa" required="required" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">
                                        </div>
                                    </div>   

                                    <div class="row">			
                                        <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo   --> 
                                        <div class="col-lg-3">
                                            <b>CNPJ:</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <input id="cnpj" name="cnpj" type="text" onkeypress="$(this).mask('00.000.000/0000-00')" onChange="ValidarCNPJ(this)" class="input-text-menor" value=""  onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))"><br/> <div id="divResultado"></div>
                                        </div>
                                    </div>   

                                    <div class="row"> 				
                                        <div class="col-lg-3">
                                            <b>Procurou empresa pra solucionar o Problema?: *</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <div class="div-select" >
                                                <select id="procuroemp" name="procuroemp">
                                                    <option>Selecione</option>
                                                    <option value="Sim">Sim</option>
                                                    <option value="Nao">Não</option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>   

                                    <div class="row"> 				

                                        <div class="col-lg-3">
                                            <b>Protocolo da Reclama&ccedil;&atilde;o:</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <input id="protocolo" class="input-text-menor" type="text" name="protocolo" value="" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;">		
                                        </div>
                                    </div> 

                                    <div class="row"> 				

                                        <div class="col-lg-3">
                                            <b>Descreva sua Reclama&ccedil;&atilde;o: *</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <textarea id="mensconsumidor" type="text" name="mensconsumidor" class="input-text text-area" cols="0" rows="0" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;"></textarea>        
                                        </div>
                                    </div>   

                                    <div class="row"> 			

                                        <div class="col-lg-3">
                                            <b>Pedido do Consumidor: *</b>
                                        </div>        
                                        <div class="col-lg-9">
                                            <textarea id="pedconsumidor" type="text" name="pedconsumidor" class="input-text text-area" cols="0" rows="0" onFocus="if (this.value === this.defaultValue)
                                            this.value = '';" required="required" onBlur="if (this.value === '')
                                            this.value = this.defaultValue;"></textarea>
                                        </div>
                                    </div>             

                                    <div class="row"> 			
                                        <div class="col-lg-3">

                                        </div>        
                                        <div class="col-lg-9">
                                            <b>(Informe aqui o seu pedido por exemplo: devolução do valor pago, troca ou reparo do produto, cancelamento do
                                            contrato, etc)</b> 
                                        </div> 
                                    </div>             

                                    <div class="row"> 			
                                        <div class="col-lg-3">
                                            <b> Documento 1:</b> 
                                        </div>        
                                        <div id="resultado">
                                            <div class="col-lg-9">
                                                <input id="arquivo3" name="arquivo3" class="input-file" type="file" >


                                            </div>
                                        </div>
                                    </div>  


                                    <div class="row"> 				

                                        <div class="col-lg-3">
                                            <b> Documento 2:</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <input id="arquivo4" name="arquivo4" class="input-file" type="file">

                                        </div>
                                    </div>             

                                    <div class="row"> 					
                                        <div class="col-lg-3">
                                            <b> Documento 3:</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <input id="arquivo5" name="arquivo5" class="input-file" type="file">

                                        </div>
                                    </div>             

                                    <div class="row"> 						
                                        <div class="col-lg-3">
                                            <b> Documento 4:</b> 
                                        </div>        
                                        <div class="col-lg-9">
                                            <input id="arquivo6" name="arquivo6" class="input-file" type="file">

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
                                            <div id="div_botao_enviar" role="alert"><span id="div_alert_span_success2"></span>
                                                <input class="input-btn" type="submit" id="btn-enviar"  value="enviar"> 
                                            </div>
                                            <div id="div_enviando"   role="alert"><span id="div_txt_enviando"></span>
                                                <input class="enviando" type="hidden" id="btn-enviando"  value="AGUARDE: Enviando formulário!"> 
                                            </div>											
                                            <div id="div_envio_solicitacao" class="alert alert-success" role="alert"><strong></strong> 
                                                <span id="div_alert_envio_solicitacao"></span>
                                            </div>

                                            <div>
                                                <h3><b><FONT FACE=Times COLOR="#B22222">(Campos com * são obrigatórios) </FONT></b></h3> 	   
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



                    </fieldset>

                </form>
            </body>
            </html>