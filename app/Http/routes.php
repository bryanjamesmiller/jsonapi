<?php

Route::get('/', function(){
    return view('welcome');
});

/*
 * This example uses Vue to fetch the database data with Ajax
 */
Route::get('/pretend-api', function(){
    header('Access-Control-Allow-Origin: *');
    // Provide an API for Vue to access the data from, which is all of the tasks in JSON format.
    $tasks = App\Task::latest()->get();
    return $tasks;
});
