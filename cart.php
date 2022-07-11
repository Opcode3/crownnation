<?php
    $cart = [2,2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="stylesheet" href="../assets/style/shop.css">
    <link rel="stylesheet" href="../assets/style/cart.css">

    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title> Shopping cart - Crownnation</title>
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>

    <?php include_once('common/shop/header.php') ?>
    <main >

    <?php 
        if(count($cart) > 0){
    ?>
        <div id="cart_holder">
            <!-- <h2> </h2> -->
            <div id="cart_info">
                <h3>4 items in your cart</h3>
                <a href="/shop" class="btn btn-dark">Keep shopping</a>
            </div>

            <div id="cart_listing">
                <div id="cart_items">

                    <?php
                        for($m = 1; $m <= 2; $m++){
                            ?>
                            <div class="cart_item">
                                <div class="item_header">
                                    <a href="" class="shop_name">
                                        <img src="/assets/images/favicon.png" alt="">
                                        <span>RoundGlassShop</span>
                                    </a>
                                    <a href="" class="btns shop_contact">Contact shop</a>
                                </div>
                                <div class="item_detail">
                                    <div class="item_img">
                                        <img src="./assets/images//products/<?php
                                            echo $m % 2 == 0 ? 'product_1627898486.jpg': 'product_1626702480.png';
                                        ?>" alt="product item">
                                    </div>
                                    <div class="item_info">
                                        <p> <a href="">Encased Marble with Flower 7.5" Glass Blown Candle Holder</a> </p>
                                        <span>RoundGlassShop</span>
                                        <span> <b>&#8358; 190.00</b> <del>&#8358; 120.00</del> </span>
                                        <div class="quantity_holder">
                                            <div class="cart_quantity">
                                                <svg class="btnQuantityPlus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                <label id="product_quantity_number"> 40 </label>
                                                <svg class="btnQuantityMinus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                            </div>
                                        </div>
                                        <span>
                                            <a href="" class="btns btn-save">Save for later</a>
                                            <a href="" class="btns btn-remove">Remove</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                </div>

                <div id="checkout_holder">
                    <div id="checkout_frame">
                        <h5> Order Summary <small>How you'll pay</small></h5>
                        <div id="checkout_options">
                            <ul>
                                <li> <img src="./assets/images/icon/visa.svg" alt="master card icon"> </li>
                                <li> <img src="./assets/images/icon/mastercard.svg" alt="master card icon"> </li>
                                <li><label>USSD</label></li>
                            </ul>
                        </div>
                        <div id="checkout_info">
                            <p>
                                <span>Item(s) total</span>
                                <span>USD 210.00</span>
                            </p>
                            <p>
                                <span>Shipping fee</span>
                                <span>USD 30.00</span>
                            </p>
                        </div>
                        <div id="checkout_final">
                            <strong>
                                <span>Total (4 items)</span>
                                <span> USD 302.00</span>
                            </strong>

                            <button class="btns btn-save"> Proceed to checkout</button>
                            <p>All product are delivered within nigeria in a space of 3 days</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <?php }else{ ?> 
        <div class="noproduct">Your cart is empty.</div>
    <?php } ?>
    </main>
    <?php include_once('common/footer.php') ?>

    
</body>
</html>