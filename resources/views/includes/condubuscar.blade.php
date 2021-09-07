@extends('layouts.app')
@section('content')

<div class="py-3 col-10 ml-5">
    

   
    <div class="row justify-content-center py-3">
        
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            
            <h3 class="text-success" > <svg xmlns="http://www.w3.org/2000/svg" width="150" height="125" fill="" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg> Jefferson Hernandez</h3>
            <form>
              <div class="row">
                <div class="col-6 py-2 ">
                  <strong> NOMBRES:</strong>
                  <input class="form-control " id="disabledInput" type="text" placeholder="Jefferson" disabled="">
                  
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input class="form-control" id="disabledInput" type="text" placeholder="Hernandez" disabled="">
                 
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input class="form-control" id="disabledInput" type="text" placeholder="1074763971" disabled="">
                  
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO:</strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="3229873767" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <strong> DIRECCIÓN:</strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Cra4 n° 8-45" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="siat@gmail.com" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <strong> PAIS:</strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Colombia" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <strong> CIUDAD:</strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Madrid" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <strong> CARGO:</strong>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Administrador" disabled="">
                    
                  </div>
                  <div class="col-6 py-2">
                    <div class="form-group">
                        <label for="exampleInputFile"><strong> HOJA DE VIDA: </strong> </label>
                        <button type="button" class="btn btn-link col-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-file-word" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd" d="M4.879 4.515a.5.5 0 0 1 .606.364l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 7.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 0 1 .364-.606z"/>
                          </svg>  Hoja_de_vidaJer.docx</button>
                      </div>
                      </div>
                  </div>
                  <div class="col-6 py-2">
                    <div class="form-group">
                        <label for="exampleInputFile"><strong> LICENCIA DE CONDUCCIÓN: </strong> </label>
                        <button type="button" class="btn btn-link col-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-file-word" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd" d="M4.879 4.515a.5.5 0 0 1 .606.364l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 7.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 0 1 .364-.606z"/>
                          </svg>  Licencia_de_conduccionJer.docx</button>
                      </div>
                  </div>
              
                <div class="row justify-content-center col-12 py-4">     
                  <button type="submit" class="btn btn-danger col-3">Cancelar</button>
                  <button type="submit" class="btn btn-success col-3">Editar</button>
                </div>

              </div>
            </form>
          </div>
        </div>
        
        
      </div>


@endsection
