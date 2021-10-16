@extends('layouts.rutas')

@section('contenidorutas')



<!DOCTYPE html>
<html>
<head> 
	<meta charset="UTF-8">
	<title>Leaflet-omnivore</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
	
	
	<style> 
  	#mapa {
   	 width: 930px;
  	 height: 470px; }
</style> 
</head>  
	<body>
	 

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Vehiculos</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/rutas">Volver</a>
                    <br><br>


                    <p id="prueba"></p>

                    <table class="table table-bordered table-striped">
                    <div id ="mapa"> </div> 

                        <script>

                            var pruebadata=("<?php echo("Ruta de ".$origenf." hacia ".$destinof); ?>");
                            document.getElementById("prueba").innerHTML = pruebadata;

                            var latInicio = ("<?php echo $latOrigenf; ?>");
                            var longInicio = ("<?php echo $lonOrigenf; ?>");

                            var latLlegada = ("<?php echo $latDestinof; ?>");
                            var longLlegada = ("<?php echo $lonDestinof; ?>");


                            var miMapa = L.map('mapa').setView([4.802979,-74.3732812], 11);

                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                attribution: 'Rubén Alcaraz. Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                maxZoom: 20,
                                id: 'mapbox.comic',
                                accessToken: 'pk.eyJ1IjoicmFsY2FyYXoiLCJhIjoiY2prNmRxcmh1MXNqODNya2NocWY5azEweCJ9.4Qf2Wgh-d1e_ujcRkvq0MA'
                            }).addTo(miMapa);
                            
                            var estiloPopup = {'maxWidth': '300'}
                            
                                var iconoBase = L.Icon.extend({
                                    options: {
                                        iconSize:     [40, 40],
                                        iconAnchor:   [16, 87],
                                        popupAnchor:  [-3, -76]
                                    }
                                });
                            
                                var iconoVerde = new iconoBase({iconUrl: '/img/azul.png'}),
                                    iconoRojo = new iconoBase({iconUrl: '/img/rojo.png'}),
                                    iconoAzul = new iconoBase({iconUrl: '/img/azul.png'});
                            
                                L.marker([latInicio,longInicio], {icon: iconoVerde}).bindPopup("<p>Punto de inicio.</p>",estiloPopup).addTo(miMapa);
                                L.marker([latLlegada,longLlegada], {icon: iconoRojo}).bindPopup("<p>Punto de llegada.</p>",estiloPopup).addTo(miMapa);
                                

                        </script> 
                    </table>
                                                 
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>   

</body> 
</html>

@endsection
