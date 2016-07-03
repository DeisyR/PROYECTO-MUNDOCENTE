<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;


class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }*/

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

        DB::update('UPDATE `users` SET `name`="'.$name.'",`lastname`="'.$lastname.'",`email`="'.$email.'",`password`= "'.$password.'" WHERE users.id = '.$request->user()->id);

        //dd($input['areas']);
        //echo count($input['areas']);

        foreach($input['areas'] as $area){
            //echo $area."<br>";
            DB::table('interests')->insert(
                [
                    'id'=> $request->user()->id,
                    'id_area'=> $area
                ]
            );
        }
        return redirect('Success');
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
        if($request->user() == null){
            return redirect('home');
        }elseif($request->user()->type_person == 1){
            echo 'Es Admin';
            $listareas = DB::select('SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id.'');
            return view("perfilAdmin", compact('listareas'));
        }elseif($request->user()->type_person == 2) {
            echo 'Docente';
            //
            $user = $request->user()->id;
            //SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = 4

            $listareas = DB::select('SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id.'');
            //$listareas = DB::select('SELECT a.name_area FROM areas a');
            //return view('perfil');
            return view("perfil", compact('listareas'));
        }else{
            echo 'Represetante';
            //
            $user = $request->user()->id;
            //SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = 4

            $entity = DB::select('SELECT e.name_entity FROM users u, entities e  WHERE e.id_entity = u.id_entity and u.id = '.$request->user()->id.'');
            $listareas = DB::select('SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id.'');
            //$listareas = DB::select('SELECT a.name_area FROM areas a');
            //return view('perfil');
            return view("perfilr", compact('listareas','entity'));
        }
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
            //$listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
            //$listcalls = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista"');
            //$listjournals = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria"');
            /*$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = '.Auth::user()->id.' && publications.type_publication = "Evento"');*/
            $listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Evento"');
            $listcalls = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Convocatoria"');
            $listjournals = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Revista"');
            echo 'n_n';
            //$collection = array_last($listevents, $listcalls, $listjournals);
            //return 'No es Admin';
            return view("places.teaching", compact('listevents', 'listcalls', 'listjournals'));
            //return view("places.teaching",compact('listevents'),compact('listcalls'),compact('listjournals'));
            //return view("places.teaching",compact('listevents'));

    }

    public function showpost(Request $request)
    {
        $listevents = \App\publication::where('type_publication', '=', 'Evento')->paginate(3);
        $listcalls = \App\publication::where('type_publication', '=', 'Revista')->paginate(3);
        $listjournals = \App\publication::where('type_publication', '=', 'Convocatoria')->paginate(3);

        return view("places.post", compact('listevents', 'listcalls', 'listjournals'));

    }


    public function showview(Request $request)
    {
        //
        $listentities = DB::select('SELECT en.id_entity, en.name_entity, pl.name_place FROM `places` pl ,`entities` en WHERE pl.id_place = en.id_place');
        $listareas = DB::select('SELECT * FROM `areas`');
        //$listareas = DB::select('SELECT a.id_area, a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id);

        return view("places.newperson",compact('listentities'),compact('listareas'));
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
        return view("places.okperson");
    }
}
