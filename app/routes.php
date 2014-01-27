<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|yes yes yes
*/

// make id's numeric
Route::pattern('id', '\d+');
/*
Route::get('/add-to-event/{id}', array('as' => 'add.to.event', function ($event_id) {

     $qry = 'INSERT INTO event_users WHERE event_id = ' . $event_id . ' AND user_id = ' . Sentry::getUser()->getId();
	 mysql_query($qry);
	 return View::make('home')
				->with('slider', Event::orderBy('created_at', 'asc')->paginate(3))
				->with('events', Event::orderBy('created_at', 'asc')->paginate(3));
}));
*/
// Home
Route::get('/', array('as' => 'home', function()
{
    return View::make('home')
				->with('slider', Event::orderBy('created_at', 'asc')->paginate(3))
				->with('events', Event::orderBy('created_at', 'asc')->paginate(3));
}));


// Events
Route::get('events',              array('as' => 'event.list',        'uses' => 'SiteEventsController@getIndex'));
Route::get('events/{slug}',       array('as' => 'event',             'uses' => 'SiteEventsController@getEvent'));

// Single page
Route::get('{slug}', array('as' => 'page', function($slug)
{
    $page = Page::where('slug', $slug)->first();

    if( is_null($page) )
        App::abort('404');
    else
        return View::make('page')->with('entry', $page);

}))->where('slug', '^((?!admin).)*$');


// Member register/activate/login/logout/resetpass
Route::group(array('prefix' => 'admin'), function()
{
    Route::get('users/register',              array('as' => 'admin.user.register',           'uses' => 'UserController@getRegister'));
    Route::post('users/register',             array('as' => 'admin.user.register.post',      'uses' => 'UserController@postRegister'));
    Route::get('users/activate/{id}/{code}',  array('as' => 'admin.user.activate',           'uses' => 'UserController@getActivate'))->where('id', '\d+');

    Route::get('users/login',                 array('as' => 'admin.user.login',              'uses' => 'UserController@getLogin'));
    Route::post('users/login',                array('as' => 'admin.user.login.post',         'uses' => 'UserController@postLogin'));
    Route::get('users/logout',                array('as' => 'admin.user.logout',             'uses' => 'UserController@getLogout'));

    Route::get('users/resetpassword',         array('as' => 'admin.user.resetpassword',      'uses' => 'UserController@getResetpassword'));
    Route::post('users/resetpassword',        array('as' => 'admin.user.resetpassword.post', 'uses' => 'UserController@postResetpassword'));
    Route::get('users/resend',                array('as' => 'admin.user.resend',             'uses' => 'UserController@getResend'));
    Route::post('users/resend',               array('as' => 'admin.user.resend.post',        'uses' => 'UserController@postResend'));
    Route::get('users/reset/{id}/{code}',     array('as' => 'admin.user.reset',              'uses' => 'UserController@getReset'))->where('id', '\d+');
});


// Here goes Member Admin

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
    Route::resource('events', 'UserEventsController');
    Route::resource('userdetails', 'UserDetailsController', array('only' => array('edit', 'update')));
});



// Site Admin
Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'UserController@getIndex');
    Route::controller('users', 'UserController');

    // make id's for resources numeric
    Route::pattern('groups', '\d+');
    Route::pattern('pages', '\d+');
    Route::pattern('services', '\d+');
    Route::pattern('skillscategories', '\d+');
    Route::pattern('skills', '\d+');
//  Route::pattern('offers', '\d+');
//  Route::pattern('requests', '\d+');

    // RESTful controllers
    Route::resource('groups', 'GroupController');
    Route::resource('pages', 'PagesController');
    Route::resource('services', 'ServicesController');
    Route::resource('skillscategories', 'SkillsCategoriesController');
    Route::resource('skills', 'SkillsController');
//  Route::resource('offers', 'OffersController', array('except' => array('show')));
//  Route::resource('requests', 'RequestsController', array('except' => array('show')));

});

// 404 Page
App::missing(function($exception)
{
    return Response::view('404', array(), 404);
});


