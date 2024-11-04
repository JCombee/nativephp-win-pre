<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre\Facades;

use Illuminate\Support\Facades\Facade;
use MageEye\Native\WinPre\WinPreManager;

/**
 * @method static WinPre open(string $id, ...$params)
 *
 * @see PresetManager
 */
class WinPre extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WinPreManager::class;
    }
}
