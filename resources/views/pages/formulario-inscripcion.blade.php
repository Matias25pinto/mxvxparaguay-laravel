@extends('pages.inicio')

@section('contenido')
    <!-- Formulario de inscripción -->
    <div class="row d-flex justify-content-center m-3">
        <div class="col-12 mt-4 field text-center">
            <label for="titulo1">Formulario de Inscripción</label>
        </div>
        <div class="col-12 field text-center small">
            <label for="titulo2">El usuario se compromete a participar en todas las categorías seleccionadas y pagar la inscripción a dicha categorías.
            </label>
        </div>
        <div class="col-10 m-3">
            <form method="post" action="{{route('enviar-formulario-inscripcion')}}"> 
                @csrf
                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
		 <input type="hidden" name="carrera" value="{{$carrera->id}}">
                <div class="row justify-content-center">
                   <div class="col-12 m-3 field">
                        <label for="nombre">Usuario: {{auth()->user()->firstname}} {{auth()->user()->lastname}}</label>
                    </div>

		    <div class="col-12 m-3 field">
                        <label for="cedula">Cédula: {{auth()->user()->cedula}}</label>
                        <input type="hidden"  id="cedula" value="{{auth()->user()->cedula}}"  />
                    </div>

                    <section class="col-5 m-3 field">
                        <div class="field">
                            <label for="categorias-motocros">Categorías Motocross</label>
			</div>
                        @foreach($motocross as $categoria)
                        <div class="field custom-control custom-checkbox">
                            <input name="{{$categoria->name}}" value="{{$categoria}}" type="checkbox" class="custom-control-input" id="{{$categoria->id}}">
                            <label class="custom-control-label" for="{{$categoria->id}}">{{$categoria->name}}</label>
                        </div>
                        @endforeach
                    </section>
                    <section class="col-5 m-3 split">
                        <div class="field">
                            <label for="categorias-motocros">Categorías Velocross</label>
                        </div>
                        @foreach($velocross as $categoria)
                        <div class="field custom-control custom-checkbox">
                            <input name="{{$categoria->name}}" value="{{$categoria}}" type="checkbox" class="custom-control-input" id="{{$categoria->id}}">
                            <label class="custom-control-label" for="{{$categoria->id}}">{{$categoria->name}}</label>
                        </div>
			@endforeach   
                    </section>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Guardar" class="primary" /></li>
                    <li><input type="reset" value="Clear" /></li>
                </ul>
            </form>
        </div>
    </div>
@endsection
