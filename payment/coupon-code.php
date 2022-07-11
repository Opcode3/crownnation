<?php
    session_start();
    $activate = false;
    $isLogin = isset($_SESSION["cn_user_profile"]) && is_array($_SESSION["cn_user_profile"]);

    if($isLogin){
        $user_info = $_SESSION["cn_user_profile"];
    }else{
        header('location: ../account/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/style/payment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment with coupon - Crown nation</title>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <nav>
        <a href="../user/">
            <img src="../assets/images/logo.png" alt="logo" />
        </a>
    </nav>
    <main>
        
        <div id="bottom">
            <form action="">
                <h2>Activate your account</h2>
                <p>Hola <strong><?php echo $user_info['name']; ?></strong>, enter your coupon code to activate account!</p>
                <div class="formControl">
                    <input type="text" placeholder="Enter coupon code">
                </div>
                <span>
                    <button class="btn btn-dark">Activate Account</button>
                    <a href="/user" class="btn btn-save">Goto Dashboard</a>
                </span>
            </form>
        </div>
        
    </main>
</body>
</html>