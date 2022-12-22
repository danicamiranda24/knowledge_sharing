<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/user/{id}', function ($id) {
//     // return $router->app->version();
//     return 'User'.$id;
// });

// $router->get('/user[/{name}]', function ($name='test') {
//     return $name;
// });


//NAMED ROUTES
// $router->get('/',function() {
//  return redirect()->route('profile');
// });

// //Named Routes
// $router->get('profile', ['as' => 'profile',function () {
//     return 'foo';
// }]);

//Generating urls to named route

$router->group(['middleware' => 'calculator'], function() use ($router) {
    $router->get('/', function () {
        return 'foo';
    });
    $router->get('user', function () {
        return 'bar';
    });
    $router->post('calculator','ExampleController@calculate');
});

// $router->post('user','ExampleController@getUser');

// $router->post('jobs/{id}','ExampleController@updateUser');
// $router->post('jobs/update/{id}','ExampleController@updateJobs');
// $router->post('jobs/delete','ExampleController@deleteJobs');

$router->get('jobs/{id}','ExampleController@getJobs');
$router->get('jobs','ExampleController@getAllJobs');
$router->post('jobs','ExampleController@insertJobs');
$router->put('jobs/update/{id}','ExampleController@updateJobs');
$router->delete('jobs/delete/{id}','ExampleController@deleteJobs');


