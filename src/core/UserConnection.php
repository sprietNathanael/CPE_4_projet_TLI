<?php

include "UsersDal.php";

class UserConnection
{
    private $login = "user";
    private $password = "1234";

    public function logIn(String $login, String $passWord)
    {
        $connectionOk = false;

        //Vérifie si une session est déjà initialisée
        if (isset($_SESSION['login'])){
            $connectionOk = true;
        }
        //Si ce n'est pas le cas, on fait un appel en BD pour vérifier l'identité de l'utilisateur qui souhaite se connecter
        if (!$connectionOk){
            $connection = new UsersDal();
            if($connection->connection($login, $passWord)){
                $_SESSION['login'] = $login;
                $_SESSION['name'] = 'nameEnBase';
                $connectionOk = true;
            }
        }

        return $connectionOk;
    }

    /**
     * Log out the user
     */
    public function logOut()
    {
        session_unset();
    }

    /**
     * Tests if a user is logged into the site
     * @TODO A remplacer une fois la connexion avec le formulaire mise en place
     *
     * @return bool
     */
    public function isLogIn()
    {
        return $this->logIn("etidudur", "1234");
    }
}
