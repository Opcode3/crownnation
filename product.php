<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product view title - Crown nation</title>
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="stylesheet" href="./assets/style/shop.css">
    <link rel="stylesheet" href="./assets/style/product.css">

    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>

    <?php include_once('./common/shop/header.php'); ?>
    <main>
        <div id="pagenavigator">
            <ul>
                <li> <a href="">Home</a> >> </li>
                <li> <a href="">Shop</a> >> </li>
                <li> <a href="">Product category</a> >>  product_name</li>
            </ul>
        </div>
        <div id="single_product">

            <div id="product_gallery">
                <div id="image_inview">
                    <img src="./assets/images/products/p_1.jpg" alt="product title">
                </div>
                <div id="product_stack">
                    <ul>
                        <li> <img src="./assets/images/products/p_2.jpg" alt="product title"></li>
                        <li> <img src="./assets/images/products/p_1.jpg" alt="product title"></li>
                        <li> <img src="./assets/images/products/product_1627898486.jpg" alt="product title"></li>
                        <li> <img src="./assets/images/products/product_1626702480.png" alt="product title"></li>
                    </ul>
                </div>
            </div>
            
            <div id="product_info">
                <h3> Brand_Group_Name
                    <div id="sales_info">
                        <span>
                            4,029&nbsp;sales 
                        </span>
                        <span class="stars">
                            <span>4.8 &nbsp; </span>
                            <span>
                                <?php
                                    $stars = 2;
                                    for($star = 0; $star < 5; $star++){
                                        echo '<svg class="'. ($stars > 0 ? 'active': '') .'" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>';
                                        if($stars > 0) $stars--;
                                    }
                                ?>
                            </span>
                            <span> (1,050 reviews)</span>
                        </span>
                        
                    </div>
                </h3>
                <div id="product_details">
                    <span class="product_name">
                        Encased Marble with Flower 7.5" Glass Blown Candle Holder
                    </span>
                    <span>Product_shop_name</span>
                    <span>Product Brand: Soft Drink</span>
                    <span>Price:  <span class="price">₦ 190.00</span> </span>
                    <div class="quantity_holder">
                        <div class="cart_quantity">
                            <svg class="btnQuantityPlus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <label id="product_quantity_number"> 40 </label>
                            <svg class="btnQuantityMinus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                        </div>
                    </div>

                    <div id="product_btns">
                        <a href="" class="btns btn-save">Save for later</a>
                        <a href="" class="btns btn-light">Buy now</a>
                        <a href="" class="btns btn-black">Add to cart</a>
                    </div>


                </div>
            </div>
        </div>

        <section id="related_product">
            <h3>Related products that may interest you.</h3>
            <div class="product_listings">
                <?php
                    for($m = 0; $m < 10; $m++){
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

        </section>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>