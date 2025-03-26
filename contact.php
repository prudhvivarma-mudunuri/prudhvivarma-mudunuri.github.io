<?php include('header.php'); ?>



        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Contact Us</h2>
                <ul class="growim-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-two__image">
                            <img src="assets/images/shapes/contact-page-1.png" alt="growim">
                            <div class="contact-two__image__video">
                                <img src="assets/images/resources/contact-page-video.jpg" alt="growim">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <span class="ripple"></span>
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-two__content">
                            <h3 class="contact-two__title">We're here to assist you anytime.</h3>
                            <p class="contact-two__text">Our dedicated team is always ready to assist you with your needs and inquiries</p>
                            <form class="contact-two__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="inc/sendemail.php">
                                <h4 class="contact-two__form__title">Get In touch</h4>
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Name">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write Message . . ."></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button class="growim-btn" type="submit"><span class="growim-btn__text">Send Message</span><span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->

        <section class="google-map">
            <div class="google-map__contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.663444681744!2d81.49374150985109!3d16.543080084141387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a362d5e7ef94f99%3A0x3a2b78f9b48493fe!2sSRKR%20Engineering%20College!5e0!3m2!1sen!2sin!4v1727776132165!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- /.google-map -->
            <div class="google-map__wrapper">
                <div class="container">
                    <div class="google-map__info">
                        <h3 class="google-map__info__title">Contact Info</h3>
                        <ul class="list-unstyled google-map__info__list">
                            <li><i class="flaticon-pin"></i>2nd Floor, I-Hub Incubation Center, SRKR Engineering College, Chinna Amiram, Bhimavaram</li>
                            <li><i class="flaticon-phone"></i><a href="tel:9646671111">+91 9646671111</a></li>
                            <li><i class="flaticon-email"></i><a href="mailto:info@gmail.com">info@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- /.google-map -->

        <?php include('footer.php'); ?>