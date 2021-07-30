<?php 

if(!isset($_SESSION['account'])){ //if user session it not set 
    //user is not logged in
    //redirect to login page
    header('location:'.SITE__URL.'login');
}
?>