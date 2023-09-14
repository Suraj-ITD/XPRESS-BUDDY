<?php
require('PHPMailerAutoload.php');
require('credential.php');

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

$body = "<p><b>Xpress Buddy Contact Enquiry</b></p>
<table style='border: 1px solid #eee; border-collapse: collapse; padding: 5px; font-family: sans-serif;'>
    <tr>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Name</td>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$name</td>
    </tr>
    <tr>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Email</td>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$email</td>
    </tr>
    <tr>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Mobile</td>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$mobile</td>
    </tr>
    <tr>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Subject</td>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$subject</td>
    </tr>
    <tr>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Message</td>
    <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$message</td>
    </tr>
</table>";

if (isset($_POST)) {

    $mail = new PHPMailer(true);
    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL;
    $mail->Password = PASS;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom(EMAIL, 'Contact Us');
    $mail->addAddress("ucetsuraj@gmail.com");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Contact Us';
    $mail->Body = $body;
    $mail->AltBody = "";
    
    $secretKey = "6Ldx4BknAAAAAI5xK-m8eP2EqrEfqgx3GNbrmcif";
    $response = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);
    if (!$captcha_success->success) {
        echo "<script>alert('Captcha error found!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        echo "<script>window.location.href='contact.php'</script>";
        exit;
    }

    if (!$mail->send()) {
        echo "<script>alert('Message could not be sent!');</script>";
        echo "<script>window.location.href='contact.php'</script>";
        exit;
    } else {
        echo "<script>alert('Message sent!');</script>";
        echo "<script>window.location.href='contact.php'</script>";
        exit;
    }
}
