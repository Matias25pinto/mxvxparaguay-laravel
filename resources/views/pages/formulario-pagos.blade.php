@extends('pages.inicio')
@section('head')
<script>
      $(function () {
        $.datepicker.setDefaults($.datepicker.regional["es"]);
        $("#datepicker").datepicker({
          firstDay: 1,
        });
      });
    </script>
 <script>
      $(function () {
        $.datepicker.setDefaults($.datepicker.regional["es"]);
        $("#datepicker").datepicker({
          firstDay: 1,
        });
      });
    </script>

    <script>
      $.datepicker.regional["es"] = {
        closeText: "Cerrar",
        prevText: "< Ant",
        nextText: "Sig >",
        currentText: "Hoy",
        monthNames: [
          "Enero",
          "Febrero",
          "Marzo",
          "Abril",
          "Mayo",
          "Junio",
          "Julio",
          "Agosto",
          "Septiembre",
          "Octubre",
          "Noviembre",
          "Diciembre",
        ],
        monthNamesShort: [
          "Ene",
          "Feb",
          "Mar",
          "Abr",
          "May",
          "Jun",
          "Jul",
          "Ago",
          "Sep",
          "Oct",
          "Nov",
          "Dic",
        ],
        dayNames: [
          "Domingo",
          "Lunes",
          "Martes",
          "Miércoles",
          "Jueves",
          "Viernes",
          "Sábado",
        ],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Juv", "Vie", "Sáb"],
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
        weekHeader: "Sm",
        dateFormat: "yy/mm/dd",
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: "",
      };
      $.datepicker.setDefaults($.datepicker.regional["es"]);
      $(function () {
        $("#fecha").datepicker();
      });
    </script>
@endsection
@section('contenido')
 <!-- Formulario de Pago -->
    <div class="row d-flex justify-content-center m-3">
        <div class="col-12 mt-4 field text-center">
            <label for="titulo1">Formulario de Pagos</label>
        </div>
        <div class="col-12 field text-center small">
            <label for="titulo2">nserte un comprobante de pago válido de Giros Tigo o Billetera Personal.
            </label>
        </div>
        <div class="col-10 m-3">
            <form method="post" action="{{route('enviar-comprobante')}}"> 
	      @csrf
                <div class="row justify-content-center">
                   <div class="col-12 m-3 field">
                        <label for="usuario">Usuario: {{auth()->user()->firstname}} {{auth()->user()->lastname}}</label>
                    </div>
                    
                    <div class="col-12 m-3 field">
                        <label for="cedula">Cédula: {{auth()->user()->cedula}}</label>
                    </div>


                    <div class="col-12 m-3 field">
                        <label for="inscription_id">Inscripción</label>
                        <select id="insription_id" name="inscription_id">
			  @foreach($inscriptions as $inscription)
                           <option value="{{$inscription->inscription_id}}">{{$inscription->championship_title." - ".$inscription->racing_local." - ".$inscription->inscription_price}}</option>
			  @endforeach 
                        </select>
                    </div>


                    <div class="col-12 field text-center small mt-3">
                       <label for="titulo2">Datos del comprobante de pago.</label>
                    </div>


                    <div class="col-12 m-3 field">
                        <label for="nro_boleta">Número Boleta</label>
                        <input type="number" name="nro_boleta" id="nro_boleta" />
                    </div>

                    <div class="col-12 m-3 field">
                        <label for="importe">Importe</label>
                        <input type="number" name="importe" id="importe" />
                    </div>

                    <div class="col-12 m-3 field">
                        <label for="fecha">Fecha</label>
                        <input type="text" name="fecha" id="datepicker" />
                    </div>

                    <div class="col-12 m-3 field">
                        <label for="servicio">Servicio</label>
                        <div class="form-check mb-3">
                           <input class="form-check-input" type="radio" name="servicio" id="servicio1" value="tigo_money">
                           <label class="form-check-label" for="servicio1">Tigo Money</label>
                        </div>
                        <div class="form-check mb-3">
                           <input class="form-check-input" type="radio" name="servicio" id="servicio2" value="billetera_personal">
                           <label class="form-check-label" for="servicio2">Billetera Personal</label>
                         </div>

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

