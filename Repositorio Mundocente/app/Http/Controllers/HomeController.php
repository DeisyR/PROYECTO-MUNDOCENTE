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
        return view('home');
    }

    public function home(Request $request)
    {
        if($request->user()->type_person == 1){
            return 'Es Admin';
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

            $listareas = DB::select('SELECT a.name_area FROM areas a, users u, interests i WHERE u.id = i.id AND a.id_area = i.id_area AND u.id = '.$request->user()->id.'');
            //$listareas = DB::select('SELECT a.name_area FROM areas a');
            //return view('perfil');
            return view("perfilr", compact('listareas'));
        }
    }
}
