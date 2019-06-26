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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects', 'ProjectsController');
Route::get('/projects/create', 'ProjectsController@create')->name('projectCreate');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projectShow');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projectEdit');
Route::post('/projects/{project}/update', 'ProjectsController@update')->name('projectUpdate');

Route::get('/categories', 'CategoryController@index')->name('projectCategories');
Route::get('/category/{category}', 'CategoryController@showCategory')->name('projectCategory');

Route::get('/admin', 'AdminController@showAdminPanel');
Route::get('/admin/users', 'AdminController@showAllUsers');
Route::get('/admin/users/{user}', 'AdminController@destroyUser');
Route::get('/admin/projects', 'AdminController@showAllProject');
Route::get('/admin/projects/{project}', 'AdminController@destroyProject');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
