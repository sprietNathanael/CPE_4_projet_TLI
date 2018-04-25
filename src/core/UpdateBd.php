<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/04/2018
 * Time: 15:11
 */

updateBd();

function updateBd()
{
    try {
        $connectionClass = new ConnectionBd();
        $conn = $connectionClass->getConnection();

        try {
            $req = 'SELECT version FROM Parameters';
            $parametersPDO = $conn->query($req);
            $parameters = $parametersPDO->fetch();
            $version = $parameters['version'];

            $parametersPDO->closeCursor();

        } catch (PDOException $e) {
            $req = 'Create table IF NOT EXISTS parameters (
                  idP Int Not Null Auto_Increment,
                  version Varchar(5) NOT NULL,
                  PRIMARY KEY (idP)
                )';
            //exec because no results
            $conn->exec($req);
            $req = 'INSERT INTO Parameters(Version) VALUES ("01.00")';
            $conn->exec($req);
            $i = 1;
        }

        if ($version = '01.00') {
            $version = Update_01_01($conn);
        }


        // Update version fin
        $conn->exec("UPDATE Parameters SET Version='".$version."'");
        $conn = null;

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


function Update_01_01($co)
{
    $req = 'Create table IF NOT EXISTS users (
                  idU Int Not Null Auto_Increment,
                  pseudo Varchar(100),
                  password Varchar(256),
                  nom Varchar(100) NULL,
                  prenom Varchar(100) NULL,
                  PRIMARY KEY (idU)
              )';
    //exec because no results
    $co->exec($req);

    return "01.01";
}

