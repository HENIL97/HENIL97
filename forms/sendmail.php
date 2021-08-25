<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $email = $_POST['email'];
 $message = $_POST['message'];    
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'valahenil.in@gmail.com';
        
    }
    
    
}