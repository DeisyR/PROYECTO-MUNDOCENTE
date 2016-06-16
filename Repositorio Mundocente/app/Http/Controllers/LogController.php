<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;

//use App\Http\Requests;
use App\Http\Requests\LoginRequest;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('in');
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
    public function store(LoginRequest $request)
    {
        $e = $request['mail'];
        $p = $request['password'];
        $a = Auth::attempt(['mail' => $request->mail, 'password' => $request->password]);
        //SELECT `mail`,`password` FROM `people` WHERE `mail`= '' and `password`=''
        //if ($a) {
        //if (!Auth::attempt(['mail' => '"a@hotmail.com"', 'password' => '123'])) {
        //if (true) {
            //if(Auth::attempt(['mail' => $request['mail']]))
        if (Auth::attempt(['mail' => $request['mail'], 'password' => $request['password']])) {
            Session::flash('message-error', 'Datos son incorrectos '.Auth::attempt(['mail' => $request['mail'], 'password' => $request['password']]));
            return Redirect::to('/home');
        } else {
            //Session::flash('message-error', 'Datos son incorrectos '.$e.' '.$p.' '. $a);
            $rules = [
                'mail'=> 'required|email',
                'password'=> 'required',
            ];
            $messages =[
                'email.required' => 'El email es necesario',
                'email.email' => 'El formato del email es incorrecto',
                'password.required' => 'El password es necesario'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
            return Redirect::to('l');
        }


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
