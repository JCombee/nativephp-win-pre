<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre;

use Native\Laravel\Facades\Window as WindowFacade;
use Native\Laravel\Windows\Window;

class WinPreManager
{
    protected bool $presetsAreLoaded = false;

    public function __construct(protected readonly PresetCollection $presets)
    {
    }

    public function open(string $id, ...$params): Window
    {
        $this->loadPresets();

        if (!$this->presets->has($id)) {
            throw new PresetNotFoundException($id);
        }

        if ($this->windowIsOpen($id)) {
            return WindowFacade::get($id);
        }

        logger('opening ' . $id);
        $window = WindowFacade::open($id);
        $preset = $this->presets->get($id);
        $preset($window, ...$params);

        return $window;
    }

    protected function loadPresets(): void
    {
        if ($this->presetsAreLoaded) {
            return;
        }

        if (!is_file(base_path('routes/window.php'))) {
            throw new PresetsNotAvailibleException;
        }

        logger('loading presets;');
        $this->presetsAreLoaded = true;
        require_once base_path('routes/window.php');
        logger('loaded presets');
    }

    protected function windowIsOpen(string $id)
    {
        foreach (WindowFacade::all() as $window) {
            if ($window->getId() === $id) {
                return true;
            }
        }

        return false;
    }
}
