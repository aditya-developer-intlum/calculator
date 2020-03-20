<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Calculator\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Calculator\Calculator\CalculatorController@subtract');