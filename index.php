<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown nation - Gain loans by engaging on some activities</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/main_content.css">
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>

    <header>
        <nav>
            <div id="menuheader">
                <a href="/" class="img_logo">
                    <img src="./assets/images/logo.png" alt="Crown Nation" />
                </a>
                <span id="handburger">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </span>
            </div>
            <ul id="navList">
                <li><a href='/shop' class="btn">Shop</a></li>
                <li><a href='/how-it-works.php' class="btn">How it works</a></li>
                <li><a href='/account' class="btn">Login</a></li>
                <li><a href='/account/create.html' class="btn btn-dark">Join Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id='welcome'>
            <div id='note'>
                <h2>We're Crownnations</h2>
                <p>
                    Crownnation is a global online marketplace, where people come together to make, sell, buy, get bonuses from their activeness and collect unique items. 
                </p>
                <div class="btn-group">
                    <a href="./account/create.html" class="btn btn-light">Become a member</a>
                    <a href="/about.php" class="btn btn-dark">Learn More</a>
                </div>
            </div>
            <div>
                <img src="/assets/images/about/online-advertisement.png" alt="sell products" />
            </div>
        </div>
        <div id="main_cover">
            <section id="statistics">
                <ul>
                    <li>
                        <a href="/shop/"> 40,000 </a>
                        <hr>
                        <span>For sale</span>
                    </li>

                    <li>
                        <a href="/shop/"> ₦14,000,000 </a>
                        <hr>
                        <span>Sold (NGN)</span>
                    </li>

                    <li>
                        <a href="/shop/"> 40,000 </a>
                        <hr>
                        <span>5 Star Reviews</span>
                    </li>
                </ul>
            </section>

            <section id="categories">
                <h3>Find things you'll love. Support independent sellers and earn bonuses. Only on Crownnation.</h3>
                <div id="category_holder">
                    <ul>
                        <?php
                            $categories = [
                                [
                                    "name"=> "Category_name Category_name Category_name Category_name",
                                    "image"=> "product_1626702480.png",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "product_1627898486.jpg",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "product_1626702480.png",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "product_1627898486.jpg",
                                    "tag"=>"category_name"
                                ],
                                [
                                    "name"=> "Category_name",
                                    "image"=> "product_1626702480.png",
                                    "tag"=>"category_name"
                                ]
                            ];

                            foreach ($categories as $key => $value) {
                                $image = strlen(trim($value["image"])) > 4 ? $value["image"] : "Food.jpg";
                                ?>
                                <li>
                                    <a href="/shop/<?php echo $value["tag"]; ?>">
                                        <div class="image_cover" style="background-image: url(./assets/images/products/<?php echo $image;?>"></div>
                                        <label><?php echo $value["name"]; ?></label>
                                    </a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </section>


            <section id="features">
                <h3>Continue shopping</h3>
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
                
                <a class="btn btn-dark" id="shop-more" href="">Continue shopping</a>
            </section>

            <section id="about_company">
                <div id="about_header">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1400 48" preserveAspectRatio="none" aria-hidden="true" focusable="false">
                        <path d="M1400 0l-55 12-23 10-23 4-6-1-9 1-5 2-24 8h-11l-18-5-11-1-10-1h-7l-8 3-8 1-14-4v1l-3 1-9-5-3-1-17 2-10-1-9-1-8 1-7 1-2 1h-13l-2-1-13-2h-20l-11 2-14 3h-18l-10 1-3-1-2-1-4-1h-4l-16 1h-2l-7-1h-6l-8 1-6-2-5-1-2 1-20-1-10 2h-6l-11-1-9-1h-4l-3 1-19 1h-19l-3-1-11 1h-2l-7 3h-23l-3 1h-19l-16-1-17 1h-8l-2-1-20-2-4 1-4-1h-2l-12 1-2 1h-13l-9 1h-4l-6-1-10 1-9-1h-15l-9 2-12-2-12-2-3 2-5 2-11-3-6 1h-6l-28 1-5 2h-33l-3 1-4 2h-17l-5 1-4-1-7-1h-5l-4 1-13 3-2-2-2-1h-15l-22-1h-2l-11 1h-5l-2-1h-19l-9 1-6-1h-2l-9 2-15 2h-4l-12 1h-25l-12 1-7 1h-4l-4 1h-4l-4 1h-20l-3-1h-7l-1-1v-4l-1 1h-2l-9 1-2 2-6 2-7 1-5 2h-2l-3-2-8-1h-4l-11 3h-1l-3-2-11-3-20-6-9-3h-3l-9 2h-5l-11-4-13-3-11-15-21-4L0 0h1400z"></path>
                    </svg>
                    <h2>What is Crownnation</h2>
                </div>
                <div id="about_body">
                    <div>
                        <strong>
                            A community doing well
                        </strong>
                        <p>
                            Crownnation is a global online marketplace, where people come together to make, sell, buy, and collect unique items. We’re also a community pushing for positive change for small businesses, people, and the planet. 
                            <a href="">
                                Here are some of the ways we’re making a positive impact, together.
                            </a>
                        </p>
                    </div>
                    <div>
                        <strong>Support independent creators</strong>
                        <p>
                        There’s no Crownnation warehouse – just millions of people selling the things they love. We make the whole process easy, helping you connect directly with makers to find something extraordinary.
                        </p>
                    </div>
                    <div>
                        <strong>Peace of mind</strong>
                        <p>Your privacy is the highest priority of our dedicated team. And if you ever need assistance, we are always ready to step in for support.</p>
                    </div>

                </div>
                <div id="about_faqs">
                    <p>
                    Have a question? Well, we’ve got some answers.
                    <a class="btns btn-dark" href="./faq.php">Goto Help Center</a>
                    </p>
                </div>


            </section>

        </div>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>