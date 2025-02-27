<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Descripción breve de la página para mejorar el SEO.">
    <title>VitalTech</title>
    <link rel="shortcut icon" href="img/Logo_VitalTech2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/path/to/styles.css">
    <link rel="stylesheet" href="css/hoja_vida.css">
    <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <header>
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <a href="/HTML/menu.html" style="margin-left: 3%; margin-right:3%"><i class="fa-solid fa-arrow-left" style="margin-left: 8%; color:white" ></i></a> 

            <div class="container-fluid">
                <a class="navbar-brand" href="/HTML/main.html">
                    VitalSoft
                    <img src="IMG/CutPaste_2024-08-02_10-48-31-556.png" alt="Logo de VitalSoft" height="40">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/HTML/main.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/HTML/hojas_vida.html">Hojas de Vida</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/HTML/mantenimiento.html">Gestión de Mantenimiento</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/HTML/soporte.html">Soporte Técnico</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/HTML/soporte.html">Configuración</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/HTML/main.html">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Modulo Hojas de Vida</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="button" onclick="window.location.href='https://www.google.com'">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header> -->
    @extends('layouts.header')
    <main>
        <section class="portafolio mt-5">
            <h1>Hojas de Vida</h1>
            <div class="contenedor">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/img1.jpg" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <a class="tit-img1" href="ingreso_hoja_de_vida">
                                    <h1 style="font-size:larger; color:white">Agregar hoja de vida</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/img3.jpg" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <a href="subir_soporte">
                                    <h1  style="font-size:larger; color:white">Subir Soportes</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/img8.jpg" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <a href="/HTML/hoja_ver.html">
                                    <h1  style="font-size:larger; color:white">Ver hoja de vida</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/img4.jpg" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <a href="/HTML/descargar_hv.html">
                                <h1  style="font-size:larger; color:white">Descargar</h1>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/portatil_con_kpis.webp" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <a href="/HTML/editar_HV.html">
                                    <h1 style="font-size:larger; color:white">Editar</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="imagen-port">
                            <img src="IMG/img5.jpg" alt="Descripción de la imagen">
                            <div class="hover-galeria">
                                <img src="IMG/icono1.png" alt="Icono">
                                <h1  style="font-size:larger; color:white">Eliminar registros</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-primary text-white text-center py-4">
        <div class="container">
            <h4>Vitalsoft</h4>
            <p>&copy; Soluciones biomedicas a la medida</p>
            <div class="my-3">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) { // Ajusta el valor según sea necesario
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
