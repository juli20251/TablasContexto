<?php
require_once 'cargar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Shows</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f0f0f0;
        }
        .show {
            background: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #2c3e50;
        }
        .section-title {
            color: #34495e;
            margin-bottom: 8px;
            text-decoration: underline;
            font-weight: bold;
        }
        ul {
            padding-left: 20px;
        }
        .disponible {
            color: green;
        }
        .no-disponible {
            color: gray;
        }
    </style>
</head>
<body>

<h1>Próximos Shows</h1>

<!-- Buscador de artista -->
<form method="get">
    <label for="artista">Buscar shows por artista:</label>
    <input type="text" name="artista" id="artista" placeholder="Ej: Duki" value="<?php echo isset($_GET['artista']) ? htmlspecialchars($_GET['artista']) : ''; ?>">
    <button type="submit">Buscar</button>
</form>
<hr>

<?php
$busqueda = isset($_GET['artista']) ? strtolower(trim($_GET['artista'])) : '';

foreach ($shows as $show):
    $artista = $show->getArtista();
    $lugar = $show->getLugar();
    $mostrar = $busqueda === '' || strpos(strtolower($artista->getNombre()), $busqueda) !== false;
    if (!$mostrar) continue;
?>
    <div class="show">
        <h2><?php echo htmlspecialchars($show->getTitulo()); ?></h2>
        <p><strong>Fecha:</strong> <?php echo htmlspecialchars($show->getFecha()); ?></p>
        <p><strong>Hora:</strong> <?php echo htmlspecialchars($show->getHora()); ?></p>

        <div class="section-title">Artista</div>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($artista->getNombre()); ?></p>
        <p><strong>Descripción:</strong> <?php echo htmlspecialchars($artista->getDescripcion()); ?></p>
        <p><strong>Género:</strong> <?php echo htmlspecialchars($artista->getGenero()); ?></p>
        <p><strong>Canciones destacadas:</strong></p>
        <ul>
            <?php foreach ($artista->getCanciones() as $cancion): ?>
                <li><?php echo htmlspecialchars($cancion); ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="section-title">Lugar</div>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($lugar->getNombre()); ?></p>
        <p><strong>Dirección:</strong> <?php echo htmlspecialchars($lugar->getDireccion()); ?></p>
        <p><strong>Ciudad:</strong> <?php echo htmlspecialchars($lugar->getCiudad()); ?></p>
        <p><strong>Capacidad:</strong> <?php echo number_format($lugar->getCapacidad()); ?></p>
        <p><strong>Cómo llegar:</strong> <?php echo htmlspecialchars($lugar->getInstrucciones() ?? "Información no disponible."); ?></p>

        <div class="section-title">Sectores</div>
        <?php foreach ($sectores as $sector): ?>
            <p class="<?php echo strtolower($sector->getDisponibilidad()) === 'disponible' ? 'disponible' : 'no-disponible'; ?>">
                <?php echo htmlspecialchars($sector->getNombre()); ?> - $<?php echo number_format($sector->getPrecio(), 2); ?>
            </p>
        <?php endforeach; ?>

        <div class="section-title">Detalle de Entradas</div>
        <?php
        foreach ($entradas as $entrada):
            $reserva = $entrada->getReserva();
            if ($reserva->getShow()->getId() !== $show->getId()) continue;

            // Buscar asiento correspondiente
            $asiento = null;
            foreach ($asientos as $a) {
                if ($a->getId() === $entrada->getId()) {
                    $asiento = $a;
                    break;
                }
            }

            // Buscar sector correspondiente
            $sector = null;
            foreach ($sectores as $s) {
                if ($s->getId() === $entrada->getId()) {
                    $sector = $s;
                    break;
                }
            }
            ?>
            <p><strong>Asiento:</strong> <?php echo $asiento ? htmlspecialchars($asiento->getNumero()) : "No asignado"; ?></p>
            <p><strong>Sector:</strong> <?php echo $sector ? htmlspecialchars($sector->getNombre()) : "No asignado"; ?></p>
            <p><strong>Predio:</strong> <?php echo htmlspecialchars($reserva->getShow()->getLugar()->getNombre()); ?></p>
            <p><strong>Fecha de compra:</strong> <?php echo htmlspecialchars($entrada->getFecha()); ?></p>
            <hr>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

</body>
</html>
