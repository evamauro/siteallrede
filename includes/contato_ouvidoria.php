<?php
require "mailer/class.phpmailer.php";

date_default_timezone_set('America/Sao_Paulo');


//Inicia a classe PHPMailer
$mail = new PHPMailer();


//Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); 
$mail->Host    = "smtp.hostinger.com"; 
$mail->SMTPAuth = true; 
$mail->Username = 'site@combosallrede.site'; 
$mail->Password = '@AllredeSite1'; 


//Define o remetente
$mail->From    = "site@combosallrede.site";    
$mail->FromName = "Contato | formulário de Ouvidoria ";


//Define os destinatário(s)
	$mail->AddAddress('evamauro.dourado@allrede.com.br', 'OUVIDORIA');


//Define os dados técnicos da Mensagem
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8';

//Texto e Assunto                                                               // <- ALTERAR
$corpo = (


"Contato formulário de Ouvidoria | Site Allrede<br/><b>             
<br/><br/>
<span style='color:red;'><u><b>Dados do Reclamante</b></u></span><br/> 
    <b> NOME:</b>               " . $_POST['nome'] .       "<br/>
    <b> TELEFONE: </b>          " . $_POST['telefone'] .   "<br/>
    <b> EMAIL: </b>             " . $_POST['email'] .      "<br/>
  <hr/> 
<span style='color:red;'><u><b>MENSAGEM</b></u></span><br/> 
    " . $_POST['texto'] .   "<br/>
    <hr>
Data e hora do envio do formulário: <br/>   
    <b> DATA </b>                        " . date('d/m/Y - H:m:s') ."<br/><br/>   

	
	E-mail enviado através do formulário site Allrede"
);

$mail->Subject  = "Contato formulário de Ouvidoria | Site Allrede"; 
$mail->Body = $corpo;



//Envio da Mensagem
$enviado = $mail->Send();



//Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();



//Exibe uma mensagem de resultado
if ($enviado) {
   echo "<script> alert('Mensagem enviada com sucesso') </script>";
   echo "<script> location.href='../' </script>"; // <- ALTERAR
} else {
   echo "<script> Não foi possível enviar o e-mail tente novamente mais tarde ou entre em contato pelos nossos telefones. </script> ";
   echo "<script> location.href='../' </script>"; // <- ALTERAR
};




?>