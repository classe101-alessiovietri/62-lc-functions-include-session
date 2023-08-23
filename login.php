<?php
    session_start();

    require_once __DIR__ . '/database.php';

    var_dump($_POST);

    if (
        isset($_POST['email'])
        &&
        isset($_POST['password'])
    ) {
        $foundUser = null;

        foreach ($users as $user) {
            if (
                $_POST['email'] == $user['email']
                &&
                $_POST['password'] == $user['password']
            ) {
                $foundUser = $user;
            }
        }

        if ($foundUser) {
            $_SESSION['user_name'] = $foundUser['name'];
            $_SESSION['user_email'] = $foundUser['email'];

            header('Location: ./homepage.php');
        }
        else {
            echo 'Credenziali errate';
        }
    }
    else {
        echo 'C hai provato!';
    }