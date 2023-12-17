<?php

class SessionManager{

    public function __construct(){
        session_start();
    }

    public function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key]:null;
    }

    public function has($key){
        return isset($_SESSION[$key]);
    }

    public function remove($key){
        if($this->has($key)){
            unset($_SESSION[$key]);
        }
    }

    public function destroy(){
        session_destroy();
    }
}

?>