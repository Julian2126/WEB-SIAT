<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}
    </title>
    

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous">
    </script>
  
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    
     <link rel= "stylesheet"
     href="https://bootswatch.com/4/cerulean/bootstrap.css" >
</head>

<x-app-layout >
  <style type="text/css">
   
.btn1{
  display: inline-block;
  background: center;
    text-align: center;
    background: rgba(100, 226, 16, 0.281);
    margin: 1.5%;
    color: rgb(12, 4, 4);
    font-weight: bolder;
    padding: 1.18em 1.32em 1.03em;
    line-height: 1;
    border-radius: 1em;
    position: center;
    min-width: 10em;
    text-decoration: none;
    font-family: var(--font);
    font-size: 1.5rem;
}


  </style>
  <body>  
  
    @if (auth()->check())
    
  <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <div class="container">
    <div class="btn-default row justify-content-center py-10">
         <img src="/img/siat.png" alt="" width="400"  >
    </div>
    <div class="dropdown-divider"></div>
    
      <ul class="nav nav-pills flex-column ">
        <li class="nav-item content-center py-10">
            @can  ('Ver Conductor')  
        <a href="/conductor" class="btn1">
          <svg width="70" height="70" fill="" class="bi bi-people" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
         
            <span class="text-success ">Conductores</span>
            @endcan
          </svg>
        </a>
        @can ('Ver Monitores')
          <a href="/monitores" class="btn1">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <br>
              <span class="text-success ">Monitores</span>
            </a>
            @endcan
            @can ('Ver Estudiantes')
          <a href="/estudiante" class="btn1">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-book" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                  <br>
              <span class="text-success ">Estudiantes</span>
            </a>
            @endcan 
            @can ('Ver Padres')
          <a href="/padres" class="btn1">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                  <br>
              <span class="text-success ">Acudiente</span>
                </a>
                @endcan
                @can   ('Ver Vehiculos')
          <a href="/vehiculo" class="btn1">
                <img src="/img/bus-icon-260nw-582174946.png" alt="" width="70">
                <br>
              <span class="text-success ">Vehiculo</span>
              </a>
              @endcan
              @can ('Ver rutas')
          <a href="/rutas" class="btn1">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                  </svg>
                  <br>
              <span class="text-success ">Rutas</span>
                </a>
                @endcan
                @can   ('Ver Vehiculos')  
          <a href="/alertas" class="btn1"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-chat-square-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  </svg>
              <br>
              <span class="text-success ">Alertas</span>
                </a>
                @endcan
                @can   ('Ver Ficha Tecnica')
                <a href="/ficha_tecnica" class="btn1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                      </svg>
                      <br>
                    <span class="text-success ">Ficha Tecnica</span>
                      </a>
                      @endcan
      </li>
 
 </div>
 </ul>

@else

 
@endif




</x-app-layout>

</body>
