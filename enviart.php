<!--
  
Versão: 1.0    
Data:12.07.2020 ás 21:18


            $datenas    = date("d/m/Y");

datenas
-->
<?php
require 'PHPMailer/PHPMailerAutoload.php';     
            $nascimento = date('d-m-Y', strtotime(($_POST['datenas'])));

            $nome       = strip_tags(trim(utf8_decode(($_POST['nome']))));
            if (empty($nome)){		
                    echo "<script>
                    alert('Formulário não preenchido1!'); location= 'index.php';
                    </script>";
            }			
			else{
			
            $datenas    = $nascimento;  
            $cpf        = ($_POST['cpf']);
            $cnpj       = ($_POST['cnpj']);
            $rg         = ($_POST['rg']);
            $sexo       = ($_POST['sexo']);
            $endereco   = utf8_decode($_POST['endereco']);
            $bairro     = utf8_decode($_POST['bairro']);
            $numero     = ($_POST['numero']);
            $complemento = utf8_decode($_POST['complemento']);
            $cep        = ($_POST['cep']);
            $estado     = ($_POST['estado']);
            $cidade     = utf8_decode($_POST['cidade']);
            $email      = strip_tags(trim($_POST['email']));
            $telefone   = strip_tags(trim($_POST['telefone']));
            $arquivo1    = $_FILES['arquivo1'];
            $arquivo2    = $_FILES['arquivo2'];
            $nomeempresa = utf8_decode($_POST['nomeempresa']);
            $cnpjempresa = ($_POST['cnpjempresa']);
            $procuroemp   = ($_POST['procuroemp']);
            $protocolo   = ($_POST['protocolo']);
            $mensconsumidor =utf8_decode($_POST['mensconsumidor']);
            $pedconsumidor  = utf8_decode($_POST['pedconsumidor']);
            $arquivo3    = $_FILES['arquivo3'];
            $arquivo4    = $_FILES['arquivo4'];
            $arquivo5    = $_FILES['arquivo5'];
            $arquivo6    = $_FILES['arquivo6'];           
            $tamanho 	 = 2097152;

            //-------------------------------- SEm testar por causa da senha do email Procon que deu falha ---------------
        
				$t_endereco   = utf8_decode("Endereço:");
				$t_numero     = utf8_decode("Número:");
				$t_procuracao = utf8_decode("Procuração:");				
 				$t_reclamacao = utf8_decode("Reclamação:");			
                         require 'PHPMailer/class.phpmailer.php';

                $mail = new PHPMailer();
                
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->Port = 587;
                $mail->Host = 'smtp.office365.com';
                $mail->Username = 'jairo.paixao@sjdhds.ba.gov.br';
                $mail->Password = 'Isis@1123';
                $mail->SetFrom('jairo.paixao@sjdhds.ba.gov.br', 'PROCON BAHIA');
                $mail->AddAddress('jairo.paixao@sjdhds.ba.gov.br','ProcPROCON BAHIAon');
                $mail->AddReplyTo($email , $nome  );				
                $mail->Subject = 'Formulario de Contato Procon';
                
                 $body ="<strong>Nome :</strong>{$nome} <br />
                         <strong>Data de Nascimento :</strong>{$datenas} <br />
                         <strong>CPF :</strong>{$cpf} <br />
                         <strong>CNPJ:</strong>{$cnpj} <br />
                         <strong>RG - Identidade:</strong>{$rg} <br />
                         <strong>Sexo:</strong>{$sexo} <br />
                         <strong>{$t_endereco}</strong>{$endereco} <br />
                         <strong>bairro:</strong>{$bairro} <br />
                         <strong>{$t_numero}</strong>{$numero} <br />						 
                         <strong>Numero Identidade:</strong>{$rg} <br />
                         <strong>Complemento :</strong>{$complemento} <br />
                         <strong>Cep :</strong>{$cep} <br />
                         <strong>Estado :</strong>{$estado} <br />
                         <strong>Cidade :</strong>{$cidade} <br />
                         <strong>E-mail :</strong>{$email} <br />
                         <strong>Telefone :</strong>{$telefone} <br />
                         <strong>Documento Consumidor :</strong>{$arquivo1['name']} <br />
                         <strong>{$t_procuracao}</strong>{$arquivo2['name']} <br />
                         <strong>Nome da Reclamada :</strong>{$nomeempresa} <br />
                         <strong>CNPJ :</strong>{$cnpjempresa} <br />
                         <strong>Procurou a Empresa :</strong>{$procuroemp} <br />
                         <strong>Protocolo da {$t_reclamacao} :</strong>{$protocolo} <br />
                         <strong>Descreva sua {$t_reclamacao}</strong>{$mensconsumidor} <br />
                         <strong>Descreva seu Pedido :</strong>{$pedconsumidor} <br />
                         <strong>Documento Pedido1 :</strong>{$arquivo3['name']} <br />
                         <strong>Documento Pedido2 :</strong>{$arquivo4['name']} <br />
                         <strong>Documento Pedido3 :</strong>{$arquivo5['name']} <br />
                         <strong>Documento Pedido4 :</strong>{$arquivo6['name']} <br />";

                       
     
                        
                         
                $mail->msgHTML($body);
                
                $mail->AddAttachment ($arquivo1['tmp_name'], $arquivo1['name']);
                $mail->AddAttachment ($arquivo2['tmp_name'], $arquivo2['name']);
                $mail->AddAttachment ($arquivo3['tmp_name'], $arquivo3['name']);
                $mail->AddAttachment ($arquivo4['tmp_name'], $arquivo4['name']);
                $mail->AddAttachment ($arquivo5['tmp_name'], $arquivo5['name']);
                $mail->AddAttachment ($arquivo6['tmp_name'], $arquivo6['name']);
                
                if($mail->Send())
				{
                    $msg = 'Sua Mensagem foi enviada com Sucesso!!!';

                    echo "<script>
                    alert('Sua Mensagem foi enviada com Sucesso!!!!'); location= 'index.php';
                    </script>";

                }
				else
				{
                    $msg = 'Sua Mensagem não foi enviada , tente Novamente.';  

                     echo "<script>
                    alert('Sua Mensagem não foi enviada. Retornando a pagina principal!'); location= 'index.php';
                    </script>";       
                }
      
     

                    echo "<script> 
                    alert(" . $msg .  "); location= 'index.php';
                    </script>";  
			}					
?>