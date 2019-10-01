<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boatarde', function (Request $req) {
    return "Boa tarde, $req->nome!";
});

//Route::get('/boatarde/{nome}/{idade?}', function ($nome,$idade=null) {
   //
  // if ($idade){
  //  return "Boa tarde, $nome!Já tem  $idade anos???!";       
  // } 
  //  return "Boa tarde, $nome! idade é apenas um número...";
//});

Route::get('/boatarde/{nome}/{idade?}', function ($nome,$idade=null) {
    //return view('boatarde',['nome'=>$nome, 'idade'=>$idade]);
    //return view('boatarde',compact('nome','idade'));
    $tabela = [
        ['nome'=> 'Cecila', 'idade'=>30],
        ['nome'=> 'Maria Fernanda', 'idade'=>35],        
        ['nome'=> 'Claudia', 'idade'=>null],        
    ];
    return view('boatarde',compact('nome','idade','tabela'));

});

Route::get('/home2',function(){
    return view('home2');
});
 