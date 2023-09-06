<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {

        // dd(\App\Enums\UserRole::User);

        dd(auth()->user());


        return view('dashboard');
    })->name('dashboard');


});

Route::get('event/{id}',function($id){
    return view('event.show', [
        'event' => $id
    ]);
        
})
 //->where('id, '[0-9]+')
->name('event.show');

Route::get('reserve/{id}',function($id){
    return view('event.reservation', [
        'reserve' => $id
    ]);
})->name('event.reservation');

Route::get('/', function () {
    return view('home');
})->name('home');