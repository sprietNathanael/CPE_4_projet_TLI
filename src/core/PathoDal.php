<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 25/04/2018
 * Time: 11:15
 */

include "ConnectionBd.php";

class PathoDal
{
    public function getAll()
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();

        $query = $conn->query('SELECT * FROM Patho');
        return ($query->fetch());
    }

   // public function getList()

}