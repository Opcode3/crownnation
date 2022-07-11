<?php

use app\dto\Response;
use app\user\UserController;
use app\user\UserData;

require_once('../vendor/autoload.php');
// header('Content-Type: application/json');

header("Access-Control-Allow-Origin: same");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$call_server = parse_url($_SERVER['REMOTE_ADDR'], PHP_URL_PATH);
$method_type = $_SERVER['REQUEST_METHOD'];
$request_body = file_get_contents('php://input');
$requests = explode('/',$uri);

if(count($requests) > 2 && $requests[1] == 'api'){ 
    //check for request machine call.. must be from same domain
        
    if($requests[2] == 'user' || $requests[2] == 'users'){ //user endpoint
        $userc = new UserController();

        if($method_type == 'GET' && $requests[2] == 'users'){ //pull

            if(count($requests) > 3){ echo $userc->findUserBySlug((string) $requests[3]); } //single user
            else{ echo $userc->findAllUsers(); } // all users

        }
        else if($method_type == 'POST' && count($requests) == 3 && $requests[2] == 'user'){ // create

            $request_data = json_decode($request_body, true);
            $user_data = new UserData($request_data);
            // echo json_encode($request_data["full_name"]);
            echo $userc->createNewUser($user_data);

        }
        else if($method_type == 'PUT' && count($requests) > 3 && $requests[2] == 'user'){ //update
            $request_param = $requests[3];
            $request_data = json_decode($request_body, true);
            $request_data['user_id'] = $request_param;
            echo $userc->updateUserProfiles($request_data);
        }
        else{ header('HTTP/1.1 404 bad request'); }


    } 
    else if($requests[2] == 'auth' && $method_type == 'POST'){ // authentication
        $userc = new UserController();
        if(count($requests) > 3){ //forget auth ....

        }else{ // login auth
            $request_data = json_decode($request_body, true);
            if(
                count($request_data) == 2 && 
                isset($request_data['username']) && strlen(trim($request_data['username'])) > 4 &&
                isset($request_data['password']) && strlen(trim($request_data['password'])) > 7
            ){
                echo $userc->authenticateUser( [
                    "username" => $request_data['username'],
                    "password" => $request_data['password'],
                ] ) ;

            }else{
                echo Response::json('incomplete request data found', 400);
            }
        }

    }
    else if($requests[2] == 'products' || $requests[2] == 'product'){
    }
    else{ header('HTTP/1.1 404 could not find request data'); }

}else{
    header('HTTP/1.1 400 unknown request data');
}

?>