<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$umail = $_POST['user-e'];
$userp = $_POST['user-p'];
                              
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  																						
$mail->SMTPAuth = true;                               
$mail->Username = 'vinoruskerim@gmail.com'; 
$mail->Password = 'fuckuniverse'; 
$mail->SMTPSecure = 'ssl';                       
$mail->Port = 465; 

$mail->setFrom('vinoruskerim@gmail.com'); 
$mail->addAddress($umail);     
$mail->isHTML(true);   

$mail->Subject = 'Заявка';
$mail->Body    = 'Здравствуйте, ' .$umail . '.спасибо что оставили заявку мы скоро с вами свяжимся по номеру: ' .$userp .'';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}
else {
    print("<script language=javascript>
        alert('Спасибо за заявку!Ожидайте');
        window.history.back();
        input.target.value('');
    </script>");
} 

?>