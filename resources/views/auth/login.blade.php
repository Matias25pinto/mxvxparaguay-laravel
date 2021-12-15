@extends('pages.inicio')

@section('contenido')

    <!-- Formulario de inscripción -->
    <div class="row d-flex justify-content-center m-3">
        <div class="col-12 mt-4 field text-center">
            <label for="titulo1">Iniciar Sesión</label>
        </div>
        <div class="col-12 field text-center small">
            <label for="titulo2">Solo los usuarios registrados pueden iniciar sesión. 
            </label>
        </div>
        <div class="col-10 m-3">
            <form method="post" action="{{route('login')}}"> 
              @csrf
                <div class="row justify-content-center">
                 <section class="col-6">
                    <div class="col-12 m-3 field">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" autofocus />
                    </div>

                    <div class="col-12 m-3 field">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" />
                    </div>

                    
                    <div class="field custom-control custom-checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <label class="custom-control-label" for="remember">Recordar contraseña</label>
                    </div>

                 </section>                   
              </div>
              <div class="row justify-content-center mt-3">
                  <section class="col-auto">
                    <ul class="actions">
                      <li><input type="submit" value="Iniciar Sesión" class="primary" /></li>
                      <li><input type="reset" value="Clear" /></li>
                    </ul>

                  </section>

              </div>
            </form>
        </div>
    </div>


@endsection
