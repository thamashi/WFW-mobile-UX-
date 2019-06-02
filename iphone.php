<?php
include('components/links.php');
?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

</head>

<body>


<!--Home page-->
<div data-role="page" id="homePage">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">


        <div class="w3-content w3-display-container" id="slideshow">
            <img class="mySlides img-crsl" src="images/cust-images/banner.jpg" style="width:100%">
            <img class="mySlides img-crsl" src="images/cust-images/test3.jpg" style="width:100%">
            <img class="mySlides img-crsl" src="images/cust-images/Sajiya.jpeg" style="width:100%">
            <img class="mySlides img-crsl" src="images/cust-images/test.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left cust-add" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right cust-add" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <div class="title-main">
            <h3>News</h3>
        </div>
        <div class="ui-grid-a news-block">
            <a href="#news" class="ui-block-a">
                <div>
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                        <div class="info">
                            <p>This is the information div</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#news" class="ui-block-b">
                <div>
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="news-block-img" src="images/cust-images/test3.jpg" alt="news">
                        <div class="info">
                            <p>This is the information div</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#designers">
                <div class="ui-block-a w-100 pos-rel">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                        <span class="desi">Designers</span>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--Home page-->

<!--News page-->
<div data-role="page" id="news">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content news-page">

        <div class="title-main text-center">
            <h3>News</h3>
        </div>

        <div class="ui-grid-a news-block-page">
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test3.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
            <a href="#newsSingle" class="ui-bar ui-bar-e single-block">
                <img class="news-block-img" src="images/cust-images/test3.jpg" alt="news">
                <div class="info">
                    <p>This is the information div</p>
                    <div class="times-ago">
                        <p>2 days ago</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="map">
            <div id="map-canvas-news"></div>
        </div>
    </div>


    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--News page-->

<!--Events page-->
<div data-role="page" id="events">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div id="event-header"> EVENTS</div>
        <!--<a href="#homePage">goto home</a>-->
        <div class="event-collapse">
            <div class="collapsibles" data-role="collapsible" data-theme="none" data-iconpos="right" data-icon="custom"
                 data-content-theme="none" data-corners="false">
                <h4>MONDAY 19TH NOVEMBER </h4>

                <ul data-role="listview" class="events day1">
                    <li>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-2 text-left">
                                        <div class="time mar-bot ">18.00</div>
                                        <div class="eve">Event</div>
                                    </div>
                                    <div class="col-6 text-left">
                                        <div class="event-name mar-bot ">WFW SHOW</div>
                                        <div class="event-des">WFW SHOW 2018</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="mar-bot"><a href="#eventSingle"
                                                                class="event-button event-button-se">SEE
                                                MORE</a></div>
                                        <div><a href="#eventSingle" class="event-button">BUY TICKET</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
        <hr>

        <div class="event-collapse">
            <div class="collapsibles" data-role="collapsible" data-theme="none" data-iconpos="right" data-icon="custom"
                 data-content-theme="none" data-corners="false">
                <h4>MONDAY 19TH NOVEMBER </h4>
                <ul data-role="listview" class="events day2">
                    <li>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-2 text-left">
                                        <div class="time mar-bot ">18.00</div>
                                        <div class="eve">Event</div>
                                    </div>
                                    <div class="col-6 text-left">
                                        <div class="event-name mar-bot ">WFW SHOW</div>
                                        <div class="event-des">WFW SHOW 2018</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="mar-bot"><a href="#eventSingle"
                                                                class="event-button event-button-se">SEE
                                                MORE</a></div>
                                        <div><a href="#eventSingle" class="event-button">BUY TICKET</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
        <hr>
        <div class="event-collapse">
            <div class="collapsibles" data-role="collapsible" data-theme="none" data-iconpos="right" data-icon="custom"
                 data-content-theme="none" data-corners="false">
                <h4>MONDAY 19TH NOVEMBER </h4>
                <ul data-role="listview" class="events day3">
                    <li>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-2 text-left">
                                        <div class="time mar-bot ">18.00</div>
                                        <div class="eve">Event</div>
                                    </div>
                                    <div class="col-6 text-left">
                                        <div class="event-name mar-bot ">WFW SHOW</div>
                                        <div class="event-des">WFW SHOW 2018</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="mar-bot"><a href="#eventSingle"
                                                                class="event-button event-button-se">SEE
                                                MORE</a></div>
                                        <div><a href="#eventSingle" class="event-button">BUY TICKET</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <hr>
        <div class="event-collapse">
            <div class="collapsibles" data-role="collapsible" data-theme="none" data-iconpos="right" data-icon="custom"
                 data-content-theme="none" data-corners="false">
                <h4>MONDAY 19TH NOVEMBER </h4>
                <ul data-role="listview" class="events day4">
                    <li>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-2 text-left">
                                        <div class="time mar-bot ">18.00</div>
                                        <div class="eve">Event</div>
                                    </div>
                                    <div class="col-6 text-left">
                                        <div class="event-name mar-bot ">WFW SHOW</div>
                                        <div class="event-des">WFW SHOW 2018</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="mar-bot"><a href="#eventSingle"
                                                                class="event-button event-button-se">SEE
                                                MORE</a></div>
                                        <div><a href="#eventSingle" class="event-button">BUY TICKET</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="map">
            <div id="map-canvas-events"></div>
        </div>

        <div data-role="footer" class="footer-cust">
            <?php
            include('components/footer.php');
            ?>
        </div>

    </div>
</div>
<!--Events page-->

<!--Events Near page-->
<div data-role="page" id="eventsNear">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div id="event-header"> EVENTS NEAR</div>
        <!--<a href="#homePage">goto home</a>-->
        <div class="event-near">
            <div class="event-near-block">
                <img src="images/cust-images/banner.jpg">
                <p>adv</p>
            </div>

        </div>
        <div data-role="footer" class="footer-cust">
            <?php
            include('components/footer.php');
            ?>
        </div>

    </div>
