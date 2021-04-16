<!DOCTYPE html>
<html>

<head>
    <title>Actualizar datos</title>
    <?php echo view('vEnlaces');?>
</head>
<body>
    <?php echo view('vNavbar.php');?>

    <div class="jumbotron">
        <div class="container">
            <img src="../../assets/escudo.png" width="90" height="90" align="right">
            <h1>Actualización de datos del sistema</h1>
            <h5>Actualiza los datos que sean necesarios</h5>
            <hr>
            <form>
                Numero de control: <input type="text" name="control"><br><br>
                <h6>Datos generales</h6>
                Nombre del Alumno: <input type="text" name="nombre">
                Apellidos: <input type="text" name="apellido"><br><br>
                <h6>Datos Academicos</h6>
                Grado: <input type="text" name="grado" size="2">
                Grupo: <input type="text" name="grupo" size="2"><br><br>
                Carrera: <input type="text" name="carrera"><br><br>
                <input type="submit" name="enviar" onclick="Enviar()">
                <script>
                    function Enviar(){
                        alert("Se ha registrado los datos");
                    }
                </script>
            </form>
                <?php echo view('vFooter.php'); ?>
        </div>
    </div>
</body>
</html>