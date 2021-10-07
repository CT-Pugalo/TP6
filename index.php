<?php

include "include.php";

if (!Users::estConnecter()) {
    echo <<<HTML
        <a href="login.php" >Login</a>
        <a href="register.php">Register</a>
HTML;
} else {
    $user = new Users($_SESSION['utilisateur']['login'], $_SESSION['utilisateur']['password']);
    echo "{$user->getLogin()}";
}