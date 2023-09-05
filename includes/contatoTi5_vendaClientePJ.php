<?php
require "mailer/class.phpmailer.php";

date_default_timezone_set('America/Sao_Paulo');


//Inicia a classe PHPMailer
$mail = new PHPMailer();


//Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); 
$mail->Host    = "mail.ti5play.com.br"; 
$mail->SMTPAuth = true; 
$mail->Username = 'site@ti5play.com.br'; 
$mail->Password = 'Re-404581'; 

$emailV  = $_POST['emailV'];

//Define o remetente
//$mail->From    = "site@ti5play.com.br";
$mail->From    = ($emailV);                     
$mail->FromName = "VENDA INTERNA TI5 - Servico Adicional";


//Define os destinatário(s)
//	$mail->AddAddress('vendasexternasti5@gmail.com', 'COMERCIAL');
	$mail->AddAddress('cadastro@ti5.com.br', 'COMERCIAL');
//  $mail->AddAddress('rodrigo@ti5.com.br', 'GERENTE');


//Define os dados técnicos da Mensagem
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8';

//Texto e Assunto                                                               // <- ALTERAR
$corpo = (


"Cadastro Novo serviço - Cliente Ti5.<br/><b>             
    Abaixo segue os dados do Cliente<br/><br/>
<span style='color:red;'><u><b>Dados da Empresa - VENDA ENTERNA PESSOA JURIDICA ( Serviço Adicional )</b></u></span><br/> 
    <b> NOME DA EMPRESA:</b>             " . $_POST['nome'] .       "<br/>
      <hr/>
    <b> CNPJ: </b>                       " . $_POST['cnpj'] .       "<br/>
    <b> SERVIÇO FIBRA: </b>              " . $_POST['plano'] .      "<br/>
    <b> SERVIÇO ADICIONAL: </b>          " . $_POST['plano2'] .     "<br/>
    <b> DATA DE VENCIMENTO: </b>         " . $_POST['dcompra'] .    "<br/>
      <hr/> 
<span style='color:red;'><u><b>Endereço de Instalação</b></u></span><br/> 
    <b> ENDEREÇO DE CADASTRO:</b><b>     " . $_POST['endereco'] .   "<br/>
    <hr>
    CASO SEJA EM NOVO ENDEREÇO:<br>
    <b> QUADRA: </b>                     " . $_POST['rua'] .        "<br/>
    <b> LOTE: </b>                       " . $_POST['lote'] .       "<br/>
    <b> CASA: </b>                       " . $_POST['casa'] .       "<br/>
    <b> BAIRRO: </b>                     " . $_POST['bairro'] .     "<br/>
    <b> ESTADO: </b>                     " . $_POST['estado'] .     "<br/>
    <b> REFERÊNCIA: </b>                 " . $_POST['referencia'] . "<br/>
      <hr/>
<span style='color:red;'><u><b>Informações do Plano Contratado</b></u></span><br/> 
    <b> SERVIÇO COM ADESÃO?: </b>        " . $_POST['t_adesao'] .   "<br/>
    <b> VALOR DA ADESÃO?: </b>           " . $_POST['valorA'] .     "<br/>
    <b> POR ONDE A VENDA FOI REALIZADA: </b>" . $_POST['c_venda'] . "<br/>
    <b> NOME DO VENDEDOR: </b>           " . $_POST['n_vendedor'] . "<br/>
    <b> OBSERVAÇÕES DO VENDEDOR: </b>    " . $_POST['desc_obs'] .   "<br/>
      <hr/>
    <b> ORIGEM DO CLIENTE: </b>          " . $_POST['c_origem'] .   "<br/>
<span style='color:red;'><b><u>Caso seja Indicação de Cliente</b></u></span><br/> 
    <b> NOME DO CLIENTE QUE INDICOU: </b> " . $_POST['n_ind'] .    "<br/>
    <hr/>
 Data e hora do envio do formulário: <br/>   
    <b> DATA </b>                        " . date('d/m/Y - H:m:s') ."<br/><br/>   

	
	E-mail enviado através do formulário de vendas Ti5!"
);

$mail->Subject  = "Venda Interna Ti5 - Servico Adicional"; 
$mail->Body = $corpo;



//Envio da Mensagem
$enviado = $mail->Send();



//Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();



//Exibe uma mensagem de resultado
if ($enviado) {
   echo "<script> alert('Mensagem enviada com sucesso') </script>";
   echo "<script> location.href='https://ti5.com.br/compraPlay/index_venda.html' </script>"; // <- ALTERAR
} else {
   echo "<script> Não foi possível enviar o e-mail tente novamente mais tarde ou entre em contato pelos nossos telefones. </script> ";
   echo "<script> location.href='https://ti5.com.br/compraPlay/index_venda.html' </script>"; // <- ALTERAR
};




?>