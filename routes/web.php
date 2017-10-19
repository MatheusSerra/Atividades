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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios/{usuario}', function($usuario){
	echo "Bem vindo. {$usuario}";
});

Route::get('/blog/', function(){
	echo "Link para github <a href='https://github.com/laravel/laravel'> Laravel </a>";
});

Route::get('/admi/', function(){
	echo " Laravel Administrativa";
});

Route::get('/tabela/', function(){
	echo "<table border='2'>
			<tr><td>José</td> <td> Maria </td> </tr>
			<tr><td>Pedro</td> <td>João</td></tr>
		  </table>	";
});

Route::get('/media/', function(){
	$a = 1 ;
	$b = 2 ;
	$c =3;
	$d=4;
	$e=5;
	$res=($a+$b+$c+$d+$e)/5;

	echo "1<br>
	2 <br>
	3<br>
	4<br>
	5 <br> 
	media é ". $res;
});

Route::get('/admi/', function(){
	echo " Laravel Administrativa";
});

Route::get('/nome/', function(){
	$nome1= "matheus";
	$nome2= "matheus";

	if($nome1 == $nome2){
		echo "os nomes são iguais";
	}
	else{
		echo "nao sao";
	}
});

