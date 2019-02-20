<?php

use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Create Dingo Router
$api = app(Router::class);

// Create a Dingo Version Group
$api->version('v1', ['middleware' => 'api'], function ($api) {
    $api->group(['prefix' => 'auth'], function ($api) {
        $api->post('register', [
            'as' => 'register',
            'uses' => 'App\\Api\\V1\\Controllers\\RegisterController@register',
        ]);

        $api->post('login', [
            'as' => 'login',
            'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        ]);

        $api->get('logout', [
            'middleware' => 'auth:api',
            'as' => 'logout',
            'uses' => 'App\\Api\\V1\\Controllers\\LogoutController@logout',
        ]);

        $api->post('recovery', [
            'as' => 'password.email',
            'uses' => 'App\\Api\\V1\\Controllers\\ForgotPasswordController@sendResetEmail',
        ]);
        $api->post('reset', 'App\\Api\\V1\\Controllers\\ResetPasswordController@resetPassword');
    });

    // Protected routes
    $api->group(['middleware' => 'auth:api'], function ($api) {
        $api->get('protected', function () {
            return response()->json([
                'message' => 'Access to protected resources granted! You are seeing this text as you provided the token correctly.',
            ]);
        });

        $api->get('users', [
            'as' => 'users.index',
            'uses' => 'App\\Api\\V1\\Controllers\\UserController@index',
        ]);

        $api->get('users/{user}', [
            'as' => 'users.show',
            'uses' => 'App\\Api\\V1\\Controllers\\UserController@show',
        ]);
    });

    $api->group([], function ($api) {
        $api->get('cinema_halls', 'App\\Api\\V1\\Controllers\\CinemaHallsController@getAll');
        $api->get('initial', 'App\\Api\\V1\\Controllers\\InitialController@getAll');

        $api->post('cinema_halls/add', 'App\\Api\\V1\\Controllers\\CinemaHallsController@add');
        $api->delete('cinema_halls/remove', 'App\\Api\\V1\\Controllers\\CinemaHallsController@remove');
        $api->put('cinema_halls/update', 'App\\Api\\V1\\Controllers\\CinemaHallsController@update');
        $api->put('cinema_halls/update_price', 'App\\Api\\V1\\Controllers\\CinemaHallsController@update_price');
        $api->put('cinema_halls/openSales', 'App\\Api\\V1\\Controllers\\CinemaHallsController@openSales');

        $api->get('cinema_hall_seats', 'App\\Api\\V1\\Controllers\\CinemaHallSeatsController@getAll');

        $api->post('movies/add', 'App\\Api\\V1\\Controllers\\MoviesController@add');
        $api->delete('movies/remove', 'App\\Api\\V1\\Controllers\\MoviesController@remove');

        $api->get('tickets/get_available', 'App\\Api\\V1\\Controllers\\TicketsController@getAvailable');
        $api->post('tickets/booking', 'App\\Api\\V1\\Controllers\\TicketsController@booking');

        $api->get('supervisor/check', 'App\\Api\\V1\\Controllers\\SupervisorController@check');
        $api->get('supervisor/punch', 'App\\Api\\V1\\Controllers\\SupervisorController@punch');
    });
});
