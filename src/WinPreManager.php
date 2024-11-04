<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre;

use Native\Laravel\Windows\Window;

class WinPreManager
{
    public function __construct(protected readonly PresetCollection $presets)
    {
    }

    public function open(string $id, ...$params): Window
    {
        if ($this->presets->has($id)) {
            throw new PresetNotFoundException;
        }

        $preset = $this->presets->get($id);
        $preset(...$params);

    }
}
