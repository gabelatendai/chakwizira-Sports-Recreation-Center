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

// front end routes-----
Route::get('/',[
    'uses' => 'FrontEndController@index',
    'as' =>'index'
]);
Route::get('/index-2',[
    'uses' => 'FrontEndController@index2',
    'as' =>'index2'
]);
Route::get('/about',[
    'uses' => 'FrontEndController@about',
    'as' =>'about'
]);
Route::get('/services',[
    'uses' => 'FrontEndController@services',
    'as' =>'services'
]);

Route::get('/about',[
    'uses' => 'FrontEndController@about',
    'as' =>'about'
]);
Route::get('/our-team',[
    'uses' => 'FrontEndController@team',
    'as' =>'team'
]);

Route::get('/portfolio',[
    'uses' => 'FrontEndController@portfolio',
    'as' =>'portfolio'
]);

Route::get('/portfolio2',[
    'uses' => 'FrontEndController@portfolio2',
    'as' =>'portfolio2'
]);

Route::get('/blog',[
    'uses' => 'FrontEndController@blog',
    'as' =>'blog'
]);
Route::get('/blog-grid',[
    'uses' => 'FrontEndController@bloggrid',
    'as' =>'blog-grid'
]);
Route::get('/contact',[
    'uses' => 'FrontEndController@contact',
    'as' =>'contact'
]);
Route::get('/news/{slug}',[
    'uses' => 'FrontendController@single',
    'as' =>'news'
]);

Route::get('/services-details/{slug}',[
    'uses' => 'FrontendController@servicedetail',
    'as' =>'services-details'
]);
Route::get('/news-categorised',[
    'uses' => 'FrontendController@category',
    'as' =>'news-categorised'
]);

Route::get('/news-about',[
    'uses' => 'FrontendController@newsabout',
    'as' =>'news-about'
]);

Route::get('/news-computer',[
    'uses' => 'FrontendController@newscomputer',
    'as' =>'news-computer'
]);

Route::get('/news-netball',[
    'uses' => 'FrontendController@newsnetball',
    'as' =>'news-netball'
]);

Route::get('/news-press',[
    'uses' => 'FrontendController@newspress',
    'as' =>'news-press'
]);

Route::get('/news-soccer',[
    'uses' => 'FrontendController@newssoccer',
    'as' =>'news-soccer'
]);

Route::get('/news-uncategorised',[
    'uses' => 'FrontendController@newsuncat',
    'as' =>'news-uncategorised'
]);
//---
Auth::routes();


Route::get('/admin/index',[
    'uses' => 'HomeController@index',
    'as' =>'index'
]);
Route::get('/admin/users',[
    'uses' => 'HomeController@users',
    'as' =>'users'
]);
//Route::get('/admin/users', 'HomeController@users')->name('users');


Route::get('/users/make-admin/{id}',[
    'uses' => 'HomeController@remove',
    'as' =>'admin.remove'
])->middleware('admin');

Route::get('/users/not-admin/{id}',[
    'uses' => 'HomeController@add_permissions',
    'as' =>'admin.permissions'
])->middleware('admin');
Route::get('/users/delete/{id}',[
    'uses' => 'HomeController@destroy',
    'as' =>'admin.delete'
])->middleware('admin');
/*-----------banners routes----*/
Route::get('/banners',[
    'uses' => 'BannersController@index',
    'as' =>'banners.index'
]);

Route::get('/banners/edit/{id}',[
    'uses' => 'BannersController@edit',
    'as' =>'banners.edit'
]);
Route::get('/banners/destroy/{id}',[
    'uses' => 'BannersController@destroy',
    'as' =>'banners.destroy'
]);

Route::get('/banners/create',[
    'uses' => 'BannersController@create',
    'as' =>'banners.create'
]);
Route::post('/banners/update/{id}',[
    'uses' => 'BannersController@update',
    'as' =>'banners.update'
]);

Route::post('/banners/save',[
    'uses' => 'BannersController@store',
    'as' =>'banners.save'
]);
/*-----------gallery routes----*/
Route::get('/gallery',[
    'uses' => 'GalleryController@index',
    'as' =>'gallery.index'
]);
Route::get('/gallery/list',[
    'uses' => 'GalleryController@list',
    'as' =>'gallery.list'
]);
Route::get('/gallery/edit/{id}',[
    'uses' => 'GalleryController@edit',
    'as' =>'gallery.edit'
]);
Route::get('/gallery/destroy/{id}',[
    'uses' => 'GalleryController@destroy',
    'as' =>'gallery.destroy'
]);

Route::get('/gallery/create',[
    'uses' => 'GalleryController@create',
    'as' =>'gallery.create'
]);
Route::post('/gallery/update/{id}',[
    'uses' => 'GalleryController@update',
    'as' =>'gallery.update'
]);

