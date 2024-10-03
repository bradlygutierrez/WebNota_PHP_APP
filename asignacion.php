<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTC</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- INSERTANDO EL SCRIPT DEL PHP-->
    <?php
    include "./conexion.php";

    //Declarando variables y asignando valores
    $no_carnet = $_POST['Carnet'];
    $alumno = $_POST['Alumno'];
    $carrera = $_POST['Carrera'];
    $turno = $_POST['Turno'];
    $asignatura = $_POST['Asignatura'];
    $facultad = $_POST['Facultad'];
    $anulado = $_POST['Anulado']; // 'Activo' asumido como campo que indica si está anulado o no ('Sí' o 'No')

    //Conexión con el servidor (mysqli en lugar de mysql)
    //Verificar la conexión
    if (!$con) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    //Ejecución de la sentencia SQL (mysqli en lugar de mysql)
    $query = "INSERT INTO asignaciones (no_carnet, alumno, carrera, turno, asignatura, facultad, anulado) 
              VALUES ('$no_carnet', '$alumno', '$carrera', '$turno', '$asignatura', '$facultad', '$anulado')";
    
    if (mysqli_query($con, $query)) {
        echo "Los datos de la asignación se han registrado satisfactoriamente";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    //Cerrar conexión
    mysqli_close($con);
    ?>

    <!--Inicio del Menu de Navegación-->
    <nav class="navbar navbar-default menu-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">UNICIT</a>
            </div>
            <div class="collapse navbar-collapse" id="defaultNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
                    <li><a href="alumnos.html">Alumnos</a></li>
                    <li><a href="asignaturas.html">Asignaturas</a></li>
                    <li><a href="asignacion.html">Asignación</a></li>
                    <li><a href="notas.html">Notas</a></li>
                    <li><a href="reportes.html">Reportes</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Fin del menu de navegación-->

    <!--INICIO DEL SLIDER DEL BANNER-->
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner1.jpg" alt="First slide image" width="100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/banner2.jpg" alt="Second slide image" width="100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/banner3.jpg" alt="Third slide image" width="100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
        </a>
    </div>
    <!--fIN DEL SLIDER DEL BANNER-->

    <!--CONTENIDO DE LA PAGINA-->
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Los datos de la asignación se han registrado</h3>
                <h3>Satisfactoriamente...!</h3>
            </div>
        </div>
    </section>

    <section class="container" align="center">
        <div class="row">
            <div class="col-md-12" col-md-offset-2 align="center">
                <img src="./img/LOGO-UNICIT" alt="" width="300" height="250">
            </div>
        </div>
    </section>

    <!-- Contacto -->
    
    <!-- FIN DEL CONTENIDO DE LA PAGINA-->

    <!--PIE DE PÁGINA-->
    <footer>
        <!--Seccion 01-->
        <section class="pie01">
            <div class="container">
                <div class="row text-left">
                    <!--Mapa del Sitio-->
                    <div class="col-md-6">
                        <h4>Mapa del Sitio</h4>
                        <dl>
                            <dt><a href="#">Inicio</a></dt>
                            <dt><a href="#">Alumnos</a></dt>
                            <dt><a href="#">Asignaturas</a></dt>
                            <dt><a href="#">Asignación</a></dt>
                            <dt><a href="#">Notas</a></dt>
                            <dt><a href="#">Reportes</a></dt>
                        </dl>
                    </div>
                    <!--Datos de Contactos-->
                    <div class="col-md-6">
                        <h4>Datos de Contacto</h4>
                        <address>
                            Dirección: Rotonda Universitaria, 100 mts al Sur.<br>Managua, Nicaragua.<br>
                            <abbr title="phone">Teléfono: </abbr>(505) 2278-7231.<br>
                            E-mail:<a href="mailto:info@unicit.edu.ni">relaciones_publicas@unicit.edu.ni</a><br>
                            Horario de atención: 8:00am-5:00pm<br>
                            Facebook ׀ Twitter - @unicit
                        </address>
                    </div>
                </div>
            </div>
        </section>

        <!--Seccion 02-->
        <section class="pie02">
            <div class="container">
                <div class="row text-center">
                    <p>&copy; Universidad iberoamericana de ciencia y tecnología.</p>
                </div>
            </div>
        </section>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
