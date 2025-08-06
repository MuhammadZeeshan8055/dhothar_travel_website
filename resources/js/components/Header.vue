<template>
    <!--start container-->
    <div class="container">

        <!--start navigation-->
        <div class="grid_12 gridnavigation">
            <!-- logo fade-up animate4 -->
            <img class="logo" alt="" src="/assets/img/dig.png" height="44px">
            <!--start navigation-->
            <span class="logo"
                style="margin-top: 1%;padding: 13px;font-weight: bold;color:#0090d3;font-style: italic;">DIG Travel &
                Tourism</span>
            <ul class="sf-menu" id="nav">

                <li class="current yellow">
                    <span class="menufilter"></span>
                    <a href="/dhothar_travel/"><strong>HOME</strong></a>

                    <ul>

                        <li><a href="introduction">Introduction</a></li>

                    </ul>

                </li>

                <li class="orange">
                    <span class="menufilter"></span>
                    <a href="#"><strong>About</strong></a>
                    <ul>
                        <li><a href="our_services">Our Services</a></li>
                        <li><a href="mission">Mission</a></li>
                        <li><a href="vision">Vision</a></li>
                        <li><a href="more_about_us">More About Us</a></li>
                    </ul>
                </li>

                <li class="red">
                    <span class="menufilter"></span>
                    <a href="visit_visa"><strong>Visit Visa</strong></a>

                </li>

                <li class="violet">
                    <span class="menufilter"></span>
                    <a href="visa_file_processing"><strong>Visa File Processing</strong></a>

                </li>


                <li class="green">
                    <span class="menufilter"></span>
                    <a href="travel_insurance"><strong>Travel Insurance</strong></a>

                </li>

                <li class="green">
                    <span class="menufilter"></span>
                    <a href="#"><strong>Contact Us</strong></a>
                    <ul>
                        <li>
                            <a href="contact-dark.php">Dark Map</a>
                        </li>
                        <li>
                            <a href="contact-light.php">Color Map</a>
                        </li>
                        <li>
                            <a href="contact-with-text.php">With Text</a>
                        </li>
                    </ul>
                </li>



            </ul>
            <!--end navigationmenu-->

        </div>
        <!--end navigation-->

    </div>
    <!--end container-->
</template>

<script>
export default {
    name: 'Header'
}
</script>
