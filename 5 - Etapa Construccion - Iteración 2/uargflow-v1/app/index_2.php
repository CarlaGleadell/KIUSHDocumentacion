<?php include_once '../lib/ControlAcceso.Class.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Menu Principal</title>
    </head>
    <body>

        <?php include_once '../gui/navbar.php'; ?>
        
        <div class="container">
        
            <div class="card-header">
                    <h3>Sistemas de Inscripcion de Cursos- KIUSH</h3>
                    
            </div>
            <p>
                    <a href="usuarios.php">
                        <button type="button" class="btn btn-success">
                           Administración de usuario
                        </button>
                    </a>
                    <a href="cursos.php">
                        <button type="button" class="btn btn-success">Administracion de cursos</button>
                        </button>
                    </a>
            </p>

            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                        <a href="curso.ver.php" style="text-decoration: none; color: inherit;">
                            <img src="../lib/img/Curso_1.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_2.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_3.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_4.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_1.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_2.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_3.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 15px;">
                            <img src="../lib/img/Curso_4.png" class="card-img-top" alt="steve">
                            <div class="card-body">
                                <h5 class="card-title">Nombre curso</h5>
                                <span class="badge bg-primary">integrante 1</span>
                                <span class="badge bg-primary">integrante 2</span>
                                <p class="card-text">Descripcion curso</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
