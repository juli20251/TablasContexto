<?php
class Lugar {
    private int $id;
    private string $nombre;
    private string $direccion;
    private string $ciudad;
    private int $capacidad;
    private string $instrucciones;

    public function __construct(int $id, string $nombre, string $direccion, string $ciudad, int $capacidad, string $instrucciones) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->capacidad = $capacidad;
        $this->instrucciones = $instrucciones;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getCapacidad() {
        return $this->capacidad;
    }

    public function getInstrucciones() {
        return $this->instrucciones;
    }
}
?>
