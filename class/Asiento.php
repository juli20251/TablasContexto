<?php
class Asiento {
    protected int $id;
    protected string $numero;
    protected bool $disponibilidad;
    protected float $precio;

    public function __construct(int $id, string $numero, bool $disponibilidad, float $precio) {
        $this->id = $id;
        $this->numero = $numero;
        $this->disponibilidad = $disponibilidad;
        $this->precio = $precio;
    }

    public function getId() {
        return $this->id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getDisponibilidad() { 
        return $this->disponibilidad;
    }

    public function getPrecio() {
        return $this->precio;
    }
}