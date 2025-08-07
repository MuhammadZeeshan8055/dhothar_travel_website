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
                    <router-link to="/dhothar_travel/"><strong>HOME</strong></router-link>

                    <ul>

                        <li><router-link to="introduction">Introduction</router-link></li>

                    </ul>

                </li>

                <li class="orange">
                    <span class="menufilter"></span>
                    <router-link to="#"><strong>About</strong></router-link>
                    <ul>
                        <li><router-link to="our_services">Our Services</router-link></li>
                        <li><router-link to="mission">Mission</router-link></li>
                        <li><router-link to="vision">Vision</router-link></li>
                        <li><router-link to="more_about_us">More About Us</router-link></li>
                    </ul>
                </li>

                <li class="red">
                    <span class="menufilter"></span>
                    <router-link to="visit_visa"><strong>Visit Visa</strong></router-link>

                </li>

                <li class="violet">
                    <span class="menufilter"></span>
                    <router-link to="visa_file_processing"><strong>Visa File Processing</strong></router-link>

                </li>


                <li class="green">
                    <span class="menufilter"></span>
                    <router-link to="travel_insurance"><strong>Travel Insurance</strong></router-link>

                </li>

                <li class="green">
                    <span class="menufilter"></span>
                    <router-link to="#"><strong>Contact Us</strong></router-link>
                    <ul>
                        <li>
                            <router-link to="contact-dark.php">Dark Map</router-link>
                        </li>
                        <li>
                            <router-link to="contact-light.php">Color Map</router-link>
                        </li>
                        <li>
                            <router-link to="contact-with-text.php">With Text</router-link>
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

<style scoped>
.gridnavigation {
  position: relative;
  z-index: 1000; /* Higher than the slider */
}

/* Dropdown UL */
.sf-menu ul {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1001; /* Ensure dropdowns sit above everything */
  background-color: white; /* or your preferred color */
  display: none;
}

/* Show dropdown on hover */
.sf-menu li:hover > ul {
  display: block;
}
</style>
