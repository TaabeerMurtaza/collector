<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('reset_everything', function () {
    Artisan::call("migrate:fresh");
    Artisan::call("db:seed DatabaseSeeder");
});
