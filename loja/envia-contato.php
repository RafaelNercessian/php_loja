<?php require_once ("PHPMailerAutoload.php"); ?>

<?php

  $nome=$_POST["nome"];
  $email=$_POST["email"];
  $mensagem=$_POST["mensagem"];

  $mail=new PHPMailer();
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'joaodasilvaalura@gmail.com';                 // SMTP username
  $mail->Password = 'joaodasilva';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;
  $mail->setFrom('joaodasilvaalura@gmail.com', 'Caelum - Curso PHP e MySQL');
  $mail->addAddress($email);

  $mail->Subject="Email de contato da loja";
  $mail->msgHTML("<html>de: {$nome}</br>email: {$email}</br>mensagem: {$mensagem}</html>");
  $mail->AltBody="de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";
  if($mail->send()){
    header("Location:index.php?sucesso=Mensagem enviada com sucesso");
  }else{
    header("Location:contato.php?falha=Erro ao enviar mensagem: ". $mail->ErrorInfo);
  }
  die();
?>
