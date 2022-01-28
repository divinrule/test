<?php
namespace App\Libraries;

class Hash
{
    public static function make($pwd)
    {
        return password_hash($pwd, PASSWORD_BCRYPT);
    }

    public static function check($entered_pwd, $db_pwd)
    {
        if (password_verify($entered_pwd, $db_pwd)) {
            return true;
        } else {
            return false;
        }
        
    }
}