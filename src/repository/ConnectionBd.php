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
            // set the PDO error mode to exception
            $conn = new PDO('mysql:host=localhost;dbname=tli', 'root', 'admin', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            return $conn;

        } catch (PDOException $e) {
            print "<Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}


