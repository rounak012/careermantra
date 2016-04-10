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


Route::get('fileuploadform','imagecontroller@form');

//Route::get('fileuploadform', function()
//{
	//return view('fileuploadform');
//});

Route::post('add1',['as'=>'add1',
'uses'=>'imagecontroller@create',
]  );



Route::get('show1',
[
'as'=>'show1',
'uses'=>'imagecontroller@selectonlyone'
]);
Route::get('show',
[
'as'=>'show',
'uses'=>'imagecontroller@show'
]);


Route::get('destroy1',
[
  'as'=>'destroy1','uses'=>'imagecontroller@destroy1',]
  );
  
Route::post('destroy',
[
   'as'=>'destroy',
   'uses'=>'imagecontroller@destroy',
]
);



Route::get('update1',
[
'as'=>'update1',
'uses'=>'imagecontroller@update1',]
);

Route::post('edit1',
[
'as'=>'edit1',
'uses'=>'imagecontroller@edit1',]
);

Route::get('update/{id}',
[
'as'=>'update',
'uses'=>'imagecontroller@update',]
);
Route::post('edit/{id}',
[
'as'=>'edit',
'uses'=>'imagecontroller@edit',]
);

Route::get('select',['as'=>'select','uses'=>'imagecontroller@selectone',]);

Route::post('select1',['as'=>'select1','uses'=>'imagecontroller@selectonlyone',]);

Route::post('registration',[
'as'=>'registration',
'uses'=>function(){
	return view('registrationca');

}]
);
Route::post('registrationsaved',
[
'as'=>'registrationsaved',
'uses'=>'usercontroller@usersaved',]
);
Route::post('login_check',
[
'as'=>'login_check',
'uses'=>'usercontroller@login_check',
]);
Route::get('showuser',
[
'as'=>'showuser',
'uses'=>'usercontroller@show'
]);
Route::post('login_out',
[
'as'=>'login_out',
'uses'=>'usercontroller@login_out',
]);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
