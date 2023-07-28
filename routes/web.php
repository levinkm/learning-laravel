<?php

use App\Models\Listing;
use App\Utils\Newsletter;

use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SessionsController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\NewsletterController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\PostCommentController;

// index,show,create, store, edit, update, destroy

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

// Route::get('listings', [ListingController::class, "index"]);
// Route::get('/listings/{listing}', [ListingController::class, "show"]);
Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post}/comments', [PostCommentController::class, 'store']);

Route::get('categories/{id:slug}', [CategoryController::class, 'show']);

Route::get('authors/{author:username}', [AuthorController::class, 'show']);

// forms
Route::get('register', [registerController::class, 'create'])->middleware('guest');
Route::post('register', [registerController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);
