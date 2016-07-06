<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indexD');
        //return 'indexD' ;
    }

    public function pru()
    {
        return view('places.okAdmin');
    }

    public function home()
    {
        return view('home');
    }

    public function login(Request $request)
    {

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




}
