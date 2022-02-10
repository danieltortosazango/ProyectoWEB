<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleradio.css">
    <title>Panel principal</title> <!-- Cambio nombre a español de Dashboard a Panel principal -->
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body onload="carga()">

    <!-- NAVBAR -->
    <header class="encabezado">
        <a href="#"  alt="cerrar sesion">
            <img src="img/logoGTI.svg" alt="logo corporativo">
        </a>
        <span><?php
            if (isset($_GET['email'])){
                echo $_GET['email'];
            } else {
                header("Location: index.html");
            }
            ?></span>
        <a href="./login/login.html" class="cerrar-sesion">Cerrar sesión</a>
    </header>


    <section class="contenido">
        <article class="mapa">
            <h2> &nbsp; Mapa</h2>
            <div id="map"></div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 39.7080812,
                            lng: -0.6065045
                        },
                        zoom: 16,
                        mapTypeId: google.maps.MapTypeId.HYBRID,
                        disableDefaultUI: true
                    });
                }

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRSSIm-4PpXMn23vNcaPQKbqCnRvMN9Ww&callback=initMap" async defer></script>
        </article>

        <div class="table-responsive">
            <h2> &nbsp; Parcelas</h2>
            <div class="list-group" id="lista_parcelas">
               
                <!-- $(this).attr("name") 

                <input type="checkbox" name="CheckBoxInputName" value="Value3" id="CheckBox3" />
                <label class="list-group-item" for="CheckBox3">Caption for CheckBox3</label>

                <input type="checkbox" name="CheckBoxInputName" value="Value4" id="CheckBox4" />
                <label class="list-group-item" for="CheckBox4">Caption for CheckBox4</label>
                
                -->
                               
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/parcela.js"></script>
    <script src="js/sensor.js"></script>
    <!-- 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    -->

</body>

</html>
