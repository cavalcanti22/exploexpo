<meta http-equiv="refresh" content="3; URL=http://exploexpo.com/#form" />
<!-- <meta http-equiv="refresh" content="3; URL=http://exploexpo.com/#contact" /> -->


<?php
if(!isset($_POST[Submit])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
// if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='contato@exploexpo.com';
// } else {
//         $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
// }
 
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'comercial@exploexpo.com';
$comcopia 		   = 'monica@globalevents1959.com';
$assunto           = $_POST['assunto'];
$mensagem          = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Esse email foi enviado através do <b>formulário de contato</b> do site <b>www.exploexpo.com</b></P>
<P>Aqui est&aacute; a mensagem que foi escrita:</P>
<p><b>Nome:</b><i>'.$nomeremetente.'</i></p>
<p><b>Email:</b><i>'.$emailremetente.'</i></p>
<p><b>Mensagem:</b><i>'.$mensagem.'</i></p>
<hr>';
 
 
/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
 
/* Mostrando na tela as informações enviadas por e-mail */
print "<p style='text-align:center'><img src='resources/site/images/explologo.png'></p>

<p style='text-align:center'>Mensagem Enviado Com Sucesso!</p>

<p style='text-align:center'>Agradecemos o contato<br/>Responderemos em Breve.</p>"
?>