<?php 
    $navigator = isset($_GET['a']) ? 'seller': (isset($_GET['b']) ? 'reseller' : 'buyer') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask us - Crown nation</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="stylesheet" href="./assets/style/more.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader"> <div class="dot-pulse"></div> </div>
    <?php include_once('./common/header.php'); ?>
    <main>
        <div id="page_title">
            <h2>How does Crownnation works?</h2>
            <ul>
                <li> <a class="<?php echo $navigator == 'seller' ? 'active': '' ?>" href="/how-it-works.php?a">As Seller</a> </li>
                <li> <a class="<?php echo $navigator == 'buyer' ? 'active': '' ?>" href="/how-it-works.php">As Buyer</a> </li>
                <li> <a class="<?php echo $navigator == 'reseller' ? 'active': '' ?>" href="/how-it-works.php?b">As Reseller</a> </li>
            </ul>
        </div>

        <section>
            <?php 
                $url = "common/works/$navigator.php";
                include_once($url);
            ?>
        </section>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>