<?php
require_once "Reserva.php";


class Entrada{
    protected int $id;
    protected string $ubicacion;
    protected Reserva $reserva;
    protected float $cantidad;
    protected string $fecha_compra;

    public function __construct(int $id, string $ubicacion, Reserva $reserva, float $cantidad, string $fecha_compra) {
    $this->id = $id;
    $this->ubicacion = $ubicacion;
    $this->reserva = $reserva;
    $this->cantidad = $cantidad;
    $this->fecha_compra = $fecha_compra;
}

 
    public function getId() {
        return $this->id;
    }
    public function getUbicacion() {
        return $this->ubicacion;
    }
    public function getReserva() {
    return $this->reserva;
    }   
    public function getCantidad() {
        return $this->cantidad;
    }
    public function getFecha() {
        return $this->fecha_compra;
    }
    public function getShowId() {
        return $this->ID;
    }

}