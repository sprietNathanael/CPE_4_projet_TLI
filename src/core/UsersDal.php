<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/04/2018
 * Time: 16:23
 */

require_once "ConnectionBd.php";

class UsersDal
{
    /**
     * @param $username
     * @param $password
     * @return true if user found
     *
     */
    public function connection($username, $password)
    {
        $user = $this->getOneByUsername($username);

        $passwordToCompare = $user['password'];
        if ($passwordToCompare == null)
            return false;

        $password = md5((md5($password) . $user['idU']));

        return ($passwordToCompare === $password);
    }

    public function getOneByUsername($username)
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();

        $query = $conn->prepare('SELECT * FROM users WHERE pseudo = ?');
        $query->execute(array($username));
        return ($query->fetch());
    }

    /**
     * @param $username
     * @param $password
     * @param $nom
     * @param $prenom
     * @return true if user has added
     */
    public function add($username, $password, $nom, $prenom)
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();

        // test si utilisateur avec meme username existe
        $userExist = $this->getOneByUsername($username);
        if ($userExist['idU'] != null)
            return false;

        $passMD5 = md5($password);

        try {
            $conn->beginTransaction();
            // récupération lastID
            $queryPdo = $conn->query("SELECT idU FROM `users` ORDER BY idU desc LIMIT 1");
            $user = $queryPdo->fetch();
            $lastIdU = $user["idU"];
            if ($lastIdU == null)
                $lastIdU = 0;

            // salage du MD5
            $passMD5 = md5($passMD5 . ($lastIdU + 1));

            // Insertion de l'user
            $insert = $conn->prepare("INSERT INTO users(pseudo, password, nom, prenom)
                               VALUES(?, ?, ?, ?)");
            $insert->execute(array($username, $passMD5, $nom, $prenom));
            $conn->commit();
            return true;

        } catch (PDOException $e) {
            $conn->rollBack();
            print "Erreur !: " . $e->getMessage() . "<br/>";
            return false;
        }
    }

    public function delete($idU)
    {
        $connClass = new ConnectionBd();
        $conn = $connClass->getConnection();

        $query = $conn->prepare('DELETE FROM users WHERE idU = ?');
        $query->execute(array($idU));
    }

}

//$usersDal = new UsersDal();
//$add = $usersDal->add('test', 'test2', '', '');
//var_dump($add);
//$co = $usersDal->connection('test','test2');
//var_dump($co);
//$add = $usersDal->add('test2', 'test3', '', '');
//var_dump($add);
//$co = $usersDal->connection('test2','test3');
//var_dump($co);
//$usersDal->delete(1);