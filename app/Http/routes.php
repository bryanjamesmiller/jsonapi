<?php

Route::get('/', function(){
    return view('welcome');
});

/*
 * This example uses Vue to fetch the database data with Ajax
 */
Route::get('/pretend-api', function(){
    // Provide an API for Vue to access the data from, which is all of the tasks in JSON format.
    // To return this as JSON, you have to be very careful how you do it.  See the view.
    $tasks = App\Task::latest()->get();
    return view('create_json', compact('tasks'));
});
