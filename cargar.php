<?php
require_once 'class/artista.php';
require_once 'class/lugar.php';
require_once 'class/show.php';
require_once 'class/usuario.php';
require_once 'class/reserva.php';
require_once 'class/entrada.php';
require_once 'class/Asiento.php';
require_once 'class/sectores.php';

// Artistas
$duki = new Artista(1, "Duki", "Rapero Argentino famoso por su estilo trap", "Trap", ["She Don't Give a FO", "Goteo"]);
$badBunny = new Artista(2, "Bad Bunny", "Cantante Puertorriqueño, estrella del reggaetón", "Reggaetón", ["Dakiti", "Vete"]);
$artistas = [$duki, $badBunny];

// Lugares (ahora con instrucciones)
$movistar = new Lugar(1, "Movistar Arena", "Av. Corrientes 6000", "Buenos Aires", 15000, "Podés llegar en subte B (Dorrego), colectivos 41, 76, 93 y 109.");
$monumental = new Lugar(2, "Estadio Monumental", "Av. Figueroa Alcorta 7597", "Buenos Aires", 70000, "Llegás con tren Mitre, colectivos 15, 42, 107.");
$lugares = [$movistar, $monumental];

// Shows
$show1 = new Show(1, "Ameri World Tour", "2025-11-06", "19:00", $duki, $movistar);
$show2 = new Show(2, "Monumental Night", "2026-02-06", "21:00", $badBunny, $monumental);
$shows = [$show1, $show2];

// Sectores (1 por entrada/asiento)
$sector1 = new Sector(1, "VIP", 15000, "disponible");
$sector2 = new Sector(2, "Campo", 10000, "vendido");
$sectores = [$sector1, $sector2];

// Asientos
$a1 = new Asiento(1, "A10", true, 15000);
$a2 = new Asiento(2, "C12", false, 10000);
$asientos = [$a1, $a2];

// Usuarios
$usuario1 = new Usuario(1, "Juan", "juan@example.com", "1234");
$usuarios = [$usuario1];

// Reservas (1 por entrada)
$reserva1 = new Reserva(1, $usuario1, $show1, 1, "2025-10-01");
$reserva2 = new Reserva(2, $usuario1, $show2, 1, "2026-01-15");
$reservas = [$reserva1, $reserva2];

// Entradas (cada entrada se asocia a una reserva)
$entrada1 = new Entrada(1, "VIP", $reserva1, 1, "2025-10-01");
$entrada2 = new Entrada(2, "Campo", $reserva2, 1, "2026-01-15");
$entradas = [$entrada1, $entrada2];
?>
