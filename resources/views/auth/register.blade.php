@extends('pages.inicio')

@section('contenido')
<div class="row d-flex justify-content-center m-3">
@if($errors->any())
 <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
  </ul>
@endif
</div>
<!-- Formulario de inscripción -->
    <div class="row d-flex justify-content-center m-3">
        <div class="col-12 mt-4 field text-center">
            <label for="titulo1">Formulario de Registro</label>
        </div>
        <div class="col-12 field text-center small">
            <label for="titulo2">Todos los datos son obligatorios
            </label>
        </div>
        <div class="col-10 m-3">
            <form method="post" action="{{route('register')}}"> 
               @csrf
                <div class="row justify-content-center">
                    
                    <div class="col-12 m-3 field">
                        <label for="firstname">Nombre</label>
                        <input type="text" name="firstname" id="firstname"/ autofocus>
                    </div>
                    
		    <div class="col-12 m-3 field">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname" />
                    </div>


                    <div class="col-12 m-3 field">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" id="cedula" />
                    </div>
                    <div class="col-12 m-3 field">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" />
                    </div>
                   <div class="col-12 m-3 field">
                        <label for="whatsapp">WhatsApp</label>
                        <input type="number" name="whatsapp" id="whatsapp" />
                    </div>
                   <div class="col-12 m-3 field">
                        <label for="departamento">Departamento</label>
                        <input type="text" name="departamento" id="departamento" />
                    </div>

                  <div class="col-12 m-3 field">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" />
                  </div>
                  <div class="col-12 m-3 field">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" />
                  </div>
                  <div class="col-12 m-3 field">
                        <label for="password-confrim">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password-confirm" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Guardar" class="primary" /></li>
                    <li><input type="reset" value="Clear" /></li>
                </ul>
            </form>
        </div>
    </div>

@endsection
