<?php
require 'config/config.php';

require 'config/database.php';
   $db = new Database();
   $con = $db->conectar();

   $id = isset($_GET['id']) ? $_GET['id'] : '';
   $token = isset($_GET['token']) ? $_GET['token'] : '';

   if($id == '' || $token == ''){
     echo 'Error al procesar la petición';
     exit;
   }
   else{

       $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

     if($token == $token_tmp) {

        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
        $sql->execute([$id]);

        if ($sql -> fetchColumn() > 0 ){

            $sql = $con->prepare("SELECT nombre, descripcion, precio FROM productos WHERE id=? AND activo=1 LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
        }

     }  
     else{
        echo 'Error al procesar la petición';
        exit; 
     }
   }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Soupir Eternel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="fondo"></div>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/Soupir Eternel.png" alt="logo" width="250px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Catalogo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container contenedorIndex1">
        <div class="row ">
          <div class="col-md-6 ">
            <div class="textoIndex1">
              
            </div>
         
          </div>
          <div class="col-md-6 text-center ">
           
          </div>
        </div>
    </div>

 
    <div class="fondo-blanco">

<main> 
    <div class="container">
        <div class= "row">
            
            <div class="col-md-6 order-md-1"> 
                 <img src= "images/productos/1/img.jpg" height =320px width=210px>
            </div>
            <div class="col-md-6 order-md-2"> 
                 <h2><?php echo $nombre; ?> </h2>
                 <h2><?php echo MONEDA . number_format($precio, 2, '.',','); ?> </h2>
                 <p class="lead">
                      <?php echo $descripcion; ?>
                 </p>

                 <div class="d-grid gap-2 col-10 mx-auto">
                    <button class="btn btn-primary" type="button">Comprar ahora</button>
                    <button class="btn btn-outline-primary" type="button">Agregar al carrito</button>
                 </div>
            </div>
         </div>
       
    </div>
</main>
</div>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>