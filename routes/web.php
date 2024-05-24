<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
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
Route::get('/', [TasksController::class, 'index']);
Route::resource('task', TasksController::class);
// CRUD
// // メッセージの個別詳細ページ表示
// Route::get('task/{id}', [TasksCocd ntroller::class, 'show']);
// // メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('task', [TasksController::class, 'store']);
// // メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('task/{id}', [TasksController::class, 'update']);
// // メッセージを削除
// Route::delete('task/{id}', [TasksController::class, 'destroy']);
// // index: showの補助ページ
// Route::get('task', [TasksController::class, 'index'])->name('task.index');
// // create: 新規作成用のフォームページ
// Route::get('task/create', [TasksController::class, 'create'])->name('task.create');
// // edit: 更新用のフォームページ
// Route::get('task/{id}/edit', [TasksController::class, 'edit'])->name('task.edit');