<?php

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

/**
 * Вывести панель с задачами
 */
Route::get('/tasks', function () {
  $tasks = DB::table('tasks')->get();
  return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
  $task = DB::table('tasks')->find($id);
  return view('tasks.show', compact('task'));
});



// /**
//  * Добавить новую задачу
//  */
// Route::post('/task_add', function (Request $request) {
//   $validator = Validator::make($request->all(), [
//     'name' => 'required|max:255',
//   ]);

//   if ($validator->fails()) {
//     return redirect('/tasks_list')
//       ->withInput()
//       ->withErrors($validator);
//   }

//   $task = new Task;
//   $task->name = $request->name;
//   $task->save();

//   return redirect('/tasks_list');

// });

// /**
//  * Удалить задачу
//  */
// Route::delete('/task-rm/{task}', function (Task $task) {
//   //
// });