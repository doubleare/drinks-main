<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user-name'];
$phone = $_POST['user-phone'];
$email = $_POST['user-email'];

$mail->isSMTP();        
$mail->Host = 'smtp.gmail.com';                              
$mail->SMTPAuth = true;                               
$mail->Username = 'vinoruskerim@gmail.com'; 
$mail->Password = 'fuckuniverse'; 
$mail->SMTPSecure = 'ssl';                       
$mail->Port = 465; 

$mail->setFrom('vinoruskerim@gmail.com'); 
$mail->addAddress($email);     
$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = 'Здравствуйте, ' .$name . ' Вы оставили заявку.Скоро мы с Вами свяжимся по номеру: ' .$phone. '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}
else {
    print("<script language=javascript>
        alert('Спасибо за заявку!');
        window.location.href = 'index.html';
    </script>");;
}

?>

