<?php include("header.php"); ?>
<?php include("conexion.php"); ?>

<?php
if($_POST){
    print_r($_POST);
    $nombre=$_POST["nombre"];
    $objConexion= new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `name`, `image`, `description`) 
          VALUES (NULL, '$nombre', 'image.png', 'Este es un nuevo proyecto de PHP');";
    $objConexion->ejecutar($sql);
}

$objConexion=new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");
//print_r($resultado)
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos del proyeto
    </div>
    <div class="card-body">
        <form action="portafolio.php" method="post" enctype="multipart/form-data">
            Nombre del proyecto: 
            <input class="form-control" type="text" name="nombre" id="">
            Imagen del proyecto
            <input class="form-control"  type="file" name="image" id="">
            <input class="btn btn-success" type="submit" value="Enviar ">
        </form>
    </div>
        </div>
        <div class="col-md-12">
        <div class="card-footer text-muted">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proyectos as $proyecto){ ?>
                    <tr class="">
                        <td scope="row"><?php echo $proyecto['id'] ?></td>
                        <td><?php echo $proyecto['name'] ?></td>
                        <td><?php echo $proyecto['image'] ?></td>
                        <td><?php echo $proyecto['description'] ?></td>
                        <td><a name="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>
        </div>
        
    </div>
</div>



   
</div>


<?php include("footer.php"); ?>