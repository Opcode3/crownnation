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
    <link rel="stylesheet" href="../assets/style/preloader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make payment - Crown nation</title>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body>
<div class="preloader"><div class="dot-pulse"></div></div>

    
    <nav>
        <a href="../user/">
            <img src="../assets/images/logo.png" loading="lazy" alt="logo" />
        </a>
    </nav>
    <main>
        <div id="top">
            <img src="../assets/images/about/business-startup.png" alt="payment">
        </div>
        <div id="bottom">
            <p>
                <b>Select a payment method</b>
                Welcome <strong><?php echo $user_info['name']; ?></strong>, you're half way to activating your account. Choose your preferred method for payment!
            </p>
            <div id="buttonHolder">
                <a href="/payment/coupon-code.php" class="btn btn-save">Coupon Code</a>
                <span class="btn btn-light">Online Payment</span>
            </div>
        </div>
        
    </main>
    <script src="../assets/js/user.js"></script>
</body>
</html>