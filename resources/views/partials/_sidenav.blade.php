<?php
$lang_de = "Guten tag";         // German
$lang_en = "Hi";                // English
$lang_es = "Hola";              // Spanish
$lang_fr = "Bonjour";           // French
$lang_hi = "Namaste";           // Hindi
$lang_it = "Buon giorno";       // Italian
$lang_jp = "こんにちは";         // Japanese
$lang_km = "Chum reap suor";    // Cambodian
$lang_lv = "Sveika";            // Latvian
$lang_nl = "Goedendag";         // Dutch
$lang_pt = "Ol&aacute;";        // Portugese
$lang_ru = "Iszdravstvuyte";    // Russian
$lang_sq = "Tungjatjeta";       // Albanian
$lang_yi = "Sholem aleikhem";   // Yiddish
$randomGreeting = array($lang_de, $lang_en, $lang_es, $lang_fr, $lang_hi, $lang_it, $lang_jp, $lang_km, $lang_lv, $lang_nl, $lang_pt, $lang_ru, $lang_sq, $lang_yi);
?>

<style type="text/css">

    #canvas {
        position: fixed;
        z-index: -1;
        top: 0;
        left: 0;
    }

</style>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            {!! Html::image('/img/avatar/bill_murray@100x100.jpg', 'Profile Avatar', array('class' => 'img-circle avatar-sidemenu')) !!}
                        </span>
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold">{{ $randomGreeting[array_rand($randomGreeting)] }} Bill!</strong> &nbsp;<i class="fa fa-caret-down fa-lg"></i></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="/profile/agent/bill-murray">My Profile</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Trips</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Favorites</a></li>
                        <!--
                        <li><a href="#">Messages <span class="label label-danger pull-right" style="margin-top:5px;">12</span></a></li>
                        -->
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    {!! Html::image('/img/etg-floret-white.png', '', array('class' => 'img-responsive etg-floret-white')) !!}
                </div>
            </li>
            <li class="">
                <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Homepage</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-search"></i> <span class="nav-label">Search Travel</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#"><i class="fa fa-ship"></i> Cruise</a></li>
                    <li><a href="#"><i class="fa fa-bus"></i> Land</a></li>
                    <li><a href="#"><i class="fa fa-hotel"></i> Hotel</a></li>
                    <li><a href="#"><i class="fa fa-plane"></i> Air</a></li>
                    <li><a href="#"><i class="fa fa-fire" style="color: #F44336;"></i> Offers</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i>Suppliers</a></li>
                    <li><a href="#"><i class="fa fa-child"></i> FAMs</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Book Travel</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Cruise Express</a></li>
                    <li><a href="#">ShoreTrips<br>Cruise Excursions</a></li>
                    <li><a href="#">Hotel Express</a></li>
                    <li><a href="#">Air Express</a></li>
                    <li><a href="#">Car Express</a></li>
                    <li><a href="#">Bespoke Land Excursions</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-send"></i> <span class="nav-label">Marketing</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Marketing Overview</a></li>
                    <li><a href="#">Choose Your Program**</a></li>
                    <li><a href="#">Program Pricing Calculator</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Publications & Campaigns</a></li>
                    <li><a href="#">Direct Mail Search</a></li>
                    <li><a href="#">Email Tools</a></li>
                    <li><a href="#">Ematrix Overview</a></li>
                    <li><a href="#">ClientSites</a></li>
                    <li><a href="#">Vacation Therapy Sites</a></li>
                    <li><a href="#">Print on Demand</a></li>
                    <li><a href="#">Voice Message-on-Hold</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Materials & Reference</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Extranet Guide</a></li>
                    <li><a href="#">Specialist Programs</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Codes, Instructions, Forms</a></li>
                    <li><a href="#">New Member Referral Program</a></li>
                    <li><a href="#">Newsletters</a></li>
                    <li><a href="#">COHORTS Client Segmentation</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-certificate"></i> <span class="nav-label">Professional Development</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Training & Education</a></li>
                    <li><a href="#">Specialist Programs</a></li>
                    <li><a href="#">FAMs Overview</a></li>
                    <li><a href="#">Industry Associations</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Services</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Owner/Manager</a></li>
                    <li><a href="#">Agent</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Wireframes</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>{!! Html::link('/wireframe/calendar', 'Calendar') !!}</li>
                    <li>{!! Html::link('/wireframe/full-width', 'Full Width') !!}</li>
                    <li>{!! Html::link('/wireframe/sidebar', 'Sidebar') !!}</li>
                    <li>{!! Html::link('/profile/supplier/cruise', 'Cruise Supplier') !!}</li>
                    <li>{!! Html::link('/product/cruise/itinerary', 'Cruise Itinerary') !!}</li>
                    <li>{!! Html::link('/profile/supplier/hotel', 'Hotel Supplier') !!}</li>
                    <li>{!! Html::link('/product/hotel/listing', 'Hotel Listing') !!}</li>

                </ul>
            </li>
        </ul>

    </div>
</nav>
