<?php

Route::get('/', function(){
    return view('welcome');
});

/*
 * This example uses Vue to fetch the database data with Ajax
 */
Route::get('/pretend-api', function(){
    // Provide an API for Vue to access the data from, which is all of the tasks in JSON format.
    // To return this as JSON, you can't put it in a view, it has to be returned directly like return $tasks
    // or else it won't work.
    $tasks = App\Task::latest()->get();
    return $tasks;
});
