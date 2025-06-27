<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Form_rout',[PostController::class , 'Regform']);
Route::post('/Insert_rout',[PostController::class , 'Datainsert']);
Route::get('/Display_rout',[PostController::class , 'Display']);
Route::get('/Edit_rout{edit_id}',[PostController::class , 'Editdata']);
Route::post('/Update_rout',[PostController::class , 'UpdateData']);
Route::get('/Delete_rout{del_id}',[PostController::class , 'DeleteData']);
