<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/04/2018
 * Time: 16:23
 */

include "ConnectionBd.php";

class UsersDal
{
    public function connection($username, $password)
    {
        //try {
            $connClass = new ConnectionBd();
            $conn = $connClass->getConnection();

            $query = $conn->prepare('SELECT * Users WHERE pseudo = ? AND password = ?');
            // mettre en place les cookies et session
            $query->execute(array($username, $password));
            $user = $query->rowCount();
            printf($user);

        /*} catch (Exception $e) {
            printf("<Erreur !: " . $e->getMessage() . "<br/>");

        }*/
    }

}

$usersDal = new UsersDal();
$usersDal->connection('test', 'test');
