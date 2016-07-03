<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\publication;

class AdminController extends Controller
{

    public function __construct()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newUser()
    {
        //$publication = DB::select('UPDATE `publications` SET `state_publication`=1 WHERE `id_publication` = '.$id);
        return view("places.newUserAdmin");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addUser(Request $request)
    {
        ///registerAdmin
        $input = $request->all();
        //dd($input);


        //DB::select('INSERT INTO `users`(`name`, `lastname`, `email`, `password`, `type_person`) VALUES ('.$name.','.$lastname.','.$email.','.$password.'));
        $tp = 1;
        User::create([
            'name' => $input['fname'],
            'lastname' => $input['lname'],
            'email' => $input['mailp'],
            'password' => bcrypt($input['passw']),
            'type_person' => $tp,
        ]);
        return view("places.okAdmin");
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
        return $id;
    }

    public function showp($id)
    {
        //
        /*$input = $request->all();
        $publication = $request->id_publication;
        echo $publication;*/
        //echo $id;
        //$publication = publication::all()->find($id);
        //DB::table('publications')->update('UPDATE `publications` SET `state_publication`=1 WHERE `id_publication` = '.$id);
        $publication = DB::select('UPDATE `publications` SET `state_publication`=1 WHERE `id_publication` = '.$id);
        //dd($publication);

        /*
        $listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento" AND `state_publication`= 2');
        $listcalls = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria" AND `state_publication`= 2');
        $listjournals = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista" AND `state_publication`= 2');
        */

        return redirect("publicationsAdmin");
    }

    public function showpp($id)
    {
        //

        return $id;
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
        $listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento" AND `state_publication`= 2');
        $listcalls = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria" AND `state_publication`= 2');
        $listjournals = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista" AND `state_publication`= 2');

        //$listevents = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
        //$listcalls = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista"');
        //$listjournals = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria"');
        /*$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = '.Auth::user()->id.' && publications.type_publication = "Evento"');*/
        /*$listevents = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Evento"');
        $listcalls = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Convocatoria"');
        $listjournals = DB::select('SELECT users.name, interests.id_area, publications.name_publication, publications.id_publication, publications.description, affinities.id_area FROM users, interests, areas, affinities, publications WHERE users.id = interests.id && areas.id_area = interests.id_area && areas.id_area = affinities.id_area && publications.id_publication = affinities.id_publication && users.id = ' . $request->user()->id . ' && publications.type_publication = "Revista"');*/
        echo 'n_n';
        //$collection = array_last($listevents, $listcalls, $listjournals);
        //return 'No es Admin';
        return view("places.publicationsAdmin", compact('listevents', 'listcalls', 'listjournals'));
        //return view("places.teaching",compact('listevents'),compact('listcalls'),compact('listjournals'));
        //return view("places.teaching",compact('listevents'));

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
