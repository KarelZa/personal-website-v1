<?php 

    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $mailFrom =  htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $errorEmpty = false;
        $errorEmail = false;

        if (empty($message) || empty($mailFrom)) {
            echo '<span class="form-error">❌ Fill in all required fields</span>';
            $errorEmpty = true;
        } elseif (!filter_var($mailFrom,FILTER_VALIDATE_EMAIL)) {
            echo '<span class="form-error">⚠ Write a valid e-mail address</span>';
            $errorEmail = true;
        } else {
            echo '<span class="form-success">✔ Your message has been sent</span>';
            $mailTo = 'contact@karelzamazal.cz';
            $headers = 'From: ' . $mailFrom;
            $body = 'You have received a message from ' . $name . "\r\n". $message;

            mail( $mailTo,$subject,$body,$headers);
        }
    } else {
        echo "There was an error with a submition of the message!";
    }
?>

<script>
    $("#name, #email, #subject, #message").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty; ?>"; 
    var errorEmail = "<?php echo $errorEmail; ?>"; 
    if (errorEmpty) {
        $("#message, #email").addClass("input-error");
    }
    if (errorEmail) {
        $("#email").addClass("input-error");
    }   
    if (errorEmpty == false && errorEmail == false) {
        $("#name, #email, #subject, #message").val("");
    }
</script>