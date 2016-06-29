<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});


Route::get('/', function () {
    return view('welcome');
});*/

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@home');

Route::get('/placeurl', 'PlaceController@creat');

//Route::get('/','HomeController@index');

Route::get('placeindex', 'PlaceController@index');

Route::get('contacts', 'ContactController@index');

Route::get('calls', [
    'uses' => 'PublicationController@indexcalls',
    'as' => 'reviewcalls',
]);

Route::group(['middleware'=>['web']], function(){

});


//Admin
Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'], function(){

});

//Docen
Route::group(['middleware'=>['web','auth','docen'],'prefix'=>'docen'], function(){

});

//Repre
Route::group(['middleware'=>['auth','repre'],'prefix'=>'repre'], function(){

});
//Admin
Route::match(["get","post"],"perfilAdmin", "AdminController@showInfo");
Route::match(["get","post"],"publicationsAdmin", "AdminController@showteaching");
Route::match(["get","post"],"enablep/{id}", "AdminController@showp");
<<<<<<< HEAD
Route::match(["get","post"],"newUserAdmin", "AdminController@newUser");
Route::match(["get","post"],"addUserAdmin", "AdminController@addUser");
=======
Route::match(["get","post"],"newUser", "AdminController@newUser");
>>>>>>> origin/master
//Route::get('enablep/{id}','AdminController@showp');
//Route::match(["get","post"],"log", "AdminController@showpp");


//Docente
Route::match(["get","post"],"perfil", "UserController@showInfo");
Route::match(["get","post"],"newuser", "UserController@showview");
Route::match(["get","post"],"createuser", "UserController@store");
Route::match(["get","post"],"teaching", "UserController@showteaching");

//Representante
Route::match(["get","post"],"perfilr", "RepresentanteController@showInfo");
Route::match(["get","post"],"newuserr", "RepresentanteController@showview");
Route::match(["get","post"],"createuserr", "RepresentanteController@store");
Route::match(["get","post"],"teachingr", "RepresentanteController@showteaching");

Route::get('eventsr','PublicationController@indexeventsr');
Route::get('callsr','PublicationController@indexcallsr');
Route::get('journalsr','PublicationController@indexjournalsr');
Route::match(["get","post"],'addeventsr','PublicationController@addevents');
Route::match(["get","post"],'addcallsr','PublicationController@addcalls');
Route::match(["get","post"],'addjournalsr','PublicationController@addjournals');
Route::get('Successr', "RepresentanteController@success");
Route::get('datepicker', "RepresentanteController@index");
Route::get('datepicker', function () {
    return view('datepicker');
});

Route::post('/test/save', ['as' => 'save-date',
    'uses' => 'RepresentanteController@showDate',
    function () {
        return '';
    }]);

//Route::post("datepicker2", "RepresentanteController@indexx");

Route::get('Success', "UserController@success");

//Web
Route::group(['middleware'=>['web','auth']], function(){

});


//Route::resource('task','PlaceController@create');
Route::get('task','PlaceController@index');

Route::get('areas','AreaController@index');

Route::get('events','PublicationController@indexevents');
Route::get('calls','PublicationController@indexcalls');
Route::get('journals','PublicationController@indexjournals');



//Route::get("teaching/{id}", "PeopleController@showteaching");

//Route::get("login", "PeopleController@login");
//Route::post("loginh", "PeopleController@loginh");
//Route::resource("log", "LogController");
//Route::get("l", "LogController@index");

/*Llamadas al controlador Auth
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

/*
Route::auth();

Route::get('/home', 'HomeController@index');*/



// Rutas de autenticación...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::get('auth/login', 'HomeController@index');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');




