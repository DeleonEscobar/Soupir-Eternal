<?php
include 'global/config.php';
include 'global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Imagenes/Soupir Eternel.png" alt="logo" width="250px">
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
                    <li class="nav-item">
                        <a class="nav-link text-white">Carrito (0)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br />
    <br />
    <div class="container">
        <br>
        <div class="alert alert-success ">
            Pantalla de mensaje...
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>
        <div class="row">
            <?php
            $sentencia = $pdo->prepare("SELECT*FROM tblproductos");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            print_r($listaProductos);
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class=" card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="http://drive.google.com/uc?export=view&id=1Ttu7All6hiWxti2t36PEj2uRE73rxDbz">
                    <div class="card-body">
                        <span>Título del producto</span>
                        <h5 class="card-title">$300.000</h5>
                        <p class="card-text">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.</p>

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="button">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>