<?php
require_once 'Artista.php';
require_once 'Lugar.php';

class Show {
    protected int $id;
    protected string $titulo;
    protected string $fecha;
    protected string $hora;
    protected Artista $artista;
    protected Lugar $lugar;

    public function __construct(int $id, string $titulo, string $fecha, string $hora, Artista $artista, Lugar $lugar) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->artista = $artista;
        $this->lugar = $lugar;
    }

    public function getId() {
        return $this->id;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getFecha() {
        return $this->fecha;
    }
    public function getHora() {
        return $this->hora;
    }
    public function getArtista() {
        return $this->artista;
    }
    public function getLugar() {
        return $this->lugar;
    }
}
?>
