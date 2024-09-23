<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>LXG | Contact</title>
</head>

<body>

    <main>
        <header class="header2">
            <?php include("template/header2.php") ?>
        </header>
        <div class="sectionImage2">
            <div class="container">
                <div class="section col-sm-12 text-center text-md-start justify-content-center justify-content-md-start paddingTop paddingBottom">
                    <div class="container">
                        <img data-aos="zoom-in-left" class="imgContact" src="./public/img/imgPortadas/contact.png">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 align-self-center">
                                <h1 class="titleSection mb-4 mt-4 text-center text-md-start">
                                    Let’s get
                                    in contact
                                </h1>
                                <p class="subText fw-lighter">
                                    We are always looking to add team players who conduct
                                    according to firm ethical and moral standards.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="container">
                                    <div class="row">
                                        <form id="contactForm" action="enviar.php" method="post">
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control bottom-border" id="firstName">
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control bottom-border" id="lastName">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control bottom-border" id="email" >
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="subject" class="form-label">Subject</label>
                                                    <input type="text" class="form-control bottom-border" id="subject" >
                                                </div>
                                            </div>
                                            <div class="mb-4 text-start col-12">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control bottom-border" id="message" rows="5" ></textarea>
                                            </div>
                                            <div class="col-sm-12 justify-content-end text-end paddingForm">
                                                <button type="submit" class="btn2">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footPrint" class="footPrintContact paddingTop paddingBottom">
            <div class="container">
                <div class="col-sm-12 d-flex justify-content-center text-center pt-4">
                    <h2 class="titleSectionWhite">Our Footprint</h2>
                </div>
                <div class="col-sm-12 d-flex flex-column justify-content-center flex-md-row">
                    <div class="row">
                        <div class="col-sm-12 order-md-2 col-md-8 p-4">
                            <img data-aos="fade-left" class="map d-block d-md-none" src="./public/img/imgPortadas/america.png" alt="Mapa">
                            <img data-aos="fade-left" class="map d-none d-md-block" src="./public/img/imgPortadas/map.png" alt="Mapa">
                        </div>
                        <div class="locations col-sm-12 order-md-1 col-md-4 align-self-end">
                            <div class="row">
                                <div data-aos="flip-up" class="col-sm-12 d-flex flex-column">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <div class="col-sm-2 number">
                                                    <svg width="35" height="35" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="25" cy="25" r="20" fill="white" stroke="#999999" stroke-width="2" />
                                                        <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" fill="#999999" font-size="16" font-family="Arial" textLength="100%">1</text>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="ml-3">
                                                        <h3 class="mb-0 titleWhite">
                                                            Miami, FL, USA
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <p class="mt-1 minTextWhite">
                                                            1441 Brickell Av. Suite 1016, Miami, Florida, USA 33131
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <div class="col-sm-2 number">
                                                    <svg id="number2" width="35" height="35" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="25" cy="25" r="20" fill="white" stroke="#999999" stroke-width="2" />
                                                        <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" fill="#999999" font-size="16" font-family="Arial" textLength="100%">2</text>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="ml-3">
                                                        <h3 class="mb-0 titleWhite">
                                                            Guatemala
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <p class="mt-1 minTextWhite">
                                                            Diagonal 6 11-10 zona 10, Edificio DiagoSeis,
                                                            Oficina 11-02, Guatemala, Guatemala
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <div class="col-sm-2 number">
                                                    <svg width="35" height="35" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="25" cy="25" r="20" fill="white" stroke="#999999" stroke-width="2" />
                                                        <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" fill="#999999" font-size="16" font-family="Arial" textLength="100%">3</text>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="ml-3">
                                                        <h3 class="mb-0 titleWhite">
                                                            Peru
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <p class="mt-1 minTextWhite">
                                                            Av. Felipe Pardo y Aliaga 675,
                                                            San Isidro, 15073, Lima, Perú
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <div class="col-sm-2 number">
                                                    <svg width="35" height="35" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="25" cy="25" r="20" fill="white" stroke="#999999" stroke-width="2" />
                                                        <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" fill="#999999" font-size="16" font-family="Arial" textLength="100%">4</text>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="ml-3">
                                                        <h3 class="mb-0 titleWhite">
                                                            Chile
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <p class="mt-1 minTextWhite">
                                                            Av. El Golf 82, piso 10. <br>
                                                            Las Condes, Santiago, Chile.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 d-flex align-items-center">
                                                <div class="col-sm-2 number">
                                                    <svg width="35" height="35" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="25" cy="25" r="20" fill="white" stroke="#999999" stroke-width="2" />
                                                        <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" fill="#999999" font-size="16" font-family="Arial" textLength="100%">5</text>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="ml-3">
                                                        <h3 class="mb-0 titleWhite">
                                                            Argentina
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <p class="mt-1 minTextWhite">
                                                            Av. Fondo de la Legua 936 <br>
                                                            Edificio Lomas de San Isidro Plaza II, Of. D <br>
                                                            Buenos Aires, Argentina
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script src="public/js/control.js"></script>
<script>
    AOS.init();
</script>

</html>