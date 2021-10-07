<?php

include "include.php";
$formConnection=<<<HTML
<form action="connect.php" method="post">
    <label for="login">login</label>
    <input name="login" type="text">
    <label for="password">password</label>
    <input name="password" type="password">
    <button type="submit" name="bt" value="con">Connectez-vous!</button>
</form>
HTML;
$formInscritpion=<<<HTML
<form action="connect.php" method="post">
    <label for="login">login</label>
    <input name="login" type="text">
    <label for="password">password</label>
    <input name="password" type="password">
    <label for="ConfirmPassword">confimration password</label>
    <input name="ConfirmPassword" type="password">
    <button type="submit" name="bt" value="ins">Inscrivez-vous!</button>
</form>
HTML;

if(!Users::estConnecter()){
    echo $formConnection;
    echo "**********";
    echo $formInscritpion;
}else{
    echo "vous etes co";
    echo "<a href='deconnection.php'>se deconnecter</a><br>";

}