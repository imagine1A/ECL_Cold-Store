<?php
include_once('config.php');

$db = $conn;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ECL Cold Store GH</title>
    <meta name="emoji" content="charset=&quot;UTF-8&quot;">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/android-chrome-512x512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Satoshi%20Black.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Black%20Italic.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Bold.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Bold%20Italic.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Italic.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Light.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Light%20Italic.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Medium.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Medium%20Italic.css">
    <link rel="stylesheet" href="assets/css/Satoshi%20Regular.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="assets/css/products_and_tabs.css">
    <link rel="stylesheet" href="assets/css/search-bar-ui.css">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css">
</head>

<body style="font-size: 16px;font-family: 'Outfit';">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand nav-logo" href="#"><img src="assets/img/logo.png"
                    width="128" height="31"></a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about_us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact_us">Contact Us</a></li>
                </ul>
                <div class="nav-actions"><a class="btn btn-primary nav-btn navbar-margin-r" role="button"
                        style="color: #000;background-color: white;border-color: #AFAFAF;border-style: solid;"
                        href="#products">Products</a><a class="btn btn-primary nav-btn navbar-margin-r" role="button"
                        style="background: #EBF5FF;color: #0085FF;border-style: none;" href="tel:233553696305">Contact
                        Us Now</a></div>
            </div>
        </div>
    </nav>
    <div class="container-fluid hero-banner">
        <div class="row" style="justify-content: space-between;">
            <div class="col-md-6 col-xxl-5 hero-banner-text">
                <div
                    style="width: 169px;height: 35px;background-color: #E9F6E0;border-radius: 35px;display: flex;align-items: center;padding: 8px 10px;column-gap: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-lightning-charge-fill" style="font-size: 21px;color: #009959;">
                        <path
                            d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z">
                        </path>
                    </svg>
                    <p style="margin: 0px;font-size: 14px;">Super Fast delivery</p>
                </div>
                <h1 class="hero-heading">Fresh Food from&nbsp;<br><span class="hero-heading-span">FDA
                        Certified</span>&nbsp;Farms</h1>
                <p>Our quality and compliance unit ensure the best products are provided to our customers right from the
                    time it’s purchased until it lands on the plate.</p>
                <div style="display: flex;"><span class="search-bar"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 25px;color: #000;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z"
                                fill="currentColor"></path>
                        </svg><input type="search" class="search-box"
                            placeholder="Search for meat, sausage, fish etc"></span><button class="btn btn-primary"
                        type="button"
                        style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;background-color: #006ACC;width: 90px;">Search</button>
                </div>
            </div>
            <div class="col-md-6 hero-banner-image-1">
                <div class="hero-banner-image">
                    <div style="display: flex;align-items: center;justify-content: center;">
                        <div class="swiper mySlider-hero">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="assets/img/image%2071.png" width="500" height="500">
                                </div>
                                <div class="swiper-slide"
                                    style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                    <img src="assets/img/photo_2022-10-17_20-35-03%202.png"
                                        style="transform: translate(-42px) rotate(-10deg) scale(1.35);">
                                </div>
                                <div class="swiper-slide"
                                    style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                    <img src="assets/img/sausage.png">
                                </div>
                                <div class="swiper-slide"
                                    style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                    <img src="assets/img/eiliv-aceron-DNQLBdGdld0-unsplash%202.png"
                                        style="transform: translate(26px) rotate(1deg) scale(0.90);">
                                </div>
                            </div>
                        </div>
                        <div class="bg-image"></div>
                    </div>
                    <div class="swiper mySlider-thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/img/image%2071.png"></div>
                            <div class="swiper-slide"
                                style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                <img src="assets/img/photo_2022-10-17_20-35-03%202.png"
                                    style="transform: translate(-15px) rotate(-10deg) scale(1.35);">
                            </div>
                            <div class="swiper-slide"
                                style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                <img src="assets/img/sausage.png">
                            </div>
                            <div class="swiper-slide"
                                style="/*background: url(&quot;assets/img/image%2071.png&quot;) center / contain no-repeat;*/">
                                <img src="assets/img/eiliv-aceron-DNQLBdGdld0-unsplash%202.png"
                                    style="transform: translate(13px) rotate(1deg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="info-section">
        <div class="info-content"><img class="info-img" src="assets/img/Frame%2062.png">
            <div style="width: 100%;">
                <h1 style="font-family: 'Anton';font-size: 20px;color: #8D8D8D;margin: 0px;">Working Hours</h1>
                <p style="font-size: 18px;font-weight: 600;margin: 0px;">Monday-Sunday 8:00AM - 8:00PM</p>
            </div>
        </div>
        <div class="info-content"><img class="info-img" src="assets/img/Frame%2059.png">
            <div style="width: 100%;">
                <h1 style="font-family: 'Anton';font-size: 20px;color: #8D8D8D;margin: 0px;">Location </h1>
                <p style="font-size: 18px;font-weight: 600;"><strong>Mambo, off ofanko road, Sowutoum</strong></p>
            </div>
        </div>
        <div class="info-content" style="width: 295px;"><img class="info-img" src="assets/img/Frame%2065.png">
            <div style="width: 100%;">
                <h1 style="font-family: 'Anton';font-size: 20px;color: #8D8D8D;margin: 0px;">Contact </h1>
                <p style="font-size: 18px;font-weight: 600;"><strong>0541101211 / 0248505746</strong></p>
            </div>
        </div>
    </section>
    <section class="why-main">
        <div class="why_section">
            <div class="why-text">
                <h1 class="why-main-header">Why you should <br>choose us&nbsp;<span>😀</span></h1>
            </div>
            <div class="why-sub_text">
                <p>We're passionate about providing our customers with the highest quality, locally sourced produce. Our
                    commitment to sustainable farming practices means that you can feel good about the food you're
                    eating.</p>
            </div>
        </div>
        <div class="info-icons">
            <div
                style="height: 365px;width: 325px;box-shadow: 0px 100px 80px rgba(197, 197, 197, 0.07), 0px 41.7776px 33.4221px rgba(197, 197, 197, 0.0503198), 0px 22.3363px 17.869px rgba(197, 197, 197, 0.0417275), 0px 12.5216px 10.0172px rgba(197, 197, 197, 0.035), 0px 6.6501px 5.32008px rgba(197, 197, 197, 0.0282725), 0px 2.76726px 2.21381px rgba(197, 197, 197, 0.0196802);border-radius: 15px;overflow: hidden;">
                <div
                    style="display: flex;align-items: end;justify-content: space-between;margin-top: -2px;margin-left: -6px;">
                    <img src="assets/img/01.png"><img src="assets/img/image%202%20(1).png"
                        style="margin-right: 25px;margin-bottom: 4px;">
                </div>
                <div class="info-item1">
                    <h1
                        style="font-family: 'Anton';font-weight: 400;font-size: 23px;line-height: 155.02%;color: #1B1B1B;">
                        01 Organic Certified</h1>
                    <p>Fresh Quality Frozen Foods from ISO Certified Farms.</p>
                </div>
            </div>
            <div
                style="background: #0085FF;height: 365px;width: 325px;box-shadow: 0px 100px 80px rgba(197, 197, 197, 0.07), 0px 41.7776px 33.4221px rgba(197, 197, 197, 0.0503198), 0px 22.3363px 17.869px rgba(197, 197, 197, 0.0417275), 0px 12.5216px 10.0172px rgba(197, 197, 197, 0.035), 0px 6.6501px 5.32008px rgba(197, 197, 197, 0.0282725), 0px 2.76726px 2.21381px rgba(197, 197, 197, 0.0196802);border-radius: 15px;overflow: hidden;">
                <div
                    style="display: flex;align-items: end;justify-content: space-between;margin-top: -20px;margin-left: -15px;">
                    <img src="assets/img/02.png"><img src="assets/img/Vector.png"
                        style="margin-right: 25px;margin-bottom: -3px;">
                </div>
                <div class="info-item2">
                    <h1 style="font-family: 'Anton';font-weight: 400;font-size: 23px;line-height: 155.02%;color: #fff;">
                        02 Nation-wide delivery</h1>
                    <p style="color: #ffffff;">We deliver products to all parts of Ghana. You can choose us for your
                        fresh food delivery service</p>
                </div>
            </div>
            <div
                style="height: 365px;width: 325px;box-shadow: 0px 100px 80px rgba(197, 197, 197, 0.07), 0px 41.7776px 33.4221px rgba(197, 197, 197, 0.0503198), 0px 22.3363px 17.869px rgba(197, 197, 197, 0.0417275), 0px 12.5216px 10.0172px rgba(197, 197, 197, 0.035), 0px 6.6501px 5.32008px rgba(197, 197, 197, 0.0282725), 0px 2.76726px 2.21381px rgba(197, 197, 197, 0.0196802);border-radius: 15px;overflow: hidden;">
                <div
                    style="display: flex;align-items: end;justify-content: space-between;margin-top: -5px;margin-left: -2px;">
                    <img src="assets/img/03.png"><img src="assets/img/image%201.png"
                        style="margin-right: 25px;margin-bottom: 4px;">
                </div>
                <div class="info-item3">
                    <h1
                        style="font-family: 'Anton';font-weight: 400;font-size: 23px;line-height: 155.02%;color: #1B1B1B;">
                        03 Excellent Customer Service</h1>
                    <p>Give us a call. Our dedicated staff are ready to assist with your needs.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about_us" class="about-us">
        <div class="aboutus-section">
            <div class="aboutus-image">
                <div class="swiper mySlider-about" style="height: 100%;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            style="height: 100%;width: 100%;background: url(&quot;assets/img/image%2051%20(1).png&quot;) center / cover no-repeat;">
                        </div>
                        <div class="swiper-slide"
                            style="height: 100%;width: 100%;background: url(&quot;assets/img/685A7949.jpg&quot;) center / cover no-repeat;">
                        </div>
                        <div class="swiper-slide"
                            style="height: 100%;width: 100%;background: url(&quot;assets/img/image%2051%20(1).png&quot;) center / cover no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="aboutus-text">
                <div class="aboutUs_placeholder" style="height: 137px;display: flex;justify-content: end;width: 100%;">
                    <img class="about-us-text" src="assets/img/ABOUT%20US.png">
                </div>
                <div>
                    <div
                        style="width: 125px;height: 35px;background-color: #E9F6E0;border-radius: 35px;display: flex;align-items: center;padding: 8px 10px;column-gap: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-lightning-charge-fill"
                            style="font-size: 21px;color: #009959;">
                            <path
                                d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z">
                            </path>
                        </svg>
                        <p style="margin: 0px;font-size: 14px;font-weight: 700;color: rgb(0,153,89);">Who we are</p>
                    </div>
                    <h1 style="font-family: 'Anton';margin-top: 26px;">We are committed to total transparency about our
                        products.</h1>
                </div>
                <p style="color: #686868;padding-right: 24px;">ECL Coldstore is a new privately held subsidiary of
                    Evanyag Company Limited <br>that offers frozen items sourced from the world's finest organic farms
                    and ISO <br>certified industries. ECL Coldstore frozen goods are natural, fresh, and delicious,
                    <br>while also offering clients with all of the health advantages of these items.<br><br>We offer a
                    wide range of frozen items, including Aqua products (fish, shrimp,<br>etc.), Beef (Cow), Mutton and
                    Lamb (Sheep), Pork (Pig), Chicken, and Chevon <br>(Goat).
                </p>
            </div>
        </div>
    </section>
    <section id="products" class="products-section">
        <div style="width: 100%;display: flex;justify-content: end;"><img class="products-icon"
                src="assets/img/PRODUCTS.png"></div>
        <div class="products-headings">
            <div style="width: 100%;height: 100%;">
                <div
                    style="width: 125px;height: 35px;background-color: #E9F6E0;border-radius: 35px;display: flex;align-items: center;padding: 8px 10px;column-gap: 4px;margin-bottom: 16px;">
                    <img src="assets/img/Vector_1.png">
                    <p style="margin: 0px;font-size: 14px;font-weight: 700;color: rgb(0,153,89);">Who we are</p>
                </div>
                <h1 style="font-family: 'Anton';">Our available product</h1>
            </div>
        </div>
        <div class="products-container1" style="width: 100%;">
            <div class="tabs"><input type="radio" id="tab_1" class="tabs__radio" name="tabs-products"><input
                    type="radio" id="tab_2" class="tabs__radio" name="tabs-products" checked=""><input type="radio"
                    id="tab_3" class="tabs__radio" name="tabs-products"><input type="radio" id="tab_4"
                    class="tabs__radio" name="tabs-products"><input type="radio" id="tab_5" class="tabs__radio"
                    name="tabs-products"><input type="radio" id="tab_6" class="tabs__radio" name="tabs-products"><input
                    type="radio" id="tab_7" class="tabs__radio" name="tabs-products"><input type="radio" id="tab_8"
                    class="tabs__radio" name="tabs-products">
                <nav>
                    <div class="products-tabs">
                        <div class="swiper mySlider-nav" style="height: 100%;">
                            <div class="swiper-wrapper" style="height: 100%;">
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item1">
                                        <div class="tab0_img_p">
                                            <div class="tab0_img"></div>
                                        </div><label class="form-label tab_item_style tab_1" for="tab_1"><br><span
                                                style="margin-top: 85px;margin-left: 19px;">All</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item2">
                                        <div class="tab1_img_p">
                                            <div class="tab1_img"></div>
                                        </div><label class="form-label tab_item_style tab_1" for="tab_2"><br><span
                                                style="margin-top: 85px;margin-left: 16px;">Beef</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item3">
                                        <div class="tab2_img_p">
                                            <div class="tab2_img"></div>
                                        </div><label class="form-label tab_item_style tab_3" for="tab_3"
                                            style="width: 100px;"><span class="span-text">Goat Meat</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item4">
                                        <div class="tab3_img_p">
                                            <div class="tab3_img"></div>
                                        </div><label class="form-label tab_item_style tab_4" for="tab_4"
                                            style="display: flex;align-items: center;"><span
                                                style="margin-top: 85px;margin-left: 4px;">Chicken</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item5">
                                        <div class="tab4_img_p">
                                            <div class="tab4_img"></div>
                                        </div><label class="form-label tab_item_style tab_5" for="tab_5"
                                            style="display: flex;align-items: center;"><span
                                                style="margin-top: 85px;margin-left: 16px;">Pork</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item6">
                                        <div class="tab5_img_p">
                                            <div class="tab5_img"></div>
                                        </div><label class="form-label tab_item_style tab_6" for="tab_6"
                                            style="display: flex;align-items: center;"><span
                                                style="margin-top: 85px;margin-left: 16px;">Fish</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item7">
                                        <div class="tab6_img_p">
                                            <div class="tab6_img"></div>
                                        </div><label class="form-label tab_item_style tab_7" for="tab_7"
                                            style="display: flex;align-items: center;"><span
                                                style="margin-top: 85px;margin-left: 8px;">Turkey</span></label>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab_item tab_item8">
                                        <div class="tab7_img_p" style="border-color: #D2D2D2;">
                                            <div class="tab7_img"></div>
                                        </div><label class="form-label tab_item_style tab_8" for="tab_8"
                                            style="display: flex;align-items: center;"><span
                                                style="margin-top: 85px;margin-left: 4px;">Sausage</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <section class="products-placeholder">
                    <div class="content content-1">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev1"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next1"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>




                        <!-- All  Region Begins -->

                       

                        <div class="swiper mySlider-1">
                            <div class="swiper-wrapper">



                            <?php
                            $query = " select * from products ";
                            $result = mysqli_query($db, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                                
                            


                            <div class="swiper-slide" style="background-color: transparent;">

                                    <div class="card products-item"
                                        style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
                                        <img class="card-img-top w-100 d-block item-image"
                                            src="image/<?php echo $data['Image']; ?>"
                                            style="object-fit: contain;object-position: center;">
                                        <div class="card-body"
                                            style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                            <div
                                                style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                                                <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                                                    <?php echo $data['Name']; ?></h3>
                                                <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                                                    <?php echo $data['Price']; ?></h3>
                                            </div>
                                            <div style="margin: 0px 16px;">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576"
                                                        width="1em" height="1em" fill="currentColor"
                                                        style="color: #F9A61C;">
                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                                        </path>
                                                    </svg>&nbsp; 4.5&nbsp;</p>
                                            </div>
                                            <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;"><?php echo $data['Description']; ?>.</p>
                                            <div
                                                style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                                                <a class="btn btn-primary" role="button"
                                                    style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                                                    href="tel:233553696305">Order Now&nbsp;&nbsp;<svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                                                        style="font-weight: bold;font-size: 20px;">
                                                        <path
                                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <?php
                            }
                            ?>
                                
                            </div>
                        </div>

                        <!-- All Region Ends -->

                    </div>



                    <div class="content content-2">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev2"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next2"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>



                        <!-- Beef Region  Begins -->



                        <div class="swiper mySlider-2">
                            <div class="swiper-wrapper">

                                <?php
                                $query = " select * from products where category = 'Beef' ";
                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                
                                
                                
                                
                                    <div class="swiper-slide" style="background-color: transparent;">
                                
                                        <div class="card products-item"
                                            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
                                            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                                                style="object-fit: contain;object-position: center;">
                                            <div class="card-body"
                                                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                                                        <?php echo $data['Name']; ?>
                                                    </h3>
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                                                        <?php echo $data['Price']; ?>
                                                    </h3>
                                                </div>
                                                <div style="margin: 0px 16px;">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                                                            fill="currentColor" style="color: #F9A61C;">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                                            </path>
                                                        </svg>&nbsp; 4.5&nbsp;</p>
                                                </div>
                                                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                                                    <?php echo $data['Description']; ?>.
                                                </p>
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                                                    <a class="btn btn-primary" role="button"
                                                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                                                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                                                            style="font-weight: bold;font-size: 20px;">
                                                            <path
                                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                                            </path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                
                                
                                    </div>
                                
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                        <!-- Beef Region Ends -->





                    </div>
                    <div class="content content-3">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev3"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next3"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>


                        <!-- Goat Meat Region Begins-->

                        <div class="swiper mySlider-3">
                            <div class="swiper-wrapper">
                             
