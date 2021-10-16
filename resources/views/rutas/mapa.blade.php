@extends(layouts.rutas)

@section(contenidorutas)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />

    <style>
        #mapid { height: 180px;  width: 360px; }
    </style>

    <title>SIAT</title>
</head>
<body>

    <div id="mapid"></div>
    
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>

    <script>

    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);


    </script>

</body>
</html>

@endsection