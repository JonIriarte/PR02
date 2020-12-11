
<?php

class Reserva {
        //Atributos, siempre en privado
        private $id_reserva;
        private $fecha_reserva;
        private $hora_reserva;
        private $nombre_reserva; 
        private $telefono_reserva; 
        private $id_user;
        private $id_mesa;

        //Constructor
        public function __construct($fecha_reserva,$hora_reserva){
            $this->fecha_reserva=$fecha_reserva;
            $this->hora_reserva=$hora_reserva;
        
	 	
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
    public function gethoraReserva()
    {
        return $this->hora_reserva;
    }

    /**
     * @param mixed $hora_reserva
     *
     * @return self
     */
    public function sethoraReserva($hora_reserva)
    {
        $this->hora_reserva = $hora_reserva;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIduser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     *
     * @return self
     */
    public function setIduser($id_user)
    {
        $this->id_user = $id_user;

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

        /**
         * Get the value of nombre_reserva
         */ 
        public function getNombre_reserva()
        {
                return $this->nombre_reserva;
        }

        /**
         * Set the value of nombre_reserva
         *
         * @return  self
         */ 
        public function setNombre_reserva($nombre_reserva)
        {
                $this->nombre_reserva = $nombre_reserva;

                return $this;
        }

        /**
         * Get the value of telefono_reserva
         */ 
        public function getTelefono_reserva()
        {
                return $this->telefono_reserva;
        }

        /**
         * Set the value of telefono_reserva
         *
         * @return  self
         */ 
        public function setTelefono_reserva($telefono_reserva)
        {
                $this->telefono_reserva = $telefono_reserva;

                return $this;
        }
}

	 	
