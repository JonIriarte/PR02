<?php
//DAO=Data Access Object
require_once 'camarero.php';
class UsuarioDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM users WHERE `email`=? AND `password`=?";
        $sentencia=$this->pdo->prepare($query);
        $nombre=$user->getNombre();//falta el getNombre
        $password=$user->getPassword();//falta el getPasswd
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$password);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if(!empty($numRow) && $numRow==1){
            //Creamos la sesión
            $nombre->setIdCamarero($result['nombre']);
            $user->setIdCamarero($result['id']);//coge el id del camarero
            $profile->setIdCamarero($result['profile']);
            session_start();
            $_SESSION['id']=$user;//coge el nombre del camarero para mostrarlo en la página una vez realizado el login.
            $_SESSION['nombre']=$nombre;
            $_SESSION['profile']=$profile;
            return true;
        } else {
            return false;
        }
    }
}

?>