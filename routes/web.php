<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'home', 
        ['name' => 'Ivan', 'age' => '20', 'position' => 'developer', 'address' => 'Moscow']);
});

Route::get('/contacts', function () {
    return view(
        'contacts ', 
        ['address' => 'Moscow', 'post_code' => '123456', 'email' => 'adddress@address@ru', 'phone' => '8-123-456-789-0']);
});
