<?php 
    $txtName="";
    $rdgLenguaje="";
    $checkphp="";
    $checkHtml="";
    $checkCss="";

    $listaAnime=""; 

    $txtComentario="";
    if($_POST){
        $txtName=(isset($_POST['txtName'])) ? $_POST['txtName'] : "";//if ternario. si hay informacion enviada del form
        $rdgLenguaje=(isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";//if ternario. si hay informacion enviada del form
        $checkphp=(isset($_POST['checkboxPhp'])=="si") ? "checked" : "";
        $checkHtml=(isset($_POST['checkboxHtml'])=="si") ? "checked" : "";
        $checkCss=(isset($_POST['checkboxCss'])=="si") ? "checked" : "";
        $listaAnime=(isset($_POST['listaAnime'])) ? $_POST['listaAnime'] : "";
        print_r($listaAnime);
        $txtComentario=(isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST || 'txtName'==""){ ?>
        <strong>Hola:</strong> <?php echo $txtName ?>
        <strong>Tu lenguaje es:</strong> <?php echo $rdgLenguaje ?>
        <strong>Estas aprendiendo:</strong> 
            <?php echo ($checkphp=="checked") ? " PHP " : "" ?>
            <?php echo ($checkHtml=="checked") ? " HTML " : "" ?>
            <?php echo ($checkCss=="checked") ? " CSS " : "" ?>
            <?php echo $listaAnime; ?>
        <strong>Tu mensaje es: </strong> <?php echo $txtComentario; ?>

    <?php } ?>
    <form action="ejercicio31.php" method="post">
        Nombre:    
        <input type="text" value="<?php echo $txtName ?>" name="txtName" id="">
        ¿Te gusta?:
        
        php : <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="php") ? "checked" : "" ?> value="php">
        html :<input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="html") ? "checked" : "" ?> id="" value="html">
        css :<input type="radio" name="lenguaje" <?php echo ($rdgLenguaje=="css") ? "checked" : "" ?> id="" value="css">
        Estas aprendiendo... 
        php : <input type="checkbox" name="checkboxPhp" <?php echo $checkphp ?>  value="si">
        html :<input type="checkbox" name="checkboxHtml" <?php echo $checkHtml ?>  id="" value="si">
        css :<input type="checkbox" name="checkboxCss" <?php echo $checkCss ?>  id="" value="si">
        Que anime te gusta?.. 
        <select name="listaAnime" id="" >
            <option value="Ninguna">Ninguna</option>
            <option value="Naruto" <?php  echo ($listaAnime=="Naruto")? "selected":"" ?>>Naruto</option>
            <option value="Bleach" <?php  echo ($listaAnime=="Bleach")? "selected":"" ?>> Bleach</option>
            <option value="Dragon Ball" <?php  echo ($listaAnime=="Dragon Ball")? "selected":"" ?>> Dragon Ball</option>
        </select>
        ¿Tienes alguna duda?</br>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario; ?>
        </textarea>
        <input type="submit" value="Enviar Formulario">
    </form>
</body>
</html>