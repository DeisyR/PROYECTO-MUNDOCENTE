<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Mail;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {
        //

        return view('places.login');
    }
   /* public function loginh(Request $request)
    {
        //
        $fname = $request->input("fname");
        echo 'n_n';
        return "Hola";
    }*/
    public function loginh(Request $request)
    {
        //
        $fname = $request->input("username");
        echo 'n_n '.$fname;
        return "Hola";
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->isMethod("post") && $request->has("fname") && $request->has("lname"))
        {

            $fname = $request->input("fname");
            $lname = $request->input("lname");
            //$tperson = $request->input("tperson");
            echo $request->input("fname");
            echo $request->input("lname");
            echo $request->input("mailp");
            echo $request->input("passw");
            echo $request->input("linkp");
            echo 0;
            echo $request->input("tipoP");

            //$listpublications = DB::select('INSERT INTO `users`(`name`, `lastname`, `mail`, `password`, `link`, `state_person`, `type_person`)VALUES ($request->input("fname"),$request->input("lname"),$request->input("mailp"),$request->input("passw"),$request->input("linkp"),0,$request->input("group1")');

            DB::table('users')->insert(
                ['name'=> $request->input("fname"),
                    'lastname'=> $request->input("lname"),
                    'mail'=> $request->input("mailp"),
                    'password'=> $request->input("passw"),
                    'link'=> $request->input("linkp"),
                    'state_person'=> '0',
                    'type_person'=> $request->input("tipoP")
                ]
            );

            //Mail::send('mails.register',['data']);


        }else{
            $fname = "";
        }
        return view("places.okperson");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showview()
    {
        //
        $listentities = DB::select('SELECT en.id_entity, en.name_entity, pl.name_place FROM `places` pl ,`entities` en WHERE pl.id_place = en.id_place');
        $listareas = DB::select('SELECT * FROM `areas`');
        echo 'n_n';

        return view("places.newperson",compact('listentities'),compact('listareas'));
    }


    public function success()
    {
        //
        return view("places.okperson");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function showteaching($id)
    public function showteaching()
    {
        //
        //echo 'n_n '.$id.' n_n';
        //$listentities = DB::select('SELECT en.id_entity, en.name_entity, pl.name_place FROM `places` pl ,`entities` en WHERE pl.id_place = en.id_place');
        //$listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
        /*$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = 1 && publications.type_publication = "Evento"');
        $listcalls = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = 1 && publications.type_publication = "Convocatoria"');
        $listjournals = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = 1 && publications.type_publication = "Revista"');*/
        echo 'n_n';
        //$collection = array_last($listevents, $listcalls, $listjournals);
        return view("places.teaching",compact('listevents','listcalls','listjournals'));
        //return view("places.teaching",compact('listevents'),compact('listcalls'),compact('listjournals'));
        //return view("places.teaching",compact('listevents'));
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
        return "Esto muestra un producto. Recibiendo $id";
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
