<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? 'No name';
    $email = $_POST['email'] ?? 'No email';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'iamzhanasyl.omar@gmail.com';
        $mail->Password = 'mdfn eikd hipm epjp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('iamzhanasyl.omar@gmail.com', 'Site Form');
        $mail->addAddress('iamzhanasyl.omar@gmail.com'); 

        $mail->Subject = 'Новое сообщение с сайта';
        $mail->Body = "Имя: $name\nEmail: $email";

        $mail->send();
        echo 'Email отправлен!';
    } catch (Exception $e) {
        echo "Ошибка: {$mail->ErrorInfo}";
    }
} else {
    echo "Неверный запрос";
}
$mail->send();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';