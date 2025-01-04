<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('your:command', function () {
    $this->info('This is a console command');
})->describe('Your custom command');
