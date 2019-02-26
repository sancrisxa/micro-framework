<?php

namespace Core;

class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        
        if (empty($_SESSION)) {

            return false;

        } else {

            return $_SESSION[$key];
        }


    
    } 

    public static function destroy($keys)
    {
        if (is_array($keys)) {

            foreach ($keys as $key) {

                unset($_SESSION[$key]);
            }
        }

        unset($_SESSION[$keys]);
    }
}