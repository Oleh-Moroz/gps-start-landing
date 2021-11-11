<?php
/*
  Template Name: Landing start
 */
?>

<!-- Header -->
<?php get_header('start'); ?>
<!-- end.Header -->
<!-- Content -->

<header>
                <div class="container">
                    <div class="row">
                        <div class="col-55 header-content-col animated animate__fadeIn">
                            <h1>More miles, more money with your no-contract ELD provider</h1>
                        </div>
                        <div class="col-50 main-form-wrap animated animate__fadeIn">
                            <div class="logo">
                                <img src="<?= get_template_directory_uri()?>/start-landing/img/logo.webp" alt="GPSTab logo" width="78" height="97">
                            </div>
                            <h2>Sign up today for your free 7 day trial</h2>

                            <form id="regForm" action="" method="get" class="main-form">
                                <div class="circle-row">
                                </div>

                                <div class="tab">
                                    <div class="form-row">
                                        <input type="text" name="form-name" oninput="this.className = ''" required>
                                        <label for="form-name">First Name</label>
                                        <span
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="form-last-name" oninput="this.className = ''" required>
                                        <label for="form-last-name">Last name</label>
                                    </div>
                                    <div class="form-row">
                                        <input type="email" name="form-email" oninput="this.className = ''" required>
                                        <label for="form-email">Email</label>
                                    </div>
                                </div>
                                
                                <div class="tab">
                                    <div class="form-row">
                                        <input type="text" name="form-company" oninput="this.className = ''" required>
                                        <label for="form-company">Company Name</label>
                                    </div>
                                    <div class="form-row">
                                        <input type="number" maxlength="1" maxlenght="9" name="form-usdot" oninput="this.className = ''" required>
                                        <label for="form-usdot">USDOT</label>
                                    </div>
                                    <div class="form-row">
                                        <select oninput="this.className = ''" required>
                                            <option value="Alaskan standart time">-- Check time zone --</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                            <option value="Alaskan standart time">Alaskan standart time</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="form-phone" oninput="this.className = ''" required>
                                        <label for="form-phone">Phone Number</label>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="form-row">
                                        <input type="password" name="form-password"  oninput="this.className = ''" required>
                                        <label for="form-password">Password</label>
                                    </div>
                                    <div class="form-row">
                                        <input type="password" name="form-confirm-password" oninput="this.className = ''" required>
                                        <label for="form-confirm-password">Confirm password</label>
                                    </div>
                                    <div class="form-row form-row-checkbox">
                                        <label id="checkbox" for="checkbox">I want to recieve the weekly newsletter</label>
                                        <input type="checkbox" name="checkbox">
                                    </div>
                                </div>
                                
                                <div class="main-form-button-row">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                                </form>
                            <div class="terms-text">
                                By clicking Get Started you create an account and agree to the
                                <a href="https://gpstab.com/terms-and-privacy/" target="_blank">Terms and Conditions</a> and <a href="https://gpstab.com/terms-and-privacy/" target="_blank">Privacy Policy</a>.
                            </div>
                        </div>
                    </div>
                </div>
    </header>

    <!-- Section testimonial -->

    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <h3 class="green-title animated animate__fadeInUp">Don’t be misled into a contract, there’s usually big, hidden expenses.</h3>
                <h2 class="section-title animated animate__fadeInUp">
                    What people like you say about GPSTab
                </h2>

                <div class="testimonial-slide animated animate__fadeInUp">
                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                Т
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Tai Courchesne</h4>
                                <div class="testimonial-date">February 6, 2020</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            After going through 5 ELDs, I am glad I finally landed on GPSTab! So simple for my drivers to use.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>

                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                A
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Ankya Davis</h4>
                                <div class="testimonial-date">July 22, 2019</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            I'm a dispatcher and it’s so important for me to
                            know where is my driver and how far he is from my
                            pick up or delivery. Life becomes so much easier
                            with GPS tab. I can just log in to my account and
                            see what my driver is doing.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>

                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                S
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Sunita Satishwar</h4>
                                <div class="testimonial-date">July 22, 2019</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            I’m an owner of a small trucking company. Multiple
languages in customer support and ability to send
my drivers location to the brokers.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>

                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                A
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Arpit Kisti</h4>
                                <div class="testimonial-date">June 13, 2019</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            I’m ususally very limited on time. GPSTab ELD
customer service were very quick and professional
on fixing my issue.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>

                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                F
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Franklin Tardiff</h4>
                                <div class="testimonial-date">September 23, 2020</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            The fact that I can integrate my other loads into
Dispatch is huge and helps us keep everything in
order.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>

                    <div class="testimonial-slide-item">
                        <div class="testimonial-item_header">
                            <div class="testimonial-item_icon">
                                H
                            </div>
                            <div class="testimonial_header-content">
                                <h4>Hanson Roy</h4>
                                <div class="testimonial-date">May 7, 2020</div>
                            </div>
                        </div>
                        <div class="testimonial-item_content">
                            The load-tracking features on this platform are
