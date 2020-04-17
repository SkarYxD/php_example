<?php session_start(TRUE);

if(!isset($_SESSION['mintime'])) {
    $_SESSION['mintime'] = array(0, time());
}

if(isset($_POST['submit'])) {
    if($_POST['password'] && $_POST['username']) {
        // validación de formulario aquí

        array_push($_SESSION['mintime'], time());
        array_shift($_SESSION['mintime']);

        if($_SESSION['mintime'][1] - $_SESSION['mintime'][0] < 2) { // tiempo mínimo (en segundos) entre envíos de formularios válidos
            // formulario enviado demasiado rápido
        }else{
            // envío exitoso del formulario
        }
    }else{
        // datos de formulario incompletos
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Username: <input type="text" name="username" />
    Password: <input autocomplete="off" type="password" name="password" value="" />
    <input type="submit" name="submit" value="Login!" />
</form>

</body>
</html>
