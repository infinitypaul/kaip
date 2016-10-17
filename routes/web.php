<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/demo', function () {

    $demo_seeder = new \Kordy\Ticketit\Seeds\TicketitTableSeeder;
    $demo_seeder->email_domain = '@example.com'; // the email domain name for demo accounts. Ex. user1@example.com
    $demo_seeder->agents_qty = 3; // number of demo agents accounts
    $demo_seeder->agents_per_category = 2; // number of demo agents per category (must be lower than $agents_qty)
    $demo_seeder->users_qty = 10; // number of demo users accounts
    $demo_seeder->tickets_per_user_min = 1; // Minimum number of generated tickets per user
    $demo_seeder->tickets_per_user_max = 5; // Maximum number of generated tickets per user
    $demo_seeder->comments_per_ticket_min = 0; // Minimum number of generated comments per ticket
    $demo_seeder->comments_per_ticket_max = 3; // Maximum number of generated comments per ticket
    $demo_seeder->default_agent_password = 'demo'; // default demo agents accounts paasword
    $demo_seeder->default_user_password = 'demo'; // default demo users accounts paasword
    $demo_seeder->tickets_date_period = 70; // to go to past (in days) and start creating tickets since
    $demo_seeder->tickets_open = 20; // To-do number of remaining open tickets
    $demo_seeder->tickets_min_close_period = 3; // minimum days to close tickets
    $demo_seeder->tickets_max_close_period = 5; // maximum days to close tickets
    $demo_seeder->default_closed_status_id = 2; // default status id for closed tickets
    $demo_seeder->categories = [
        'Technical' => '#0014f4',
        'Billing' => '#2b9900',
        'Customer Services' => '#7e0099'
    ];
    $demo_seeder->statuses = [
        'Pending' => '#e69900',
        'Solved' => '#15a000',
        'Bug' => '#f40700'
    ];
    $demo_seeder->priorities = [
        'Low' => '#069900',
        'Normal' => '#e1d200',
        'Critical' => '#e10000'
    ];

    $demo_seeder->run();

    return 'done';
});
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('logout', ['as' => 'login', 'uses' => 'HomeController@logout']);
Route::get('login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::post('login', ['uses' => 'HomeController@postLogin']);
Route::get('register', ['as' => 'register', 'uses' => 'HomeController@register']);
Route::post('upload', ['as' => 'upload', 'uses' => 'UserController@upload']);
Route::get('verify', ['as' => 'verify', 'uses' => 'UserController@verify']);
Route::get('dashboard/givehelp', ['as' => 'givehelp', 'uses' => 'UserController@GiveHelp']);
Route::post('register', ['as' => 'register', 'uses' => 'UserController@store']);

Route::get('smscode/{id}', ['as' => 'sms', 'uses' => 'HomeController@sms']);
Route::get('autocomplete', 'HomeController@Autocomplete');
Route::get('complete', 'HomeController@Complete');
Route::resource('dashboard', 'UserController');
