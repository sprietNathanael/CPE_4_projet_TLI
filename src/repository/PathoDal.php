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

    public function getList(String $meridien, String $type, String $desc)
    {
        $connClass = new ConnectionBd();
        var_dump($meridien);
        var_dump($type);
        var_dump($desc);
        $conn = $connClass->getConnection();
        $req = 'SELECT meridien.nom, patho.type, patho.desc
        FROM patho
        INNER JOIN meridien ON patho.mer=meridien.code
        WHERE patho.mer LIKE CONCAT("%", ?, "%")
        AND patho.type LIKE CONCAT("%", ?, "%")
        AND patho.desc LIKE CONCAT("%", ?, "%")';

        $query = $conn->prepare($req);
        $query->execute(array($meridien, $type, $desc));
        return ($query->fetchAll());
    }

}
/*
$pathoDal = new PathoDal();
$list = $pathoDal->getList("P","","zang");
//$list = $pathoDal->getAll();
var_dump($list);*/
