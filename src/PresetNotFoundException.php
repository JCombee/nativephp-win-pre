<?php

declare(strict_types=1);

namespace MageEye\Native\WinPre;

use Exception;

class PresetNotFoundException extends Exception
{
    public function __construct(string $id)
    {
        parent::__construct(__('There is no window preset with the id: ":id".', ['id' => $id]));
    }
}
