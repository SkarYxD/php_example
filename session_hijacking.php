<?php

session_start();

if(!isset($_SESSION['user_agent'])) {
    $_SESSION['user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);
}else{
    if($_SESSION['user_agent'] !== md5($_SERVER['HTTP_USER_AGENT']) {
      // potencialmente un impostor: autentique al usuario con una página de inicio de sesión
    }
} 
