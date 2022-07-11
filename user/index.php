<?php
    session_start();
    
    $isLogin = isset($_SESSION["cn_user_profile"]) && is_array($_SESSION["cn_user_profile"]);

    //validate request type
    $uri = $_SERVER["REQUEST_URI"];
    $page_view = explode("/", $uri);
    array_shift($page_view);

    $pt = count($page_view) > 1 ? $page_view[1] : '';

    if($isLogin && $page_view[0] === "user"){
        $activate = ($user_info["isconfirmed"] == 1) ? true : false;
        $user_info = $_SESSION["cn_user_profile"];
    }else header('location: ../account/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/user.css">
    <link rel="stylesheet" href="../assets/style/user_common.css">
    <link rel="stylesheet" href="../assets/style/preloader.css">
    <link rel="stylesheet" href="../assets/style/menu_pages.css">

    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>User dashboard - Crown nation</title>
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>

    <?php if($activate == false) include_once("../common/user/authenticate_account.php"); ?>
    <div class="container">
        <!-- nav side -->
        <nav>
            <?php include_once('../common/user/sideNav.php'); ?>
        </nav>
        <!-- main -->
        <main>
            <!-- header -->
            <header>
                <?php include_once('../common/user/headerMenu.php'); ?>
            </header>
            <!-- div -->
            <div id="user_cover">
                <?php
                    // Please implement a component data loading here... 
                    //not refreshing every browser on
                    // change of component
                    $load_url = "user-dashboard";
                    if(count($page_view) > 1){
                        switch($page_view[1]){
                            case 'activate':
                                $load_url = "activate"; 
                                break;
                            default:
                                $load_url = "user-dashboard";
                        }
                    }

                    include_once("../common/user/menu_pages/$load_url.php");
                    
                ?>
            </div>

            <footer>
                &copy; <script>
                const date = new Date();
                document.write(date.getFullYear())</script> Crownnation. &nbsp; All rights reserved.
                <span>Developed By <a href="https://wwww.giembs.com">giembs</a>.</span>
            </footer>
        </main>

            
    </div>
    <script src="../assets/js/user.js"></script>
</body>
</html>