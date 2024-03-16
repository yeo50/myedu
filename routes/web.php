<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/home', function () {
//     $users = ["kyawkyaw", "tuntun"];
//     $userLists = [
//         ["id" => 1, "name" => "popo", "address" => "ygn"],
//         ["id" => 2, "name" => "nono", "address" => "bago"],
//         ["id" => 3, "name" => "koko", "address" => "bago"],
//         ["id" => 4, "name" => "nyonyo", "address" => "ygn"]
//     ];
//     return view('home', ["users" => $users, "userlists" => $userLists]);
// });
// Route::get('/projects', function () {
//     return view('projects');
// });
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get(
//     '/users/{id}',
//     function (string $id) {
//         return "users" . $id;
//     }
// );
// Route::get('posts/{post}/comments/{comment}', function (string $post, string $comment) {
//     return "my posts $post and my comment is $comment";
// });
// Route::get('/some/{rt?}', function (string $rt = null) {
//     return " this is $rt";
// });
// Route::get('/things/{thing}/boxes/{box}', function (string $thing, string $box) {
//     return "my post is $thing and $box";
// })->whereNumber('box')->whereAlpha('thing');
// Route::get('/categories/{category}', function (string $category) {
//     return " my category is $category";
// })->whereIn('category', ['movie', 'song', 'painting']);
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get("/users/{user}", [UserController::class, 'show'])->name('users.show');
Route::get("/users/{user}/edit", [UserController::class, 'edit'])->name('users.edit');
Route::patch("users/{user}", [UserController::class, 'update'])->name('users.update');
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get("/todos/create", [TodoController::class, 'create'])->name('todos.create');
Route::post("todos", [TodoController::class, 'store'])->name('todos.store');
Route::get("/todos/{todo}", [TodoController::class, 'show'])->name('todos.show');
Route::get("/todos/{todo}/edit", [TodoController::class, 'edit'])->name('todos.edit');
Route::patch("/todos/{todo}", [TodoController::class, 'update'])->name('todos.update');
Route::delete("/todos/{todo}", [TodoController::class, 'destroy'])->name('todos.destroy');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch("/posts/{post}", [PostController::class, 'update'])->name('posts.update');
Route::delete("/posts/{post}", [PostController::class, 'destroy'])->name('posts.destroy');
