<?php  
require_once 'mesa.php';
class ReservaDao{
    private $pdo;

    public function __construct(){
        include '../model/connection.php';
        $this->pdo=$pdo;
    }
    public function mostrarReservas(){
    	include '../model/connection.php';
    	$sql="SELECT id_reserva,telf_reserva,nombre_reserva,fecha_reserva,hora_reserva,id_mesa from tbl_reserva order by fecha_reserva ASC ";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_reserva=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			echo "<table>"; 
			echo "<td style='text-align:center'>Id reserva</td>"; 
			echo "<td style='text-align:center'>Teléfono de contacto</td>";
			echo "<td style='text-align:center'>Nombre</td>";
			echo "<td style='text-align:center'>Fecha</td>";
			echo "<td style='text-align:center'>Hora</td>"; 
			echo "<td style='text-align:center'>Mesa</td>"; 
			
		foreach ($lista_reserva as $reserva) {
			$id_reserva=$reserva["id_reserva"]." ";
			echo "<tr>";
			echo "<td style='text-align:center'>".$reserva['id_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['telf_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['nombre_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['fecha_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['hora_reserva']."</td>";
			echo "<td style='text-align:center'>".$reserva['id_mesa']."</td>";
			//Hay que hacer un botón para eliminar reservas AQUÍ
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
		public function hacerReserva($dia,$hora,$nombre,$telefono,$id_mesa){
			try {
				$query="INSERT INTO `tbl_reserva` (`fecha_reserva`,`hora_reserva`,`nombre_reserva`,`telf_reserva`,`id_mesa`) VALUES (?,?,?,?,?); "; 
				$sentencia=$this->pdo->prepare($query); 
				$sentencia->bindParam(1,$dia); 
				$sentencia->bindParam(2,$hora);
				$sentencia->bindParam(3,$nombre);
				$sentencia->bindParam(4,$telefono);
				$sentencia->bindParam(5,$id_mesa);
				$sentencia->execute(); 

				
				echo "todo OK"; 

			} catch (\Throwable $th) {
				print_r($sentencia); 
				echo "Catch<br>"; 
				 echo $th; 
			}
		}
}