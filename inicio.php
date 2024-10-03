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

    <!-- Incluye JavaScript correctamente -->
    <script src="js/mai.js"></script>

</head>

<body>

    <?php
    include "./conexion.php";
    session_start();

    // Conectar con la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "Genius2017";
    $dbname = "BD_NOTA";


    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoge los datos del formulario
        $usuario = $_POST['Usuario'];
        $password = $_POST['Password'];

        // Validar que los campos no estén vacíos
        if (empty($usuario) || empty($password)) {
            echo "Por favor, complete todos los campos.";
        } else {
            // Preparar la consulta SQL para evitar inyecciones SQL
            $stmt = $con->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
            $stmt->bind_param("ss", $usuario, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Si se encuentra el usuario, iniciar sesión
                $_SESSION['usuario'] = $usuario;
                echo "<script> alert(Inicio de sesion exitoso) </script>";
                // Redirigir al usuario a la página de inicio
            } else {
                echo "<script>
                alert('Usuario o contraseña incorrectos.');
                window.location.href = 'index.html'; 
                </script>";
                exit();
            }
            $stmt->close();
        }
    }

    $con->close();
    ?>

    ?>

    <!-- Inicio del menú de navegación -->
    <nav class="navbar navbar-default menu-fixed">


        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#defaultNavbar1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand">UNICIT</a>

            </div>

            <!-- Recoger los enlaces del menú -->
            <div class="collapse navbar-collapse" id="defaultNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Inicio <span class="sr-only">(current)</span></a></li>
                    <li><a href="alumnos.html">Alumnos</a></li>
                    <li><a href="asignaturas.html">Asignaturas</a></li>
                    <li><a href="asignacion.html">Asignación</a></li>
                    <li><a href="notas.html">Notas</a></li>
                    <li><a href="reportes.html">Reportes</a></li>
                </ul>
            </div>

        </div>

    </nav>
    <!-- Fin del menú de navegación -->

    <!-- Inicio del slider del banner -->
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
        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span
                class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span
                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span
                class="sr-only">Next</span></a>
    </div>
    <!-- Fin del slider del banner -->

    <!-- Contenido de la página -->
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Sistema de Registro de Notas <br> en Línea</h3>
            </div>
        </div>
    </section>

    <section class="container" align="center">
        <div class="row">
            <div class="col-md-12" col-md-offset-2 align="center">
                <div>
                    <img src="img/LOGO-UNICIT.png " alt="" width="300" height="250">
                </div>
            </div>
        </div>
    </section>

    <!-- Fin del contenido de la página -->



    <!-- Pie de página -->
    <footer>
        <section class="pie01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Mapa del Sitio</h4>
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Alumnos</a></li>
                            <li><a href="#">Asignaturas</a></li>
                            <li><a href="#">Asignación</a></li>
                            <li><a href="#">Notas</a></li>
                            <li><a href="#">Reportes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Datos de Contacto</h4>
                        <address>
                            Dirección: Rotonda Universitaria, 100 mts al Sur.<br>
                            Managua, Nicaragua.<br>
                            <abbr title="phone">Teléfono:</abbr> (505) 2278-7231.<br>
                            E-mail: <a href="mailto:info@unicit.edu.ni">relaciones_publicas@unicit.edu.ni</a><br>
                            Horario de atención: 8:00am - 5:00pm<br>
                            Facebook ׀ Twitter - @unicit
                        </address>
                    </div>
                </div>
            </div>
        </section>

        <section class="pie02">
            <div class="container">
                &copy; copyright 2024 UNICIT - Desarrollado por: Bradly Gutierrez
            </div>
        </section>
    </footer>

    <!-- jQuery y JavaScript de Bootstrap -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>