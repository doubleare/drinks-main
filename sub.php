<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$sub = $_POST['user-sub'];
                              
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  																						
$mail->SMTPAuth = true;                               
$mail->Username = 'vinoruskerim@gmail.com'; 
$mail->Password = 'fuckuniverse'; 
$mail->SMTPSecure = 'ssl';                       
$mail->Port = 465; 

$mail->setFrom('vinoruskerim@gmail.com'); 
$mail->addAddress($sub);     
$mail->isHTML(true);   

$mail->Subject = 'Подписка с тестового сайта';
$mail->Body    = 'Здравствуйте, ' .$sub . '.спасибо что подписались!';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}
else {
    print("<script language=javascript>
        alert('Спасибо за подписку!');
        window.location.href = 'index.html';
    </script>");
} 

?>