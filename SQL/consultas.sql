INSERT INTO Para hacer reservas: 

INSERT INTO reserva (id_camarero,id_mesa) 
SELECT camarero.id_camarero, mesa.id_mesa 
FROM camarero,mesa WHERE mesa.id_mesa="value" AND camarero.id_camarero="value";  

UPDATE para acabar la reserva y liberar la mesa: 

UPDATE reserva SET `fin_reserva` = CURRENT_TIMESTAMP 
WHERE id_camarero= "VALOR QUE SE LE PASA" AND id_mesa="VALOR QUE SE LE PASA"; 

