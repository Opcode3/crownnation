<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - Crownnation</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/preloader.css">
    <link rel="stylesheet" href="./assets/style/more.css">

    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader"><div class="dot-pulse"></div></div>
    <?php include_once('./common/header.php'); ?>
    <main>
        <div id="page_title">
            <h2>Send us your questions!</h2>
            <p>
                Do you want to know more about Crownnation? There's no FAQ on our website: we simply answer everyone's questions and make every answer public on this page. Ask Crownnation and stay tuned for yours!
            </p>
        </div>
        <div id="contact_holder">
            <div id="contact_info">
                <h4>We at Crownnation, do appreciate every effort you're putting towards helping us serve you better.</h4>
                <form action="" method="post">
                    <div class="formControl">
                        <input type="text" id="name" placeholder="Name" />
                    </div>
                    <div class="formControl">
                        <input type="email" id="name" placeholder="Email Address" />
                    </div>
                    <div class="formControl">
                        <textarea name="" id="asked" placeholder="Ask Crownnation here..." rows="5"></textarea>
                    </div>

                    <div id="termsholder">
                        <input type="checkbox" id="terms">

                        <label for="terms">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </label>

                        I have read and accepted the site's&nbsp; <a href="./terms.php?a"> policies </a> 
                        &nbsp;and the &nbsp;<a href="./terms.php">conditions</a>

                    </div>

                    <div class="formControl">
                        <button type="submit" class="btns btn-dark">Ask Crownnation</button>
                    </div>

                </form>

                <div id="innerfaqs">
                    <p>
                        We have some published answers to questions from our most esteemed customer.
                        <a href="./faq.php">See FAQs</a>
                    </p>
                </div>
            </div>
            <div id="contact_process">
                <img src="./assets/images/askcrownnation-process.webp" alt="ask crownnation process">
            </div>

        </div>
        
    </main>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>