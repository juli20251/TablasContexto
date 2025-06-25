<?php
class Variedad {
    private $artistas = [];

    public function setArtista (Artista $artistas) {
        $this->artistas[$artistas->getId()] = $artistas;
    }

    public function eliminarArtista(int $id) {
        if (isset($this->artistas[$id])) {
            unset($this->artistas[$id]);
        }
    }

    public function obtenerArtista(int $id) {
        return $this->artistas[$id] ?? null;
    }

    public function listarArtistas() {
        return $this->artistas;
    }
}