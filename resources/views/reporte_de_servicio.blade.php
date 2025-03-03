<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description"
            content="Descripción breve de la página para mejorar el SEO.">
        <title>VitalTech</title>
        <link rel="shortcut icon" href="/img/Logo_VitalTech2.png"
            type="image/x-icon">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="/path/to/styles.css">
        <link rel="stylesheet" href="css/reporte_de_servicio.css">
        <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap"
            rel="stylesheet">
    </head>

    <!-- <body>
        <header class="bg-primary text-white">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">VitalTech</a>
                    <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"
                        id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#">Contacto</a>
                            </li> -->

        <body>
        @extends('layouts.header')
            
            <form class="row g-3">
                <h1>Formulario de reporte de servicio</h1>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email -
                        Usuario</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4"
                        class="form-label">Password</label>
                    <input type="password" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Registro
                        INVIMA</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="1234">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Nombre">
                </div>
                <div class="col-md-4">
                    <label for="inputCity"
                        class="form-label">Departamento</label>
                    <select id="inputState" class="form-select">
                        <option selected>Seleccione</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Atlántico">Atlántico</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Boyacá">Boyacá</option>
                        <option value="Caldas">Caldas</option>
                        <option value="Caquetá">Caquetá</option>
                        <option value="Casanare">Casanare</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Cesar">Cesar</option>
                        <option value="Chocó">Chocó</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Guainía">Guainía</option>
                        <option value="Guaviare">Guaviare</option>
                        <option value="Guajira">Guajira</option>
                        <option value="Huila">Huila</option>
                        <option value="La Guajira">La Guajira</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Meta">Meta</option>
                        <option value="Nariño">Nariño</option>
                        <option value="Norte de Santander">Norte de
                            Santander</option>
                        <option value="Putumayo">Putumayo</option>
                        <option value="Quindío">Quindío</option>
                        <option value="Risaralda">Risaralda</option>
                        <option value="San Andrés y Providencia">San Andrés y
                            Providencia</option>
                        <option value="Santander">Santander</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Valle del Cauca">Valle del Cauca</option>
                        <option value="Vaupés">Vaupés</option>
                        <option value="Vichada">Vichada</option>

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Ciudad</label>
                    <select id="inputState" class="form-select">
                        <option selected>Seleccione</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Valledupar">Valledupar</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Yopal">Yopal</option>

                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Seleccione para confirmar
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary">Generar reporte</button>
                </div>
                
            </form>
        </body>

        <footer class="bg-primary text-white text-center py-4 ">
            <div class="container">
                <h4>Vitalsoft</h4>
                <p>&copy; Soluciones biomedicas a la medida</p>
                <div class="my-3">
                    <a href="#" class="text-white me-3"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i
                            class="fab fa-linkedin-in"></i></a>
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>

    </body>
</html>