<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre;

use Exception;

class PresetsNotAvailibleException extends Exception
{
    public function __construct(string $id)
    {
        parent::__construct('There is no presets file found. Add routes/windows.php or run .');
    }
}
