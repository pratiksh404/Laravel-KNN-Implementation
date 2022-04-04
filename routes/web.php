<?php

use App\Services\KNearestNeighbors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FutsalController;
use App\Http\Controllers\HomeController;

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

Route::admineticAuth([
    'home' => false
]);

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function () {
    Route::resource('futsal', FutsalController::class);
});


Route::get('test', function () {
    $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
    $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

    $classifier = new KNearestNeighbors();
    $classifier->train($samples, $labels);

    $result = $classifier->predict([3, 2]);
    dd($result, $train);
});
