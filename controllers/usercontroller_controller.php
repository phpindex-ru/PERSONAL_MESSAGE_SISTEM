<?php
  class UsercontrollerController {
    
    public function logout() {
    session_destroy();
    $_SESSION['id'] = false;

     
        require_once('views/pages/logout.php');
     }
    }