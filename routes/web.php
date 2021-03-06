<?php

use App\Models\User;
use Inertia\Inertia;
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

Route::get('/', function () {
    return Inertia::render('Home',[
        'name' => 'Anisur Rahman'
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/faq', function () {
    return Inertia::render('Faq');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::paginate(20)->map(fn($user) => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ])
    ]);
});
