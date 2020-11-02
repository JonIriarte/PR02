<?php
//DAO=Data Access Object
require_once 'camarero.php';
class CamareroDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM camarero WHERE `nombre`=? AND `password`=?";
        $sentencia=$this->pdo->prepare($query);
        $nombre=$user->getNombre();//falta el getNombre
        $passwd=$user->getPassword();//falta el getPasswd
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$password);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if(!empty($numRow) && $numRow==1){
            //Creamos la sesión
            $user->setIdCamarero($result['id_camarero']);//coge el id del camarero
            session_start();
            $_SESSION['nombre']=$user;//coge el nombre del camarero para mostrarlo en la página una vez realizado el login.
            return true;
        } else {
            return false;
        }
    }
}

?>