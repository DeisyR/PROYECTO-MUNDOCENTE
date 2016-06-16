<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Requests\ValidarRequest;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('datepicker');
    }
    public function indexx(Request $request)
    {
        //
        $input = $request->all();
        //dd($input);

        return 'datepicker';
        //return view('datepicker');
    }

    function showDate(Request $request)
    {

        dd($request->date);
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
        $input = $request->all();

        $name = $input['fname'];
        $lastname = $input["lname"];
        $email = $input["mailp"];
        $password = $input["passw"];
        $id_entity = $input['entidad'];

        DB::update('UPDATE `users` SET `name`="'.$name.'",`lastname`="'.$lastname.'",`email`="'.$email.'",`password`= "'.$password.'", `id_entity`= '.$id_entity.' WHERE users.id = '.$request->user()->id);

        //dd($input['areas']);
        //echo count($input['areas']);

            echo $input['entidad']."<br>";
            /*DB::table('interests')->insert(
                [
                    'id'=> $request->user()->id,
                    'id_area'=> $area
                ]
            );*/
        return redirect('Successr');
        //return $request->user();
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


    public function showInfo(Request $request)
    {
        //
        $user = $request->user()->id;
        //SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = 4

        $entity = DB::select('SELECT e.name_entity FROM users u, entities e  WHERE e.id_entity = u.id_entity and u.id = '.$request->user()->id.'');
        //$listareas = DB::select('SELECT a.name_area FROM areas a');
        //return view('perfil');
        return view("perfilr", compact('entity'));
        //return $listareas;
    }

    public function showteaching(Request $request)
    {
        /* if($request->user()->type_person == 1){
             return 'Es Admin';
         }else {
        }*/
        //
        //$user = $request->user()->id;
        //echo $user;

        //echo 'n_n '.$id.' n_n';
        //$listentities = DB::select('SELECT en.id_entity, en.name_entity, pl.name_place FROM `places` pl ,`entities` en WHERE pl.id_place = en.id_place');
        $listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
        $listcalls = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista"');
        $listjournals = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria"');
        /*$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = '.Auth::user()->id.' && publications.type_publication = "Evento"');*/
        //$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Evento"');
        //$listcalls = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Convocatoria"');
        //$listjournals = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Revista"');
        echo 'n_n';
        //$collection = array_last($listevents, $listcalls, $listjournals);
        //return 'No es Admin';
        return view("places.publications", compact('listevents', 'listcalls', 'listjournals'));
        //return view("places.teaching",compact('listevents'),compact('listcalls'),compact('listjournals'));
        //return view("places.teaching",compact('listevents'));

    }

    public function showview(Request $request)
    {
        //
        $listentities = DB::select('SELECT e.id_entity, e.name_entity FROM `entities` e');
        //$listareas = DB::select('SELECT a.id_area, a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id);
        echo 'n_n';

        return view("places.newpersonr",compact('listentities'));
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

    public function success()
    {
        //
        return view("places.okpersonr");
    }
}