</div>
<!--Events Near page-->

<!--Designers page-->
<div data-role="page" id="designers">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">

        <div class="title-main text-center">
            <h3>Designers</h3>
        </div>

        <div class="ui-grid-a designer-page">

            <div class="ui-grid-a">

                <div class="top-page">
                    <div class="search-bar">
                        <input type="text" name="name" id="basic" value="" placeholder="search" class="cust-input"/>
                        <img src="images/cust-images/search.png" alt="search-i">
                    </div>
                    <!--                    <div class="designer-icon">-->
                    <div class="filter-by">
                        <select name="select-choice-min" id="select-choice-min" data-mini="true">
                            <option value="standard">Filter By</option>
                            <option value="rush">Rush: 3 days</option>
                            <option value="express">Express: next day</option>
                            <option value="overnight">Overnight</option>
                        </select>
                    </div>
                    <!--                    </div>-->
                </div>

                <a href="#designerSingle" class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test2.jpg')">
                        </div>
                        <div class="designer-name">
                            ASSO
                        </div>
                    </div>
                </a>
                <a href="#designerSingle" class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test.jpg')">
                        </div>
                        <div class="designer-name">
                            ALEXANDOR E. JONES
                        </div>
                    </div>
                </a>
                <a href="#designerSingle" class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test3.jpg')">
                        </div>
                        <div class="designer-name">
                            ASSO
                        </div>
                    </div>
                </a>
                <a href="#designerSingle" class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test2.jpg')">
                        </div>
                        <div class="designer-name">
                            ALEXANDOR E. JONES
                        </div>
                    </div>
                </a>
                <a href="#designerSingle" class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test3.jpg')">
                        </div>
                        <div class="designer-name">
                            ASSO
                        </div>
                    </div>
                </a>
                <a href="#designerSingle" class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <div class="designer-pic" style="background-image: url('images/cust-images/test.jpg')">
                        </div>
                        <div class="designer-name">
                            ALEXANDOR E. JONES
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div data-role="footer" class="footer-cust">
            <?php
            include('components/footer.php');
            ?>
        </div>

    </div>
</div>
<!--Designers page-->

<!--Scan QR page-->
<div data-role="page" id="qrPage">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">

        <p>this is QR code page</p>
        <a href="iphone.php">goto home</a>

    </div>


    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--Scan QR page-->


<!--Events Single page -->
<div data-role="page" id="eventSingle">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content eve-single-page">

        <div class="event-title text-left">
            <h3>WFW SHOW</h3>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="event-banner">
                            <img src="images/cust-images/eventWFW.jpg" alt="news-article-img">
                            <div class="event-n">WFW SHOW</div>
                        </div>
                    </div>
                    <div class="col-6 pos-rel">
                        <div class="event-details">
                            <p>21st June 2018</p>
                            <p>120 mins</p>
                            <p>30/20 orio, Kentecky</p>
                        </div>
                        <div class="bt-btn">
                            <div class="d-inline locate-btn"><a href="" class="secondary-btn"><i
                                            class="fas fa-map-marker-alt"></i></a></div>
                            <div class="d-inline"><a href="" class="secondary-btn">Buy Tickets</a></div>
                            <!--<div class="row no-gutters">
                                <div class="col-12">
                                    <div class="row no-gutters">

                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hash-tags">
            <span>#WFW</span><span>#fashion</span><span>#likeit</span>
        </div>


        <div class="event-des">
            <p>Westminster fashion show will showcase international as well as local designer wear which
                will assist to promote many summer wear.</p>
            <p> This is held at Shalhevet School, Bayeswater, the official hall for fashion. Fashion week designers
                get
                a head start on the key trends of the coming season and
                Will get an opportunity to listen to talks by industry experts. Westminster Fashion Week Festival
                allows
                consumers to shop a curated edit of designer collections.</p>

        </div>

        <div class="action-btn">
            <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
               onclick="document.getElementById('id01').style.display='block'"></a>
            <!-- Modal content-->
            <div id="id01" class="w3-modal" style="padding-top: 152px">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'"
                              class="w3-button w3-display-topright">&times;</span>
                        <div style="height: 40%;">
                        </div>

                    </div>
                </div>
            </div>
            <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
            <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>

        </div>
        <h4>Comments</h4>
        <hr>
        <div>
            <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
                <ul data-role="listview" data-inset="true">
                    <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                        <img src="images/cust-images/sudam.jpg" style="height: 46px; width:46px;">
                        <div class="row">
                            <div class="col">
                                <p style="margin-bottom: 0px">Sudam Dissanayake</p>
                                <p style="margin-top: 0px">1.30 PM</p>
                            </div>
                            <div class="=col">
                                <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="news-des">The fall Line was absolutely Stunning</p>
                    </li>
                </ul>
                <ul data-role="listview" data-inset="true">
                    <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                        <img src="images/cust-images/shehani.JPG" style="height: 46px; width:46px;">
                        <div class="row">
                            <div class="col">
                                <p style="margin-bottom: 0px">Shehani Perera</p>
                                <p style="margin-top: 0px">2.45 PM</p>
                            </div>
                            <div class="=col">
                                <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star" style="color:orange"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="news-des">Impressive!</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="map">
            <div id="map-canvas-event-single"></div>
        </div>

    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--Events Single page -->