amazing, I can send customers a code that allows
them to see their shipments location. It’s helped
me get a lt of new customers.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?= get_template_directory_uri()?>/start-landing/img/stars.webp" width="175" height="28">
                        </div>
                    </div>
                </div>
                <div class="slider_nav">
                    <span class="text-next"><img src='img/triangle.svg'></span>
                    <span class="text-prev"><img src='img/triangle.svg'></span>
                </div>
            </div>
        </div>
    </section>

    <!-- End Section testimonial -->

    <!-- Brands section -->

    <div class="brands-section">
        <div class="container">
            <div class="row">
                <div class="col-30 brands-content animated animate__fadeInUp">
                    <h2 class="section-title">As seen in</h2>
                </div>

                <div class="col-70 brands-logo_wrap">
                    <div class="brands-logo-item animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/logo-1.webp" alt="gpstab-gats-logo">
                    </div>
                    <div class="brands-logo-item animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/logo-2.webp" alt="gpstab-overdrive-logo">
                    </div>
                    <div class="brands-logo-item animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/logo-3.webp" alt="gpstab-freightwaves-logo">
                    </div>
                    <div class="brands-logo-item animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/logo-4.webp" alt="gpstab-califurnia-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Brands section -->

    <!-- Section plans -->

    <div class="section-plans">
        <div class="container">
            <div class="row">
                <div class="plans-header-row">
                    <h2 class="section-title animated animate__fadeInUp">More hours = more money for you</h2>

                    <div class="plans-header-text animated animate__fadeInUp">
                        Our legal, flexible features give you up to 3 more hours each day.
                    </div>
                </div>

                <div class="plans-item animated animate__fadeInLeft">
                    <div class="hours-item hours-red animated animate__fadeInDown">
                        8:00
                    </div>
                    <div class="plans-image">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/plans-1.webp" alt="Other ELDs" width="586" height="530">
                        <div class="eld-name">
                            Other ELDs
                        </div>
                    </div>

                    <div class="plans-description plans-description-red animated animate__fadeInLeft">
                        Losing money waiting at the shipper
                    </div>
                </div>

                <div class="plans-item animated animate__fadeInRight">
                    <div class="hours-item hours-green animated animate__fadeInDown">
                        11:00
                    </div>
                    <div class="plans-image">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/plans-2.webp" alt="GPSTab ELD" width="586" height="530">
                        <div class="eld-name">
                            GPSTab ELD
                        </div>
                    </div>

                    <div class="plans-description plans-description-green animated animate__fadeInRight">
                        Legally add more time with the push of a button
                    </div>
                </div>

                <div class="plans-button animated animate__fadeInUp">
                    <a href="https://app.gpstab.com/home/register">Start your 7 day trial</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End section plans -->

    <!-- Video Section -->

    <section class="video-section">
        <div class="container">
            <div class="video-player-block animated animate__fadeInUp">
                <div class="video-youtube video-youtube_overlay">
                    <div id="video-youtube__content" class="video-youtube__content video-youtube__content_hide-origin-play-btn"></div>
                    <button type="button" class="video-youtube__new-play-btn"></button>
                </div>
            </div>


            <h2 class="section-title animated animate__fadeInUp">How we help your business:</h2>
            <ul class="section-list">
                <li class="animated animate__fadeInRight">No contracts, and only pay for the days you use each month.</li>
                <li class="animated animate__fadeInRight">Flexible edits and HOS statuses</li>
                <li class="animated animate__fadeInRight">Free trial</li>
                <li class="animated animate__fadeInRight">In stock devices shipped to you in as little as 1 day no matter where you are.</li>
                <li class="animated animate__fadeInRight">No complex installation with plug and play devices. You can be up and running in minutes.</li>
            </ul>

            <h2 class="section-title section-title-second animated animate__fadeInUp">Watch the demo</h2>
            <div class="sub-title animated animate__fadeInUp">See how easy it is to use GPSTab.</div>

            <div class="video-player-block video-player-block-second animated animate__fadeInUp">
                <div class="video-youtube video-youtube_overlay">
                    <div id="video-youtube__content-second" class="video-youtube__content video-youtube__content_hide-origin-play-btn"></div>
                    <button type="button" class="video-youtube__new-play-btn"></button>
                </div>
            </div>
        </div>
    </section>

    <!--  End video section -->

    <!-- Footer form section -->

    <section class="footer-form-section">
        <div class="container">
            <div class="row">
                <h2 class="section-title footer-form-section_title animated animate__fadeInUp">
                    Sign up today for your free 7 day trial
                </h2>
                <div class="footer-form-sub-title animated animate__fadeInUp">
                    Get more miles and more money with your no contract provider.
                </div>

                <div class="plans-button animated animate__fadeInUp">
                    <a href="https://app.gpstab.com/home/register">Start your 7 day trial</a>
                </div>
            </div>
        </div>
    </section>    
    
    <!-- End footer form section -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-social-links">
                    <a href="#" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-1.svg" alt="gpstab-tiktok" width="73" height="73">
                    </a>
                    <a href="https://www.youtube.com/channel/UC_Scq-p5daVZ3TorAJ5kmVw" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-2.svg" alt="gpstab-youtube" width="73" height="73">
                    </a>
                    <a href="https://www.instagram.com/gpstab/" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-3.svg" alt="gpstab-instagram" width="73" height="73">
                    </a>
                    <a href="https://www.facebook.com/GPSTab/" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-4.svg" alt="gpstab-facebook" width="73" height="73">
                    </a>
                    <a href="https://gpstab.com/" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-5.svg" alt="gpstab" width="73" height="73">
                    </a>
                    <a href="#" target="_blank" class="animated animate__fadeInUp">
                        <img src="<?= get_template_directory_uri()?>/start-landing/img/social-6.svg" alt="gpstab-mail" width="73" height="73">
                    </a>
                </div>
            </div>
        </div>
    </footer>


<!-- .content -->

<!-- Footer -->
<?php get_footer('start'); ?>
<!-- end.Footer -->
