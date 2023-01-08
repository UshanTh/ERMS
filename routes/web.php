<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;    
use App\Http\Controllers\AdminController;  

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

// Route::get('/', function () {
//     return view('welcome');
// });

//home page route
Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//user access level route
Route::get('/redirect', [HomeController::class, 'redirect']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//--------------Admin Routes------------------
//--------------Category routes start----------
//View Category page route
Route::get('/view_Category', [AdminController::class, 'view_Category']);

//Add Category page route
Route::post('/add_Category', [AdminController::class, 'add_Category']);

//delete Category page route
Route::get('/delete_Category/{id}', [AdminController::class, 'delete_Category']);

//--------------Category routes end----------



//--------------Menu routes Start----------
//View Menu page route
Route::get('/view_Menu', [AdminController::class, 'view_Menu']);

//Add Menu page route
Route::post('/add_Menu', [AdminController::class, 'add_Menu']);

//show Menu page route
Route::get('/show_Menu', [AdminController::class, 'show_Menu']);

//delete Menu page route
Route::get('/delete_Menu/{id}', [AdminController::class, 'delete_Menu']);

//edit Menu page route
Route::get('/edit_Menu/{id}', [AdminController::class, 'edit_Menu']);

//edit Menu details page route
Route::post('/update_Menu_confirm/{id}', [AdminController::class, 'update_Menu_confirm']);

//--------------Menu routes end----------


//--------------User routers--------------
//user Menu page route
Route::get('/user_view_Menu', [HomeController::class, 'user_view_Menu']);



require __DIR__.'/auth.php';
