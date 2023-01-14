<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;    
use App\Http\Controllers\AdminController;  
use App\Http\Controllers\CategoryController;  
use App\Http\Controllers\MenuController;  
use App\Http\Controllers\SupplierController;  
use App\Http\Controllers\InventoryController;  
use App\Http\Controllers\PackageController;  
use App\Http\Controllers\UserController;  
use App\Http\Controllers\OrderController;  
use App\Http\Controllers\StaffController;  

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

//--------------Category routes start----------
//View Category page route
Route::get('/view_Category', [CategoryController::class, 'view_Category']);

//Add Category page route
Route::post('/add_Category', [CategoryController::class, 'add_Category']);

//delete Category page route
Route::get('/delete_Category/{id}', [CategoryController::class, 'delete_Category']);

//--------------Category routes end----------


//--------------Menu routes Start----------
//View Menu page route
Route::get('/admin_view_Menu', [MenuController::class, 'admin_view_Menu']);

//Add Menu page route
Route::post('/add_Menu', [MenuController::class, 'add_Menu']);

//show Menu page route
Route::get('/show_Menu', [MenuController::class, 'show_Menu']);

//delete Menu page route
Route::get('/delete_Menu/{id}', [MenuController::class, 'delete_Menu']);

//edit Menu page route
Route::get('/edit_Menu/{id}', [MenuController::class, 'edit_Menu']);

//edit Menu details page route
Route::post('/update_Menu_confirm/{id}', [MenuController::class, 'update_Menu_confirm']);

//--------------Menu routes end----------------



//--------------Supplier routes Start----------
//View Supplier page route
Route::get('/show_suppliers', [SupplierController::class, 'show_suppliers']);

//add Supplier details page route
Route::post('/save_Supplier', [SupplierController::class, 'save_Supplier']);

//show Supplier details page route
Route::get('/show_supplier_details', [SupplierController::class, 'show_supplier_details']);

//edit Supplier details page route
Route::get('/edit_Supplier/{id}', [SupplierController::class, 'edit_Supplier']);

//edit supplier details confirm page route
Route::post('/update_Supplier_confirm/{id}', [SupplierController::class, 'update_Supplier_confirm']);

//delete Menu page route
Route::get('/delete_Supplier/{id}', [SupplierController::class, 'delete_Supplier']);

//--------------supplier routes end----------------



//--------------Inventory routes Start----------
//View Inventory page route
Route::get('/show_Add_Inventory', [InventoryController::class, 'show_Add_Inventory']);

//add Inventory details route
Route::post('/Add_Inventory', [InventoryController::class, 'Add_Inventory']);

//View Inventory details page route
Route::get('/show_Inventory_details', [InventoryController::class, 'show_Inventory_details']);

//edit Inventory details page route
Route::get('/edit_Inventory/{id}', [InventoryController::class, 'edit_Inventory']);

//edit Inventory details confirm page route
Route::post('/update_Inventory_confirm/{id}', [InventoryController::class, 'update_Inventory_confirm']);

//delete Inventory page route
Route::get('/delete_Inventory/{id}', [InventoryController::class, 'delete_Inventory']);
//--------------Inventory routes End----------



//--------------Package routes Start----------
//View Package page route
Route::get('/show_Add_Packages', [PackageController::class, 'show_Add_Packages']);

//add Package details route
Route::post('/Add_Packages', [PackageController::class, 'Add_Packages']);

//View Package details page route
Route::get('/show_Package_details', [PackageController::class, 'show_Package_details']);

//edit Package details page route
Route::get('/edit_Package/{id}', [PackageController::class, 'edit_Package']);

//edit Package details confirm page route
Route::post('/update_Package_confirm/{id}', [PackageController::class, 'update_Package_confirm']);

//delete Inventory page route
Route::get('/delete_Package/{id}', [PackageController::class, 'delete_Package']);
//--------------Package routes End----------




//--------------order routes Start----------
//View Package page route
Route::get('/view_Orders', [OrderController::class, 'view_Orders']);

//edit Package details confirm page route
Route::get('/change_Status/{id}', [OrderController::class, 'change_Status']);

//delete Inventory page route
Route::get('/payment_Done/{id}', [OrderController::class, 'payment_Done']);
//--------------order routes End----------




//--------------staff routes Start----------
//View Inventory page route
Route::get('/add_staff_page', [StaffController::class, 'add_staff_page']);

//add Inventory details route
Route::post('/Add_Staff', [StaffController::class, 'Add_Staff']);

//View Inventory details page route
Route::get('/show_Staff_details', [StaffController::class, 'show_Staff_details']);

//edit Inventory details page route
Route::get('/edit_Staff/{id}', [StaffController::class, 'edit_Staff']);

//edit Inventory details confirm page route
Route::post('/update_staff_confirm/{id}', [StaffController::class, 'update_staff_confirm']);

//delete Inventory page route
Route::get('/delete_Staff/{id}', [StaffController::class, 'delete_Staff']);
//--------------staff routes End----------




//--------------user routes Start----------
//View user details page route
Route::get('/view_User', [UserController::class, 'view_User']);

//--------------user routes End----------



//--------------User routes Start----------
//View user cart page route
Route::get('/Menu_details/{id}', [HomeController::class, 'Menu_details']);

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

//show cart page route
Route::get('/show_Cart', [HomeController::class, 'show_Cart']);

//delete Inventory page route
Route::get('/remove_Cart/{id}', [HomeController::class, 'remove_Cart']);

// order page route
Route::get('/add_Order', [OrderController::class, 'add_Order']);






//--------------User routers--------------
//user Menu page route
Route::get('/view_Menu', [HomeController::class, 'view_Menu']);



require __DIR__.'/auth.php';
