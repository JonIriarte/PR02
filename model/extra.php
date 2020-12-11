<?php
class Extra{
    private $id_extra; 
    private $tipo_extra; 
    private $id_reserva; 

    public function __construct()
    {
        $this->tipo_extra=$tipo_extra;
    }


    /**
     * Get the value of tipo_extra
     */ 
    public function getTipo_extra()
    {
        return $this->tipo_extra;
    }

    /**
     * Set the value of tipo_extra
     *
     * @return  self
     */ 
    public function setTipo_extra($tipo_extra)
    {
        $this->tipo_extra = $tipo_extra;

        return $this;
    }

    /**
     * Get the value of id_reserva
     */ 
    public function getId_reserva()
    {
        return $this->id_reserva;
    }

    /**
     * Set the value of id_reserva
     *
     * @return  self
     */ 
    public function setId_reserva($id_reserva)
    {
        $this->id_reserva = $id_reserva;

        return $this;
    }
}
?>