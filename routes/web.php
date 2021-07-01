<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.register');
});


Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\UserController::class, 'index'])->name('home');
    Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('create');
    Route::post('/user/destroy', [\App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');
    Route::get('/user/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::get('/user/show/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('show');
    Route::get('/generate/ref', [\App\Http\Controllers\UserController::class, 'ref'])->name('ref');
});




// COMMAND-> php artisan route:list
// Prefix example || prefixed all the routes user/blog user/blog/create
/*Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::resource('/blog', [BlogController::class]);
    Route::group(['middleware' => 'admin'], function () {
        Route::resource('/user', [OffensiveWordController::class]);
    });
});*/


// Using group inside  group
/*Route::group(['middleware' => 'auth'], function () {
    Route::resource('/blog', [BlogController::class]);
    Route::group(['middleware' => 'admin'], function () {
        Route::resource('/user', [OffensiveWordController::class]);
    });
});*/


//Route::resource('/blog', [BlogController::class])->middleware(['auth']);
//Route::resource('/blog', [BlogController::class])->only(['index', 'create']);
//Route::resource('/blog', [BlogController::class])->except(['destroy']);
