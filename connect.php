<?php
include "include.php";
var_dump($_POST);
if($_POST['bt']=="con") {
    if ((isset($_POST['login']) && $_POST['login'] != ' ') && (isset($_POST['password']) && $_POST['password'] != ' ')) {
        $user = Users::fromForm();
        if ($user->check()) {
            echo "Vous avez reussi!";
            $user->connecter();
            //header("Location: " . "../index.php");
        } else {
            echo "Vous avez pas reussi...";
        }
    }
}else if ($_POST['bt']=="ins"){
    if ((isset($_POST['login']) && $_POST['login'] != ' ') && (isset($_POST['password']) && $_POST['password'] != ' ' && (isset($_POST['ConfirmPassword']) && $_POST['ConfirmPassword'] != ' '))) {
        if($_POST['password']==$_POST['ConfirmPassword']){
            $user = Users::fromForm();
            if(UserModel::Create($user)){
                $user->connecter();
            }
        }
    }
}