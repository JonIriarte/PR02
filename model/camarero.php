<?php 
    class Camarero {
        //Atributos, siempre en privado
        private $id_camarero;
        private $password;
        private $nombre;

        //Constructor
        public function __construct($nombre,$passwd){
            $this->nombre=$nombre;
            $this->password=$password;
        
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}
        
  