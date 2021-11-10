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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----Admin Route---//

Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
Route::get('admin/profile', 'AdminController@profile')->name('admin.profile');
Route::get('admin/edit/profile', 'AdminController@edit_profile')->name('admin.edit_profile');
Route::post('admin/update/profile', 'AdminController@update_profile')->name('admin.update_profile');
Route::get('admin/password/change', 'AdminController@change_password')->name('admin.change_password');
Route::post('admin/password/update', 'AdminController@update_password')->name('admin.update_password');

//----Profile Route----//
Route::get('edit/profile/setting', 'ProfileController@edit')->name('profile.edit');
Route::post('update/profile/setting/{id}', 'ProfileController@update')->name('profile.update');

//----Experience Route----//
Route::get('all/experience', 'ExperienceController@index')->name('all.experience');
Route::post('store/experience', 'ExperienceController@store')->name('store.experience');
Route::get('edit/experience/{id}', 'ExperienceController@edit')->name('edit.experience');
Route::post('update/experience/{id}', 'ExperienceController@update')->name('update.experience');
Route::get('delete/experience/{id}', 'ExperienceController@delete')->name('delete.experience');

//----Education Route----//
Route::get('all/education', 'EducationController@index')->name('all.education');
Route::post('store/education', 'EducationController@store')->name('store.education');
Route::get('edit/education/{id}', 'EducationController@edit')->name('edit.education');
Route::post('update/education/{id}', 'EducationController@update')->name('update.education');
Route::get('delete/education/{id}', 'EducationController@delete')->name('delete.education');

//----Skills Route----//
Route::get('all/skill', 'SkillController@index')->name('all.skill');
Route::post('store/skill', 'SkillController@store')->name('store.skill');
Route::get('edit/skill/{id}', 'SkillController@edit')->name('edit.skill');
Route::post('update/skill/{id}', 'SkillController@update')->name('update.skill');
Route::get('delete/skill/{id}', 'SkillController@delete')->name('delete.skill');

//----Category Route----//
Route::get('all/category', 'CategoryController@index')->name('all.category');
Route::post('store/category', 'CategoryController@store')->name('store.category');
Route::get('edit/category/{id}', 'CategoryController@edit')->name('edit.category');
Route::post('update/category/{id}', 'CategoryController@update')->name('update.category');
Route::get('delete/category/{id}', 'CategoryController@delete')->name('delete.category');

//----Product Route----//
Route::get('all/product', 'ProductController@index')->name('all.product');
Route::post('store/product', 'ProductController@store')->name('store.product');
Route::get('edit/product/{id}', 'ProductController@edit')->name('edit.product');
Route::post('update/product/{id}', 'ProductController@update')->name('update.product');
Route::get('delete/product/{id}', 'ProductController@delete')->name('delete.product');

//----Recommend Route----//
Route::get('all/recommend', 'RecommendController@index')->name('all.recommend');
Route::post('store/recommend', 'RecommendController@store')->name('store.recommend');
Route::get('edit/recommend/{id}', 'RecommendController@edit')->name('edit.recommend');
Route::post('update/recommend/{id}', 'RecommendController@update')->name('update.recommend');
Route::get('delete/recommend/{id}', 'RecommendController@delete')->name('delete.recommend');

//----Messege Send Route----//
Route::post('send/messege', 'MessegeSendController@send')->name('send.messege');

//----Messege Route----//
Route::get('read/messege', 'MessegeController@read')->name('read.messege');
Route::get('unread/messege', 'MessegeController@unread')->name('unread.messege');
Route::get('show/messege/{id}', 'MessegeController@show')->name('show.messege');
Route::get('delete/messege/{id}', 'MessegeController@delete')->name('delete.messege');

//----Seo Route----//
Route::get('/edit/seo}','SeoController@edit')->name('edit.seo');
Route::post('/update/seo/{id}','SeoController@update')->name('update.seo');

//----Seo Route----//
Route::get('generate-pdf','PDFController@generatePDF');