<!--News Single page -->
<div data-role="page" id="newsSingle">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">

        <div class="news-title text-left">
            <h3>Richard Quinn receives the inaugural Queen Elizabeth II Award for Design</h3>
        </div>
        <div class="times-ago">
            <img src="images/cust-images/clock-circular-outline.png" alt="clock">
            <p>15th January 2019</p>
        </div>
        <div class="news-banner">
            <img src="images/cust-images/news-banner.jpg" alt="news-article-img">
        </div>
        <div class="hash-tags">
            <span>#cloths</span><span>#other</span>
        </div>
        <div class="news-des">
            <p>Her Majesty The Queen today presented the inaugural Queen Elizabeth II Award for British Design to
                emerging British fashion designer Richard Quinn.</p>
            <p>The Award, initiated in recognition of the role the fashion industry plays in society and diplomacy,
                will
                be awarded annually, presented by a senior member of the Royal Family, to an emerging British
                fashion
                designer of womenswear, menswear, or accessories that shows exceptional talent and originality,
                whilst
                demonstrating value to the community and/or strong sustainable policies.</p>
            <p>The idea of the Award was raised by Her Majesty’s Personal Advisor, Ms Angela Kelly, who has
                orchestrated
                The Queen’s wardrobe for over 26 years. Following Her Majesty's 90th birthday celebrations, it was
                agreed that an Award would be created to recognise emerging British Fashion Talent in the name of
                Queen
                Elizabeth II, to provide a legacy of support for the industry in recognition the role fashion has
                played
                throughout The Queen's Reign and continues to play in diplomacy, culture and communications.
                Each year a designer will be selected by the BFC, in collaboration with the Royal Household, to be
                recognised by this Award.</p>
        </div>
        <div>
            <div class="action-btn">
                <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
                   onclick="document.getElementById('id03').style.display='block'"></a>
                <!-- Modal content-->
                <div id="id03" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                        <span onclick="document.getElementById('id03').style.display='none'"
                              class="w3-button w3-display-topright">&times;</span>
                            <div style="height: 40%;">
                            </div>

                        </div>
                    </div>
                </div>
                <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
                <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>
            </div>
        </div>

    </div>


    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--News Single page -->

<!--Designer Single page -->
<div data-role="page" id="designerSingle">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content designer-single">

        <div class="news-title text-center">
            <h3>ASSO</h3>
        </div>

        <div class="designer-image">
            <img src="images/cust-images/Model-1.jpg" alt="Model">
        </div>

        <div class="stars text-center"><span class="fa fa-star" style="color:orange"></span>
            <span class="fa fa-star" style="color:orange"></span>
            <span class="fa fa-star" style="color:orange"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="main-collapse">
            <div data-role="collapsible" data-inset="false" data-icon="false">
                <h3 class="mc-title">BIOGRAPHY</h3>
                <P>Lorem ipsum dolor amet williamsburg venmo lo-fi, flannel raw denim tbh meggings. Taiyaki mixtape
                    sustainable activated charcoal, tacos pickled kale chips austin godard butcher. Messenger bag blog
                    lomo plaid. Yr lomo shoreditch man braid DIY taxidermy readymade unicorn leggings occupy everyday
                    carry prism gentrify church-key 3 wolf moon.</P>
            </div><!-- /collapsible -->
            <div data-role="collapsible" data-inset="false">
                <h3 class="mc-title">CONTACT DETAILS</h3>
                <P>Lorem ipsum dolor amet williamsburg venmo lo-fi, flannel raw denim tbh meggings. Taiyaki mixtape
                    sustainable activated charcoal, tacos pickled kale chips austin godard butcher. Messenger bag blog
                    lomo plaid. Yr lomo shoreditch man braid DIY taxidermy readymade unicorn leggings occupy everyday
                    carry prism gentrify church-key 3 wolf moon.</P>

            </div><!-- /collapsible -->
            <div data-role="collapsible" data-inset="false">
                <h3 class="mc-title">COMPANY DETAILS</h3>
                <P>Lorem ipsum dolor amet williamsburg venmo lo-fi, flannel raw denim tbh meggings. Taiyaki mixtape
                    sustainable activated charcoal, tacos pickled kale chips austin godard butcher. Messenger bag blog
                    lomo plaid. Yr lomo shoreditch man braid DIY taxidermy readymade unicorn leggings occupy everyday
                    carry prism gentrify church-key 3 wolf moon.</P>
            </div><!-- /collapsible -->
        </div>
    </div>


    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--Designer Single page -->


