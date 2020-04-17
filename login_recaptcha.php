<?php

require_once 'recaptcha/recaptchalib.php';

if(isset($_POST['submit'])) {
    $privatekey = 'private_key_here';
    $resp = recaptcha_check_answer($privatekey,
              $_SERVER['REMOTE_ADDR'],
                $_POST['recaptcha_challenge_field'],
                $_POST['recaptcha_response_field']);

    if(!$resp->is_valid) {
        // ¿Qué sucede cuando el CAPTCHA se ingresó incorrectamente?
        die ('The reCAPTCHA wasn\'t entered correctly. Go back and try it again. (reCAPTCHA said: '.$resp->_error_.')');
    }else{
        // Su código aquí para manejar una verificación exitosa
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>

<form method="POST">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />

<?php
$publickey = 'public_key_here';
echo recaptcha_get_html($publickey);
?>

<input type="submit" name="submit" value="Log in" />
</form>

</body>
</html> 
