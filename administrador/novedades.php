<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("template/header.php") ?>
    <main class="container">
        <?php
        $txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
        $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
        $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : "";
        $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
        $etiquetas = (isset($_POST['etiquetas'])) ? $_POST['etiquetas'] : "";
        $imagen = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
        $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
        ?>
        <div class="container mt-5">
            <div class="row col-sm-12 d-md-flex d-sm-flex flex-sm-column flex-xs-column flex-md-row">
                <div class="col-sm col-md-6 col-xl-5 col-sm-12 col-xs-12 fb-page mt-4 mb-4">
                    <div class="card d-flex mb-4">
                        <div class="card-header rounded-0">
                            <div class="container-sm text-center pt-2 ">
                                <h2 style="text-align:center; font-size:larger">ADMINISTRADOR DE NOVEDADES</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-4">
                                </div>
                                <input type="hidden" value="<?php echo $txtid; ?>" class="form-control" id="txtID" name="txtID">
                                <div class="form-group mb-4">
                                    <input type="date" required value="<?php echo $fecha; ?>" <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> class="form-control" id="fecha" name="fecha">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" required value="<?php echo $titulo; ?>" <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> class="form-control" id="titulo" name="titulo" placeholder="Añade un título...">
                                </div>
                                <div class="mb-4">
                                    <textarea required <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Añade una descripción... (max 255 caracteres)"><?php echo $descripcion; ?></textarea>
                                </div>
                                <div class="mb-4">
                                    <textarea required <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> class="form-control" id="etiquetas" name="etiquetas" rows="3" placeholder="Añade tags separados por comas..."><?php echo $etiquetas; ?></textarea>
                                </div>
                                <div class="form-group mb-4 mt-4">
                                    <div class="mb-3 mt-3">
                                        <?php echo $imagen; ?>

                                        <?php if ($imagen != "") { ?><br>

                                            <img class="img-thumnail rounded-pill mt-2" src="../public/img/cards/<?php echo $imagen ?>" width="50px" alt="" srcset="">

                                        <?php   }   ?>

                                    </div>
                                    <input type="file" <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> class="form-control p-4" id="imagen" name="imagen">
                                </div>



                                <div role="group" aria-label="">
                                    <button type="submit" class="btn btn-success rounded-pill" value="agregar" name="accion" <?php echo ($accion == "seleccionar") ? "disabled" : "" ?> style="margin-right: 20px;">AGREGAR</button>
                                </div>
                                <div class="col-sm-12 mt-3 mb-3">
                                    <?php

                                    include("config/conexion.php");

                                    switch ($accion) {

                                        case "agregar":

                                            $sql = $conexion->prepare("INSERT INTO novedades (titulo, descripcion, etiquetas, imagen, fecha) VALUES (:titulo, :descripcion , :etiquetas, :imagen, :fecha);");
                                            $sql->bindParam(':titulo', $titulo);
                                            $sql->bindParam(':descripcion', $descripcion);
                                            $sql->bindParam(':etiquetas', $etiquetas);
                                            $sql->bindParam(':fecha', $fecha);

                                            $fechaImage = new DateTime();
                                            $nombreArchivo = ($imagen != "") ? $fechaImage->getTimestamp() . "_" . $_FILES["imagen"]["name"] : "imagen.jpg";

                                            $tmpImagen = $_FILES["imagen"]["tmp_name"];

                                            if ($tmpImagen != "") {
                                                move_uploaded_file($tmpImagen, "../public/img/cards/" . $nombreArchivo);
                                            }

                                            $sql->bindParam(':imagen', $nombreArchivo);
                                            $sql->execute();
                                            echo 
                                            '
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Agregaste la novedad correctamente!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            ';
                                            break;

                                        case "cancelar":
                                            break;
                                        case "eliminar":

                                            $sql = $conexion->prepare("SELECT imagen FROM novedades WHERE id = :id");
                                            $sql->bindParam(':id', $txtID);
                                            $sql->execute();
                                            $novedad = $sql->fetch(PDO::FETCH_LAZY);

                                            if (isset($novedad["imagen"]) && ($novedad["imagen"] != "imagen.jpg")) {
                                                if (file_exists("../public/img/cards/" . $novedad["imagen"])) {
                                                    unlink("../public/img/cards/" . $novedad["imagen"]);
                                                }
                                            }

                                            $sql = $conexion->prepare("DELETE FROM novedades WHERE id = :id");
                                            $sql->bindParam(':id', $txtID);
                                            $sql->execute();
                                            echo 
                                            '
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Eliminaste la novedad correctamente!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            ';
                                            break;
                                    }

                                    // listado de novedades

                                    $sql = $conexion->prepare("SELECT * FROM novedades ORDER BY id DESC");
                                    $sql->execute();
                                    $listarNovedades = $sql->fetchAll(PDO::FETCH_ASSOC);
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-xl-7 col-sm-12 col-xs-12 fb-page mt-4 mb-4">
                    <table class="table table-responsive table-bordered mb-4">
                        <thead class="card-header rounded-0">
                            <tr align="center">
                                <th hidden>ID</th>
                                <th>Título</th>
                                <th>Fecha</th>
                                <th>Descripción</th>
                                <th>Imágen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($listarNovedades)) {
                                echo 
                                '
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        No existe ninguna novedad agregada recientemente.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                ';
                            } else {
                                foreach ($listarNovedades as $novedad) { ?>
                                    <tr>
                                        <td hidden><?php echo $novedad['id'] ?></td>
                                        <td><?php echo substr($novedad['titulo'], 0, 50) . '...' ?></td>
                                        <td>
                                            <?php
                                            $fecha = $novedad['fecha'];
                                            $nuevaFecha = date("d/m/Y", strtotime($fecha));
                                            echo $nuevaFecha;
                                            ?>
                                        </td>
                                        <td><?php echo substr($novedad['descripcion'], 0, 100) . '...' ?></td>
                                        <td>
                                            <img class="img-thumnail rounded-pill" src="../public/img/cards/<?php echo $novedad['imagen'] ?>" width="50px" alt="" srcset="">
                                        </td>
                                        <td>
                                            <form method="post" class="container">
                                                <input type="hidden" name="txtID" id="txtID" value="<?php echo $novedad['id'] ?>">
                                                <button type="submit" value="eliminar" name="accion" style="border: none; background: none;">
                                                    <i class="fa-solid fa-trash" style="color: #303030;"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include("template/footer.php") ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


</html>