<!--Team member single page-->
<div data-role="page" id="teamMemberSingle1">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div class="teammember-title row" style="padding: inherit">
            <div class="team-member col-xs-4" style="padding-right: 5px">
                <img src="images/cust-images/sudam.JPG" style="height: 12%; border-radius: 63%">
            </div>
            <div class="col-xs-4" style="padding-left: 5px">
                <h5 style="margin-bottom: 0px">Sudam Dissanayake</h5>
                <p>Software Engineer</p>
            </div>
        </div>
        <div>
            <p>Currently a Software Engineering final year undergraduate. Lives at Maharagama , Srilanka. Studies at
                Informatics Institute of Technology which is
                affiliated with the University of Westminster, UK.</p>
        </div>
        <div>
            <div class="action-btn">
                <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
                   onclick="document.getElementById('id02').style.display='block'"></a>
                <!-- Modal content-->
                <div id="id02" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id02').style.display='none'"
                                  class="w3-button w3-display-topright">&times;</span>
                            <div style="height: 40%;">

                            </div>

                        </div>
                    </div>
                </div>
                <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
                <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>
            </div>
        </div>
        <hr>
        <h3>
            Reviews
        </h3>
        <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/sudam.jpg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Gene Caldera</p>
                            <p style="margin-top: 0px">1.30 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">The fall Line was absolutely Stunning</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/shehani.JPG" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/Sajiya.jpeg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<div data-role="page" id="teamMemberSingle2">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div class="teammember-title row" style="padding: inherit">
            <div class="team-member col-xs-4" style="padding-right: 5px">
                <img src="images/cust-images/shehani.JPG" style="height: 12%; border-radius: 63%">
            </div>
            <div class="col-xs-4" style="padding-left: 5px">
                <h5 style="margin-bottom: 0px">Shehani Perera</h5>
                <p>Software Engineer</p>
            </div>
        </div>
        <div>
            <p>Currently a Software Engineering final year undergraduate. Lives at Maharagama , Srilanka. Studies at
                Informatics Institute of Technology which is
                affiliated with the University of Westminster, UK.</p>
        </div>
        <div>
            <div class="action-btn">
                <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
                   onclick="document.getElementById('id04').style.display='block'"></a>
                <!-- Modal content-->
                <div id="id04" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id04').style.display='none'"
                                  class="w3-button w3-display-topright">&times;</span>
                            <div style="height: 40%;">

                            </div>

                        </div>
                    </div>
                </div>
                <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
                <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>
            </div>
        </div>
        <hr>
        <h3>
            Reviews
        </h3>
        <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/sudam.jpg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Gene Caldera</p>
                            <p style="margin-top: 0px">1.30 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">The fall Line was absolutely Stunning</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/shehani.JPG" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/Sajiya.jpeg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<div data-role="page" id="teamMemberSingle3">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div class="teammember-title row" style="padding: inherit">
            <div class="team-member col-xs-4" style="padding-right: 5px">
                <img src="images/cust-images/Sajiya.jpeg" style="height: 12%; border-radius: 63%">
            </div>
            <div class="col-xs-4" style="padding-left: 5px">
                <h5 style="margin-bottom: 0px">Sajith Deshappriya</h5>
                <p>Software Engineer</p>
            </div>
        </div>
        <div>
            <p>Currently a Software Engineering final year undergraduate. Lives at Maharagama , Srilanka. Studies at
                Informatics Institute of Technology which is
                affiliated with the University of Westminster, UK.</p>
        </div>
        <div>
            <div class="action-btn">
                <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
                   onclick="document.getElementById('id05').style.display='block'"></a>
                <!-- Modal content-->
                <div id="id05" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id05').style.display='none'"
                                  class="w3-button w3-display-topright">&times;</span>
                            <div style="height: 40%;">

                            </div>

                        </div>
                    </div>
                </div>
                <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
                <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>
            </div>
        </div>
        <hr>
        <h3>
            Reviews
        </h3>
        <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/sudam.jpg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Gene Caldera</p>
                            <p style="margin-top: 0px">1.30 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">The fall Line was absolutely Stunning</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/shehani.JPG" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/Sajiya.jpeg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<div data-role="page" id="teamMemberSingle4">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content">
        <div class="teammember-title row" style="padding: inherit">
            <div class="team-member col-xs-4" style="padding-right: 5px">
                <img src="images/cust-images/thamashi.jpg" style="height: 12%; border-radius: 63%">
            </div>
            <div class="col-xs-4" style="padding-left: 5px">
                <h5 style="margin-bottom: 0px">Thamashi Kumarasinghe</h5>
                <p>Software Engineer</p>
            </div>
        </div>
        <div>
            <p>Currently a Software Engineering final year undergraduate. Lives at Maharagama , Srilanka. Studies at
                Informatics Institute of Technology which is
                affiliated with the University of Westminster, UK.</p>
        </div>
        <div>
            <div class="action-btn">
                <a data-role="button" class="rate-custom-btn ui-btn ui-btn-inline"
                   onclick="document.getElementById('id06').style.display='block'"></a>
                <!-- Modal content-->
                <div id="id06" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id06').style.display='none'"
                                  class="w3-button w3-display-topright">&times;</span>
                            <div style="height: 40%;">

                            </div>

                        </div>
                    </div>
                </div>
                <a data-role="button" class="fav-custom-btn ui-btn ui-btn-inline"></a>
                <a data-role="button" class="share-custom-btn ui-btn ui-btn-inline"></a>
            </div>
        </div>
        <hr>
        <h3>
            Reviews
        </h3>
        <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/sudam.jpg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Gene Caldera</p>
                            <p style="margin-top: 0px">1.30 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">The fall Line was absolutely Stunning</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/shehani.JPG" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;">
                    <img src="images/cust-images/Sajiya.jpeg" style="height: 46px; width:46px;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Shehani Perera</p>
                            <p style="margin-top: 0px">2.45 PM</p>
                        </div>
                        <div class="=col">
                            <!--                                    <img src="images/icons-png/rating.png" style="float: right;height: 50px;">-->
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                            <span class="fa fa-star" style="color:orange"></span>
                        </div>
                    </div>
                    <p class="news-des">Impressive!</p>
                </li>
            </ul>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--Team member single page-->

<!--Notifications-->
<div data-role="page" id="notifications">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content eve-single-page">
        <div class="title-main text-center" style="padding-bottom: 15%">
            <h3>Notifications</h3>
        </div>
        <div id="event-fav" class="ui-body-d ui-content" style="padding-right: 0px;padding-left: 0px;">
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;padding-bottom: 0">
                    <img src="images/icons-png/trophy%20(2).png" style="height: 46px; border-radius: 63%">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">You Gained 5 points!</p>
                            <p style="margin-top: 0px">Collect your points now from showing up at WFW</p>
                        </div>
                    </div>
                    <p class="news-des" align="right">1 min ago</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;padding-bottom: 0">
                    <img src="images/icons-png/trophy%20(2).png" style="height: 46px; border-radius: 63%">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Check the Event schedule</p>
                            <p style="margin-top: 0px">Check the Event schedule in order to attend WFW</p>
                        </div>
                    </div>
                    <p class="news-des" align="right">4 min ago</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;padding-bottom: 0">
                    <img src="images/icons-png/trophy%20(2).png" style="height: 46px; border-radius: 63%">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">Check the leader board</p>
                            <p style="margin-top: 0px">check your ranking now</p>
                        </div>
                    </div>
                    <p class="news-des" align="right">6 min ago</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;padding-bottom: 0">
                    <img src="images/icons-png/trophy%20(2).png" style="height: 46px; border-radius: 63%">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">You Gained 5 points!</p>
                            <p style="margin-top: 0px">Collect your points now from showing up at WFW</p>
                        </div>
                    </div>
                    <p class="news-des" align="right">15 min ago</p>
                </li>
            </ul>
            <ul data-role="listview" data-inset="true">
                <li class="list-event" style="padding-left: 55px; padding-top: 0px;padding-bottom: 0">
                    <img src="images/icons-png/trophy%20(2).png" style="height: 46px; border-radius: 63%">
                    <div class="row">
                        <div class="col">
                            <p style="margin-bottom: 0px">You Gained 5 points!</p>
                            <p style="margin-top: 0px">Collect your points now from showing up at WFW</p>
                        </div>
                    </div>
                    <p class="news-des" align="right">1 day ago</p>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--Notifications-->

