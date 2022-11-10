<meta charset="UTF-8" />

<?php
$name = $_POST['name'];
$phone = $_POST['telephone'];
$message = $_POST['msg'];
$email = 'support@your-site.ru';
$formcontent=" From: $name \n Tel: $phone \n Message: $message";
$recipient = "your-email@gmail.com";
$subject = "Message from site";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die('<div id="alert"> Send error. Write to chat. </div>');
echo '<div id="alert"> Message sent! Let be in touch. </div>';
?>

<style>

  #alert
  {
    display : flex;   
    align-items : center; 
    justify-content : center;
    
    overflow : hidden;

    width : 100%;
    height : 100vh;

    font-size : 2rem;
    letter-spacing : .1em;
    text-transform : capitalize;

    text-align : center;  

    color : #fff; 
    background-color : #afd7e8; 
  }

</style>



