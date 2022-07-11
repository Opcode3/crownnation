<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us - Crownnation</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="stylesheet" href="./assets/style/more.css">

    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>
    <?php include_once('./common/header.php'); ?>
    <main id="aboutpage">
        <div id="page_title">
            <h2>Who we are!</h2>
            <div>
                Crown nation investment Limited (RC 1925019) is an e-commerce company that was founded on the 5TH April, 2022 and incorporated on the 5TH April, 2022. We offer a convenient online shopping where consumers can purchase food items at prices that are below market prices. These food items are delivered to the consumers directly to their homes at no additional costs.
            </div>
        </div>

        <div id="vision">
            <div id="imageholder">
                <img src="./assets/images/about/business-growth.png" alt="core values">
            </div>
            <ul>
                <li>
                    <p>
                        <b>Our Vision</b>
                        Is to become the largest online retail and wholesale and groceries in the world.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Our Mision</b>
                        Is to connect consumers to wholesalers and groceries at far below market prices with no additional delivery cost
                    </p>
                </li>
                <li>
                    <p>
                        <b>Our Core Values</b>
                        Our values define our culture, which is capture in the acronym  C.R.O.W.N..

                        <ul>
                            <li>C-courage</li>
                            <li>R-readiness</li>
                            <li>O-orderliness</li>
                            <li>W-willingness</li>
                            <li>N-nearness</li>
                        </ul>
                    </p>
                </li>
            </ul>
        </div>

        <section id="testimony">
            <h2>What people are saying about us</h2>
            <p>Below are the testimonies of those who use and patronize our services daily...</p>

            <ul id="cover">

            <?php
                for($k = 0; $k < 14; $k++){
            ?>
                <li>
                    <label class="singleTestimony">
                        <span class="account_type"> <?php echo $k % 2 == 0 ? 'Seller' : 'Buyer'; ?> </span>
                        <span class="customer_name">Joseph Emmanuel Emeka</span>
                        <span class="date"> 10-10-2010</span>
                    </label>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, cumque rem maiores laudantium, totam amet eius nam reiciendis commodi soluta vitae delectus a eaque. Assumenda voluptatem excepturi odio quam consequuntur.
                    </p>
                </li>
            <?php
            }
            ?>
                
            </ul>

            <p>
                Do you have anything to share with us, to enable us save you better?
                <a href="/contact.php#contact_holder" class="btn btn-dark">Send us a message</a>
            </p>
            
        </section>
        <div id="pattern">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1400 48" preserveAspectRatio="none" aria-hidden="true" focusable="false">
                <path d="M1400 0l-55 12-23 10-23 4-6-1-9 1-5 2-24 8h-11l-18-5-11-1-10-1h-7l-8 3-8 1-14-4v1l-3 1-9-5-3-1-17 2-10-1-9-1-8 1-7 1-2 1h-13l-2-1-13-2h-20l-11 2-14 3h-18l-10 1-3-1-2-1-4-1h-4l-16 1h-2l-7-1h-6l-8 1-6-2-5-1-2 1-20-1-10 2h-6l-11-1-9-1h-4l-3 1-19 1h-19l-3-1-11 1h-2l-7 3h-23l-3 1h-19l-16-1-17 1h-8l-2-1-20-2-4 1-4-1h-2l-12 1-2 1h-13l-9 1h-4l-6-1-10 1-9-1h-15l-9 2-12-2-12-2-3 2-5 2-11-3-6 1h-6l-28 1-5 2h-33l-3 1-4 2h-17l-5 1-4-1-7-1h-5l-4 1-13 3-2-2-2-1h-15l-22-1h-2l-11 1h-5l-2-1h-19l-9 1-6-1h-2l-9 2-15 2h-4l-12 1h-25l-12 1-7 1h-4l-4 1h-4l-4 1h-20l-3-1h-7l-1-1v-4l-1 1h-2l-9 1-2 2-6 2-7 1-5 2h-2l-3-2-8-1h-4l-11 3h-1l-3-2-11-3-20-6-9-3h-3l-9 2h-5l-11-4-13-3-11-15-21-4L0 0h1400z"></path>
            </svg>
        </div>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>