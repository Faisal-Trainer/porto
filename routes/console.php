<?php

use App\Models\User;
use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('sitemap:generate')->daily();

Schedule::call(function () {
    User::whereNull('email_verified_at')
        ->where('created_at', '<', now()->subHours(24))
        ->delete();
})->daily();
