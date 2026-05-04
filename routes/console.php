<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Sincroniza as Instituições de Ensino Superior (MEC/e-MEC) mensalmente.
// No servidor, configure o cron: * * * * * php /caminho/para/artisan schedule:run >> /dev/null 2>&1
Schedule::command('ies:sync')->monthly();
