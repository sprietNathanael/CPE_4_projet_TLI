<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/04/2018
 * Time: 14:32
 */

class ConnectionBd
{
    public function getConnection()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=TLI', 'root', 'root');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        } catch (PDOException $e) {
            print "<Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}


