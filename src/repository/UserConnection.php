<?php

require_once "UsersDal.php";

class UserConnection
{
    /**
     * Test if the user exists
     */
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
     * Add new user
     */
    public function signIn(String $login, String $passWord, String $name, String $firstName)
    {
        $ret = false;

        if (!empty($login) && !empty($name)){
            $connectionDb = new UsersDal();
            $ret = $connectionDb->add($login, $passWord, $name, $firstName);
        }

        return $ret;
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
     *
     * @param String $id
     * @param String $password
     * @return bool
     */
    public function isLogIn()
    {
        return (isset($_SESSION['login']));
    }
}