<?php
$query = " select * from products where category = 'Goat Meat' ";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
    ?>




    <div class="swiper-slide" style="background-color: transparent;">

        <div class="card products-item"
            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                style="object-fit: contain;object-position: center;">
            <div class="card-body"
                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                <div
                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                        <?php echo $data['Name']; ?>
                    </h3>
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                        <?php echo $data['Price']; ?>
                    </h3>
                </div>
                <div style="margin: 0px 16px;">
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                            fill="currentColor" style="color: #F9A61C;">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg>&nbsp; 4.5&nbsp;</p>
                </div>
                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                    <?php echo $data['Description']; ?>.
                </p>
                <div
                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                    <a class="btn btn-primary" role="button"
                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                            style="font-weight: bold;font-size: 20px;">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>


    </div>

    <?php
}
?>




                            </div>
                        </div>

                        <!-- Goat Meat Region Ends -->




                    </div>
                    <div class="content content-4">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev4"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next4"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>




                        <!-- Chicken Region  Begins-->

                        <div class="swiper mySlider-4">
                            <div class="swiper-wrapper">

                               <?php
                                $query = " select * from products where category = 'Chicken' ";
                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                
                                
                                
                                
                                    <div class="swiper-slide" style="background-color: transparent;">
                                
                                        <div class="card products-item"
                                            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
                                            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                                                style="object-fit: contain;object-position: center;">
                                            <div class="card-body"
                                                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                                                        <?php echo $data['Name']; ?>
                                                    </h3>
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                                                        <?php echo $data['Price']; ?>
                                                    </h3>
                                                </div>
                                                <div style="margin: 0px 16px;">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                                                            fill="currentColor" style="color: #F9A61C;">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                                            </path>
                                                        </svg>&nbsp; 4.5&nbsp;</p>
                                                </div>
                                                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                                                    <?php echo $data['Description']; ?>.
                                                </p>
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                                                    <a class="btn btn-primary" role="button"
                                                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                                                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                                                            style="font-weight: bold;font-size: 20px;">
                                                            <path
                                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                                            </path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                
                                
                                    </div>
                                
                                    <?php
                                }
                                ?>



                            </div>
                        </div>


                        <!-- Chicken Region Ends-->

                    </div>
                    <div class="content content-5">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev5"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next5"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Pork Region  Begins -->

                        <div class="swiper mySlider-5">
                            <div class="swiper-wrapper">
                             
                            <?php
                                $query = " select * from products where category = 'Pork' ";
                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                
                                
                                
                                
                                    <div class="swiper-slide" style="background-color: transparent;">
                                
                                        <div class="card products-item"
                                            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
                                            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                                                style="object-fit: contain;object-position: center;">
                                            <div class="card-body"
                                                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                                                        <?php echo $data['Name']; ?>
                                                    </h3>
                                                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                                                        <?php echo $data['Price']; ?>
                                                    </h3>
                                                </div>
                                                <div style="margin: 0px 16px;">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                                                            fill="currentColor" style="color: #F9A61C;">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                                            </path>
                                                        </svg>&nbsp; 4.5&nbsp;</p>
                                                </div>
                                                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                                                    <?php echo $data['Description']; ?>.
                                                </p>
                                                <div
                                                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                                                    <a class="btn btn-primary" role="button"
                                                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                                                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                                                            style="font-weight: bold;font-size: 20px;">
                                                            <path
                                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                                            </path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                
                                
                                    </div>
                                
                                    <?php
                                }
                                ?>




                            </div>
                        </div>
                        <!-- Pork Region Ends -->

                    </div>

                    <div class="content content-6">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev6"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next6"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Fish Region Begins -->

                        <div class="swiper mySlider-6">
                            <div class="swiper-wrapper">
                              


