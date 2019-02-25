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
        if($_SESSION[$key]) {

            return $_SESSION[$key];
        }

        return false;
    } 

    public function destroy($keys)
    {
        if (is_array($keys)) {

            foreach ($keys as $key) {

                unset($_SESSION[$key]);
            }
        }

        unset($_SESSION[$keys]);
    }
}