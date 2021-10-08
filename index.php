<?php

include "include.php";
if (!Users::estConnecter()) {
    ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php
} else {
    $user = new Users($_SESSION['utilisateur']['login'], $_SESSION['utilisateur']['password']);
    echo "{$user->getLogin()} ";
    echo "<a href=' deconnection.php'>Deconnection</a>";
    ?>
    <div>
        News
        <div>
            <?php
            $allID = NewModel::getAllID();
            $news = array();
            foreach ($allID as $id) {
                array_push($news, NewModel::Read($id));
            }
            foreach ($news as $new) {
                echo <<<HTML
                <div>
                    {$new->getTitre()}
                </div>
                <div>
                    {$new->getContenu()}
                </div>
HTML;
            }
            ?>
        </div>
    </div>
    <?php
    echo "<a href='ecrireNews.php'>Ecrire une news?</a>";
}