Route::post('/gallery/store',[
    'uses' => 'GalleryController@store',
    'as' =>'gallery.store'
]);
/*-----------news routes----*/
Route::get('/news',[
    'uses' => 'NewsController@index',
    'as' =>'news.index'
]);

Route::get('/news/edit/{id}',[
    'uses' => 'NewsController@edit',
    'as' =>'news.edit'
]);
Route::get('/news/destroy/{id}',[
    'uses' => 'NewsController@destroy',
    'as' =>'news.destroy'
]);

Route::get('/news/create',[
    'uses' => 'NewsController@create',
    'as' =>'news.create'
]);
Route::post('/news/update/{id}',[
    'uses' => 'NewsController@update',
    'as' =>'news.update'
]);

Route::post('/news/store',[
    'uses' => 'NewsController@store',
    'as' =>'news.store'
]);
/*-----------services routes----*/
Route::get('/services/index',[
    'uses' => 'ServicesController@index',
    'as' =>'services.index'
]);

Route::get('/services/edit/{id}',[
    'uses' => 'ServicesController@edit',
    'as' =>'services.edit'
]);
Route::get('/services/destroy/{id}',[
    'uses' => 'ServicesController@destroy',
    'as' =>'services.destroy'
]);

Route::get('/services/create',[
    'uses' => 'ServicesController@create',
    'as' =>'services.create'
]);
Route::post('/services/update/{id}',[
    'uses' => 'ServicesController@update',
    'as' =>'services.update'
]);

Route::post('/services/store',[
    'uses' => 'ServicesController@store',
    'as' =>'services.store'
]);
/*!!!!!!!!-----------players routes----*/

Route::get('/team',[
    'uses' => 'PlayersController@index',
    'as' =>'team.index'
]);
Route::get('/team/gallery',[
    'uses' => 'PlayersController@list',
    'as' =>'team.list'
]);

Route::get('/team/edit/{id}',[
    'uses' => 'PlayersController@edit',
    'as' =>'team.edit'
]);
Route::get('/team/destroy/{id}',[
    'uses' => 'PlayersController@destroy',
    'as' =>'team.destroy'
]);

Route::get('/team/create',[
    'uses' => 'PlayersController@create',
    'as' =>'team.create'
]);
Route::post('/team/update/{id}',[
    'uses' => 'PlayersController@update',
    'as' =>'team.update'
]);

Route::post('/team/save',[
    'uses' => 'PlayersController@store',
    'as' =>'team.save'
]);

/*-----------statics banners routes----*/
Route::get('/statics',[
    'uses' => 'StaticBannersController@index',
    'as' =>'statics.index'
]);

Route::get('/statics/edit/{id}',[
    'uses' => 'StaticBannersController@edit',
    'as' =>'statics.edit'
]);
Route::get('/statics/destroy/{id}',[
    'uses' => 'StaticBannersController@destroy',
    'as' =>'statics.destroy'
]);

Route::get('/statics/create',[
    'uses' => 'StaticBannersController@create',
    'as' =>'statics.create'
]);
Route::post('/statics/update/{id}',[
    'uses' => 'StaticBannersController@update',
    'as' =>'statics.update'
]);

Route::post('/statics/save',[
    'uses' => 'StaticBannersController@store',
    'as' =>'statics.save'
]);
/*-----------settings routes----*/
Route::get('/settings',[
    'uses' => 'SettingsController@index',
    'as' =>'settings.index'
]);

Route::get('/settings/edit/{id}',[
    'uses' => 'SettingsController@edit',
    'as' =>'settings.edit'
]);
Route::get('/settings/destroy/{id}',[
    'uses' => 'SettingsController@destroy',
    'as' =>'settings.destroy'
]);

Route::get('/settings/create',[
    'uses' => 'SettingsController@create',
    'as' =>'settings.create'
]);
Route::post('/settings/update/{id}',[
    'uses' => 'SettingsController@update',
    'as' =>'settings.update'
]);

Route::post('/settings/store',[
    'uses' => 'SettingsController@store',
    'as' =>'settings.store'
]);
/*!!!!!!!!-----------members routes----*/

Route::get('/tech-team',[
    'uses' => 'TechTeamController@index',
    'as' =>'techteam.index'
]);

Route::get('/tech-team/edit/{id}',[
    'uses' => 'TechTeamController@edit',
    'as' =>'techteam.edit'
]);
Route::get('/tech-team/destroy/{id}',[
    'uses' => 'TechTeamController@destroy',
    'as' =>'techteam.destroy'
]);

Route::get('/tech-team/create',[
    'uses' => 'TechTeamController@create',
    'as' =>'techteam.create'
]);
Route::post('/tech-team/update/{id}',[
    'uses' => 'TechTeamController@update',
    'as' =>'techteam.update'
]);

Route::post('/tech-team/save',[
    'uses' => 'TechTeamController@store',
    'as' =>'techteam.save'
]);