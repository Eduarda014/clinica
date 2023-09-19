<?php

namespace Source\Core;

class Session
{
    public function __construct()
    {
        if(!session_id()){
            session_start();
        }
    }

    public function get($name)
    {
        if(!empty($_SESSION[$name])){
            return $_SESSION[$name];
        }
        return null;
    }

    public function isset(string $key)
    {
        return isset($_SESSION[$key]);
    }

    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }


}