<?php 
error_reporting(0);
$unidad = $_GET['convertir'];

require_once "unidades.php";
require_once "validacion.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conversor de Unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container border border-dark">
    <h1>Conversor de Unidades</h1>
<form action="./index.php" method="get">
  <select class="form-control border border-dark text-center" name="convertir" id="" onchange='this.form.submit()'>
    <option value=""><?php if($unidad == null){ }else{ echo $unidad;} ?></option>
    <option value="longitud">Longitud</option>
    <option value="masa">Masa</option>
    <option value="temperatura">Temperatura</option>
    <option value="tiempo">Tiempo</option>
  </select>
</form>

<form action="index.php?convertir=<?=$unidad?>" method='post'>
  
      <div class='container text-center'>
      <div class='row g-2'>
        <div class='col-6'><input type='number' name='valor1' class='form-control border border-dark text-center' required></div>
        <div class='col-6'><input type='text' name='' class='form-control border border-dark text-center' placeholder="<?php 
if($resultado > 1){
  echo rtrim(number_format($resultado,2),0). " ". $UNIDAD. "s";
}else{
  echo rtrim(number_format($resultado,9),0). " ". $UNIDAD. "s";  //0.000083
}
;
?>" disabled></div>
        <?php echo unidades();

?>
        </div><br>
      <input type='submit' value='Calcular' name='submit' class='form-control btn btn-outline-success'></div></form>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
