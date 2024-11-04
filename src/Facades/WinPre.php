<?php

declare(strict_types=1);

namespace JCombee\Native\WinPre\Facades;

use Illuminate\Support\Facades\Facade;
use JCombee\Native\WinPre\WinPreManager;

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
