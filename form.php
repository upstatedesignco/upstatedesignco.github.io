<?php

  if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $mailFrom = $_POST['email'];

      $mailTo = "jrstagliano@yahoo.com"
      $headers = "From: ".$mailFrom;
      $txt = "You have received an email from ".$name.".\n\n".

    email($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
?>