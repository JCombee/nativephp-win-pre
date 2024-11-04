<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre;

use Native\Laravel\Windows\WindowManager;

class PresetManager
{
    public function __construct(
        protected readonly PresetCollection $presets,
    ) {
    }

    public function preset(string $id, callable $handle): static
    {
        logger('setting: ' . $id);
        $this->presets->put($id, $handle);

        return $this;
    }
}
