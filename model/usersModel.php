<?php
include_once('bdd.php');

class UsersModel {
    private $bdd;
    public function __construct(){
        $this->bdd=Bdd::connexion();
    }
    public function getUser(){
        return $this->bdd->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUserbyEmail(){
        return $this->bdd->query("SELECT * FROM users='$email'")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setUser(){
    $setUser=$this->bdd->prepare("INSERT INTO users(nom, prenom, tel, email, mdp) VALUES (?,?,?,?,?,?)");
    return $setUser->execute($nom, $prenom, $tel, $email, $mdp);
    }

}
/*
$setUser = new usersModel;
$setUser->setUser('blabla','bla','10000','e@e','hh');
function usersModel()
{
    global $bdd;
    return $bdd->query("SELECT * from users")->fetchAll();
}

$users = usersModel();
var_dump($users);
*/