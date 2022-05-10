<?php

use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $users = User::all();

    $q = $request->input('q');
    if ($q != '') {
        # code...
        $users = User::where('name', 'LIKE', "%$q%")->get();
        if ($users->count() == 0) {
            $genre = Genre::where('genre', 'LIKE', "%$q%")->get();
            // $genreid = $genre->id;
            $users = User::where('genre_id', $genre[0]->id)->get();

        }
    }
    // $genres = Genre::all();
    return view('welcome', compact('users'));
});


// ->orWhere('genre', 'like', "%q%")->get()