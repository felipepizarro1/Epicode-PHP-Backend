<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_data = $_SESSION['user'];

    if ($user_data && $user_data['email'] === $email && password_verify($password, $user_data['password'])) {
        $_SESSION['logged_in'] = true;
        echo 'Inicio de sesión exitoso.';
    } else {
        echo 'Credenciales incorrectas.';
    }
}
?>