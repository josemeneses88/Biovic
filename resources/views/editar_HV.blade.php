<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VitalTech</title>
  <link rel="shortcut icon" href="/img/Logo_VitalTech2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/path/to/styles.css">


  <link rel="stylesheet" href="css/editar_HV.css">
  <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
</head>


<body>
  <h1 style="margin-left: auto; margin-right: auto; margin-top: 5rem; text-align: center;">Edición de Hoja de Vida</h1>

  @extends('layouts.header')
  <main>
    <!-- Primer formulario -->
    <div class="form-container">

      <form class="cajon">


        <label for="Nombre">Nombre</label>
        <input type="text" class="news-input" name="Nombre" id="Nombre">



        <label for="Marca">Marca</label>
        <input type="text" class="news-input" name="Marca" id="Marca">



        <label for="Modelo">Modelo</label>
        <input type="text" class="news-input" name="Modelo" id="Modelo">



        <label for="Serie">Serie</label>
        <input type="text" class="news-input" name="Serie" id="Serie">



        <label for="tecPredominante">Tecnología Predominante</label>
        <input type="text" class="news-input" name="tecPredominante" id="tecPredominante">

      </form>
    </div>

    <!-- Segundo formulario -->
    <div class="form-container">

      <form class="cajon" id="formulario">

        <label for="ubicacionFisica">Ubicación Física</label>
        <input type="text" class="news-input" name="ubicacionFisica" id="ubicacionFisica">

        <label for="registroInvima">Registro Invima</label>
        <input type="text" class="news-input" name="registroInvima" id="registroInvima">

        <label for="claseUso">Clase de Uso</label>
        <input type="text" class="news-input" name="claseUso" id="claseUso">

        <label for="fechaCalibracion">Fecha de Calibración</label>
        <input type="date" class="news-input" name="fechaCalibracion" id="fechaCalibracion">

        <input type="submit" value="Guardar Datos" class="boton" id="botonGuardar">
      </form>
    </div>
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

</body>

</html>