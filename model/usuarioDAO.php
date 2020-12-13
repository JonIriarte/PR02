<?php
//DAO=Data Access Object
require_once 'usuario.php';
class UsuarioDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }
    //Función para hacer login
    public function login($user){
        $query = "SELECT * FROM tbl_user WHERE `email_user`=? AND `password_user`=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $password=$user->getPassword();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$password);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            //Creamos la sesión
            $user->setNombre($result['nombre_user']);
            $user->setId($result['id_user']);//coge el id del camarero
            $user->setProfile($result['profile_user']);
            $user->setStatus($result['status_user']);
            $user->setApellido($result['apellido_user']);
            $user->setEmail($result['email_user']);
            session_start();
            $_SESSION['id']=$user->getId();//coge el nombre del usuario para mostrarlo en la página una vez realizado el login.
            $_SESSION['nombre']=$user->getNombre();
            $_SESSION['profile']=$user->getProfile();
            $_SESSION['status']=$user->getStatus();
          return true;
        } else {
            return false;
        }
    }
}

?>