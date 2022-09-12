<?php

namespace MegaCMD;

class CheckInstalllation
{
    public static function checkIntallation(): bool
    {
        $return = shell_exec('which mega-cmd');
        if (str_contains('not found', $return))
        {
            return false;
        }
        return true;
    }
}