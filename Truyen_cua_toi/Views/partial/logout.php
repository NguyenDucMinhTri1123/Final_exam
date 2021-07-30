<?php 
    define('SITE__URL','http://localhost/Truyen_cua_toi/public/');
    //destroy the session
    session_destroy();
    //redirect to login page
    header('location:'.SITE__URL.'login');
?>