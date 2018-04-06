<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/04/2018
 * Time: 14:32
 */

try {
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host=localhost;dbname=acu', $user, $pass);
    foreach ($dbh->query('SELECT * from symptome') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
