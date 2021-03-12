<!DOCTYPE html>
<html>

<head>
    <title>Registro Estudiantes</title>
    <?php echo view('vEnlaces');?>
</head>

<body>
    <!-- BARRA DE NAVEGACION -->
    <?php echo view('vNavbar.php');?>

    <div class="jumbotron">
        <div class="container">
            <img src="../../assets/escudo.png" width="90" height="90" align="right">
            <header>
                <h1>Registro de Alumnos al sistema</h1>
                <h5>Ingresa los datos solicitados para darte de alta en el sistema</h5>
            </header>
            <hr>
            <form method="POST" action="../Home/insertarEstudiantes">
                Numero de control: <input type="text" name="control" id="control"><br><br>
                <h4>Datos generales</h4>
                Nombre del Alumno: <input type="text" name="nombre">
                Apellidos: <input type="text" name="apellidos" id="apellidos"><br><br>
                <h6>Datos Academicos</h6>
                Grado: <input type="text" name="grado" id="grado" size="2">
                Grupo: <input type="text" name="grupo" id="grupo" size="2"><br><br>
                Carrera: <input type="text" name="carrera"><br><br>
                <input type="submit" name="enviar" onclick="Enviar()">
                <script>
                    function Enviar() {
                        alert("Se ha registrado los datos");
                    }
                </script>
            </form>
        </div>
    </div>
    <?php echo view('vFooter.php'); ?>
</body>

</html>