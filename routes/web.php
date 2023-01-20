<?php

use App\Models\Post;
use App\Models\Comment;
use App\Models\Postbserver;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\ZipController;

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
//     return view('pract');
// });

//filesystem-Image store & retriving
// Route::get('/', [UploadImageController::class, 'index']);
// Route::post('upload-image', [UploadImageController::class, 'upload']);
// Route::get('image-download/{image}', [UploadImageController::class, 'downloadImage'])->name('download.image');

//filesystem-zip file Download
// Route::get('/', [zipController::class, 'index']);
// Route::get('zip', [ZipController::class, 'download'])->name('zipfile');

// chatify-example
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//event-listener
// Route::get('show', [PostController::class, 'show']);
// Route::post('add', [PostController::class, 'create'])->name('add');
// Route::get('mail', [PostController::class, 'sendMail']);

//observer-example
Route::get('/', function () {
    $post = Postbserver::whereId(4)->first()->delete();
    //dd($post);
    // dd($post->comments()->get());

    // Postbserver::whereId(1)->delete();
    // Comment::wherepost_id(1)->delete();
    dd('done');
});
