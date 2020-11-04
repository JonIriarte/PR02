<?php  
require_once 'mesa.php';
class ReservaDao{
    private $pdo;

    public function __construct(){
        //include './model/connection.php';
        //$this->pdo=$pdo;
    }
    public function mostrarReservas(){
    	include '../model/connection.php';
    	$sql="SELECT reserva.id_reserva,reserva.fecha_reserva,reserva.fin_reserva,reserva.id_mesa,camarero.nombre from reserva INNER JOIN camarero on reserva.id_camarero=camarero.id_camarero";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_reserva=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_reserva as $reserva) {
			$id_reserva=$reserva["id_mesa"]." ";
			echo "<tr>";
			echo "<td style='text-align:center'>".$reserva['id_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['fecha_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['fin_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['nombre']."</td>";
			echo "<td style='text-align:center'>".$reserva['id_mesa']."</td>";
			echo "</tr>";
		}
	}
	public function contarReservas(){
		include '../model/connection.php';
    	$sql="SELECT count(reserva.id_mesa) as 'Veces reservada',mesa.lugar_mesa, reserva.id_mesa from reserva inner join mesa on reserva.id_mesa=mesa.id_mesa group by id_mesa";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_contador=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_contador as $contador) {
			$id_reserva=$contador["id_mesa"]." ";
			echo "<tr>";
			echo "<td style='text-align:center'>".$contador['id_mesa']."</td>";
			echo "<td style='text-align:center'>".$contador['lugar_mesa']."</td>";
			echo "<td style='text-align:center'>".$contador['Veces reservada']."</td>";
			echo "</tr>";
		}
	}
}