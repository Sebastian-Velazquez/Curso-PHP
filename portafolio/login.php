<?php
session_start();
    if($_POST){
        if(($_POST['usuario']=="admin") && ($_POST['password'] == "12345")){
            $_SESSION['usuario']='admin';
            
            header("location:index.php");
        }else{
            echo "no esta logueado";
        }
    }
?>

<!-- bs5-$ Es una estrucctura de Bootstrap-->
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br/>
            <div class="card">
                <div class="card-header">
                    Iniciar sesión
                </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario:
                            <input class="form-control" type="text" name="usuario" id="">
                            Contraseña:
                            <input class="form-control"  type="password" name="password" id="">
                            <input class="btn btn-success" type="submit" value="Eviar">
                        </form>
                    </div>
                <div class="card-footer text-muted">
                </div>
            </div>
            
    </div>
        <div class="col-md-4"></div>
    </div>
    
    </div>
</body>

</html>
