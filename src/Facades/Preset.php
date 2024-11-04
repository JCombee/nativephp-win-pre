<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre\Facades;

use Illuminate\Support\Facades\Facade;
use MageEye\Native\WinPre\PresetManager;
use MageEye\Native\WinPre\WinPreManager;

/**
 * @method static WinPreManager preset(string $string, callable $handle)
 *
 * @see PresetManager
 */
class Preset extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PresetManager::class;
    }
}
