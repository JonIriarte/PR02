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
    	$sql="SELECT * FROM reserva";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_reserva=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		foreach ($lista_reserva as $reserva) {
			$id_reserva=$reserva["id_mesa"]." ";
			echo $reserva['id_reserva']." , ";
			echo $reserva['fecha_reserva']." , ";
			echo $reserva['fin_reserva']." , ";
			echo $reserva['id_camarero']." , ";
			echo $reserva['id_mesa']." ";
			echo "<br>";
		}
	}
	public function contarReservas(){
		
	}
}