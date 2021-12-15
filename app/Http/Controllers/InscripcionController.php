<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\InscriptionRequest;
use App\Ins_Cat;
use App\Racing;
use App\Inscription;
use Carbon\Carbon;

class InscripcionController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motocross = Category::where('categories_type_id', 1)->get();
	$velocross = Category::where('categories_type_id', 2)->get();
	$carrera = Racing::select('id')->orderBy('id', 'desc')->first();
        return view('pages.formulario-inscripcion', ['motocross'=>$motocross, 'velocross'=>$velocross, 'carrera'=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InscriptionRequest $request)
    {
	
        //Crear inscripción
        $inscription = new Inscription;
	$inscription->users_id =  $request->input('user_id'); ;
	$inscription->date = Carbon::now()->format('Y-m-d');
        $inscription->price = 0;
	$inscription->paid_out = 0;
	$inscription->racing_id =  $request->input('carrera');
        $categorias = $request->except(['_token', 'user_id', 'carrera']);
	$arreglo = [];
         foreach ($categorias as $categoria){
	   //leer un objeto json en php
	   $items = json_decode($categoria, true);
	   $inscription->price = (int)$inscription->price + (int)$items['cost'];
	 }

	$inscription->save();//Guardar en la BD

	//Generar Ins_cat
	foreach($categorias as $categoria){
	  $items = json_decode($categoria, true);
	  $ins_cat = new Ins_Cat;
	  $ins_cat->inscription_id = $inscription->id;
	  $ins_cat->categories_id = $items['id'];
          $ins_cat->save();
	}
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