<!--Coupons -->
<div data-role="page" id="coupons">
    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content eve-single-page">
        <div class="title-main text-center" style="padding-bottom: 15%">
            <h3>Coupons</h3>
        </div>
        <div class="ui-grid-a designer-page">

            <div class="ui-grid-a">
                <a class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img" src="images/cust-images/model5.jpg" alt="coupon">
                        <div class="coupon-text">5 POINTS</div>
                        <div class="coupon-text2">US $4.00 <b>OFF</b></div>
                        <div class="coupon-text4">Coupon Code : WFW1A</div>
                        <div class="coupon-text3">Valid till <b>31st</b> of January</div>
                    </div>
                </a>
                <a class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img2" src="images/cust-images/model7.jpg" alt="coupon">
                        <img class="coupon-icon" src="images/icons-png/locked%20(1).png" alt="coupon">
                    </div>
                </a>
                <a class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img2" src="images/cust-images/model8.jpg" alt="coupon">
                        <img class="coupon-icon" src="images/icons-png/locked%20(1).png" alt="coupon">
                    </div>
                </a>
                <a class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img2" src="images/cust-images/model9.jpg" alt="coupon">
                        <img class="coupon-icon" src="images/icons-png/locked%20(1).png" alt="coupon">
                    </div>
                </a>
                <a class="ui-block-a">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img2" src="images/cust-images/model10.jpeg" alt="coupon">
                        <img class="coupon-icon" src="images/icons-png/locked%20(1).png" alt="coupon">
                    </div>
                </a>
                <a class="ui-block-b">
                    <div class="ui-bar ui-bar-e single-block">
                        <img class="coupon-block-img2" src="images/cust-images/model11.jpg" alt="coupon">
                        <img class="coupon-icon" src="images/icons-png/locked%20(1).png" alt="coupon">
                    </div>
                </a>
            </div>
        </div>
        <div data-role="footer" class="footer-cust">
            <?php
            include('components/footer.php');
            ?>
        </div>
    </div>
</div>
<!--Coupons-->

<!--About us-->
<div data-role="page" id="aboutus">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content eve-single-page">
        <div class="title-main text-center" style="padding-bottom: 15%">
            <h3>About Us</h3>
        </div>
        <div>
            <p>Westminster Fashion Week is the annual Fashion show Organized by the University of Westminster, UK.</p>
            <p>In February 2018 the BA Fashion Design course at Westminster became the first undergraduate course to be
                invited to show on
                the official London Fashion Week schedule. Course Director, Professor Andrew Groves has lead a radical
                rethink of how
                fashion education is delivered and has restructured the Westminster course to align with the
                international fashion
                calendar. Professor Groves said “I have long believed that fashion education needs to provide our
                students with the most
                realistic and industry-ready educational experience. By showing their collections in February rather
                than June,
                it enables our accomplished final year students to become truly part of the industry.</p>
        </div>
        <div class="title-main text-center" style="padding-bottom: 3%">
            <h4>Team</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row" style="margin-bottom: 5%">

                    <div class="col-3">
                        <a href="#teamMemberSingle1">
                            <img class="aboutUs2-img" src="images/cust-images/sudam.JPG">
                        </a>
                    </div>


                    <div class="col-3">
                        <a href="#teamMemberSingle2">
                            <img class="aboutUs2-img" src="images/cust-images/shehani.JPG">
                        </a>
                    </div>


                    <div class="col-3">
                        <a href="#teamMemberSingle3">
                            <img class="aboutUs2-img" src="images/cust-images/Sajiya.jpeg">
                        </a>
                    </div>


                    <div class="col-3">
                        <a href="#teamMemberSingle4">
                            <img class="aboutUs2-img" src="images/cust-images/thamashi.jpg">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--About us-->

<!--Favourites-->
<div data-role="page" id="favPage">
    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>
    <div data-role="main" class="ui-content">

        <div class="fav-title text-left">
            <h3>FAVOURITES</h3>

            <div>
                <a data-role="button" class="ui-btn edit-btn" id="btnpopup">Edit</a>

                <div id="id04" class="w3-modal" style="padding-top: 152px">
                    <div data-role="popup" id="p" data-position-to="window" data-transition="turn"><p>Favourite List -
                            Item is successfully deleted.</p></div>
                </div>


                <a data-role="button" class="ui-btn email-btn"
                   onclick="document.getElementById('id07').style.display='block'"></a>

                <div id="id07" class="w3-modal" style="padding-top: 152px">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                    <span onclick="document.getElementById('id07').style.display='none'"
                          class="w3-button w3-display-topright">&times;</span>
                            <div style="height: auto;">
                                <h2 align="center">Email Favourites</h2>

                                <form action="/action_page.php" id="emailForm">
                                    To:<br>
                                    <input type="text" name="sender">
                                    <br>
                                    Subject:<br>
                                    <input type="text" name="subject">
                                    <br>
                                    Subject:<br>
                                    <textarea rows="4" cols="50" name="message" form="emailForm"
                                              placeholder="Enter message here"></textarea>
                                    <div class="button" style="width:50%;float:right;">
                                        <button type="submit">Send</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div data-role="tabs" id="tabs">
                <div data-role="navbar" class="nav-fav" data-iconpos="left">
                    <ul>
                        <li><a href="#poi-fav" id="poi" class="ui-btn-active" data-ajax="false">POI</a></li>
                        <li><a href="#events-fav" id="events" data-ajax="false">EVENTS</a></li>
                        <li><a href="#news-fav" id="news" data-ajax="false">NEWS</a></li>
                        <li><a href="#members-fav" id="member" data-ajax="false">MEMBERS</a></li>
                    </ul>
                </div>
                <div class="favs" id="favs">


                    <div id="poi-fav" class="ui-body-d ui-content poi-fav">


                        <ul data-role="listview" data-inset="true" id="poi-list" class="swipe-delete ">


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> POI </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> POI </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> POI </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> POI </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                        </ul>

                    </div>
                    <div id="events-fav" class="ui-body-d ui-content events-fav">
                        <ul data-role="listview" data-inset="true" id="poi-list" class="swipe-delete">


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> EVENTS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> EVENTS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> EVENTS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> EVENTS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>

                    <div id="news-fav" class="ui-body-d ui-content poi-fav">


                        <ul data-role="listview" data-inset="true" id="news-list" class="swipe-delete">


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> NEWS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> NEWS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> NEWS</h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> EVENTS </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                        </ul>

                    </div>

                    <div id="members-fav" class="ui-body-d ui-content members-fav">
                        <ul data-role="listview" data-inset="true" id="member-list" class="swipe-delete">


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> M1 </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>


                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> M2 </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> M3 </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <div class="behind">
                                    <a href="#" class="ui-btn delete-btn">Delete</a>
                                </div>
                                <a href="#">

                                    <div class="row fav-row">
                                        <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                                class="event-fav-cust-img"></div>
                                        <div class="col-8 fav-data"><h4> M3 </h4>
                                            <p>Wed, Nov, 20, 17:00, Westbourne</p>
                                            <p>Westminster Fashion Week Show 2018</p></div>
                                        <div class="col-1"></div>
                                    </div>
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-role="footer" class="footer-cust contact-footer">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--Favourites-->


