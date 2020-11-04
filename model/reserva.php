
<?php

class Camarero {
        //Atributos, siempre en privado
        private $id_reserva;
        private $fecha_reserva;
        private $fin_reserva;
        private $id_camarero;
        private $id_mesa;

        //Constructor
        public function __construct($fecha_reserva,$fin_reserva){
            $this->fecha_reserva=$fecha_reserva;
            $this->fin_reserva=$fin_reserva;
        
	 	
    /**
     * @return mixed
     */
    public function getIdReserva()
    {
        return $this->id_reserva;
    }

    /**
     * @param mixed $id_reserva
     *
     * @return self
     */
    public function setIdReserva($id_reserva)
    {
        $this->id_reserva = $id_reserva;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaReserva()
    {
        return $this->fecha_reserva;
    }

    /**
     * @param mixed $fecha_reserva
     *
     * @return self
     */
    public function setFechaReserva($fecha_reserva)
    {
        $this->fecha_reserva = $fecha_reserva;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinReserva()
    {
        return $this->fin_reserva;
    }

    /**
     * @param mixed $fin_reserva
     *
     * @return self
     */
    public function setFinReserva($fin_reserva)
    {
        $this->fin_reserva = $fin_reserva;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCamarero()
    {
        return $this->id_camarero;
    }

    /**
     * @param mixed $id_camarero
     *
     * @return self
     */
    public function setIdCamarero($id_camarero)
    {
        $this->id_camarero = $id_camarero;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMesa()
    {
        return $this->id_mesa;
    }

    /**
     * @param mixed $id_mesa
     *
     * @return self
     */
    public function setIdMesa($id_mesa)
    {
        $this->id_mesa = $id_mesa;

        return $this;
    }
}

	 	
