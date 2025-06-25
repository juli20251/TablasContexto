<?php
class Sector {
    protected int $id;
    protected string $nombre;
    protected float $precio;
    protected string $disponibilidad; // ← CORREGIDO (antes: float)

    public function __construct(int $id, string $nombre, float $precio, string $disponibilidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
    return $this->nombre;
}

    public function getPrecio() {
        return $this->precio;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }
}
