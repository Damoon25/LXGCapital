<?php $url = "http://" . $_SERVER['HTTP_HOST'] ?>

<?php

session_start();
if (@!isset($_SESSION['usuario'])) { // si no existe usuario logueado envía al login.
    header("Location:./login.php");
} else {

    if ($_SESSION['usuario'] == "ok") {
        $usuario = $_SESSION['usuario'];
    }
}

?>

<header>
    <nav class="container-expand navbar navbar-expand-lg sticky-top">
        <div class="container-fluid text-center">
            <a class="navbar-brand" href="home.php"><img src="../public/img/logoBlack.svg" id="logoFooter" alt="logo" class="logo sm-auto d-block"></a>
            <button class="btn-primary d-xxl-none d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="background: none; border:none;">
                <img src="../public/img/Buttons/menu2.png" alt="Menu"></img>
            </button>
            <div class="offcanvas offcanvas-end d-xxl-none d-xl-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-image: var(--fondo-menu);">
                <div class="offcanvas-header">
                    <button class="ms-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background:none; border:none;">
                        <img src="../public/img/Buttons/btnAtras.svg" alt="Atras">
                    </button>
                </div>
                <div class="offcanvas-body d-block d-lg-none text-start">
                    <ul class="container col-sm-12 navbar-nav me-auto ps-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link textoNav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">BIENVENIDO/A,<?php echo "  " ?> <?php echo $_SESSION['usuario'] ?>
                            </a>
                            <div class="dropdown-menu dropdownCanvas" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="itemDropdown" style="color: var(--text-parrafo) !important;" href="logout.php"><i class="fas fa-power-off p-2" style="color: var(--text-parrafo) !important"></i>Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex justify-content-center mt-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link textoNav1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">BIENVENIDO/A,<?php echo "  " ?> <?php echo $_SESSION['usuario'] ?>
                        </a>
                        <div class="dropdown-menu dropdownCanvas" aria-labelledby="navbarDropdown" style="background-color: var(--text) !important;">
                            <a class="dropdown-item" id="itemDropdown" style="color: var(--text-parrafo) !important;" href="logout.php"><i class="fas fa-power-off p-2" style="color: var(--text-parrafo) !important"></i>Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php
$user = $_SESSION['usuario'];
?>