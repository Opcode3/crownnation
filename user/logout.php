<?php
    session_start();
    if(isset($_SESSION["cn_user_profile"])){
        // $_SESSION["cn_user_profile"] = null;
        unset($_SESSION["cn_user_profile"]);
        header("location: /account");
    }else{
        header("location: /");
    }

?>