<!--Login page -->
<div data-role="page" id="login">
    <div data-role="main" class="ui-content">

        <div id="myModal" class="login-modal">

            <!--             Modal content-->
            <div class="login-modal-content">
                <span class="login-close">&times;</span>
                <div style="text-align: center">
                    <img class="main-logo" src="images/cust-images/Logo.png" alt="logo">
                </div>
                <div style="text-align: center">
                    <h3><b>LOGIN</b></h3>
                </div>
                <div class="login2">
                    <form style="margin-bottom: 0px;">
                        <input type="text" name="text-username" id="text-username" value="" placeholder="Username"
                               class="cust-input">
                        <input type="text" name="text-password" id="text-password" value="" placeholder="Password"
                               class="cust-input">
                    </form>
                </div>

                <div class="row" style="padding-left: 40px;padding-bottom: 10px;">
                    <a href="#">Forgot Password?</a>
                </div>
                <!---->
                <!--                <div class="ui-grid-a">-->
                <!--                    <div class="ui-block-a">-->
                <!--                        <h4>Or login with</h4>-->
                <!--                    </div>-->
                <!--                    <div class="ui-block-b">-->
                <!--                        <a href="#">Forget Password</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!---->
                <div class="row">
                    <div class="col-6 buttonFacebook">
                        <button>Login with
                            <img src="images/cust-images/facebook-letter-logo.png" width="20" height="20">
                        </button>
                    </div>
                    <div class="col-6 buttonFacebook">
                        <button>Login with<img src="images/cust-images/google-glass-logo.png" width="20" height="20"
                                               style="margin-left: 8px;"></button>
                    </div>
                </div>
                <div class="col-12 buttonLogin1 text-center">
                    <div class="row" style="padding-top: 10px">
                        <button style="margin: 0 auto;" id="loginButtn">LOGIN</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--Login page -->


<!--SignUp page -->
<div data-role="page" id="signup" class="signupPage">
    <div data-role="main" class="ui-content" style="border: 1px solid #000000 !important; margin: 60px 20px">
        <div style="text-align: center">
            <img class="main-logo" src="images/cust-images/Logo.png" alt="logo">
        </div>
        <div class="title-main text-center">
            <h3>SIGN UP</h3>
        </div>
        <div class="signup2yo">
            <form>
                <input type="text" name="text-username" id="text-username" value="" placeholder="Username"
                       class="cust-input">
                <input type="text" name="text-email" id="text-email" value="" placeholder="Email"
                       class="cust-input">
                <input type="text" name="text-password" id="text-password" value="" placeholder="Password"
                       class="cust-input">
                <input type="text" name="text-confirm-password" id="text-confirm-password" value=""
                       placeholder="Confirm Password" class="cust-input">
            </form>
        </div>
        <p style="padding-left: 25px">Already a user? <span><a href="#login">Sign in</a></span></p>
        <div class="buttonLogin1">
            <button style="margin: 0 auto;" id="signUpButtn">SIGN UP</button>
        </div>
    </div>
</div>
<!--SignUp page-->

<!--Map-->
<div data-role="page" id="map-page">
    <div role="main" class="ui-content" id="map-canvas">
        <!-- map loads here... -->
    </div>
</div>
<!--Map-->

<!--Contact us page -->
<div data-role="page" id="contactUs">
    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>
    <div data-role="main" class="ui-content contact-us">
        <div class="news-title text-center">
            <h3>CONTACT US</h3>
            <div class="form-div">
                <div class="input-block">
                    <label for="">Name</label>
                    <input type="text" name="name" id="basic" value="" placeholder="Enter here" class="cust-input"/>
                </div>
                <div class="input-block">
                    <label for="">Email Address</label>
                    <input type="text" name="name" id="basic" value="" placeholder="Enter here" class="cust-input"/>
                </div>
                <div class="input-block filter-by">
                    <label for="">Subject</label>
                    <select name="select-choice-min" id="select-choice-min" data-mini="true">
                        <option value="standard">Tickets</option>
                        <option value="rush">Influence</option>
                        <option value="express">Express: next day</option>
                        <option value="overnight">Overnight</option>
                    </select>
                </div>
                <div class="input-block">
                    <label>Message</label>
                    <textarea class="cust-input" rows="4" cols="50"></textarea>
                </div>
                <div class="locate-btn"><a href="" class="secondary-btn">Submit</a></div>
            </div>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>

