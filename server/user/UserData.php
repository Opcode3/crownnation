<?php

namespace app\user;

use app\helper\Validation;

    class UserData implements UserDataInterface{

        private $userInfo = [];

        function __construct($user)
        {
            if(
                count($user) > 5 && count($user) <= 7 &&
                Validation::isFullName($user['full_name']) &&
                Validation::isPhone($user['phone_number']) &&
                Validation::isEmail($user['email_address']) &&
                isset($user['sex']) && strlen(trim($user['sex'])) >= 3 &&
                isset($user['location']) && strlen(trim($user['location'])) > 6 &&
                isset($user['marital_status']) && strlen(trim($user['marital_status'])) > 4 &&
                isset($user['user_password']) && strlen(trim($user['user_password'])) > 6
            ){
                // prepare data for query
                $this->userInfo["name"] = $user["full_name"];
                $this->userInfo["phone"] = $user["phone_number"];
                $this->userInfo["email"] = $user["email_address"];
                $this->userInfo["gender"] = $user["sex"];
                $this->userInfo["address"] = $user["location"];
                $this->userInfo["mstatus"] = $user["marital_status"];
                $this->userInfo["password"] = $user["user_password"];                
            }

        }

        function get():array{
            return $this->userInfo;
        }


    }

?>