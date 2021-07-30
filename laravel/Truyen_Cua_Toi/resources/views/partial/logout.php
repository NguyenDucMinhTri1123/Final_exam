<?php 
    define('SITE___URL','http://127.0.0.1:8000/');
    //destroy the session
    session_destroy();
    //redirect to login page
    header('location:'.SITE___URL.'login');
?>