</div>
<!--Contact us page -->

<!--User profile page -->
<div data-role="page" id="userProfile">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content user-profile">
        <div class="user-top">
            <div class="row align-items-center">
                <div class="col-8 offset-2">
                    <div class="row align-items-center">
                        <div class="col-6 pro-pic text-right">
                            <img src="images/cust-images/Sajiya.jpeg" alt="">
                        </div>
                        <div class="col-6">
                            <div class="detail-div">
                                <p>Sajith96</p>
                                <div class="where"><i class="fas fa-map-marker-alt"></i> <span>Kadawatha</span>
                                </div>
                                <div class="trophy"><img src="images/cust-images/trophy.png" alt="trophy"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-body">
            <div data-role="tabs" id="tabs">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#one" data-ajax="false" class="ui-btn-active">Info</a></li>
                        <li><a href="#two" data-ajax="false">Payment</a></li>
                        <li><a href="#three" data-ajax="false">Reviews</a></li>
                        <li><a href="#four" data-ajax="false">Leaderboard</a></li>
                    </ul>
                </div>
                <div id="one" class="ui-body-d ui-content">
                    <div class="input-block">
                        <label for="">Email</label>
                        <input type="text" name="email" id="basic" value="" placeholder="Enter here"
                               class="cust-input"/>
                    </div>
                    <div class="input-block">
                        <label for="">Contact Number</label>
                        <input type="text" name="cont-number" id="basic" value="" placeholder="Enter here"
                               class="cust-input"/>
                    </div>
                    <div class="locate-btn"><a href="" class="secondary-btn">Change Password</a></div>
                </div>
                <div id="two">
                    <div class="main-collapse head-collapse">
                        <div data-role="collapsible" data-inset="false" data-icon="false">
                            <h3 class="mc-title">CARD DETAILS</h3>
                            <div class="input-block">
                                <label for="">Card No</label>
                                <input type="number" name="cardno" id="basic" value="" placeholder="Enter here"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">Payment Method</label>
                                <input type="text" name="cardno" id="basic" value="" placeholder="Enter here"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">Expiry Date</label>
                                <input type="text" name="cardno" id="basic" value="" placeholder="Enter here"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">Security Code</label>
                                <input type="text" name="cardno" id="basic" value="" placeholder="Enter here"
                                       class="cust-input"/>
                            </div>
                        </div><!-- /collapsible -->
                        <div data-role="collapsible" data-inset="false">
                            <h3 class="mc-title">PAYMENT ADDRESS</h3>
                            <div class="input-block">
                                <label for="">Address</label>
                                <input type="number" name="address1" id="basic" value="" placeholder="line 1"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">Address</label>
                                <input type="text" name="address2" id="basic" value="" placeholder="line 2"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">City</label>
                                <input type="text" name="city" id="basic" value="" placeholder="city"
                                       class="cust-input"/>
                            </div>
                            <div class="input-block">
                                <label for="">Postcode</label>
                                <input type="text" name="postcode" id="basic" value="" placeholder="optional"
                                       class="cust-input"/>
                            </div>
                            <div class="filter-by input-block">
                                <label for="">Country</label>
                                <select name="" id="" class="">
                                    <option value="">Please select</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                </select>
                            </div>
                            <div class="text-right">
                                <a href="" class="secondary-btn">Save</a>
                            </div>
                        </div>
                    </div><!-- /collapsible -->
                </div>
                <div id="three" class="no-border">
                    <div class="wrap-comment">
                        <div class="row">
                            <div class="col-2">
                                <img src="images/cust-images/Sajiya.jpeg" alt="comment-image">
                            </div>
                            <div class="col-10">
                                <div class="title">
                                    Thamashaa 2018
                                </div>
                                <div class="content">
                                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div class="stars text-right"><span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-comment">
                        <div class="row">
                            <div class="col-2">
                                <img src="images/cust-images/thamashi.jpg" alt="comment-image">
                            </div>
                            <div class="col-10">
                                <div class="title">
                                    WFW 2018
                                </div>
                                <div class="content">
                                    When an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div class="stars text-right"><span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star" style="color:orange"></span>
                                    <span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="four" class="no-border">
                    <div class="wrap-comment">
                        <div class="row align-items-center">
                            <div class="col-1">#1</div>
                            <div class="col-2">
                                <img src="images/cust-images/Sajiya.jpeg" alt="comment-image">
                            </div>
                            <div class="col-7">
                                <div class="content text-center">
                                    Sajith Herath
                                </div>
                            </div>
                            <div class="col-1">
                                1201
                            </div>
                        </div>
                    </div>
                    <div class="wrap-comment">
                        <div class="row align-items-center">
                            <div class="col-1">#2</div>
                            <div class="col-2">
                                <img src="images/cust-images/thamashi.jpg" alt="comment-image">
                            </div>
                            <div class="col-7">
                                <div class="content text-center">
                                    Thamashi Kuamarasinghe
                                </div>
                            </div>
                            <div class="col-1">
                                981
                            </div>
                        </div>
                    </div>
                    <div class="wrap-comment">
                        <div class="row align-items-center">
                            <div class="col-1">#3</div>
                            <div class="col-2">
                                <img src="images/cust-images/shehani.JPG" alt="comment-image">
                            </div>
                            <div class="col-7">
                                <div class="content text-center">
                                    Shehani Pereira
                                </div>
                            </div>
                            <div class="col-1">
                                760
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--User profile page -->

