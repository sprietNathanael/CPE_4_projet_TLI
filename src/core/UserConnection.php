<?php

class UserConnection
{
    private $login = "user";
    private $password = "1234";

    public function logIn(String $login, String $passWord)
    {
        $connectionOk = false;

        //@TODO requête en base pour match login et passwd enregistré
        if ($login === $this->login && $passWord === $this->password){
            $_SESSION['login'] = $login;
            $_SESSION['name'] = 'nameEnBase';
            $connectionOk = true;
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
        return true;
//        return isset($_SESSION['login']) && isset($_SESSION['name']);
    }
}
