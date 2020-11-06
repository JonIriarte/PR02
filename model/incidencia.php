<?php
	class Incidencia {
		private $id_incidencia;
		private $descripcion_incidencia;
		private $estado_incidencia;
		private $fecha_incidencia;
		private $id_mesa;

		public function __construct($descripcion_incidencia,$estado_incidencia,$fecha_incidencia){
			$this->descripcion_incidencia=$descripcion_incidencia;
			$this->estado_incidencia=$estado_incidencia;
			$this->fecha_incidencia=$fecha_incidencia;
		}
		
    /**
     * @return mixed
     */
    public function getIdIncidencia()
    {
        return $this->id_incidencia;
    }

    /**
     * @param mixed $id_incidencia
     *
     * @return self
     */
    public function setIdIncidencia($id_incidencia)
    {
        $this->id_incidencia = $id_incidencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcionIncidencia()
    {
        return $this->descripcion_incidencia;
    }

    /**
     * @param mixed $descripcion_incidencia
     *
     * @return self
     */
    public function setDescripcionIncidencia($descripcion_incidencia)
    {
        $this->descripcion_incidencia = $descripcion_incidencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstadoIncidencia()
    {
        return $this->estado_incidencia;
    }

    /**
     * @param mixed $estado_incidencia
     *
     * @return self
     */
    public function setEstadoIncidencia($estado_incidencia)
    {
        $this->estado_incidencia = $estado_incidencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaIncidencia()
    {
        return $this->fecha_incidencia;
    }

    /**
     * @param mixed $fecha_incidencia
     *
     * @return self
     */
    public function setFechaIncidencia($fecha_incidencia)
    {
        $this->fecha_incidencia = $fecha_incidencia;

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
?>