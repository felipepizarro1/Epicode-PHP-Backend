<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_data = [
        'email' => $email,
        'password' => $password
    ];

    $_SESSION['user'] = $user_data;
    echo 'Usuario registrado con éxito.';
}
?>