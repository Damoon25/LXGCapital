<nav class="container navbar navbar-expand-lg navbar-custom pt-0 pb-0">
    <a class="navbar-brand ms-auto pt-3" style="margin-left: 0px !important;" href="index.php"><img src="./public/img/logoWhite.svg" id="logo" alt="logo" class="logo sm-auto d-block"></a>
    <button class="btnMenu d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
        <img src="./public/img/Buttons/menu.svg" alt="Menu">
    </button>
    <div class="offcanvas offcanvas-end d-xxl-none d-xl-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-image: var(--fondo-menu);">
        <div class="offcanvas-header">
            <a class="navbar-brand ms-auto ps-3 pt-3" style="margin-left: 0px !important;" href="index.php"><img src="./public/img/logoWhite.svg" id="logo" alt="logo" class="logo sm-auto d-block"></a>
            <button class="ms-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background:none; border:none;">
                <img src="./public/img/Buttons/btnAtras.svg" alt="Atras">
            </button>
        </div>
        <div class="offcanvas-body d-block d-lg-none text-start">
            <ul class="container col-sm-12 navbar-nav me-auto ps-3">
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="index.php">HOME</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="ourFirm.php">OUR FIRM</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="businesses.php">BUSINESSES</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="people.php">PEOPLE</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="impact.php">IMPACT</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="news.php">IN THE NEWS</a></button>
                </li>
                <li class="pt-4 pe-4">
                    <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light animate__animated animate__backInRight animate__delay-1s animate__fast" style="color: var(--link) !important" href="contact.php">CONTACT</a></button>
                </li>
                <li class="pt-5 pe-4">
                    <div class="col-sm-12 col-md-12 mt-3 d-flex justify-content-start text-start">
                        <a href=""><img width="100%" class="ps-0  p-2" src="./public/img/icons/ubicacion.svg" alt="Ubicación"></a>
                        <a href=""><img width="100%" class="p-2 " src="./public/img/icons/linkedin.svg" alt="Linkedin"></a>
                        <a href=""><img width="100%" class="p-2 " src="./public/img/icons/instagram.svg" alt="Instagram"></a>
                        <a href=""><img width="100%" class="p-2 " src="./public/img/icons/facebook.svg" alt="Facebook"></a>
                        <a href=""><img width="100%" class="p-2 " src="./public/img/icons/whatsapp.svg" alt="Whatsapp"></a>
                        <a href=""><img width="100%" class="p-2 " src="./public/img/icons/youtube.svg" alt="Youtube"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="ourFirm.php#ourFirm">OUR FIRM</a></button>
            </li>
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="businesses.php#businesses">BUSINESSES</a></button>
            </li>
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="people.php#people">PEOPLE</a></button>
            </li>
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="impact.php">IMPACT</a></button>
            </li>
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="news.php">IN THE NEWS</a></button>
            </li>
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link fw-light" style="color: var(--link) !important" href="contact.php#contact">CONTACT</a></button>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselItems = document.querySelectorAll(".carousel-item");

        carouselItems.forEach((item, index) => {
            const offcanvasExample = item.querySelector(".offcanvas");
            const offcanvasId = `offcanvasExample${index + 1}`;
            offcanvasExample.id = offcanvasId;

            const btnMenu = item.querySelector(".btnMenu");
            btnMenu.setAttribute("data-bs-target", `#${offcanvasId}`);
        });
    });
</script>