<?php
require_once 'incidencia.php';
class IncidenciaDao{
    private $pdo;

    public function __construct(){
        //include './model/connection.php';
        //$this->pdo=$pdo;
    }
	public function insertIncidencia(){
    	try {    
	        include '../model/connection.php';
	        $pdo->beginTransaction();
	        $id=$_POST['id_mesa'];
	        $descripcion_incidencia=$_POST['descripcion_incidencia'];
	        $estado_incidencia=$_POST['estado_incidencia'];
	        $id_camarero=$_POST['id_camarero'];
	        $curdate=date("Y/m/d H:i:s");
	        echo $id;
	        $stmt=$pdo->prepare("INSERT INTO `incidencia` (`id_incidencia`, `descripcion_incidencia`, `estado_incidencia`, `fecha_incidencia`, `id_mesa`) VALUES (NULL, ?, 'abierta', ?, ?);");
	        $stmt->bindParam(1,$descripcion_incidencia);
			$stmt->bindParam(2,$curdate);
			$stmt->bindParam(3,$id);
			$stmt->execute();
	        $query="UPDATE `mesa` SET `disponible_mesa`=2 WHERE `id_mesa` = ?;";
	        $sentencia1=$pdo->prepare($query);
	        $sentencia1->bindParam(1,$id);
	        $sentencia1->execute();
	        print_r($sentencia1);
	        $pdo->commit();
	        header("Location: ../view/zona.admin.php");
    	} catch (Exception $e) {
        	$pdo->rollBack();
        	echo $e;
    	}
    }
    public function mostrar(){
    	include '../model/connection.php';
    	$sql="SELECT * FROM mesa where disponible_mesa=2";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();
		$lista_mesa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_mesa as $mesa) {
			$id=$mesa["id_mesa"]." ";
			$lugar="Ubicación: ";
			$ocup="Asientos: ";
			$nmesa="Mesa: ";
			echo "<a href='../view/modificar_incidencia.php?id_mesa={$id}'>";
			echo "<div style=float:left;display:block;position:relative;>";
			echo "<img src='../img/mesa_naranja.png' style='width:250px;height:250px;border: 2px solid black; background-color: lightskyblue; opacity: 0.9; margin-left: 10%; margin-bottom: 5%;'>";
			echo "</a>";
			echo "<div style='position:absolute;top: 45%;left:30%;'>".$nmesa.$mesa['id_mesa']."<br>".$lugar.$mesa['lugar_mesa']."<br>"."</div>";
			echo "</div>";
			echo "</div>";
			
		}

   	}

   	public function modificarIncidencia(){
    	try {    
	        include '../model/connection.php';
	        $pdo->beginTransaction();
	        $id=$_POST['id_mesa'];
	        echo $id;
	        $stmt=$pdo->prepare("UPDATE `incidencia` SET `estado_incidencia`='solucionada' where id_mesa=?  ORDER BY `id_incidencia` DESC LIMIT 1;");
	        $stmt->bindParam(1,$id);
			$stmt->execute();
	        $query="UPDATE `mesa` SET `disponible_mesa`=1 WHERE `id_mesa` = ?;";
	        $sentencia1=$pdo->prepare($query);
	        $sentencia1->bindParam(1,$id);
	        $sentencia1->execute();
	        print_r($sentencia1);
	        $pdo->commit();
	        header("Location: ../view/zona.mantenimiento.php");
    	} catch (Exception $e) {
        	$pdo->rollBack();
        	echo $e;
    	}
    }

    public function lecturaincidencia($id){
   		include '../model/connection.php';
        $query = "SELECT * FROM incidencia WHERE id_mesa=?";
        $sentencia=$pdo->prepare($query);
        $sentencia->bindParam(1,$id);
        $sentencia->execute();
        $incidencia=$sentencia->fetch(PDO::FETCH_ASSOC);
        return $incidencia;
    }
}
?>