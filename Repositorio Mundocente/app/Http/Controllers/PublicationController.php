<?php

namespace App\Http\Controllers;

use App\publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublicationController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ],[
            'name.required' => 'Debe digitar el nombre',
            'name.max' => 'El nombre tiene una maximo 255 caracteres',
            'lastname.required'  => 'Debe digitar el apellido',
            'lastname.max' => 'El nombre tiene una maximo 255 caracteres',
            'email.required'  => 'Debe digitar el correo',
            'email.max' => 'El correo tiene una maximo 255 caracteres',
            'email.unique' => 'El correo ya existe',
            'password.required'  => 'Debe digitar la contraseña',
            'password.min' => 'La contraseña debe ser de minimo 6 caracteres',
            'password.confirmed' => 'Debe confirmar la contraseña',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo 'Entro n_n';
    }

    public function indexevents()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"')->paginate(3);
        //$listpublications = DB::table('publications')->paginate(3);
        $listpublications = publication::where('type_publication', '=', 'Evento')->paginate(3);

        echo 'n_n';
        //return view('places.events', compact('listpublications'));
        return view('places.events', ['listpublications' => $listpublications]);
        //return view('places.events');
    }

    public function indexcalls()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria"');
        $listpublications = publication::where('type_publication', '=', 'Convocatoria')->paginate(3);

        return view('places.events', ['listpublications' => $listpublications]);
        //return view('places.calls', compact('listpublications'));
    }

    public function indexjournals()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista"');
        $listpublications = publication::where('type_publication', '=', 'Revista')->paginate(3);

        return view('places.events', ['listpublications' => $listpublications]);
        //return view('places.journals', compact('listpublications'));
    }




    /********************************************************************************************************
     * Representantes
     ********************************************************************************************************/
    public function indexeventsr()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"');
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Evento"')->paginate(3);
        //$listpublications = DB::table('publications')->paginate(3);
        //$listpublications = publication::where('type_publication', '=', 'Evento')->paginate(3);
        $listareas = DB::select('SELECT * FROM `areas`');
        $listplaces = DB::select('SELECT * FROM `places`');

        //return view('places.events', compact('listpublications'));
        //return view('places.eventsr', ['listpublications' => $listpublications]);
        return view('places.eventsr',compact('listareas','listplaces'));
    }

    public function indexcallsr()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Convocatoria"');
        $listareas = DB::select('SELECT * FROM `areas`');
        $listplaces = DB::select('SELECT * FROM `places`');

        //return view('places.events', compact('listpublications'));
        //return view('places.eventsr', ['listpublications' => $listpublications]);
        return view('places.callsr',compact('listareas','listplaces'));
        //return view('places.calls', compact('listpublications'));
    }

    public function indexjournalsr()
    {
        //$listpublications = \App\publication::all();
        //$listpublications = DB::select('SELECT * FROM `publications` WHERE `type_publication` = "Revista"');
        $listareas = DB::select('SELECT * FROM `areas`');
        $listplaces = DB::select('SELECT * FROM `places`');

        //return view('places.events', compact('listpublications'));
        //return view('places.eventsr', ['listpublications' => $listpublications]);
        return view('places.journalsr',compact('listareas','listplaces'));
        //return view('places.journals', compact('listpublications'));
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

    public function addevents(Request $request)
    {
        //
        $input = $request->all();

        $this->validatorEvents($request);

        $title = $request->input("title");
        $descrip = $request->input("descrip");
        $link = $request->input("link");
        $email = $request->input("email");
        $dates = date('Y-m-d',strtotime($request->input("dates")));
        $datee = date('Y-m-d',strtotime($request->input("datee")));
        //$areas = 'required';
        $event = 'Evento';
        $user = $request->user()->id;
        $place = $request->input("places");

        DB::table('publications')->insert(
            ['name_publication' => '"' . $title . '"',
                'description' => '"' . $descrip . '"',
                'link_publication' => '"' . $link . '"',
                'mail_responsable' => '"' . $email . '"',
                'start_date' => $dates,
                'final_date' => $datee,
                'type_publication' => $event,
                'id' => $user,
                'id_place' => $place,
            ]
        );
        //$p = \App\publication::find(3);
        //$time = strtotime($p->start_date);
        //$time = strtotime($dates);
        //$date = date('d-m-Y',$time);
        //$date = date('Y-m-d',$time);
        //$date = Carbon::create('2015','10','07');
        //$date = $date->format('d-m-Y');
        //dd($date);
        //dd($date->diffForHumans());

        $publication = publication::all()->last()->id_publication;

        foreach ($input['areas'] as $area) {
            //echo $area."<br>";
            DB::table('affinities')->insert(
                [
                    'id_publication' => $publication,
                    'id_area' => $area
                ]
            );
        }
        return redirect('Success');
    }

     public function addcalls(Request $request)
    {
        //
        $input = $request->all();

        $this->validatorEvents($request);

        $title = $request->input("title");
        $descrip = $request->input("descrip");
        $link = $request->input("link");
        $email = $request->input("email");
        $dates = $request->input("dates");
        $datee = $request->input("datee");
        //$areas = 'required';
        $event = 'Convocatoria';
        $user = $request->user()->id;
        $place = $request->input("places");

        DB::table('publications')->insert(
            ['name_publication'=> '"'.$title.'"',
                'description'=> '"'.$descrip.'"',
                'link_publication'=> '"'.$link.'"',
                'mail_responsable'=> '"'.$email.'"',
                'start_date'=> $dates,
                'final_date'=> $datee,
                'type_publication'=> $event,
                'id'=> $user,
                'id_place'=> $place,
            ]
        );

        $publication = publication::all()->last()->id_publication;

        foreach($input['areas'] as $area){
            //echo $area."<br>";
            DB::table('affinities')->insert(
                [
                    'id_publication'=> $publication,
                    'id_area'=> $area
                ]
            );
        }

    }

    public function addjournals(Request $request)
    {
        //
        $input = $request->all();

        $this->validatorEvents($request);

        $title = $request->input("title");
        $descrip = $request->input("descrip");
        $link = $request->input("link");
        $email = $request->input("email");
        $dates = $request->input("dates");
        $datee = $request->input("datee");
        //$areas = 'required';
        $event = 'Revista';
        $user = $request->user()->id;
        $place = $request->input("places");

        DB::table('publications')->insert(
            ['name_publication'=> '"'.$title.'"',
                'description'=> '"'.$descrip.'"',
                'link_publication'=> '"'.$link.'"',
                'mail_responsable'=> '"'.$email.'"',
                'start_date'=> $dates,
                'final_date'=> $datee,
                'type_publication'=> $event,
                'id'=> $user,
                'id_place'=> $place,
            ]
        );

        $publication = publication::all()->last()->id_publication;

        foreach($input['areas'] as $area){
            //echo $area."<br>";
            DB::table('affinities')->insert(
                [
                    'id_publication'=> $publication,
                    'id_area'=> $area
                ]
            );
        }

    }



    public function validatorEvents(Request $request)
    {
        //
        $input = $request->all();
        //dd($input);

        //$this->validator($input);
        $this->validate($request, [
            'title' => 'required|max:255',
            'descrip' => 'required|max:255',
            //'link' => 'required|max:255',
            'email' => 'required|max:255',
            'dates' => 'required|max:255',
            'datee' => 'required|max:255',
            'areas' => 'required',
            '' => 'required',
            //'lastname' => 'required|max:255',

        ],[
            'title.required'=>'Debe digitar el titulo',
            'title.max' => 'El titulo tiene una maximo 255 caracteres',
            'descrip.required'=>'Debe digitar la descripcion',
            'descrip.max' => 'La descripcion tiene una maximo 255 caracteres',
            'email.required'  => 'Debe digitar el correo',
            'email.max' => 'El correo tiene una maximo 255 caracteres',
            'dates.required'  => 'Debe digitar la fecha de inicio',
            'dates.max' => 'la fecha de inicio tiene una maximo 255 caracteres',
            'areas.required'=>'La Area no se a seleccionado'
        ]);
        //Flash::success("Se ha registrado el usuario de manera exitosa!");
    }

    public function messages()
    {
        return [
            'field_id.required'    => 'tu mensaje personalizado',
        ];
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