<!--Landing page-->
<div data-role="page" id="landingPage">
    <div data-role="header" class="head-cust">

    </div>

    <div data-role="main" class="landing-page">
        <div class="row no-gutters">
            <div class="col-12 text-center logo-img-wrap">
                <img class="main-logo" src="images/cust-images/Logo.png" alt="logo">
            </div>
        </div>
        <div class="row no-gutters mar-bot">
            <div class="col-12">
                <?php include('slider.php') ?>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 text-center">
                <a class="w-100 end-btn skip">SKIP</a>
            </div>
        </div>
        <div class="row no-gutters mar-bot end-wrap">
            <div class="col-12 end">
                <div class="row no-gutters">
                    <div class="col-6">
                        <button class="w-100 end-btn">SIGNUP</button>
                    </div>
                    <div class="col-6">
                        <button class="w-100 end-btn">LOGIN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div data-role="footer" class="footer-cust">

    </div>
</div>
<!--Landing page-->

<!--Explore page-->
<div data-role="page" id="explore">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>
    <div data-role="main" class="ui-content explore-single-page">
        <div class="title-main text-center">
            <h3>Explore</h3>
        </div>
        <div class="map">
            <div id="map-canvas-explore"></div>
        </div>
        <div class="explore" id="explore">
            <div id="explore" class="ui-body-d ui-content poi-fav">
                <ul data-role="listview" data-inset="true" id="poi-list">
                    <li>
                        <a href="#eventSingle"  style="background-color: #ffffff">
                            <div class="row">
                                <div class="col-3"><img src="images/cust-images/eventWFW.jpg"
                                                        class="event-fav-cust-img"></div>
                                <div class="col-8 fav-data"><h4><img src="images/icons-png/like%20(16).png">  Cocktail party </h4>
                                    <p style="margin: 0px">Wed, Nov, 20, 17:00, Westbourne</p>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#eventSingle"  style="background-color: #ffffff">
                            <div class="row">
                                <div class="col-3"><img src="images/cust-images/model13.jpg"
                                                        class="event-fav-cust-img"></div>
                                <div class="col-8 fav-data"><h4><img src="images/icons-png/like%20(16).png">  Sale </h4>
                                    <p style="margin: 0px">Thurs, Nov, 25, 17:00, Westbourne</p>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#eventSingle" style="background-color: #ffffff">

                            <div class="row">
                                <div class="col-3"><img src="images/cust-images/model14.jpg"
                                                        class="event-fav-cust-img"></div>
                                <div class="col-8 fav-data"><h4> <img src="images/icons-png/like%20(16).png"> Fashion show</h4>
                                    <p style="margin: 0px">Fri, Nov, 26, 17:00,
                                        Westbourne</p>
                                </div>
                                <div class="col-1" style="padding-top: 9px;">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>

<!--Explore page-->

<!--Payment-->
<!--<div data-role="page" id="payment">
    <div data-role="main" class="ui-content">
        <div id="smartwizard" class="cust-wiz">
            <ul>
                <li><a href="#personal-info"><img class="wiz-img" src="images/icons-png/user-black.png"><br/>
                        <small>Personal Info</small>
                    </a></li>
                <li><a href="#payment-detail"><img class="wiz-img" src="images/icons-png/user-black.png"><br/>
                        <small>Payment Details</small>
                    </a></li>
                <li><a href="#shipping"><img class="wiz-img" src="images/icons-png/user-black.png"><br/>
                        <small>Shipping Address</small>
                    </a></li>
                <li><a href="#Review-order"><img class="wiz-img" src="images/icons-png/user-black.png"><br/>
                        <small>Review Order</small>
                    </a></li>
                <li><a href="#complete"><img class="wiz-img" src="images/icons-png/user-black.png"><br/>
                        <small>Complete Payment</small>
                    </a></li>
            </ul>

            <div>
                <div id="personal-info">

                </div>
                <div id="payment-detail" class="">
                    <div class="title-main text-center">
                        <h3>CARD DETAILS</h3>
                    </div>
                    <form>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <h6>CARD NO</h6>
                            </div>
                            <div class="ui-block-b">
                                <input type="text" name="text-cardNo" id="text-cardNo" value=""
                                       placeholder="Card Number">
                            </div>
                        </div>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <h6>PAYMENT METHOD</h6>
                            </div>
                            <div class="ui-block-b">
                                <div class="ui-grid-b">
                                    <div class="ui-block-a">
                                        <input type="radio" name="text-cardNo" id="text-cardNo" value="">
                                    </div>
                                    <div class="ui-block-b">
                                        <input type="radio" name="text-cardNo" id="text-cardNo" value="">
                                    </div>
                                    <div class="ui-block-c">
                                        <input type="radio" name="text-cardNo" id="text-cardNo" value="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <h6>EXPIRE DATE</h6>
                            </div>
                            <div class="ui-block-b">
                                <input type="text" name="text-cardMM" id="text-cardMM" value="" placeholder="MM">
                                <input type="text" name="text-cardYY" id="text-cardYY" value="" placeholder="YY">
                            </div>
                        </div>
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                <h6>SECURITY CODE</h6>
                            </div>
                            <div class="ui-block-b">
                                <input type="text" name="text-cvv" id="text-cvv" value="" placeholder="cvv">

                            </div>
                        </div>
                    </form>
                </div>
                <div id="shipping" class="">
                </div>
                <div id="review-order" class="">

                </div>
            </div>
        </div>

    </div>

    <div data-role="footer" class="footer-cust">
        <?php
/*        include('components/footer.php');
        */ ?>
    </div>

</div>-->
<!--Payment-->

<!--Events near-->
<div data-role="page" id="eventsNear">

    <div data-role="header" class="head-cust">
        <?php include('components/header.php') ?>
    </div>

    <div data-role="main" class="ui-content eve-single-page">
        <div class="title-main text-center" style="padding-bottom: 15%">
            <h3>Events Near</h3>
        </div>

        <div class="en-single">
            <img src="images/cust-images/news-banner.jpg" alt="event-near-image">
            <span class="free">FREE</span>
        </div>

    </div>
    <div data-role="footer" class="footer-cust">
        <?php
        include('components/footer.php');
        ?>
    </div>
</div>
<!--Events near-->

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>


</body>
</html>