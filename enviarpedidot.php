<!--
  
Versão: 1.0    
Data:13.09.2020 ás 18:00


            $datenas    = date("d/m/Y");

datenas
-->
<script type="text/javascript">
 
    // => Just show alerts
    function aguardarenvio(message, input) {

        $('#btn_enviar').hide();

    }


</script>   


<?php
session_start();
require 'PHPMailer/PHPMailerAutoload.php';
include_once("index.php");

//$tamanho = 2097152;
//$nascimento = date('d-m-Y', strtotime(($_POST['datenas'])));

$nome = strip_tags(trim(utf8_decode(($_POST['nome']))));
if (empty($nome))
{
echo "<script>
                    alert('Formulário não preenchido !'); location= 'pedido.php';
                    </script>";
}
else
{

$cpf = ($_POST['cpf']);
$cnpj = ($_POST['cnpj']);
$rg = ($_POST['rg']);
$telefone = strip_tags(trim($_POST['telefone']));
$tiposolicitante = ($_POST['tiposolicitante']);
$docrepsolicitante = strip_tags(trim($_POST['docrepsolicitante']));
$telefonesolicitante = strip_tags(trim($_POST['telefonesolicitante']));
$email  =  utf8_decode($_POST['email']) ;
$escritoriorepresentante = ($_POST['escritoriorepresentante']);
$telefoneescritorio = strip_tags(trim($_POST['telefoneescritorio']));
$processo = strip_tags(trim($_POST['processo']));
$empresa = ($_POST['empresa']); // inserido campo de nome de empresa....
//$vistaxerox = ($_POST['vistaxerox']);
//$dfornecedor = utf8_decode($_POST['dfornecedor']);
//$docfornecedor = utf8_decode($_POST['docfornecedor']);
$pedidos  = nl2br( utf8_decode($_POST['requisicoes']), false) ;
$soli= utf8_decode("Solicitação em :");
$qual = $tiposolicitante;  
$data= date("d/m/Y");
$hora= date("h:i:sa");
 
//-------------------------------- SEm testar por causa da senha do email Procon que deu falha ---------------
//$t_endereco = utf8_decode("Endereço:");
//$t_numero = utf8_decode("Número:");
//$t_procuracao = utf8_decode("Procuração:");
///$t_reclamacao = utf8_decode("Reclamação:");
//echo" teste de envio";
// var_dump($files);

require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Host = 'smtp.office365.com';
$mail->Username = 'cartorioprocon@sjdhds.ba.gov.br';
$mail->Password = '1234=abcd';;
$mail->SetFrom('jairo.paixao@sjdhds.ba.gov.br', 'PROCON BAHIA');
$mail->AddAddress('jairo.paixao@sjdhds.ba.gov.br', 'PROCON BAHIA');

/*
  $mail->Username = 'atendimentoprocon@sjdhds.ba.gov.br';
  $mail->Password = 'Daoc202002';
  $mail->SetFrom('atendimentoprocon@sjdhds.ba.gov.br', 'PROCON BAHIA');
  $mail->AddAddress('atendimentoprocon@sjdhds.ba.gov.br', 'PROCON BAHIA');
 *
 */
$mail->AddReplyTo($email, $nome);
$mail->Subject = 'Formulario de Contato COPAP';

                $body = "<strong>{$soli}</strong>{$data} as {$hora}<br />
                         <strong>Nome do Solicitante :</strong>{$nome} <br />
                         <strong>CPF :</strong>{$cpf} <br />
                         <strong>RG  :</strong>{$rg} <br />
                         <strong>Telefone do Solicitante :</strong>{$telefonesolicitante} <br />
                         <strong>E-mail do Solicitante :</strong>{$email} <br />                         
                         <strong>Qualidade:</strong>{$qual} <br />                        
                         <strong>Escrit&oacute;rio do Representante:</strong>{$escritoriorepresentante} <br />
                         <strong>Nome da empresa representante:</strong>{$empresa} <br /> 
                         <strong>Telefone do Escrit&oacute;rio :</strong>{$telefoneescritorio} <br />    
 
                         <strong>Requerimentos: </strong>  <br /> 
                         {$pedidos} <br />                         
                             
                        ";





$mail->msgHTML($body);

//$mail->AddAttachment($arquivo1['tmp_name'], $arquivo1['name']);
//$mail->AddAttachment($arquivo2['tmp_name'], $arquivo2['name']);
//$mail->AddAttachment($arquivo3['tmp_name'], $arquivo3['name']);
//$mail->AddAttachment($arquivo4['tmp_name'], $arquivo4['name']);
//$mail->AddAttachment($arquivo5['tmp_name'], $arquivo5['name']);
//$mail->AddAttachment($arquivo6['tmp_name'], $arquivo6['name']);




if ($mail->Send())
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
                    alert('Sua Mensagem não foi enviada. Retornando a pagina principal!'); location= 'pedido.php';
                    </script>";
}



echo "<script> 
                    alert(" . $msg . "); location= 'index.php';
                    </script>";
}
    