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

// Pages
Route::get('join', function() {
        return view('newView.join-new');
    });

Route::get('settings', function() {
        return view('newView.settings-new');
    });

Route::get('empty', function() {
        return view('newView.empty-new');
    });

Route::get('landing', function() {
        return view('newView.landing-new');
    });

Route::get('orgs', function() {
        return view('newView.orgs-new');
    });

Route::get('team', function() {
        return view('newView.team-new');
    });

Route::get('token-new', function() {
        return view('newView.token-new');
    });

Route::get('developer-new', function() {
        return view('newView.developer-new');
    });


Route::view('/', 'landing')->middleware('guest')->name('landing');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('org/{org}', 'OrgController@index')->name('org');
Route::post('org/{org}', 'OrgController@changePassword')->name('org.password');
Route::put('org/{org}', 'OrgController@update')->name('org.update');
Route::delete('org/{org}', 'OrgController@delete')->name('org.delete');
Route::post('org/{org}/message', 'OrgController@message')->name('org.message');
Route::get('org/{org}/teams', 'TeamController@index')->name('org.teams');
Route::post('org/{org}/teams', 'TeamController@syncTeams')->name('org.teams.sync');
Route::put('org/{org}/teams', 'TeamController@setTeam')->name('org.teams.set');
Route::delete('org/{org}/teams', 'TeamController@deleteTeams')->name('org.teams.delete');
Route::post('sync', 'GithubController@syncOrgs')->name('sync');
Route::post('sync/{org}', 'GithubController@syncOrg')->name('sync.org');
Route::get('join/{org}', 'JoinController@index')->name('join');
Route::post('join/{org}', 'JoinController@inviteUser')->name('join.post');
Route::get('join/{org}/callback', 'JoinController@callback')->name('join.callback');
Route::get('o/{name}', 'JoinController@redirect')->name('redirect');
Route::view('developer', 'developer')->name('developer');
Route::view('token', 'token')->middleware('auth')->name('token');
Route::delete('token', 'DeveloperController@deleteToken')->name('token.delete');

// Auth routes
Route::get('login', 'LoginController@authorizeUser')->name('login');
Route::get('callback', 'LoginController@loginUser')->name('callback');
Route::post('logout', 'LoginController@logoutUser')->name('logout');

// Autojoiner
Route::post('autojoiner', 'AutoJoinerController@index')->name('autojoiner');
