<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de hoja de vida</title>
    <link rel="shortcut icon" href="/img/Logo_VitalTech2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/ingreso_hojaV.css"> -->
    <link rel="stylesheet" href="{{ asset('css/ingreso_hojaV.css') }}">
    <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <a href="/HTML/hojas_vida.html" style="margin-left: 3%; margin-right:3%; color:white"><i class="fa-solid fa-arrow-left" style="margin-left: 8%;" ></i></a> 

            <div class="container-fluid">
                <a class="navbar-brand" href="/HTML/main.html">VitalSoft
                    <img src="/IMG/CutPaste_2024-08-02_10-48-31-556.png" alt="VitalSoft" height="40">
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
                            <a class="nav-link disabled" aria-active="true">Agregar hoja de vida</a>
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

    <div class="container mt-5">
        <h1 style="margin-block-end: 6%;">Descripción del equipo</h1>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Servicio</label>
                <input type="date" class="form-control" id="validationTooltip01" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationTooltip02" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Marca</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Serie</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip04" class="form-label">Periodo Calibracion</label>
                <select class="form-select" id="validationTooltip04" required>
                    <option selected disabled value="">Elegir...</option>
                    <option>Mensual</option>
                    <option>Semestral</option>
                    <option>Anual</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Tec. predominante</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Codigo ECRI</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">N° Activo fijo</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Ubicacion Fisica</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">N° INVIMA</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Clasificación de riesgo</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>   
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Clasificación Biomedica</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>    
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Clasificación por uso</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>     
        </form>
    </div>

    <div class="container mt-5">
        <h1 style="margin-block-end: 4%;">Registro histórico</h1>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Fecha de adquisición</label>
                <input type="date" class="form-control" id="validationTooltip01" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label">Fecha de instalación</label>
                <input type="date" class="form-control" id="validationTooltip02" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip04" class="form-label">Factura/Contrato</label>
                <select class="form-select" id="validationTooltip04" required>
                    <option selected disabled value="">Elegir...</option>
                    <option>Si registra</option>
                    <option>No registra</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <h1 style="margin-block-end: 4%;">Registro Tecnico</h1>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Fuente de alimentacion</label>
                <input type="date" class="form-control" id="validationTooltip01" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Vol. maximo</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">V.AC</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Vol. minimo</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">V.AC</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Presión</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Peso</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">Kg</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Frecuencia</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">Hz</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Corriente max</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">I.AC</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Corriente Min.</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">I.AC</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Capacidad</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Temperatura</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">°C</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Humedad</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Velocidad</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Manual</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
               
        </form>
    </div>

    <table class="table">
        <h1 style="margin-block-end: 4%;">Accesorios</h1>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Serie</th>
                <th scope="col">Costo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><input type="text" class="form-control" placeholder="Nombre"></td>
                <td><input type="text" class="form-control" placeholder="Marca"></td>
                <td><input type="text" class="form-control" placeholder="Modelo"></td>
                <td><input type="text" class="form-control" placeholder="Serie"></td>
                <td><input type="number" class="form-control" placeholder="Costo"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><input type="text" class="form-control" placeholder="Nombre"></td>
                <td><input type="text" class="form-control" placeholder="Marca"></td>
                <td><input type="text" class="form-control" placeholder="Modelo"></td>
                <td><input type="text" class="form-control" placeholder="Serie"></td>
                <td><input type="number" class="form-control" placeholder="Costo"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input type="text" class="form-control" placeholder="Nombre"></td>
                <td><input type="text" class="form-control" placeholder="Marca"></td>
                <td><input type="text" class="form-control" placeholder="Modelo"></td>
                <td><input type="text" class="form-control" placeholder="Serie"></td>
                <td><input type="number" class="form-control" placeholder="Costo"></td>
            </tr>
        </tbody>
    </table>
    
    <div class="container mt-5">
        <h1 style="margin-block-end: 4%;">Datos del proveedor y/o fabricante</h1>
        <form class="row g-3 needs-validation" novalidate>
            
        
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Proveedor</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
         
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Ciudad/Pais</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Email y/o web</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              
            </div>

        </form>


        <form>
            <div class="mb-3">
                <h1 style="margin-block-end: 4%;">Recomendaciones</h1>

              <label for="exampleInputEmail1" class="form-label">Digite la recomendación</label>
              <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
         
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Agregar Hoja de vida</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 4%;">Enviar</button>
          </form>
    </div>


    <footer class="bg-primary text-white text-center py-4" style="margin-top: 5%;">
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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        // Esperar a que el DOM se cargue
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('.needs-validation');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                // Añadir la clase 'was-validated' al formulario
                form.classList.add('was-validated');
            }, false);
        });
    </script>
</body>
</html>
