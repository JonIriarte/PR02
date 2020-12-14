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
    //CRUD para los usuarios
    //Función para crear usuarios
    public function createUser($nombre,$apellido,$email,$password,$status,$profile){
        try {
            $password=md5($password); 
            $query="INSERT INTO `tbl_user` (`email_user`, `password_user`, `nombre_user`, `apellido_user`, `status_user`, `profile_user`) VALUES (?,?,?,?,?,?)"; 
            $sentencia=$this->pdo->prepare($query);
            $sentencia->bindParam(1,$email);
            $sentencia->bindParam(2,$password);
            $sentencia->bindParam(3,$nombre);
            $sentencia->bindParam(4,$apellido);
            $sentencia->bindParam(5,$status);
            $sentencia->bindParam(6,$profile);
            $sentencia->execute();
            header('Location:../view\zona.admin.php');
        } catch (\Throwable $th) {
            header('Location:../view\zona.admin.php' ); 
        }
    }
    
    public function readUser(){
        //Función para ver todos los usuarios que hay en la BD
        $query = "SELECT id_user,email_user,nombre_user,apellido_user,status_user,profile_user FROM tbl_user"; 
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>"; 
        echo "<th>"; 
        echo "<td style='text-align:center'>Id</td>";
        echo "<td style='text-align:center'>Email</td>";
        echo "<td style='text-align:center'>Nombre</td>";
        echo "<td style='text-align:center'>Apellido</td>";
        echo "<td style='text-align:center'>Estado</td>"; 
        echo "<td style='text-align:center'>Perfil</td>"; 
        echo "</th>";
         foreach ($result as $user){
            $id=$user['id_user']; 
            echo "<tr>"; 
            echo "<td>".$user['id_user']."</td>"; 
            echo "<td>".$user['email_user']."</td>";
            echo "<td>".$user['nombre_user']."</td>";
            echo "<td>".$user['apellido_user']."</td>";
            echo "<td>".$user['status_user']."</td>";
            echo "<td>".$user['profile_user']."</td>";
            echo "<td><a href='../view/eliminarUsuario.php?id_user=$id'>Eliminar</a></td>"; 
            echo "<td><a href='../view/modificarUsuario.php?id_user=$id'>Modificar</a></td>"; 
         }
    }
    //Lectura de un usuario en base al id para hacer Update en la BD
    public function readIdUser($id){    
        $query="SELECT * FROM tbl_user WHERE id_user= ?"; 
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$id);
        $sentencia->execute(); 
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>"; 
        echo "<th>"; 
        echo "<td style='text-align:center'>Id</td>";
        echo "<td style='text-align:center'>Email</td>";
        echo "<td style='text-align:center'>Nombre</td>";
        echo "<td style='text-align:center'>Apellido</td>";
        echo "<td style='text-align:center'>Estado</td>"; 
        echo "<td style='text-align:center'>Perfil</td>"; 
        echo "</th>";
         foreach ($result as $user){
            echo "<tr>"; 
            echo "<td>".$user['email_user']."</td>";
            echo "<td>".$user['nombre_user']."</td>";
            echo "<td>".$user['apellido_user']."</td>";
            echo "<td>".$user['status_user']."</td>";
            echo "<td>".$user['profile_user']."</td>";

         }
    }
    //Cambiar los datos del usuario  que se ha mostrado en readIdUser() en la BD
    public function updateIdUser(){
        


    } 
    //Borrar usuario de la BD
    public function deleteUser($id){
        $query="DELETE  FROM tbl_user WHERE id_user= ?; "; 
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$id);
        $sentencia->execute(); 
        header('Location:../view\zona.admin.php');
    }

}

?>