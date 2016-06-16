<?php

namespace App\Http\Controllers;

use App\lugar;
use Illuminate\Routing\Controller;

use Illuminate\Support\Collection as Collection;

use App\lugares;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $places = \App\lugar::find(2);
        //$results = DB::select('select * from lugares where id_lugar = ?', [2]);

        //$place = $results;
        /*$places = [
            $place

        ];

        return view('places.index',['name' => $places]);*/
        return view('places.index',compact('places'));
        //return view::make('places.index')->with('places',$place);
        //return "entro a index";
        // Aca va nuestro código para listar todos nuestro registros desde la Base de Datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function creat()
    {
        // Aca va nuestro formulario para agregar un registro a la Base de Datos
        echo'Entro n_n';
        return view('places.place');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(/*Request $request*/)
    {
        /* \App\Placemod::create([
             'name'=>$request['name'],
             'type'=>$request['type_place'],
             'location'=>$request['location_place']
         ]);*/
        echo'entro a store';
        return "Lugar registrado";
        // Aca va nuestro código para guardar el registro en la Base de Datos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // Aca va nuestro código para mostrar los detalles de un registro desde la Base de Datos
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // Aca va nuestro formulario para ediar un registro en la Base de Datos
    }


}
