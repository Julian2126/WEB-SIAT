
@if (auth()->check())
  <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="container py-4">
    <div class="row justify-content-center">
         <img src="/img/mapa.png" alt="" width="300"  >
    </div>
 
    
      <ul class="nav nav-pills flex-column ">
      @can  ('Ver Conductor') 
        <li class="nav-item content-center py-5">
        <a href="/conductor">
          <button type="button" class="btn btn-link col-12 text-white " >
            <svg width="30" height="30" fill="" class="bi bi-people" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
          </svg>Conductores</button>
        </a>
        @endcan
        @can ('Ver Monitores')
        <div class="dropdown-divider"></div> 
  <a href="/monitores">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
              <span class="text-white ">Monitores</span>
            </a>
            @endcan
           
            
            @can ('Ver Estudiantes')
          <div class="dropdown-divider"></div>
          <a href="/estudiante">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-book" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
              <span class="text-white ">Estudiantes</span>
            </a>
            @endcan 
           
            @can ('Ver Padres')
          <div class="dropdown-divider"></div>
          <a href="/padres">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
              <span class="text-white ">Acudiente</span>
                </a>
                @endcan
         
                @can   ('Ver Vehiculos')
          <div class="dropdown-divider"></div>
          <a href="/vehiculo">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <img src="/img/bus-icon-260nw-582174946.png" alt="" width="35">
              <span class="text-white ">Vehiculo</span>
              </a>
              @endcan
             @can ('Ver rutas')
          <div class="dropdown-divider"></div>
          <a href="/rutas">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                  </svg>
              <span class="text-white ">Rutas</span>
                </a>
                    @endcan     
                @can   ('Ver Vehiculos')   
          <div class="dropdown-divider"></div>
          <a href="/alertas">
              <button type="button" class="btn btn-link col-12 text-white "> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-chat-square-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  </svg>
              <span class="text-white ">Alertas</span>
                </a>
                @endcan

                @can   ('Ver Ficha Tecnica') 
                <div class="dropdown-divider"></div>
                <a href="/ficha_tecnica">
                    <button type="button" class="btn btn-link col-12 text-white "> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                      </svg>
                    <span class="text-white ">Ficha Tecnica</span>
                      </a>
                    @endcan
                
                @can ('Ver Monitores')
                <div class="dropdown-divider"></div>
                <a href="/instituciones">
                    <button type="button" class="btn btn-link col-12 text-white "> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-book" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                    <span class="text-white ">Instituciones</span>
                  </a>
                  @endcan 
      </li>
 
 </div>
 </ul>

@else

 
@endif



