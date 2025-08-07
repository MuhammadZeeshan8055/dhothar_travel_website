<template>
    <div>
        <ImageSlider />
        <!--start services-->
        <!-- fade-up -->
        <section id="homeservices" class="sectionhome ">

            <!--start container-->
            <div class="container clearfix">

                <!--start 1 service-->
                <div class="grid_4 homeservice">

                    <div class="imgserviceopen">
                        <img alt="" src="assets/img/service/service1open.jpg" />
                    </div>

                    <div class="imgservice">
                        <!--start percentagehome-->
                        <div class="percentagehome" data-percent="90">
                            <img alt="" src="assets/img/service/service1.png" />
                        </div>
                        <!--end percentagehome-->
                    </div>

                    <h2><a href="adventure">ADVENTURE</a></h2>

                    <p><b>Trekking and Hiking</b></p>
                    <p><b>Wildlife Safaris</b></p>
                    <p><b>Water-Based Adventures</b></p>
                    <p><b>Mountaineering And Rock Climbing</b></p>
                    <p><b>Cycling and Mountaing Biking</b></p>
                    <p><b>Skiing and Snowboarding</b></p>
                    <p><b>Caving and Spelunking</b></p>
                    <p><b>Canyoning and Zip-Lining</b></p>

                </div>
                <!--end 1 service-->

                <!--start 2 service-->
                <div class="grid_4 homeservice">

                    <div class="imgserviceopen">
                        <img alt="" src="assets/img/service/service2open.jpg" />
                    </div>

                    <div class="imgservice">

                        <!--start percentagehome-->
                        <div class="percentagehome" data-percent="80">
                            <img alt="" src="assets/img/service/service2.png" />
                        </div>
                        <!--end percentagehome-->

                    </div>

                    <h2><a href="relaxation">RELAX</a></h2>
                    <p><b>Spa Retreats</b></p>
                    <p><b>Yoga and Meditation Retreats</b></p>
                    <p><b>Beach Resorts</b></p>
                    <p><b>Wellness Retreats</b></p>
                    <p><b>Nature Retreats</b></p>
                    <p><b>Luxury Resorts</b></p>
                    <p><b>Cultural Immersion Retreats</b></p>

                    <p><b>Mindfulness Retreats</b></p>
                </div>
                <!--end 2 service-->

                <!--start 3 service-->
                <div class="grid_4 homeservice">

                    <div class="imgserviceopen">
                        <img alt="" src="assets/img/service/service3open.jpg" />
                    </div>

                    <div class="imgservice">

                        <!--start percentagehome-->
                        <div class="percentagehome" data-percent="70">
                            <img alt="" src="assets/img/service/service3.png" />
                        </div>
                        <!--end percentagehome-->

                    </div>

                    <h2><a href="honeymoon">HONEYMOON</a></h2>
                    <p><b>Romantic Beach Getaways</b></p>
                    <p><b>Exotic Island Escapes</b></p>
                    <p><b>European Romance</b></p>
                    <p><b>Adventure and Wildlife</b></p>
                    <p><b>Cultural Immersion</b></p>
                    <p><b>Luxury Retreats</b></p>
                    <p><b>Road Trips and Adventure</b></p>
                    <p><b>Cruise Honeymoons</b></p>
                </div>
                <!--end 3 service-->

            </div>
            <!--end container-->

        </section>
        <!--end services-->
        <div class="divider"><span></span></div>
        <!--start promotions-->
        <section class="sectionhome" id="homepromotions">

            <!--start container-->
            <div class="container clearfix">

                <div class="grid_12">
                    <p style="color:black"><b>DIG (Dhothar International Group) Travel & Tourism</b>, a subsidiary
                        company under the esteemed umbrella of Dhothar International Group, we are dedicated to
                        nurturing the seeds of imagination that fuel every traveler's journey. We believe that the
                        foundation of every great adventure lies in the dreams that inspire it. Our relentless mission
                        is to meticulously cultivate these dreams, transforming them into unforgettable experiences that
                        surpass all expectations. Through a deeply personalized approach, we curate tailor-made travel
                        itineraries designed to harmonize with your unique desires and preferences. Whether you envision
                        unwinding on the pristine shores of a secluded beach, conquering the rugged terrain of majestic
                        mountains, or immersing yourself in the vibrant tapestry of culture within bustling
                        metropolises, we are here to bring your aspirations to life.
                        What sets us apart is not only our commitment to personalized service but also our unwavering
                        dedication to excellence in every aspect of your journey. Our seasoned team of travel experts,
                        armed with years of experience and a passion for exploration, stands ready to guide you through
                        every step of the way. From the initial planning stages to the final farewell, we leave no stone
                        unturned in ensuring that your travel experience is nothing short of extraordinary.
                        Furthermore, our extensive network of partners spans the globe, affording us unparalleled access
                        to a diverse array of destinations, accommodations, and experiences. This network, combined with
                        our strategic presence in both the Gulf and Europe, grants us a unique advantage over our
                        competitors. It allows us to offer insider knowledge, exclusive deals, and unparalleled insights
                        into each destination, ensuring that your journey with DIG Travel & Tourism is not just
                        memorable but truly transformative.
                        Embark on a voyage with us, where every moment is carefully crafted, every detail meticulously
                        planned, and every dream realized beyond expectation. At DIG Travel & Tourism, your journey
                        begins with a dream, and it culminates in an unforgettable experience that will leave you
                        longing for more.
                    </p>
                </div>


            </div>
            <!--end container-->

        </section>

        <!--end homeclients-->
        <div class="divider"><span></span></div>
    </div>

</template>

<script>
import ImageSlider from '@/components/ImageSlider.vue';

export default {
    name: 'Home',
    components: {
        ImageSlider
    }
}
</script>
