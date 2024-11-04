<?php

declare(strict_types=1);

namespace JCombee\Native\WinPre;

use Exception;

class PresetNotFoundException extends Exception
{
    public function __construct(string $id)
    {
        parent::__construct(sprintf('"There is no window preset with the id: "%s"."', $id));
    }
}
