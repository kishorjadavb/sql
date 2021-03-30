<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;



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
    return view('welcome');
});
Route::get('form', function () {
    return view('regForm');
});
Route::get('login', function () {
    return view('login');
});
Route::get('viewcontent', function () {
    return view('viewlargeblog');
});
// Route::get('signupform', function () {
//     return view('signup');
// });


//signup page
Route::get('signupform', [Auth::class, 'signupView']);
//signup submitted
Route::post('signupClicked', [Auth::class, 'signupSubmit'])->name('auth.signupSubmit');
//login Submitted
Route::post('loginClicked', [LoginController::class, 'loginSubmit'])->name('logincontroller.loginSubmit');

//blogPost
Route::get('/blog', [BlogController::class, 'getBlogPost']);
//blog view big
Route::get('/viewcontent/{id}', [BlogController::class, 'viewBlog']);
//to add blogpost
Route::get('/addPost', [BlogController::class, 'addBlogPost']);
//to add blogpost submit button clicked
Route::post('/addPost', [BlogController::class, 'addBlogPostSubmitted'])->name('blogcontrol.postsubmit');
//to edit blogpost submit button clicked
Route::get('/editPost/{id}', [BlogController::class, 'editBlog'])->name('blogcontrol.editPost');
//to delete blogpost submit button clicked
Route::get('/deletePost/{id}', [BlogController::class, 'deleteBlog'])->name('blogcontrol.deletePost');
//to update blog
Route::post('/updatePost/{id}', [BlogController::class, 'updateBlog'])->name('blogcontrol.updatePost');



// crud operation
Route::get('datatable', [CrudController::class, 'show']);
Route::get('to_delete/{id}', [CrudController::class, 'destroy']);
Route::get('form', [CrudController::class, 'create']);
Route::post('to_submit', [CrudController::class, 'store']);
Route::get('to_edit/{id}', [CrudController::class, 'edit']);
Route::post('to_update/{id}', [CrudController::class, 'update']);

Route::get('search', [CrudController::class, 'showSearch']);


Route::get('users', [CrudController::class, 'getUsers'])->name('get.users');
