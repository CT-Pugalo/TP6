<?php

include "include.php";

if (!Users::estConnecter()) {
    ?>
    <div>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
    <?php
} else {
    $user = new Users($_SESSION['utilisateur']['login'], $_SESSION['utilisateur']['password']);
    echo "<div>{$user->getLogin()}</div>";
}