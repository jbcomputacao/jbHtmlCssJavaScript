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
                                             
                                            </div>         

                                            <div class="col-lg-12">
                                                <br>
                                            </div> 									
                                            <div class="col-lg-12">
                                                <br>  
                                                <strong>ATENÇÃO!</strong> Para sua solicitação o consumidor deverá comprovar a sua legitimidade e interesse no mesmo, através de documento de identificação e/ou instrumento de procuração já acostado aos autos ou no ato praticado. 
                                            </div>  

                                            <div class="col-lg-12">
                                                <br>                                                
                                                O prazo para vistas e fotocópia de processos, bem como sobre o andamento dos mesmos, será comunicado por e-mail e/ou telefone e o atendimento será agendado para trazer maior conforto e segurança.
                                            </div>  

                                            <div class="col-lg-12">
                                                <br>  
                                                Ressaltamos que o consumidor, ao fazer seu requerimento, deve informar o número do processo que se inicia sempre pelas letras F.A seguida de uma seqüência numérica identificando a unidade, posto, ano e número específico. Ex. FA 0110-000.026-1 (numeração antiga) ou FA 29.001.007.20-076589 (numeração atual).
                                            </div>  

                                            <div class="col-lg-12">
                                               <br>
                                               <h5><b>Quando retirar:   </b></h5>       
                                           </div> 

                                           <div class="col-lg-12">

                                            O Procon-BA entrará em contato com o consumidor, agendando o seu retorno para retirada da documentação solicitada ou vistas dos processo, mediante comprovação de legitimidade. Assim, <strong>é necessário que e-mail e telefone sejam informados para que o contato pelo PROCON-BA seja realizado com sucesso!</strong>
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
                                                    <b>Nome do solicitante: </b>
                                                </div>
                                            </div>

                                            <div class="col-lg-8">
                                                <input id="nome" style="min-width: 240px;" class="input-text" type="text" name="nome" value=""  onChange="ValidaNome(nome)" required="required"><span class="required"></span>
                                            </div>
                                        </div> 

                                        <!-- Campo de CPF e CnpJ - verificar ainda JS e jquery para teste desse campo-->  						
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <b>CPF:</b>
                                            </div>
                                            <div class="col-lg-4" >
                                                <input id="cpf" style="width: 240px;" name="cpf" type="text" class="input-text-menor" onkeypress="$(this).mask('000.000.000-00')" onBlur="validaFormato(this);" name="cpf" value=""  onFocus="if (this.value === this.defaultValue)
                                                this.value = '';" required="required" onBlur="if (this.value === '')
                                                this.value = this.defaultValue;""
                                                > <br/><div id ="divResultado"></div>    
                                            </div>

                                            <div class="col-lg-1">
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
                                                    <input id="telefonesolicitante" style="width: 240px;" class="input-text-menor" type="text" name="telefonesolicitante"   onkeypress="$(this).mask('(00)00000-0000')" onFocus="if (this.value === this.defaultValue)                                                 this.value = '';" required="required" onBlur="if (this.value === '')
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
                                                <input id="email" style="min-width: 240px;" class="input-text" type="email" name="email" value=""  onChange="validaEmail(email)" required="required"><span class="required"></span>
                                            </div>
                                        </div> 								
                                        


                                        <!-- ---------------------------------------------------- inicio e Continuação 08.09.2020 ------------------------------- -->
                                        <script type="text/javascript">
                                            var grid;
                                            var linha;
                                            var criar_grid = true;
                                            var msg;
                                            function criaGrid()
                                            {
                                                grid = new jsGrid("divJGrid");
                                                grid.rows.addCol("200px");
                                                grid.rows.addCol("200px");
                                        //grid.rows.addCol("200px");
                                        //grid.rows.addCol("400px");

                                        grid.setTextMatrix(0, 0, "Pedido");
                                        grid.setTextMatrix(0, 1, "Processo");
                                        //grid.setTextMatrix(0, 2, "CNPJ");
                                        //grid.setTextMatrix(0, 3, "Razão Social");
                                        //grid.setTextMatrix(0, 4, "Endereço");
                                        
                                        $('#div_remover').show();
                                        linha = 0;

                                    }
                                    function RemoveUltimaRow() {
                                        grid.rows.remove(grid.rows.count() - 1);
                                    }
                                    function RemoveRowSelecionada() 
                                    {
                                        grid.rows.selectedRow.remove();
                                        
                                        linha = linha - 1;

                                        if  (linha >0)
                                        {
                                         var requisicao  = "";
                                         var requisicoes = ""; 
                                         
                                         for (i = 1;   i <= linha; i++)
                                         {
                                            var pedi = grid.getTextMatrix(i, 0);
                                            var proc = grid.getTextMatrix(i, 1);
                                            var cnpj = grid.getTextMatrix(i, 2);
                                            var rsoc = grid.getTextMatrix(i, 3);
                                            var ende = grid.getTextMatrix(i, 4);																								
                                            requisicao = ("<br><strong>" + pedi + "</strong><br>");
                                            
                                            if (pedi === "Certidão Negativa")
                                            {	
                                               requisicao = (requisicao + " CNPJ: " + cnpj + "<br>");											  										
                                               requisicao = (requisicao + " RAZÃO SOCIAL: " + rsoc + "<br>");											  									
                                               requisicao = (requisicao + " ENDEREÇO: " + ende + "<br>");
                                           }
                                           else
                                           {	 
                                               requisicao = (requisicao + " Processo: " + proc + "<br>"); 
                                           }
                                           
                                           requisicoes = (requisicoes + " " + requisicao);																																																																																																	
                                       }	
                                   }	
                                   else
                                    $('#div_botao_enviar').css("display","none");	
                                document.getElementById("requisicoes").value = requisicoes;											
                                
                            }
                            function AdicionaLinha() 
                            {
                                var proc = document.getElementById("processo").value;
                                var pedi = document.getElementById("solicitacao").value;
                                        //var cnpj = document.getElementById("cnpjcertidao").value;
                                        //var rsoc = document.getElementById("razaosocial").value;
                                        //var ende = document.getElementById("endereco").value;
                                        
                                        //grid.setTextMatrix(linha, 2, cnpj);
                                        //grid.setTextMatrix(linha, 3, rsoc);
                                        //grid.setTextMatrix(linha, 4, ende);

                                        document.getElementById("solicitacao").value = "Selecione";


                                        var requisicao  = "";
                                        var requisicoes = ""; 
                                        var novo = false;
                                        $('#div_botao_enviar').css("display","inherit");										

                                        if (proc === "")
                                        {										  
                                           alert("Forneça o número do processo");
                                       }	
                                       else	
                                       {
                                        novo = true;
                                        grid.rows.add();
                                        
                                        linha = linha + 1;
                                        grid.setTextMatrix(linha, 0, pedi);
                                        grid.setTextMatrix(linha, 1, proc);										  
                                        requisicao = (requisicao + "<br><strong>" + pedi + "</strong><br>"); 										  
                                        requisicao = (requisicao + " Processo: " + proc + "<br>"); 	
                                        requisicao = (requisicao + " " + document.getElementById("requisicoes").value );							
                                        document.getElementById("requisicoes").value = requisicao;
                                        
                                        //getElementsByTagName('solicitacao')["0"].selected = 'selected';
                                        document.getElementById("processo").value = "";										  
                                        
                                    }											
                                    
                                    if (linha === 20)
                                        alert("Voce atingiu o limite de 20 pedidos, revise os dados e envie o formulário!");
                                }
                                function AdicionaColuna(msg) {
                                    alert("AdicionaColuna");
                                    grid.rows.addCol(msg);
                                }
                                function EditarTexto() {
                                    var row = document.getElementById('txtLinha').value;
                                    var col = document.getElementById('txtColuna').value;
                                    var valor = document.getElementById('txtValor').value;
                                    grid.setTextMatrix(row, col, valor);
                                }
                                function ExibirValorCelula() {
                                    var row = document.getElementById('txtLinha2').value;
                                    var col = document.getElementById('txtColuna2').value;
                                    alert(grid.getTextMatrix(row, col));
                                }
                                function MudarLarguraColuna() {
                                    var col = document.getElementById('txtCol').value;
                                    var width = document.getElementById('txtWidth').value;
                                    grid.rows.setColWidth(col, width);
                                }

                                function adicionar()
                                {
                                        //adicionar numeros de Processos em Linhas 
                                        var solic = document.getElementById("solicitacao").value;
                                        var opcao = "Selecione";
                                        var proc = document.getElementById("processo").value;
                                        if (solic === "Selecione")
                                        {
                                          alert('Informe o tipo de pedido!');
                                      } 
                                      else
                                      {
                                        if (proc === "")
                                        {										  
                                           alert("Forneça o número do processo");
                                       }
                                       else
                                       {
                                        if (criar_grid)
                                        {
                                            criaGrid();
                                            criar_grid = false;
                                        }

                                        if (linha === 21)
                                        {
                                            alert("Total de pedidos excedido!");
                                        } 
                                        else
                                            AdicionaLinha();
                                    }											
                                }

                            }

                            function remover()
                            {
                                RemoveRowSelecionada();
                            }

                            function alertprocesso() {
                                alert('Deseja Continuar Inserindo? ');
                            }

                            function alertprocesso() {
                                alert('Deseja Continuar Inserindo? ');
                            }

                                    // Analisar esse ponto e verificar os erros... cansaço para tentar verificar no termino da noite...


                                </script>

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
                                                <option value="Andamento">Andamento de Processo</option>
                                                <option value="Vistas">Vistas de Processo</option>
                                                <option value="Xerox">Xerox de Processo</option>
                                            </select>  
                                        </div>         

                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>Número de Processo: *</b>
                                    </div>
                                    <div class="col-lg-6">
                                      <input type="text" class="input-text-menor" style="width: 240px;" id="processo" name="processo" onkeypress="$(this).mask('00000000000000000')" onChange="ValidaNome(nome)"><span class="required"></span>   										
                                  </div>
                                  <br>
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
                        <div id="div_botao_enviar" style="display: none; role="alert"><span id="div_alert_span_success2"></span>
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
                  </div>  
                  
              </div>
          </div>	
      </div>
  </section>

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
        
        $("#tiposolicitante").change(function () {
            requisitante();
        });							

                            // => Execute on click submit buttom
                            $("#btn-enviar").click(function ()
                            {

                                var inpObj = document.getElementById("formcartorio");
                                var requisicao = document.getElementById("requisicoes").value;	
                                if (inpObj.checkValidity())
                                {
                                   
                                    if (requisicao === "" )
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
                        function requisitante()
                        {
                           document.getElementById("formulario").style.visibility = "visible";
                           var tipo = document.getElementById("tiposolicitante").value;
                           var soli = document.getElementById("solicitacao");
                           
                           
                           soli.options[1] = new Option('1Andamento de Processo', 'Vistas');
                           soli.options[2] = new Option('1Vistas de Processo', 'Vistas');									
                           soli.options[3] = new Option('1Xerox de Processo', 'Xerox');
                           soli.options[5] = null;
                           soli.options[4] = null;										
                           soli.options[3] = null;	
                           document.getElementById("div_certidao").style.visibility = "hidden";
                           document.getElementById("div_escritorio").style.visibility = "hidden"; 										
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


