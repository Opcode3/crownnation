<?php 
    $navigator = isset($_GET['a']) ? 'privacy': 'use';
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
            <h2>Our Terms &amp; Policies</h2>
            <ul>
                <li> <a class="<?php echo $navigator == 'use' ? 'active': '' ?>" href="/terms.php">Terms of Use</a> </li>
                <li> <a class="<?php echo $navigator != 'use' ? 'active': '' ?>" href="/terms.php?a">Privacy</a> </li>
            </ul>
        </div>

        <div id="content">
            <?php 
                $url = "common/terms/$navigator.php";
                include_once($url);
            ?>
        </div>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>