<?php
$query = " select * from products where category = 'Fish' ";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
    ?>




    <div class="swiper-slide" style="background-color: transparent;">

        <div class="card products-item"
            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                style="object-fit: contain;object-position: center;">
            <div class="card-body"
                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                <div
                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                        <?php echo $data['Name']; ?>
                    </h3>
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                        <?php echo $data['Price']; ?>
                    </h3>
                </div>
                <div style="margin: 0px 16px;">
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                            fill="currentColor" style="color: #F9A61C;">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg>&nbsp; 4.5&nbsp;</p>
                </div>
                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                    <?php echo $data['Description']; ?>.
                </p>
                <div
                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                    <a class="btn btn-primary" role="button"
                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                            style="font-weight: bold;font-size: 20px;">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>


    </div>

    <?php
}
?>



                            </div>
                        </div>

                        <!-- Fish Region  Ends -->


                    </div>
                    <div class="content content-7">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev7"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next7"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>


                        <!-- Turkey Region Starts -->

                        <div class="swiper mySlider-7">
                            <div class="swiper-wrapper">
                              

<?php
$query = " select * from products where category = 'Turkey' ";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
    ?>




    <div class="swiper-slide" style="background-color: transparent;">

        <div class="card products-item"
            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                style="object-fit: contain;object-position: center;">
            <div class="card-body"
                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                <div
                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                        <?php echo $data['Name']; ?>
                    </h3>
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                        <?php echo $data['Price']; ?>
                    </h3>
                </div>
                <div style="margin: 0px 16px;">
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                            fill="currentColor" style="color: #F9A61C;">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg>&nbsp; 4.5&nbsp;</p>
                </div>
                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                    <?php echo $data['Description']; ?>.
                </p>
                <div
                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                    <a class="btn btn-primary" role="button"
                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                            style="font-weight: bold;font-size: 20px;">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>


    </div>

    <?php
}
?>


                            </div>
                        </div>

                        <!-- Turkey Region  Ends -->

                    </div>
                    <div class="content content-8">
                        <div class="slides-nav">
                            <div style="display: flex;gap: 55px;">
                                <div class="swiper-button-prev swiper-button-prev7"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-next7"
                                    style="box-shadow: 0px 0px;background: #EBF5FF;border-radius: 10px;border-style: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Sausage Region Begins -->

                        <div class="swiper mySlider-7">
                            <div class="swiper-wrapper">
                                

