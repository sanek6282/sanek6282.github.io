<?php
  require 'vendor/phpmailer/PHPMailerAutoload.php';

//
// config
// --------------------------------------------------
//

  // your email address
  $EMAIL   = 'kravchov-sasha@yandex.ru';

  // your name
  $NAME    = 'Александр';

  // subject line
  $SUBJECT = 'Студия "Атлас"';

  // email content
  $HTML = '
    <html>
      <head>
        <title>' . $SUBJECT . '</title>
      </head>
      <body>
        <p><strong style="width: 80px;">Name: </strong>' . $_POST['name'] . '</p>
        <p><strong style="width: 80px;">Email: </strong>' . $_POST['email'] . '</p>
        <p><strong style="width: 80px;">Message: </strong>' . $_POST['message'] . '</p>
      </body>
    </html>
  ';

//
// script
// --------------------------------------------------
//

  if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Ошибка. Попробуйте позже.'); // no html
  } else {
    if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
      die('Only allow access via AJAX'); // no html
    } else {
      if (empty($EMAIL) || empty($NAME) || empty($SUBJECT) || empty($HTML)) {
        die(json_encode(array('type' => 'error', 'msg' => '<span class="form-icon-error"></span> Ошибка. Проверьте настройки php.')));
      } else {
        extract($_POST, EXTR_PREFIX_ALL, 'form');

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($form_email, $form_name);
        $mail->addReplyTo($form_email, $form_name);
        $mail->addAddress($EMAIL, $NAME);
        $mail->Subject = $SUBJECT;
        $mail->msgHTML($HTML);

        if (!$mail->send()) {
          die(json_encode(array('type' => 'error', 'msg' => '<span class="form-icon-error"></span> Ошибка. Попробуйте позже.')));
        } else {
          die(json_encode(array('type' => 'success', 'msg' => ' Отправлено.')));
        }
      }
    }
  }
?>