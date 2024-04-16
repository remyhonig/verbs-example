<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('plus', function () {
    \App\Events\OneEvent::fire();
})->purpose('Increase counter');

Artisan::command('minus', function () {
    \App\Events\TwoEvent::fire();
})->purpose('Decrease counter');
