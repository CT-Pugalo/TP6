<?php

include "include.php";
echo "<div>";
if (!Users::estConnecter()) {
    ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php
} else {
    $user = new Users($_SESSION['utilisateur']['login'], $_SESSION['utilisateur']['password']);
    echo "{$user->getLogin()}";
    echo "<a href='deconnection.php'>Deconnection</a>";
}
echo "</div>";