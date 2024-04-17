<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('plus', function () {
    $id = 171039784274231296;
    \App\Events\OneEvent::fire(application_id: $id);
    echo \App\States\ApplicationState::load($id)->counter;
})->purpose('Increase counter');

Artisan::command('minus', function () {
    $id = 171039784274231296;
    \App\Events\TwoEvent::fire(application_id: $id);
    echo \App\States\ApplicationState::load($id)->counter;
})->purpose('Decrease counter');
