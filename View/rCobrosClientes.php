<!--

  ____          _____               _ _           _
 |  _ \        |  __ \             (_) |         | |
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |
        |___/                               |___/

____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me). Este encabezado debe mantenerse intacto,
excepto si este es un proyecto de un estudiante.
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Cobros</title>
    <!-- El script de la librería-->
    <script src="../public/pdf/html2pdf.bundle.min.js"></script>
    <!--Nuestro script, que se encarga de crear el PDF usando la librería-->
    <script src="../js/pdf.js"></script>
    <!-- Algunos estilos -->
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
<div class=" mt-5">
    <h1 class="text-center">Junta de agua Pilalo</h1>
    <img src="../public/img/juntagua.jpeg" class="justify-content-center" alt="junta de agua Pilalo" style="border-radius: 20%;margin-left: 30%" width="400" height="150">
</div>
<hr class="bg-primary">
   <div id="contenido">
       <label for="fecha"><strong>Fecha</strong></label>
       <input type="text" id="fecha" readonly class="border-0" style="width:310px "><br>
       <label for="cliente"><strong>Cliente</strong></label>

   </div>
    <div>
         <button id="report" class="btn btn-success btn-sm">Gerar reporte</button>
    </div>

</div>
    <script src="../public/jquery-3.1.1.min.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>

<script>
    /*$(document).ready(function () {
       let now = new Date();
       let day = ("0"+ now.getDate()).slice(-2);

       let month = ("0" + (now.getMonth()+1)).slice(-2);
       let  today =now.getFullYear()+"-"+(month)+"-"+(day);
       $("#fecha").val(today);
    });*/

    $(document).ready(function () {
        let meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        let diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        let now = new Date();
        let day = diasSemana[now.getDay()]+ ', ' + now.getDate();
        let month = meses[now.getMonth()];
        let year=now.getFullYear();
        let fechaActual= day+' de '+ month+ ' de '+ year;
        $("#fecha").val(fechaActual);
    });
</script>
</body>
</html>