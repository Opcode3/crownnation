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
            <h2>Ask Crownnation</h2>
            <p>Our vision is to create a platform that bring together potential buys and sellers from every city in Nigeria. We also want to give you all the answers about Crown nation.</p>
        </div>

        <div id="faqs">

            <?php
                for($k =0; $k < 5; $k++){
            ?>
            
            <div class="faq_items">
                
                <div class="header_faq">
                    <h4>
                    When Glovo signs a deal with a partner, does it need to be a no-competency contract? Can a Partner operate with other delivery platforms?
                    </h4>
                    <div class="faq_status">
                        <span> 
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <p>Anonymous</p>
                        </span>

                        <span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p>09.03.2022</p>
                        </span>
                    </div>
                </div>
                <div class="btn_faq">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </div>
                <div class="description_faq">
                    <p>Businesses can decide whether to sell exclusively through Glovo or not. This means that the type of contract can vary depending on the preferences of the partner. </p>
                    <p>Also, requirements to become a partner at Glovo vary depending on the country. More information can be found at <a href="">Glovo Partners</a>. </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>