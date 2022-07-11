<?php

    namespace app\user;

use app\config\MysqlDBH;
use app\dto\Response;

    class UserController{

        private $userService; 

        function __construct()
        {
            $this->userService = new User(new MysqlDBH());
        }

        function findAllUsers(){
            $req = $this->userService->getUsers();
            return Response::json($req);
        }


        function findUserBySlug(string $slug){
            $req = $this->userService->getUserBySlug($slug);
            return Response::json($req);
        }

        function createNewUser(UserDataInterface $userInfo){
            $req = $this->userService->setUser($userInfo->get());
            if( is_array($req) && count($req) > 1){
                return Response::json($req);
            }else{
                if( $req == true){
                    return Response::json("User information already exist.", 300);
                }
                return Response::json("Unable to submit user information.", 500);
            }
        }

        function updateUserProfiles(array $userDetails){
            $req = $this->userService->updateUser($userDetails);
            if( is_array($req) && count($req) > 1){
                return Response::json($req);
            }else{
                return Response::json("No changes was made to user profile");
            }

        }

        function authenticateUser(array $credential){
            $req = $this->userService->authUser($credential);
            if( !is_bool($req)){
                $req["password"] = (string) time().'123';
                session_start();
                $_SESSION["cn_user_profile"] = $req;
                return Response::json($req);
            }
            return Response::json("Unable to find user credential.", 404);
        }



    }
?>