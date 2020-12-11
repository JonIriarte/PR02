<?php
	class Mesa {
		private $id_mesa;
		private $plazas_mesa;
		private $lugar_mesa;

		public function __construct($plazas_mesa,$lugar_mesa){
			$this->plazas_mesa=$plazas_mesa;
			$this->lugar_mesa=$lugar_mesa;
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
     * @return mixed
     */
    public function getPlazasMesa()
    {
        return $this->plazas_mesa;
    }

    /**
     * @param mixed $plazas_mesa
     *
     * @return self
     */
    public function setPlazasMesa($plazas_mesa)
    {
        $this->plazas_mesa = $plazas_mesa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugarMesa()
    {
        return $this->lugar_mesa;
    }

    /**
     * @param mixed $lugar_mesa
     *
     * @return self
     */
    public function setLugarMesa($lugar_mesa)
    {
        $this->lugar_mesa = $lugar_mesa;

        return $this;
    }
}


?>