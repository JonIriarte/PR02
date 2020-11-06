<?php
class Mantenimiento {
        //Atributos, siempre en privado
        private $id_mantenimiento;
        private $password;
        private $nombre;

        //Constructor
        public function __construct($nombre,$password){
            $this->nombre=$nombre;
            $this->password=$password;
        }
    /**
     * @return mixed
     */
    public function getIdMantenimiento()
    {
        return $this->id_mantenimiento;
    }

    /**
     * @param mixed $id_mantenimiento
     *
     * @return self
     */
    public function setIdMantenimiento($id_mantenimiento)
    {
        $this->id_mantenimiento = $id_mantenimiento;

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



