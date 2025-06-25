<?php
class Usuario{
    protected int $id;
    protected string $nombre;
    protected string $email;
    protected string $contrasena;


    public function __construct(int $id, string $nombre, string $email, $contrasena) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena= $contrasena;
    }

 
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getContrasena() {
        return $this->contrasena;
    }
  

}