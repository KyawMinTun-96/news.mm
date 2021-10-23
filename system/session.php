<?php 

    session_start();

    function setSession($key, $value = []) {

        $_SESSION[$key] = $value;
        
    }


    function getSession($key) {

        return $_SESSION[$key];

    }


    function checkSession($key) {

        return isset($_SESSION[$key]);

    }

    function deleteSession() {

        session_unset();
        session_destroy();

    }













?>