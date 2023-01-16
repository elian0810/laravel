@extends('layouts.app')
@section('content')


<div class="container">
    <div id= "appoiment"></div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header btn-info">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action=""id="form">

                    {!! csrf_field() !!}

                    {{----Hace referencia a nustros campo de name---}}
                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Escribir...">
                      <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>
                    {{---------------------------------------------------}}

                    {{----Hace referencia a nustros campo de lastName---}}
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                      </div>
                    {{---------------------------------------------------}}

                    {{----Hace referencia a nustros campo de identification---}}
                    <div class="form-group">
                        <label for="identification">Identificacion</label>
                        <input type="text" class="form-control" name="identification" id="identification" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>
                    {{---------------------------------------------------}}

                    {{----Hace referencia a nustros campo de mascot---}}
                    <div class="form-group">
                        <label for="mascot">Nombre de la Mascota</label>
                        <input type="text" class="form-control" name="mascot" id="mascot" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>
                    {{---------------------------------------------------}}

                    {{----Hace referencia a nustros campo de start---}}
                    <div class="form-group">
                        <label for="start">Fecha Inicio</label>
                        <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>

                     {{----Hace referencia a nustros campo de start---}}
                     <div class="form-group">
                        <label for="startss">Hora</label>
                        <input type="time" class="form-control" name="startss" id="startss" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>


                    {{----Hace referencia a nustros campo de end---}}
                    <div class="form-group">
                        <label for="end">Fecha Fin</label>
                        <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="Escribir...">
                        <small id="helpId" class="form-text text-muted">Este campo es requerido</small>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
              <div class="modal-footer">
                {{----Hace referencia a nustros boton de guardar---}}
                <button type="button" class="btn btn-success" id=btSave>Guardar</button>
                {{---------------------------------------------------}}
                {{----Hace referencia a nustros boton de guardar---}}
                <button type="button" class="btn btn-danger" id=btDestroy>Eliminar</button>
                {{---------------------------------------------------}}
                 {{-- <button type="button" class="btn btn-secondary" id=btsecondary data-dismiss="modal">Cerrar</button> --}}
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}

              </div>
            </div>
          </div>
        </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
@endsection
