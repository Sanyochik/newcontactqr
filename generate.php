<?php
    session_start();
    // Include qrcode.php file.
    include "controller/qrcode.php";
    if ($_POST['name'] && $_POST['note'] && $_POST['contact_phone'] && $_POST['contact_email']) {
      $name = $_POST['name'];
      $note = $_POST['note'];
      $phone = $_POST['contact_phone'];
      $email = $_POST['contact_email'];
      $imageName = "contact.png";

      // Create object
      $qc = new QRCODE();
      // Save QR Code
      $qc->QRCODE(400,$imageName,"MECARD:N:{$name};NOTE:{$note};TEL:{$phone};EMAIL:{$email};;");
      //passing image name to session
      $_SESSION['QR_IMAGE'] = '<div  id="qr"><img src="assets/img/contact.png" class="w-full h-56" alt="QrImage"></div>';
      $_SESSION['name'] = $name;
    }else {
      echo "Invalid Data";
    }

?>
