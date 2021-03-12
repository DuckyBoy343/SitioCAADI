<!DOCTYPE html>
<html>

<head>
    <title>Acceso al sitio</title>
    <!-- Union con bootstrap -->
     <?php echo view('vEnlaces');?>

</head>
<body>
    <!-- Configuracion de bootstrap diseño-->
    <?php echo view('vNavbar.php');?>
    <div class="jumbotron">
        <div class="container">
            <img src="../../assets/escudo.png" width="90" height="90" align="right">
            <h2>Ingresa los datos de tu cuenta</h2>
            <h5>Ingresa los datos solicitados para ingresar al sitio</h5>
            <hr>
            <form>
            <label for="NoControl">Numero de Control: </label>
            <input type="text" name="control"><p></p>

            <label for="password">Contraseña: </label>
            <input type="password" name="password"><br>
            
            <input type="submit" name="submit" value="Entrar"><br>
            <p></p>

            <h4>¿Aun no tienes cuenta? Registrate</h4>
            <a href="Registro.php"><input type="button" name="Resgistro" value="Registrar"></a>
            </form>
        </div>
    </div>
    <?php echo view('vFooter.php'); ?>
</body>


</html>