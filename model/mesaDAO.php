<?php  
require_once 'mesa.php';
class MesaDao{
    private $pdo;

    public function __construct(){
        //include './model/connection.php';
        //$this->pdo=$pdo;
    }
    public function mostrar(){
    	include '../model/connection.php';
    	$sql="SELECT * FROM mesa";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_mesa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_mesa as $mesa) {
			$id=$mesa["id_mesa"]." ";
		/*	echo $id;*/
		//$enviar=$enviar."'>Modificar</a>";
		if ($mesa['disponible_mesa']==1) {
			echo "<div style=float:left;display:block;position:relative;>";
			echo "<img src='../img/mesa_verde.png' style='width:250px;height:250px;'>";
			echo "<div style='position:absolute;top: 50%;left:50%;'>".$mesa['lugar_mesa']."<br>".$mesa['plazas_mesa']."</div>";
			echo "</div>";
			echo "</div>";
			// echo "<tr style='color:green;text-align:center;'>";
			// echo "<td>{$mesa['lugar_mesa']}</td>";
			// echo "<td>{$mesa['plazas_mesa']}</td>";
			// echo "<td>{$mesa['disponible_mesa']}</td>";
			// echo "</tr>";
		} else {
			echo "<div style=float:left;display:block;position:relative;>";
			echo "<img src='../img/mesa_roja.png' style='width:250px;height:250px;'>";
			echo "<div style='position:absolute;top: 50%;left:50%;'>".$mesa['lugar_mesa']."<br>".$mesa['plazas_mesa']."</div>";
			echo "</div>";
			echo "</div>";
			// echo "<tr style='color:red;text-align:center;'>";
			// echo "<td>{$mesa['lugar_mesa']}</td>";
			// echo "<td>{$mesa['plazas_mesa']}</td>";
			// echo "<td>{$mesa['disponible_mesa']}</td>";
			// echo "</tr>";
		}

   		}
	}

	public function filtroLugar(){
		include '../model/connection.php';
		if (!empty($_POST['disponible'])) {
			$disponible = 1;
			$sql="SELECT * FROM mesa where lugar_mesa LIKE '%{$_POST['lugares']}%' AND disponible_mesa LIKE '%{$disponible}%' ";
		} else {
			$sql="SELECT * FROM mesa where lugar_mesa LIKE '%{$_POST['lugares']}%' ";
		}
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_mesa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_mesa as $mesa) {
			$id=$mesa["id_mesa"]." ";
		/*	echo $id;*/
		//$enviar=$enviar."'>Modificar</a>";
		if ($mesa['disponible_mesa']==1) {
			echo "<div style=float:left;display:block;position:relative;>";
			echo "<img src='../img/mesa_verde.png' style='width:250px;height:250px;'>";
			echo "<div style='position:absolute;top: 50%;left:50%;'>".$mesa['lugar_mesa']."<br>".$mesa['plazas_mesa']."</div>";
			echo "</div>";
			echo "</div>";
		} else {
			echo "<div style=float:left;display:block;position:relative;>";
			echo "<img src='../img/mesa_roja.png' style='width:250px;height:250px;'>";
			echo "<div style='position:absolute;top: 50%;left:50%;'>".$mesa['lugar_mesa']."<br>".$mesa['plazas_mesa']."</div>";
			echo "</div>";
			echo "</div>";
		}

   		}
	}
}