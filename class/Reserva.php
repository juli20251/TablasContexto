<?php
require_once "Usuario.php";
require_once "Show.php";

class Reserva{
    protected int $id;
    protected Usuario $id2;
    protected Show $show_ID;
    protected float $cantidad;
    protected string $fecha_reserva;

    public function __construct(int $id, Usuario $id2, Show $show_ID, float $cantidad, string $fecha_reserva) {
        $this->id = $id;
        $this->id2 = $id2;
        $this->show_ID = $show_ID;
        $this->cantidad= $cantidad;
        $this->fecha_reserva = $fecha_reserva;
    }

 
    public function getId() {
        return $this->id;
    }
    public function getIdUsuario() {
        return $this->id2;
    }
    public function getShow() {
        return $this->show_ID;
    }
    public function getCantidad() {
        return $this->cantidad;
    }
    public function getFecha() {
        return $this->fecha_reserva;
    }
    

}