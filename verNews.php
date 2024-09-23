<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>LXG | News</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inicializa el carrusel
            $('#carouselNovedades').carousel();

            // Maneja el clic en el botón de anterior
            $('#btnPrev').on('click', function() {
                $('#carouselNovedades').carousel('prev');
            });

            // Maneja el clic en el botón de siguiente
            $('#btnNext').on('click', function() {
                $('#carouselNovedades').carousel('next');
            });
        });

        function shareLink() {
            // Obtener la URL actual
            const currentUrl = window.location.href;

            // Intentar copiar la URL al portapapeles
            navigator.clipboard.writeText(currentUrl)
                .then(() => {
                    alert('¡Enlace copiado al portapapeles!');
                })
                .catch(err => {
                    console.error('Error al copiar el enlace: ', err);
                    alert('Error al copiar el enlace. Por favor, cópielo manualmente.');
                });
        }
    </script>
</head>

<body>

    <main>
        <?php include("template/header2.php") ?>
        <!-- Botón de retroceso -->
        <div id="verNews">
            <div class="container paddingTop paddingBottom">
                <div class="d-flex justify-content-start align-items-center">
                    <a href="index.php#sectionNews" class="back-button">
                        <img src="./public/img/Buttons/back.svg" alt="Go Back" class="back-arrow mb-1 me-2">
                    </a>
                    <p class="subText">
                        Go back
                    </p>
                </div>
            </div>
        </div>
        <?php
        try {
            include("administrador/config/conexion.php");
            $noticia_id = $_GET['id'];
            $sql = $conexion->prepare("SELECT * FROM novedades WHERE id = :id");
            $sql->bindParam(':id', $noticia_id);
            $sql->execute();
            $noticia = $sql->fetch(PDO::FETCH_ASSOC);

            // Contador para controlar la cantidad de elementos por fila en dispositivos de escritorio
            $counter = 0;

            // // Consulta SQL para obtener todas las etiquetas únicas de la tabla 'novedades'
            // $sql = $conexion->prepare("SELECT etiquetas FROM novedades");
            // $sql->execute();
            // $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);

            // // Array para almacenar todas las etiquetas
            // $etiquetas = array();

            // // Iterar sobre los resultados y extraer las etiquetas
            // foreach ($resultados as $resultado) {
            //     $etiquetas_noticia = explode(',', $resultado['etiquetas']); // Dividir las etiquetas en un array
            //     foreach ($etiquetas_noticia as $etiqueta) {
            //         $etiquetas[] = trim($etiqueta); // Añadir cada etiqueta al array, eliminando espacios en blanco alrededor
            //     }
            // }

            // // Obtener etiquetas únicas y eliminar duplicados
            // $etiquetas = array_unique($etiquetas);

        ?>

            <div class="container">
                <div id="verNews" class="col-sm-12 text-center text-md-start">
                    <h2 class="titleSection"><?= $noticia['titulo'] ?></h2>
                </div>
            </div>
            <!-- Menú de compartir -->
            <div class="paddingTop paddingBottom">
                <div class="share-menu">
                    <div class="container">
                        <div class="d-flex justify-content-end align-items-center">
                            <p class="text1 pt-3 pe-2 fw-lighter">Share</p>
                            <a href="javascript:void(0);" onclick="shareLink()">
                                <img class="iconShare" src="./public/img/icons/share.svg" alt="Share Link">
                            </a>
                            <a href="" target="_blank">
                                <img class="iconShare" src="./public/img/icons/LinkedIn2.svg" alt="LinkedIn">
                            </a>
                            <a href="" target="_blank">
                                <img class="iconShare" src="./public/img/icons/Facebook2.svg" alt="Facebook">
                            </a>
                            <a href="" target="_blank">
                                <img class="iconShare p-2" width="100%" src="./public/img/icons/x2.svg" alt="X">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="tagsMenu">
            <ul>
                <?php foreach ($etiquetas as $etiqueta) : ?>
                    <li><a href="busqueda.php?etiqueta=<?= urlencode($etiqueta) ?>"><?= $etiqueta ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div> -->
            <div class="containerImageNews col-sm-12 paddingBottom">
                <img data-aos="flip-down" class="imageNews " src="./public/img/cards/<?= $noticia['imagen'] ?>">
            </div>
            <div class="col-sm-12 pt-4">
                <div class="container">
                    <div class="d-flex justify-content-center text-center text-md-start">
                        <p class="subText fw-lighter">
                            <?= $noticia['descripcion'] ?>
                        </p>
                    </div>
                    <!-- Menú de compartir -->
                    <div class="paddingTop paddingBottom">
                        <div class="share-menu">
                            <div class="d-flex justify-content-end align-items-center">
                                <p class="text1 pt-3 pe-2 fw-lighter">Share</p>
                                <a href="javascript:void(0);" onclick="shareLink()">
                                    <img class="iconShare" src="./public/img/icons/share.svg" alt="Share Link">
                                </a>
                                <a href="" target="_blank">
                                    <img class="iconShare" src="./public/img/icons/LinkedIn2.svg" alt="LinkedIn">
                                </a>
                                <a href="" target="_blank">
                                    <img class="iconShare" src="./public/img/icons/Facebook2.svg" alt="Facebook">
                                </a>
                                <a href="" target="_blank">
                                    <img class="iconShare p-2" width="100%" src="./public/img/icons/x2.svg" alt="X">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } catch (Exception $e) {
            echo '<script>console.log(' . json_encode($e->getMessage()) . ')</script>';
        }
        ?>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 text-center text-md-start pb-4 pt-4">
                    <h2 class="titleSection">Related News</h2>
                </div>
                <div class="container mt-4">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12 pb-4">
                            <div class="col-sm-12">
                                <!-- Carousel -->
                                <!-- Botones de navegación personalizados -->
                                <div class="d-flex justify-content-center justify-content-md-end">
                                    <div class="p-3 ps-0">
                                        <button id="btnPrev">
                                            <img style="transform: rotate(180deg) !important;" src="./public/img/Buttons/buttonForward.svg" alt="Anterior">
                                        </button>
                                    </div>
                                    <div class="p-3 ps-0">
                                        <button id="btnNext">
                                            <img src="./public/img/Buttons/buttonForward.svg" alt="Siguiente">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="carouselNovedades" class="owl-carousel owl-theme paddingBottom">
                                <?php
                                try {
                                    include("administrador/config/conexion.php");
                                    $sql = $conexion->prepare("SELECT * FROM novedades ORDER BY id DESC");
                                    $sql->execute();
                                    $listarNovedades = $sql->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($listarNovedades as $index => $novedad) {
                                        // Cambiar las clases de color
                                        $cardColorClass = $index % 2 == 0 ? 'bg-custom1' : 'bg-custom2';
                                ?>
                                        <div class="item">
                                            <div class="card <?= $cardColorClass ?> border-0 rounded-0 mx-auto">
                                                <!-- Contenido de la tarjeta -->
                                                <img src="./public/img/cards/<?= $novedad['imagen'] ?>" class="card-img-top" alt="Imagen de novedad">
                                                <div class="card-body p-0">
                                                    <!-- Contenido del cuerpo de la tarjeta -->
                                                    <?php
                                                    $meses = [
                                                        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                                        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                                    ];

                                                    $fecha = new DateTime($novedad['fecha']);
                                                    $mes = $meses[$fecha->format('n') - 1]; // Restamos 1 porque los meses están indexados desde 1
                                                    $año = $fecha->format('Y');

                                                    $parsedDate = $mes . ' ' . $año;
                                                    ?>
                                                    <p class="card-text-date fw-bolder"><?= $parsedDate ?></p>
                                                    <h5 class="card-title"><?php echo substr($novedad['titulo'], 0, 50) . '...' ?></h5>
                                                    <p class="card-text fw-lighter"><?php echo substr($novedad['descripcion'], 0, 100) . '...' ?></p>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="verNews.php?id=<?= $novedad['id'] ?>" class="stretched-link">
                                                            <img src="./public/img/Buttons/mas.svg" alt="Ver Más">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } catch (Exception $e) {
                                    echo '<script>console.log(' . json_encode($e->getMessage()) . ')</script>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portadaCulture">
            <div class="row m-0 p-0">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="col-sm-6 col-md-6 text-center text-md-start">
                            <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="textPrincipalHome text-decoration-underline">
                                Firm Overview
                            </p>
                            <div class="col-12 justify-content-center">
                                <a href="../LXG/ourFirm.php"><img src="./public/img/Buttons/buttonLearnMore.svg" alt="Leer Mas"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Script para inicializar el carousel y configurar los botones -->
<script>
    $(document).ready(function() {
        $("#carouselNovedades").owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 4
                }
            },
            dots: false
        });

        // Botón para avanzar
        $('#btnNext').click(function() {
            $('#carouselNovedades').trigger('next.owl.carousel');
        })
        // Botón para retroceder
        $('#btnPrev').click(function() {
            $('#carouselNovedades').trigger('prev.owl.carousel');
        })
    });
</script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="public/js/carouselSection.js"></script>
<script src="public/js/owl.carousel.js"></script>
<!-- Control de Responsive Design !-->
<script src="public/js/control.js"></script>
<script>
    AOS.init();
</script>

</html>