<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {

    $token = request()->cookie('token');
   
    if(!$token){
        return redirect('/login');
    } else {
        return redirect('/dashboard');
    }
});

Route::post('/login', function () {
    //return view('login');
    $email = request('email');
    $password = request('password');

    $user = User::where('email', $email)->first();

    if(!$user ||!Hash::check($password, $user->password)){

        return redirect('/login');
        
    }

   // $token = bin2hex(random_bytes(32));
   $token = $user->id;

    return redirect('/dashboard')->cookie('token', $token);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {

    $token = request()->cookie('token');
    if(!$token){
        return redirect('/login');
    } else {
         $user = User::find($token);
        return view('dashboard', compact('user'));
       
    }
});

Route::get('/logout', function () {
       return redirect('/login')->withoutCookie('token');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    $user = new User();

    $user->name = request('name');
    $user->email = request('email');
    $user->password = request('password');

    $user->save();


    return redirect('/login');
    
});


Route::get('/profile', function () {
    $token = request()->cookie('token');

    if(!$token){
        return redirect('/login');
        
    }

    $user = User::find($token);
    return view('profile', compact('user'));
});