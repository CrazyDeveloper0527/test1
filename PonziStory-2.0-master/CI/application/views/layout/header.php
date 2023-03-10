<header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="widget no-border m-0">
<!--                        <ul class="list-inline sm-text-center mt-5">-->
<!--                            <li>-->
<!--                                <a href="/page/faqs" class="text-white">FAQs</a>-->
<!--                            </li>-->
<!--                            <li class="text-white">|</li>-->
<!--                            <li>-->
<!--                                <a href="#" class="text-white">Help Desk</a>-->
<!--                            </li>-->
<!--                            <li class="text-white">|</li>-->
<!--                            <li>-->
<!--                                <a href="/support" class="text-white">Support</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!---->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5">
                            <li>
                                <a href="/page/faqs" class="text-white">FAQs</a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a href="/page/terms" class="text-white">Terms</a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a href="/disclaimer" class="text-white">Dsiclaimer</a>
                            </li>
                            <li>
                                <a href="#" class="text-white">Livechat: 8AM - 10pm</a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="widget no-border m-0">
                        <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="/"><img src="/assets/images/logo.jpg" width="282" height="58" alt="tradermoni LOGO"></a>
                     <h1 style="display: none">tradermoni - Everyone is a trader!</h1>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">
                        <p class="count-text ">Social Media</p>
                        <span style="margin-left: 30px">
                    <a href="https://www.facebook.com/groups/tradermoniearners/"><img src="/assets/images/facebook.png" alt="tradermoni FACEBOOK" height="50"  target="_blank"></a>
                    <a href="//t.me/tradermonichannel"><img src="/assets/images/telegram.png" alt="tradermoni TELEGRAM" height="50"  target="_blank"></a>
                        </span>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="widget no-border m-0">
                        <p class="count-text ">Latest Paid</p>
                        <marquee direction="left" speed="normal" behavior="loop" >
                            <? foreach ($payments as $p) { ?>

                                <span><?= $p->username ?></span> -
                                <span style="color: green">(<?= money($p->amount) ?>)</span>
                                <span style="color: red"> | </span>
                            <? } ?>
                        </marquee>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">


                        <!--                                    <i class="fa fa-lightbulb-o fa-2x"></i>-->
                        <p class="count-text ">Total members</p>
                        <h2 class="timer count-title" id="count-number" data-to="<?php echo $members ?>" data-speed="1500"></h2>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
            <div class="container">
                <nav id="menuzord" class="menuzord default bg-light">
                    <ul class="menuzord-menu">
                        <li <?php if ($this->uri->segment(1) == "") {?> class="active" <?php } ?>><a href="/">Home</a>
                        </li>

                        <li <?php if ($this->uri->segment(2) == "about") {?> class="active" <?php } ?>><a href="/page/about">About Us</a>
<!--                            <ul class="dropdown">-->
<!--                                <li><a href="page-volunteer-4column.html">Volunteer 4column</a></li>-->
<!--                                <li><a href="page-volunteer-3column.html">Volunteer 3column</a></li>-->
<!--                                <li><a href="page-volunteer-2column.html">Volunteer 2column</a></li>-->
<!--                                <li><a href="page-volunteer-details.html">Volunteer Details</a></li>-->
<!--                            </ul>-->
                        </li>
                        <li <?php if ($this->uri->segment(2) == "howitworks") {?> class="active" <?php } ?>><a href="/page/howitworks">How It Works</a>

                        </li>
                       <!-- <li <?php if ($this->uri->segment(2) == "faqs") {?> class="active" <?php } ?>><a href="/page/faqs"> FAQ</a> -->
                        <li <?php if ($this->uri->segment(1) == "news") {?> class="active" <?php } ?>><a href="/news"> NEWS</a>
                        </li>

                        <li <?php if ($this->uri->segment(1) == "testimonials") {?> class="active" <?php } ?>><a href="/testimonials"> Testimonials</a>
                        </li>

                        <li <?php if ($this->uri->segment(1) == "teams") {?> class="active" <?php } ?>><a href="/teams"> TEAMS</a>
                        </li>

                        <li <?php if ($this->uri->segment(2) == "blackpage") {?>  class="active" <?php } ?>><a style="background:black;" href="/blackpage"> BLACKPAGE</a>
                        </li>

                            <li><a style="background:green;color:white" href="https://marketmoni.net" target="_blank"> MARKETMONI</a>
                        </li>



                    </ul>
                    <ul class="list-inline pull-right flip">
<!--                        --><?php //var_dump($members) ?>
                        <? if ($toy){ ?>
                        <li>
                            <a class="btn btn-colored btn-flat btn-theme-colored mt-15 " href="/back_office" >My Account</a>
                        </li>
                        <? } else {?>
                        <li>
                            <a class="btn btn-colored btn-flat btn-theme-colored mt-15 " href="/register" >Register</a>
                        </li>
                        <li>
                            <a class="btn btn-colored btn-flat btn-theme-colored mt-15 " href="/login" >Login</a>
                        </li>
                        <? } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>