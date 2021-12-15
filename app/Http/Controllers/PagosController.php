<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Bill_Payment;
use App\Http\Requests\FormularioPagosRequest;


class PagosController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = Auth::user();
        $users_id = Auth::id();
	$inscriptions = Inscription::where('users_id','=',$users_id)
	                ->where('paid_out','=',false)
	                ->join('racings','inscriptions.racing_id','=','racings.id')
		        ->join('championships','racings.championship_id','=','championships.id')
			->get(['inscriptions.id as inscription_id' ,'inscriptions.users_id as user_id','inscriptions.price as inscription_price', 'racings.local as racing_local', 'championships.title as championship_title']);

        return view('pages.formulario-pagos', ['inscriptions'=>$inscriptions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormularioPagosRequest $request)
    {   
       //Crear el objeto Bill_Payment
        $bill_payment = new Bill_Payment;
	$bill_payment->inscription_id = $request->get('inscription_id'); 
	$bill_payment->nro_boleta = $request->get('nro_boleta');
	$bill_payment->importe = $request->get('importe');
	$bill_payment->fecha = $request->get('fecha');
	$bill_payment->servicio = $request->get('servicio');

        //Guardar en la BD
	$bill_payment->save();

	//Editar inscription
	$inscription = Inscription::find($request->get('inscription_id'));
	$inscription->paid_out = true;
	$inscription->save();
        
        return redirect()->route('formulario-pagos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
