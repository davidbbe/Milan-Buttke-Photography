<?php
$field_name = trim($_POST['name']);
$field_mail = trim($_POST['email']);
$field_phone = trim($_POST['phone']);
$field_message = trim($_POST['message']);
 
$mail_to = 'mbphotocontact@yahoo.com';
$subject = 'Message from milanbuttkephotography.com site visitor '.$field_name;
 
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_mail."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;
 
$headers = 'From: '.$field_name."\r\n";
$headers .= 'Reply-To: '.$field_mail."\r\n";

$from="From: $name<$field_mail>\r\nReturn-path: $field_mail";
 
$mail_status = mail($mail_to, $subject, $body_message, $from);
 
if ($mail_status) { ?>
   <script language="javascript" type="text/javascript">
      alert('Thank you for the message. I will get back to as soon as possible.');
      window.location = 'contacts.html';
   </script>
<?php
}
else { ?>
   <script language="javascript" type="text/javascript">
      alert('Message failed. Please, send an email to mbphotocontact@yahoo.com');
      window.location = 'contacts.html';
   </script>
<?php
}
?>