<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/preloader.css">
    <link rel="stylesheet" href="../assets/style/shop.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title> Shop - Crownnation</title>
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>
    <?php include_once('../common/shop/header.php') ?>

    <main>
        <div id="category">
            <ul>
                <?php
                    $categories = ["Jewelry & Accessories", "Clothing & Shoes", "Home & Living", "Wedding & Party", "Toys & Entertainment", "Art & Collectibles", "Craft Supplies & Tools", "Vintage"];
                    for($k = 1; $k < count($categories); $k++){
                        if($k == 4){
                            echo "<li> <a class='category_active' href=''> $categories[$k]</a> </li>";
                        }else echo "<li> <a href=''> $categories[$k]</a> </li>";
                    }
                ?>
            </ul>
        </div>
        <div id="product_loved">
            <h3>Find something you loved</h3>
            <div class="filter_holder"> Filters Here</div>
            <div class="product_listings">
                <?php
                    for($m = 0; $m < 15; $m++){
                        $image = $m%2 == 0 ? 'product_1627898486.jpg' : 'product_1626702480.png';
                        ?>
                        <a href="/product.php?slug=<?php echo $m; ?>">
                            <div class="items">
                                <div class="img_holder">
                                    <img src="../assets/images/products/<?php echo $image;?>" alt=" prooduct title">
                                </div>
                                <div class="product_info">
                                    <p><?php echo ucwords("product name"); ?></p>
                                    <p class="shopname"> <?php echo ucfirst("ads_by_user_shop_name"); ?></p>
                                    <span>USD  19.00</span>
                                    <del>USD 20.00</del>
                                    <label> FREE shipping</label>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </main>
    <?php include_once('../common/footer.php') ?>

    
</body>
</html>