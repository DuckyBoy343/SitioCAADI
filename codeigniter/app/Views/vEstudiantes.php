<!DOCTYPE html>
<html>

<head>
    <title>Mostrar Estudiantes</title>
    <?php echo view('vEnlaces'); ?>
</head>

<body>
    <?php echo view('vNavbar.php'); 
    
    //var_dump($Estudiantes);?>
    
    <div>
        <h1>Registros de los alumnos actuales:</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NO CONTROL</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">GRADO</th>
                    <th scope="col">GRUPO</th>
                    <th scope="col">CARRERA</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $db = \Config\Database::connect();
                $query = $db->query("SELECT * FROM estudiantes");
                foreach ($query->getResult('array') as $nombre) { ?>
                    <tr>
                        <td><?php echo $nombre['NoControl']; ?></td>
                        <td><?php echo $nombre['Nombre']; ?></td>
                        <td><?php echo $nombre['Apellidos']; ?></td>
                        <td><?php echo $nombre['Grado']; ?></td>
                        <td><?php echo $nombre['Grupo']; ?></td>
                        <td><?php echo $nombre['Carrera']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php echo view('vFooter.php'); ?>
</body>

</html>