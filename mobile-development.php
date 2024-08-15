<?php include 'header.php'; ?>

<main id="main">

    <section class="breadcumb-section relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18">Mobile Development</h1>
                        <div class="title-group text-white">
                            <a href="index.php">Home</a>
                            <a href="service.php">Services</a>
                            <a href="#">Mobile Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Marque text -->
    <section class="marque-text-style">
        <div class="tf-container full">
            <div class="row">
                <div class="col-md-12">
                    <div class="marquee-wrapper text-slider ">
                        <div class="marquee-inner to-left">
                            <ul class="marqee-list d-flex marque-slider">
                                <li class="marquee-item">
                                    <span class="text-slider">Web Development</span><i class="icon-asterisk"></i>
                                    <span class="text-slider">Mobile Application Development</span><i
                                        class="icon-asterisk"></i>
                                    <span class="text-slider">Software Development</span><i
                                        class="icon-asterisk"></i>
                                    <span class="text-slider">UI/UX Design</span>
                                    <span class="text-slider">Web Development</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-benefit pt-122">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="benefit-content">
                        <div class="heading-title mb-40">
                            <span class="sub-title texts-blue font-man">Mobile Development Excellence</span>
                            <h2 class="title">Unlock the Potential of Mobile Technology</h2>
                            <p class="des">Experience the future of mobile development with our creative solutions. We specialize in creating intuitive and high-performance mobile apps that engage users and drive business success. From concept to launch, our team ensures a perfect and impactful mobile experience tailored to your needs.</p>
                        </div>
                        <img src="assets/images/service/service-bu3.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom:100px">
                    <div class="benefit-list">
                        <ul class="benefit-list-item">
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Ideal Mobile Experience</h4>
                                </div>
                                <p>We create intuitive and user-friendly mobile apps that offer a immaculate experience across all devices, ensuring your users are always engaged and satisfied.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>High Performance & Speed</h4>
                                </div>
                                <p>Our mobile applications are optimized for high performance and speed, providing fast load times and smooth interactions to keep your users coming back.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Cross-Platform Compatibility</h4>
                                </div>
                                <p>We develop apps that work flawlessly across multiple platforms, whether it's iOS or Android, ensuring maximum reach and impact.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Dedicated Support Team</h4>
                                </div>
                                <p>Our dedicated support team is available to assist you at every step, from development to deployment and beyond, ensuring a smooth and successful launch.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="section-contact contact-service-details bg-10 pt-130 pb-130">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="content">
                        <div class="heading-title mb-40">
                            <span class="sub-title text-white font-man">Get In Touch</span>
                            <h2 class="title text-white">Ready to Start Your Next Project?</h2>
                            <p class="des font-man text-white">We are here to help you transform your ideas into reality. Reach out to us for expert guidance and support on your upcoming projects.</p>
                        </div>
                        <div class="contact-wrap flex-three mb-40">
                            <div class="icon text-white">
                                <i class="icon-phones"></i>
                            </div>
                            <div class="contact-content">
                                <span class="font-man text-white">Call Us Today</span>
                                <p><a class="text-white" href="tel:+923087844475">+923087844475</a></p>
                            </div>
                        </div>
                        <div class="contact-wrap flex-three">
                            <div class="icon text-white">
                                <i class="icon-envelopes"></i>
                            </div>
                            <div class="contact-content">
                                <span class="font-man text-white">Email Us</span>
                                <p><a class="text-white" href="mailto:info@genzbit.com">info@genzbit.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-contact-home1 style2">
                        <div class="inner-title-form center mb-30">
                            <h3 class="title-form">We’re Here to Assist!</h3>
                            <p>Our team is ready to provide the support you need for your next project. Fill out the form below to get in touch.</p>
                            <?php
                            $status = $_GET['status'];
                            $message = $_GET['message'];

                            if (isset($status) && isset($message)) {
                                $alertClass = $status === 'success' ? 'alert-success' : 'alert-danger';
                                echo "<div class='alert $alertClass'>$message</div>";
                            }
                            ?>
                        </div>
                        <form action="send_mail.php" method="POST" class="form-contact-home">
                            <input type="hidden" name="form_type" value="service">
                            <div class="input-group flex-one">
                                <fieldset class="relative mb-20">
                                    <input type="hidden" name="url" value="mobile-development">
                                    <input type="text" class="form-control" id="name-input" name="name" placeholder="Your Name" required>
                                    <i class="icon-user"></i>
                                </fieldset>
                                <fieldset class="relative mb-20">
                                    <input type="email" class="form-control" id="email-input" name="email" placeholder="Your Email" required>
                                    <i class="icon-envelopes"></i>
                                </fieldset>
                            </div>
                            <fieldset class="mb-20">
                                <label for="service-select">Select Service</label>
                                <select id="service-select" name="service" class="form-control">
                                    <option value="" disabled selected>Select Service</option>
                                    <option value="web-developer">Web Development</option>
                                    <option value="app-development">App Development</option>
                                    <option value="software-developer">Software Development</option>
                                    <option value="ui&ux-design">UI/UX Design</option>
                                </select>
                            </fieldset>
                            <fieldset class="mb-15">
                                <textarea id="message" name="message" rows="4" cols="50" placeholder="Your Message" required></textarea>
                            </fieldset>
                            <fieldset class="center">
                                <button class="btn-submit" type="submit">Send Message <i class="icon-right-icon"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

<?php include 'footer.php'; ?>