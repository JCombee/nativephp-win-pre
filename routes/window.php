<?php

use JCombee\Native\WinPre\Facades\Preset;
use Native\Laravel\Windows\Window;

Preset::preset('main', static function (Window $window) {
    $window->url('/')
        ->width(300)
        ->height(300);
});
