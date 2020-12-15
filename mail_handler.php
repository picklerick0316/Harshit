<:php
    $message_sent = false;
    if(isset($POST['email]) && $POST['email'] !=''){
        
        if( filter_var($POST ['email],FILTER_VALIDATE_EMAIL) ){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];

            $to = "harshitkotnala@gmail.com";
            $body ="";

            $body .= "From: "$userName. "\r\n";
             $body .= "Email: "$userEmail. "\r\n";
            $body .= "Message: "$message. "\r\n";

            $message_sent = true;
        }
    }
?>



<?php
if($message_sent):
?>
    <h3>Thanks, for the feedback We will be in Touch</h3>
<?php
else:
?>


<?php
endif;
?>

