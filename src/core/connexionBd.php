<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/04/2018
 * Time: 14:32
 */

function getConnection()
{
    try {
        $user = 'root';
        $pass = '';
        $conn = new PDO('mysql:host=localhost;dbname=acu', 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

try {
    $conn = getConnection();


    $req = 'Create table IF NOT EXISTS users (
              idU Int Not Null Auto_Increment,
              pseudo Varchar(100),
              password Varchar(256),
              nom Varchar(100) NULL,
              prenom Varchar(100) NULL,
              PRIMARY KEY (idU)
          )';
    //exec because no results
    $conn->exec($req);

    $req = 'Create table IF NOT EXISTS parameters (
              idP Int Not Null Auto_Increment,
              version FLOAT(8,1) NOT NULL,
              PRIMARY KEY (idP)
          )';
    //exec because no results
    $conn->exec($req);


    //foreach ($conn->query('SELECT * from symptome') as $row) {
    //print_r($row);
    //}
    printf("test");
    $conn = null;

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
