<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de hoja de vida</title>
    <link rel="shortcut icon" href="/img/Logo_VitalTech2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ingreso_hojaV.css">
    <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>
@extends('layouts.header')
    <div class="container mt-5">
        <h1 style="margin-block-end: 6%;">Reporte de mantenimiento</h1>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label" ><b>Reporte N°</b></label>
            <input type="text" class="form-control" id="validationTooltip02" required >
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="validationTooltip01" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Sede</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Servicio</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Ubicacion</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip04" class="form-label">Tipo de mantenimiento</label>
                <select class="form-select" id="validationTooltip04" required>
                    <option selected disabled value="">Elegir...</option>
                    <option>Preventivo</option>
                    <option>Correctivo</option>
                    
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Nombre del trabajador</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
  
        </form>
    </div>

    <table class="table">
        <h1 style="margin-block-end: 4%;">Actividades</h1>
        <thead>
            <tr>
                <th scope="col" style="width: 5%;">#</th>
                <th scope="col" style="width: 20%;">Fecha</th>
                <th scope="col">Actividad realizada</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td><input type="date" class="form-control" placeholder="Fecha"></td>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
        </tbody>
    </table>
     <table class="table">
        <h1 style="margin-block-end: 4%;">Observaciones o recomendaciones</h1>
        <thead>
            <tr>
                <th scope="col" style="width: 5%;">#</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">4</th>
 
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
            <tr>
                <th scope="row">6</th>
              
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
            </tr>
        </tbody>
    </table>
   
    <div class="input-group" style="margin-right: 3rem;">
        <span class="input-group-text" style="margin-left: 5rem;">Nombre y apellido del trabajador</span>
        <input type="text" aria-label="Nombre" class="form-control" style="max-width: 210px;">
        <input type="text" aria-label="Apellido" class="form-control" style="max-width: 210px;">
    </div>
    <div class="input-group" style="margin-right: 3rem;">
        <span class="input-group-text" style="margin-left: 5rem;"> Correo del trabajador</span>
        <input type="text" aria-label="Nombre" class="form-control" style="max-width: 295px;">
    </div>

  



<hr class="border border-primary border-1 opacity-75" style="margin-top: 10%;">
    

           
    
    <div class="container mt-5">
        <h1 style="margin-block-end: 4%;">Datos de quién recibe</h1>
        <form class="row g-3 needs-validation" novalidate>
            
        
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationTooltip03" required >
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
         
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Firma</label>
                <input type="file" class="form-control" aria-label="file example" required style="max-width: 490px;">
                <div class="invalid-feedback">Example invalid form file feedback</div>
              </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label">Cargo</label>
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

        <hr class="border border-primary border-1 opacity-75" style="margin-top: 10%;">
    

           
    
    <div class="container mt-5">
        <h1 style="margin-block-end: 4%;">Requisición</h1>
        <form class="row g-3 needs-validation" novalidate>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Firma</label>
                <input type="file" class="form-control" aria-label="file example" required style="max-width: 490px;">
                <div class="invalid-feedback">Example invalid form file feedback</div>
              </div>
            
         
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                    <label for="floatingInputGrid">Correo</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid">
                      <option selected>Seleccione la opcion deseada</option>
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                    <label for="floatingSelectGrid">Requisición</label>
                  </div>
                </div>
              </div>
              <div class="boton" style="text-align: center;">         <br> <br>     <button type="button" class="btn btn-primary" style="max-width: 50%;">Realizar Reporte</button>
              </div>

           
            
              
            </div>

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
