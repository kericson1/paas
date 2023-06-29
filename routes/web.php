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

Route::get('/admin_2023/administration', function () {
    return view('admin.administration');
})->name('administration');

Route::get('/admin_2023/activation', function () {
    return view('admin.activation_compte');
})->name('admin_2023_activation');

Route::get('/admin_2023/active', function () {
    return view('admin.compte_active');
})->name('admin_2023_active');

Route::get('/admin_2023/banni', function () {
    return view('admin.compte_banni');
})->name('admin_2023_banni');

Route::get('/admin_2023/droit_accès', function () {
    return view('admin.droit_accès');
})->name('admin_2023_droit_accès');

Route::get('/admin_2023/activite_membre', function () {
    return view('admin.activite_membre');
})->name('admin_2023_activite_membre');

Route::get('/admin_2023/type_paiement', function () {
    return view('admin.type_paiement');
})->name('admin_2023_type_paiement');

Route::get('/admin_2023/devise', function () {
    return view('admin.devise');
})->name('admin_2023_devise');

Route::get('/admin_2023', function () {
    return view('admin.index');
})->name('admin_2023');

Route::get('/admin_2023/commande_attend', function () {
    return view('admin.commande_attente');
})->name('admin_2023_commande_attend');

Route::get('/admin_2023/paiement_commande', function () {
    return view('admin.paiement_commande');
})->name('admin_2023_paiement_commande');

Route::get('/admin_2023/liberer_commande', function () {
    return view('admin.liberer_commande');
})->name('admin_2023_liberer_commande');

Route::get('/admin_2023/annuller_commande_caissier', function () {
    return view('admin.annuller_commande_caissier');
})->name('admin_2023_annuller_commande_caissier');

// Route::get('/', function () {
//     return view('user.base');
// })->name('home');

Route::get('/', function(){
    return view('user.index');
})->name('home');

Route::get('/accueil-client', function () {
    return view('user.accueil');
})->name('accueil_client');

Route::get('/prise-commande', function () {
    return view('user.commande');
})->name('prise_commande');

Route::get('/bilan-commande', function () {
    return view('user.bilan_commande');
})->name('bilan_commande');

Route::get('/Recap-commande', function () {
    return view('user.recap_commande');
})->name('recap_commande');

Route::get('/demande-addition', function () {
    return view('user.demande_addition');
})->name('demande_addition');

Route::get('/annuler-commande', function () {
    return view('user.annuler_commande');
})->name('annuler_commande');

Route::get('/cuisine', function () {
    return view('user.cuisine');
})->name('cuisine');
Route::get('/cuisine/detail', function () {
    return view('user.cuisine_detail');
})->name('cuisine_detail');
