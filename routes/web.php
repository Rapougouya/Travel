<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentralController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ClientController;
use App\Models\Contact;

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
//     return view('');
// });


Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/accueil', [ClientController::class, 'accueil'])->name('accueil');
Route::get('/inscription', [ClientController::class, 'inscription'])->name('inscription');

Route::get('/reserv', [ReservationController::class, 'reserv'])->name('reserv');
Route::post('/reserv', [ReservationController::class, 'Reservestore'])->name('reserve.store');

Route::get('/tarif', [ReservationController::class, 'tarif'])->name('tarif');

Route::post('/inscription', [ClientController::class, 'traitement_register'])->name('inscription');
Route::post('/', [ClientController::class, 'handlelogin'])->name('handlelogin');

// Route::get('/', [CentralController::class, 'form_login'])->name('connection');
Route::post('connectionTraitement', [CentralController::class, 'traitement_login'])->name('connectionTraitement');

route::get("/reservationlist", [AdminController::class, 'rendrelistereservation'])->name("reservlist");

Route::get('delete/{reservation}', [ReservationController::class, 'delete'])->name('reserv.delete');

Route::post('/contact', [ContactController::class, 'ContactStore'])->name('contact.store');
