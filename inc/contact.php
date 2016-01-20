<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'phpmailer/PHPMailerAutoload.php';

/*require_once('../Connections/local.php');*/
if (isset($_POST['contactName']) && isset($_POST['contactEmail']) && isset($_POST['contactMessage'])) {

   // check if any of the inputs are empty

   if (empty($_POST['contactName']) || empty($_POST['contactEmail']) || empty($_POST['contactMessage'])) {
      $data = array(
         'success' => false,
         'message' => 'Debes llenar todos los campos del formulario.'
      );
      echo json_encode($data);
      exit;
   }

   if(isset($_POST['contactName'])){
    $telefono=$_POST['contactName'];
   }else{
    $telefono='';
   }

   // create an instance of PHPMailer
   $mail = new PHPMailer();
   $mail->From = 'noreply@dolphin-it.com.ar';
   $mail->FromName = 'Consultas Dolphin-it';
   $mail->AddAddress('tecnoher@gmail.com'); //recipient

   // $mail->AddAddress('jacmiami@hotmail.com');
   // $mail->AddBCC('tecnoher@gmail.com');
   $mail->Subject = 'Tenes una nueva consulta';

   // $mail->Body = "Name: " . $_POST['contactName'] . "\r\n\r\nMessage: " . stripslashes($_POST['contactMessage']);
   $mail->IsHTML(true);
   $mail->Body = '<html>
          <div>
            <table border="0" cellpadding="10">
              <thead style="background: #eeeeee;">
                <tr><th colspan="2">Formulario de contacto web</th></tr>
              </thead>
              <tbody>
                <tr style="background: #f6f6f6;">
                  <td>Nombre</td>
                  <td><strong>' . $_POST['contactName'] . '</strong></td>
                </tr>
                <tr style="background: #f6f6f6;">
                  <td>Telefono</td>
                  <td><strong>'.$telefono.'</strong></td>
                </tr>
                <tr style="background: #f6f6f6;">
                  <td>Email</td>
                  <td><strong><a href="mailto:' . $_POST['contactEmail'] . '" target="_blank">' . $_POST['contactEmail'] . '</a></strong></td>
                </tr>
                  <tr style="background: #f6f6f6;">
                  <td>Consulta</td>
                  <td><strong>' . $_POST['contactMessage'] . '</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </html>';
   if (isset($_POST['ref'])) {
      $mail->Body.= "\r\n\r\nRef: " . $_POST['ref'];
   }

   if (!$mail->send()) {
      $data = array(
         'success' => false,
         'message' => 'El mensaje no pudo ser enviado. Error: ' . $mail->ErrorInfo
      );
      echo json_encode($data);
      exit;
   }

   // aca inserto en la tabla de contactos
   /*$query=sprintf("INSERT INTO tbl_contacto (nombre_y_apellido, telefono, email, descripcion, id_depto)
   VALUES ('".$_POST['contactName']."','".$_POST['inputPhone']."','".$_POST['contactEmail']."','".$_POST['contactMessage']."','".$dptoName."')");
   $result = $local->query($query);
   $local->close();*/
   $data = array(
      'success' => true,
      'message' => 'Gracias por su contacto!'
   );
   echo json_encode($data);
}else {
   $data = array(
      'success' => false,
      'message' => 'Debes llenar todos los campos del formulario.'
   );
   echo json_encode($data);
}