<?php
$query = " select * from products where category = 'Sausage' ";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
    ?>




    <div class="swiper-slide" style="background-color: transparent;">

        <div class="card products-item"
            style="width: 300px;margin-right: 73px;background: #EBEBEB;height: 525px;border-radius: 6px;border: 1px solid #EBEBEB;">
            <img class="card-img-top w-100 d-block item-image" src="image/<?php echo $data['Image']; ?>"
                style="object-fit: contain;object-position: center;">
            <div class="card-body"
                style="height: 298px;padding: 16px 0px;background: #ffffff;border-radius: 6px;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                <div
                    style="display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;margin-top: 8px;">
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">
                        <?php echo $data['Name']; ?>
                    </h3>
                    <h3 style="margin: 0px 16px;font-family: 'Anton';font-size: 21.8px;">₵
                        <?php echo $data['Price']; ?>
                    </h3>
                </div>
                <div style="margin: 0px 16px;">
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                            fill="currentColor" style="color: #F9A61C;">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg>&nbsp; 4.5&nbsp;</p>
                </div>
                <p class="card-text" style="margin: 0px 16px;margin-bottom: 30px;">
                    <?php echo $data['Description']; ?>.
                </p>
                <div
                    style="display: flex;align-items: center;justify-content: space-between;padding: 0px 16px;margin-bottom: 10px;">
                    <a class="btn btn-primary" role="button"
                        style="background: #0085FF;border-style: none;padding: 9px 24px;display: flex;"
                        href="tel:233553696305">Order Now&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag"
                            style="font-weight: bold;font-size: 20px;">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>


    </div>

    <?php
}
?>

                            </div>
                        </div>

                        <!-- Sausage Region  Ends +-->

                    </div>
                </section>
            </div>
        </div>
    </section>
    <section id="testimonials" style="margin-top: 70px;background: #EBF5FF;width: 100%;">
        <div class="testi-placeholder">
            <div class="testi-text">
                <div
                    style="width: 128px;height: 35px;background-color: #009959;border-radius: 35px;display: flex;align-items: center;padding: 8px 10px;column-gap: 4px;margin-bottom: 20px;">
                    <i class="material-icons" style="font-size: 21px;color: #fff;">comment</i>
                    <p style="margin: 0px;font-size: 14px;font-weight: 700;color: #fff;">Testimonals</p>
                </div>
                <h1 style="font-family: 'Anton';margin-bottom: 40px;">What our customers <br>are saying!</h1>
                <h5 style="font-size: 18px;margin-bottom: 25px;text-overflow: clip;">Quality matters more than price.
                    Its is the biggest factor in whether a customer will recommend your product to people</h5>
                <div>
                    <div style="display: flex;align-items: center;">
                        <div style="display: flex;align-items: center;"><img style="height: 40px;width: 40px;"
                                src="assets/img/Rectangle%2020.png"><img
                                style="height: 40px;width: 40px;margin-left: -17px;"
                                src="assets/img/Rectangle%2020.png"><img
                                style="height: 40px;width: 40px;margin-left: -17px;"
                                src="assets/img/Rectangle%2020.png"></div>
                        <div style="margin-top: 14px;margin-left: 15px;">
                            <h6 style="font-family: 'DM Sans';font-weight: 700;">1000+ happy Customers</h6>
                            <p style="color: #6c6c6d;"><i class="fas fa-star" style="color: #fcd116;"></i>&nbsp;4.8
                                (500+ reviews)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testi-items">
                <div class="review-items">
                    <div class="swiper mySlider-testi">
                        <div
                            style="display: flex;justify-content: end;align-content: center;gap: 55px;margin-top: 35px;margin-bottom: 35px;">
                            <div style="display: flex;gap: 55px;padding-right: 30px;">
                                <div class="swiper-button-prev swiper-button-prev12"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                                        </path>
                                    </svg></div>
                                <div class="swiper-button-next swiper-button-next12"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor" style="color: #0085FF;font-size: 30px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/profile_img4.png">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;">ECL cold store
                                            sells the best goat meat in town. Neatly packed and amazing prices. The
                                            customer service is superb. I highly recommend.</p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">Joanita Beniana
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/profile_img3.png">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;">Neatest cold
                                            store I've been to ever. Very pleasant staff.<br>Products are very fresh as
                                            well.</p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">Foubaa Mensah
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/profile_img2.png">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;"><br>"Best
                                            chicken wings and gizzard in the Greater Accra😍😍"<br><br></p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">Lisa Philomina
                                            Ntewusu</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/profile_img1.png">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;">It's the best
                                            Cold Store you can find in Accra. Their customer service is first to
                                            none,&nbsp; their delivery services as well.&nbsp;</p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">Richson
                                            Sarkodie Antwi Snr </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/373059506_306610358572452_2473202538956211586_n.jpg">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;">Products are
                                            always fresh and neat with good customer relations 👍</p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">McCasland Kobby
                                            Jnr</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-color: transparent;">
                                <div class="card review-card">
                                    <div class="card-body review-card-content">
                                        <div style="display: flex;align-items: center;gap: 27px;margin-bottom: 25px;">
                                            <img style="height: 80px;width: 80px;border-radius: 50%;object-fit: cover;object-position: center;"
                                                src="assets/img/268654917_212190194418439_8686112435224819848_n.jpg">
                                        </div>
                                        <p class="card-text" style="margin-top: 31px;text-align: center;">You can’t get
                                            it wrong with their products. Quality is what they deliver.</p>
                                        <h5 class="card-title" style="font-size: 18px;font-weight: 700;">Opoku Evelyn
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" style="padding: 40px 0px;padding-bottom: 70px;">
        <div style="display: flex;align-items: center;justify-content: end;margin-bottom: 20px;"><img class="blog-icon"
                src="assets/img/BLOG.png"></div>
        <div class="blog-content">
            <h1
                style="font-family: 'Anton';font-size: 45px;line-height: 134.02%;letter-spacing: 0.01em;margin-bottom: 35px;">
                Our Latest Blog</h1>
            <h4 style="font-family: 'Anton';font-weight: 400;font-size: 25px;line-height: 134.02%;">Popular</h4>
            <div class="blog-main">
                <p style="color: #fff;font-weight: 700;margin-bottom: 23px;">2 hours ago . 5 min</p>
                <h1 style="font-family: 'Anton';color: #fff;font-size: 35px;margin-bottom: 22px;">This cow lived for 150
                    years. That’s<br>amazing</h1>
                <p>If you're in a hurry to get fresh food for your dinner, you can<br>reach out to us and we will
                    provide speedy delivery of your fresh food.</p>
            </div>
            <h4 style="font-family: 'Anton';font-weight: 400;font-size: 25px;line-height: 134.02%;margin-top: 70px;">
                Latest</h4>
            <div class="blog-items">
                <div class="card blog-item"><img class="card-img-top w-100 d-block" src="assets/img/Frame%2074.png"
                        style="width: 100%;">
                    <div class="card-body">
                        <p style="color: #4E4E4E;">2 hours ago . 5 min</p>
                        <h4 class="card-title" style="font-family: 'Anton';">Chicken Invades</h4>
                        <p class="card-text">If you're in a hurry to get fresh food for your dinner, you can reach out
                            to us and we will provide speedy delivery of your fresh food.</p><button
                            class="btn btn-primary readmore" type="button">Read more<svg
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                fill="none" style="font-weight: 800;font-size: 23px;">
                                <path
                                    d="M10.5253 5.49475L10.5206 7.49475L15.0782 7.50541L5.47473 17.0896L6.88752 18.5052L16.5173 8.89479L16.5065 13.5088L18.5065 13.5134L18.5253 5.51345L10.5253 5.49475Z"
                                    fill="currentColor"></path>
                            </svg></button>
                    </div>
                </div>
                <div class="card blog-item grid-item"><img class="card-img-top w-100 d-block"
                        src="assets/img/Grilled%20Tilapia.jpg" style="width: 100%;">
                    <div class="card-body">
                        <p style="color: #4E4E4E;">2 hours ago . 5 min</p>
                        <h4 class="card-title" style="font-family: 'Anton';">Grilled Baked Tilapia by Ama Boadiwaa</h4>
                        <p class="card-text">There’s so much you can do with some bell peppers, chili, lemon grass and
                            more. We are sure you also can’t wait to try this Delicious Baked tilapia recipe. Grab an
                            apron and try it today.</p><button class="btn btn-primary readmore" type="button">Read
                            more<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                fill="none" style="font-weight: 800;font-size: 23px;">
                                <path
                                    d="M10.5253 5.49475L10.5206 7.49475L15.0782 7.50541L5.47473 17.0896L6.88752 18.5052L16.5173 8.89479L16.5065 13.5088L18.5065 13.5134L18.5253 5.51345L10.5253 5.49475Z"
                                    fill="currentColor"></path>
                            </svg></button>
                    </div>
                </div>
                <div class="card grid-item blog-item"><img class="card-img-top w-100 d-block"
                        src="assets/img/45e7736197dcd0dbf03c2c27aeba93.jpg" style="width: 100%;">
                    <div class="card-body">
                        <p style="color: #4E4E4E;">2 hours ago . 5 min</p>
                        <h4 class="card-title" style="font-family: 'Anton';">How to prepare Tilapia</h4>
                        <p class="card-text">If you're in a hurry to get fresh food for your dinner, you can reach out
                            to us and we will provide speedy delivery of your fresh food.</p><button
                            class="btn btn-primary readmore" type="button">Read more<svg
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                fill="none" style="font-weight: 800;font-size: 23px;">
                                <path
                                    d="M10.5253 5.49475L10.5206 7.49475L15.0782 7.50541L5.47473 17.0896L6.88752 18.5052L16.5173 8.89479L16.5065 13.5088L18.5065 13.5134L18.5253 5.51345L10.5253 5.49475Z"
                                    fill="currentColor"></path>
                            </svg></button>
                    </div>
                </div>
            </div><a class="btn btn-primary read_more" role="button" href="blog.html">See more blogs</a>
        </div>
    </section>
    <section id="contact_us" style="padding-top: 40px;">
        <div><img class="contactus-icon" src="assets/img/CONTACT%20US.png"></div>
        <div class="contactUs_placeholder">
            <div class="contactus-text-placeholder">
                <div class="contactus-text">
                    <h1 style="font-family: 'Anton';font-size: 30px;">Contact us for quick delivery of fresh food for
                        your dinner.</h1>
                    <p>If you're in a hurry to get fresh food for your dinner, you can reach out to us and we will
                        provide speedy delivery of your fresh food.</p><button class="btn btn-primary contactus_btn"
                        type="button">Contact Us</button>
                </div>
            </div>
            <div style="width: 50%;height: 100%;display: flex;"><img class="contactus-image"
                    src="assets/img/iPhone%2014%20Pro%20Mockup.png"></div>
        </div>
    </section>
    <footer class="text-white footer_n" style="font-size: 14px;width: 100%;">
        <div class="container py-5 py-lg-5 px-3">
            <div class="row justify-content-center footer-section" style="gap: 27px;">
                <div class="col-sm-4 col-md-3 col-xxl-3 text-lg-start d-flex flex-column footer-main"><img
                        src="assets/img/image%2031%20(1).png" width="200">
                    <p class="copyright" style="margin-top: 17px;">We ensure that the best products are provided to our
                        valued customers.</p><button class="btn btn-primary" type="button"
                        style="width: 145px;height: 46px;padding: 8px 11px;display: flex;align-items: center;column-gap: 5px;background: rgba(255, 255, 255, 0.12);border: 0.1px solid #FFFFFF;backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);border-radius: 5px;font-size: 14px;"><img
                            src="assets/img/image%2084.png">FDA Certified</button>
                </div>
                <div class="col">
                    <div class="footer-links">
                        <div class="col-sm-4 col-md-3 col-xxl-3 text-lg-start d-flex flex-column item">
                            <h3 class="text-white footer_headings">Links</h3>
                            <ul class="list-unstyled">
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links" href="#">Company</a>
                                </li>
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links" href="#">Team</a>
                                </li>
                                <li><a class="link-light footer_links" href="#">Legacy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column item">
                            <h3 class="text-white footer_headings">Legal</h3>
                            <ul class="list-unstyled">
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links" href="#">Privacy
                                        Policies</a></li>
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links" href="#">Terms and
                                        conditions</a></li>
                                <li><a class="link-light footer_links" href="#">Cookies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column item">
                            <h3 class="text-white footer_headings">Contact Us</h3>
                            <ul class="list-unstyled">
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links"
                                        href="tel:+233541101211">0541101211 /&nbsp;&nbsp;</a><a
                                        class="link-light footer_links" href="tel:+233248505746">0248505746</a></li>
                                <li style="margin-bottom: 24px;"><a class="link-light footer_links"
                                        href="mailto:elccoldstore@gmail.com">elccoldstore@gmail.com</a></li>
                                <li class="socials"><a class="link-light footer_links"
                                        href="https://www.facebook.com/profile.php?id=100091675035224&amp;mibextid=ZbWKwLh"
                                        target="_blank"><i class="fab fa-facebook" style="font-size: 28px;"></i></a><a
                                        class="link-light footer_links"
                                        href="https://instagram.com/eclcoldstoregh?utm_source=qr&amp;igshid=OGU0MmVlOWVjOQ%3D%3D"
                                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                            width="1em" height="1em" fill="currentColor" style="font-size: 28px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3" style="margin-top: 22px;">
                <p class="mb-0">Copyright © 2023 Brand</p>
                <p class="mb-0">Made with ❤️&nbsp;by KEKStudios </p>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button"
                                aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>The content of your modal.</p>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button"
                                data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                type="button">Save</button></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/modals.js"></script>
    <script src="assets/js/aos_init.js"></script>
    <script src="assets/js/upload.js"></script>
    <script src="assets/js/upload_vid.js"></script>
</body>

</html>