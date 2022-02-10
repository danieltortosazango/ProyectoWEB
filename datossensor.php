<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleradio.css">
    <title>Datos del sensor</title>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <header class="encabezado">
        <a href="#" alt="cerrar sesion">
            <img src="img/logoGTI.svg" alt="logo corporativo">
        </a>

        <a href="./login/login.html" class="cerrar-sesion">Cerrar sesión</a>
    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">

            <!-- PHP: Al dar panel principal que regrese al panel principal del id_usuario y email en cuestion -->
            <li class="breadcrumb-item"><a href="#">Panel principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de sensores</li>
        </ol>
    </nav>


    <h2>

        &nbsp; Datos sobre el sensor seleccionado

    </h2>
    <br>
    <h3>
        &nbsp; &nbsp; &nbsp;Gráfica de temperatura
    </h3>
    <script type="text/javascript">
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        //--------------------------- INICIALIZAR AMBAS GRÁFICAS
        google.setOnLoadCallback(crearGraficaTemperatura);
        google.setOnLoadCallback(crearGraficaHumedad);
        //---------------------------

        function crearGraficaTemperatura() {

            // var datos = google.visualization.arrayToDataTable(datosArray) Se suará cuando lo enlacemos a la base de datos, de momento nos lo inventamos

          

            var h = new Date(); //prueba
            var datos = google.visualization.arrayToDataTable([
                ['tiempo', 'Temperatura'],
                [h.getHours() + ":" + h.getMinutes(), 42],
                [h.getHours() + ":" + h.getMinutes(), 55],
                [h.getHours() + ":" + h.getMinutes(), 40],
                [h.getHours() + ":" + h.getMinutes(), 34]
            ]);
            var opciones = {
                title: 'Temperatura del sensor 1' //en un futuro poner temperatura del sensor + sensor real

            }
            var graficaTemp = new google.visualization.LineChart(document.getElementById('temperatura'));
            graficaTemp.draw(datos, opciones);
        }
        
        function crearGraficaHumedad(){
            
            
              var h = new Date(); //prueba
            var datos = google.visualization.arrayToDataTable([
                ['Tiempo', 'Humedad'],
                [h.getHours() + ":" + h.getMinutes(), 90],
                [h.getHours() + ":" + h.getMinutes(), 60],
                [h.getHours() + ":" + h.getMinutes(), 100],
                [h.getHours() + ":" + h.getMinutes(), 40]
            ]);
            var opciones = {
                title: 'Humedad del sensor 1' //en un futuro poner temperatura del sensor + sensor real

            }
            var graficaHum = new google.visualization.LineChart(document.getElementById('humedad'));
            graficaHum.draw(datos, opciones);
        }

    </script>



    <div id="temperatura" style="width: 750px; height: 500px;">

    </div>
     <h3>
        &nbsp; &nbsp; &nbsp;Gráfica de temperatura
    </h3>
 <div id="humedad" style="width: 750px; height: 500px;">
     
  </div>
    
    <script src="js/parcela.js"></script>
    <script src="js/sensor.js"></script>
</body>

</html>
