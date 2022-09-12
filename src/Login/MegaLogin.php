<?php

namespace MegaCMD\Login;

class MegaLogin
{
    public function login(string $email, string $password): bool
    {
        $return = shell_exec("mega-login {$email} {$password}");
        if (strpos('API:err', $return)){
            return false;
        }
        return true;
    }
} 