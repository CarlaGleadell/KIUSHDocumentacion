<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_ROLES);
include_once '../modelo/ColeccionPersonas.php';
$ColeccionPersonas = new ColeccionPersonas();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
        <title><?php echo Constantes::NOMBRE_SISTEMA; ?> - Preinscriptos</title>
    </head>
    <body>

        <?php include_once '../gui/navbar.php'; ?>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Preinscriptos</h3>
                </div>
                <div class="card-body">
                <p>
                    <a href="persona.crear.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Nueva Persona
                        </button>
                    </a>
                </p>
                
                
                <form class="d-flex"  action="persona.buscar.php" method="get">
                    <input name="busquedaPersona" class="form-control me-2 flex-grow-1" type="search" placeholder="Buscar preinscripto" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>


                <table class="table table-hover table-sm">
                   
                    
                    <tr class="table-info">
                        <th>DNI</th>
                        <th>Nombre/s</th>
                        <th>Apellido/s</th>
                        <th>Opciones</th>
                    </tr>

                    <?php foreach ($ColeccionPersonas->getPersonas() as $Persona) {
                        ?>
                        <tr>
                            <td><?= $Persona->getDni(); ?></td>
                            <td><?= $Persona->getNombre(); ?></td>
                            <td><?= $Persona->getApellido(); ?></td>
                            <td>
                                <a title="Ver detalle" href="persona.ver.php?id=<?= $Persona->getId(); ?>">
                                    <button type="button" class="btn btn-outline-info">
                                        <span class="oi oi-zoom-in"></span>
                                    </button>
                                </a>
                                <a title="Modificar" href="persona.modificar.php?id=<?= $Persona->getId(); ?>">
                                    <button type="button" class="btn btn-outline-warning">
                                        <span class="oi oi-pencil"></span>
                                    </button>
                                </a>
                                <a title="Eliminar" href="persona.eliminar.php?id=<?= $Persona->getId(); ?>">
                                    <button type="button" class="btn btn-outline-danger">
                                        <span class="oi oi-trash"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <?php include_once '../gui/footer.php'; ?>
</body>
</html>

