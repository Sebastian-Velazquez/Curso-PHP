<?php include("header.php")?>
<?php include("conexion.php")?>
<?php 
    $objConexion=new conexion();
    $proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");
?>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div
                class="h-100 p-5 text-white bg-primary border rounded-3">
                <h2>Bienvenidos</h2>
                <p>Este es un portafolio privado</p>
                <p>Más informacióon</p>
            </div>
        </div>
    </div>
        card
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($proyectos as $proyecto){ ?>
        <div class="col">
            <div class="card">
            <img src="images/<?php echo $proyecto['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $proyecto['name'] ?></h5>
                <p class="card-text"><?php echo $proyecto['description'] ?></p>
            </div>
            </div>
        </div>
    <?php } ?>
</div>


<?php include("footer.php")?>