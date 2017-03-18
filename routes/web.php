<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('hello');
});

$app->get('/invoices', 'InvoiceController@index');

$app->get('/invoices/new', 'InvoiceController@create');

$app->post('/invoices/new', 'InvoiceController@store');

$app->get('/currencies', function () {
    return DB::table('currencies')->get();
});