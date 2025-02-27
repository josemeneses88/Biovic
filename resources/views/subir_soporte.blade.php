<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VitalTech</title>
    <link rel="shortcut icon" href="/img/Logo_VitalTech2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="/path/to/styles.css">
    <link rel="stylesheet" href="css/subir_soporte.css">
    <link rel="icon" type="image/x-icon" href="/IMG/logotipo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
</head>

<body>
@extends('layouts.header')
    <main>
        <form class="soportes">
 
          <h1 style="font-size: 30px;">Subir soporte</h1>
            <br>
            <label for="Factura de Compra"> Factura de Compra </label>  
            <input type="file" name="Factura de Compra" id="Factura de Compra">
            <br>
        
            <br>
            <label for="Registro Invima"> Registro Invima </label>  
            <input type="file" name="Registro Invima" id="Registro Invima">
            <br>
        
            <br>
            <label for="Certificado de Calibracion"> Certificado de Calibracion </label>  
            <input type="file" name="Certificado de Calibracion" id="Certificado de Calibracion">
            <br>
           
            <br>
            <label for="Manual de usuario"> Manual de usuario </label>  
            <input type="file" name="Manual de usuario" id="Manual de usuario">
            <br>
         
            <br>
            <label for="Protocolo de limpieza y desinfeccion">Protocolo de limpieza </label>  
            <input type="file" name="Protocolo de limpieza y desinfeccion" id="Protocolo de limpieza y desinfeccion">
            <br>
        
            <br>
            <input type="submit" class="boton" value="Guardar Datos">
        </form>
        

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



</body>

</html>