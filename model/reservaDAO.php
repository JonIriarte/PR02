<?php  
require_once 'mesa.php';
require_once 'reserva.php';
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
		$reserva=new Reserva($dia,$hora,$nombre,$telefono);
		$reserva->setIdMesa($id_mesa);
		$reserva->setFechaReserva($dia); 
		//Comprobación de que la fecha y la hora de la reserva sea posterior al momento actual. 
		$UNIXHoy=time(); 
		//Convertir el día de la reserva a tiempo UNIX
		$fechaReserva=strtotime($dia); 
		//Segundos del día que han pasado desde el inicio hasta cada franja que se puede reservar
		$f1=46800; 
		$f2=50400; 
		$f3=54000; 
		$f4=72000; 
		$f5=75600; 
		
		if($hora='13'){
			$UNIXHoy=$UNIXHoy+$f1; 
			$fechaReserva=$fechaReserva+$f1; 
		}elseif($hora='14'){
			$UNIXHoy=$UNIXHoy+$f2; 
			$fechaReserva=$fechaReserva+$f2;
		}elseif($hora='15'){
			$UNIXHoy=$UNIXHoy+$f3; 
			$fechaReserva=$fechaReserva+$f3;
		}elseif($hora='20'){
			$UNIXHoy=$UNIXHoy+$f4; 
			$fechaReserva=$fechaReserva+$f4;
		}else{
			$UNIXHoy=$UNIXHoy+$f5; 
			$fechaReserva=$fechaReserva+$f5;
		}
		if($fechaReserva>$UNIXHoy){	
			try {
			
			 	$prequery="SELECT * FROM tbl_reserva WHERE fecha_reserva='$dia' AND hora_reserva='$hora' AND id_mesa='$id_mesa'"; 
			 	$prequery=$this->pdo->prepare($prequery); 
			 	$prequery->execute(); 
			 	$count=$prequery->rowCount();  
				if ($count==0){
						$query="INSERT INTO `tbl_reserva` (`fecha_reserva`,`hora_reserva`,`nombre_reserva`,`telf_reserva`,`id_mesa`) VALUES (?,?,?,?,?); "; 
						$sentencia=$this->pdo->prepare($query); 
						$sentencia->bindParam(1,$dia); 
						$sentencia->bindParam(2,$hora);
						$sentencia->bindParam(3,$nombre);
						$sentencia->bindParam(4,$telefono);
						$sentencia->bindParam(5,$id_mesa);
						$sentencia->execute(); 
						echo "RESERVA HECHA <br>";
						echo "<br>"; 
						echo "<a href='../view\zona.camareros.php'>VOLVER</a>"; 
					}else{
						header('Location:../view\zona.camareros.php');
					}
			 } catch (\Throwable $th) {
				echo $th; 
				echo "<br>"; 
			 	echo "Tienes que rellenar todos los campos"; 
			 	echo "<br>";
			 	echo "<a href='../view\zona.camareros.php'>VOLVER</a>"; 
			 }
		}else{
			header('location: ../view/zona.camareros.php'); 
		}
	}
	public function anularReserva($telefono){
		


	}




}