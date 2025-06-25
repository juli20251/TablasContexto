<?php
class Artista {
    private int $id;
    private string $nombre;
    private string $descripcion;
    private string $genero;
    private array $canciones;

    public function __construct(int $id, string $nombre, string $descripcion, string $genero, array $canciones) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->genero = $genero;
        $this->canciones = $canciones;

    }

    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getGenero() {
        return $this->genero;
    }
    public function getCanciones() {
        return $this->canciones;
    }
}
