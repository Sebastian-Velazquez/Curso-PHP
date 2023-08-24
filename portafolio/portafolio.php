<?php include("header.php"); ?>
<?php include("conexion.php"); ?>

<?php
if($_POST){
    print_r($_POST);//crear
    $nombre=$_POST["nombre"];
    $description= $_POST['description'];
    $date= new DateTime();
    $image=$date->getTimestamp();//."-".$_FILES['image']['name'];//para guardar la imagen con fecha
    
    $imagen_temporal=$_FILES['image']['tmp_name'];
    move_uploaded_file($imagen_temporal,"images/".$image);
    
    $objConexion= new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `name`, `image`, `description`) 
          VALUES (NULL, '$nombre', '$image', '$description');";
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");
}
if($_GET){//delete
    $objConexion= new conexion();
    $id=$_GET['delete'];
    //consulta de imagen
    $image=$objConexion->consultar("SELECT image FROM `proyectos` WHERE id='$id'");
    //print_r($image[0]['image']);
    unlink("images/".$image[0]['image']);
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id`= '$id'";
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");
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
            Descripción:
            <textarea name="description"  cols="30" rows="5"></textarea>
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
                        <td>
                            <img width="50"src="images/<?php echo $proyecto['image']; ?>" alt="">    
                        </td>
                        <td><?php echo $proyecto['description'] ?></td>
                        <td><a name="" class="btn btn-danger" href="?delete=<?php echo $proyecto['id'];?>" role="button">Eliminar</a></td>
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