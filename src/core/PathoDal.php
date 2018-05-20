<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 25/04/2018
 * Time: 11:15
 */

require_once "ConnectionBd.php";

class PathoDal
{
    public function getAll()
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();

        $query = $conn->query("SELECT mer, type, `desc` FROM patho");
        return ($query->fetchAll());
    }

    public function getList(String $meridien, String $pathologie, String $caracteristique)
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();
        $req = "SELECT m.nom, type, `desc` 
                FROM patho p
                INNER JOIN meridien m ON p.mer=m.code
                WHERE m.nom LIKE CONCAT('%', ?,'%')
                  AND `desc` LIKE CONCAT('%', ?, '%')
                  AND `desc` LIKE CONCAT('%', ? '%')";

        $query = $conn->prepare($req);
        $query->execute(array($meridien, $pathologie, $caracteristique));
        return ($query->fetchAll());
    }
    
}
/*
$pathoDal = new PathoDal();
$list = $pathoDal->getList("poumon","luo","vide");
var_dump($list);
*/