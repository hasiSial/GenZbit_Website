<?php include 'header.php'; ?>


<main id="main">

    <section class="breadcumb-section relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18">Web Development</h1>
                        <div class="title-group text-white">
                            <a href="index.php">Home</a>
                            <a href="service.php">Services</a>
                            <a href="#">Web Development</a>
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
                            <span class="sub-title texts-blue font-man">Web Development Expertise</span>
                            <h2 class="title">Unlock the Power of Cutting-Edge Web Solutions</h2>
                            <p class="des">Transform your digital presence with our innovative web development services. We blend creativity with technology to build dynamic and responsive websites that captivate your audience and drive business success. Experience perfect integration, exceptional performance, and tailored solutions that make your brand stand out in the digital landscape.</p>
                        </div>
                    </div>
                    <img src="assets/images/service/service-bu1.jpg" alt="image">
                </div>
                <div class="col-md-6" style="margin-bottom:100px">
                    <div class="benefit-list">
                        <ul class="benefit-list-item">
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Custom Web Solutions</h4>
                                </div>
                                <p>We craft bespoke web applications that perfectly align with your business needs, ensuring a achieving user experience and creative functionality.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Enhanced User Experience</h4>
                                </div>
                                <p>Our designs focus on creating intuitive and engaging interfaces that captivate users and drive higher interaction and satisfaction.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Scalable Performance</h4>
                                </div>
                                <p>We build scalable web solutions that grow with your business, ensuring optimal performance and reliability as your user base expands.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>24/7 Support and Maintenance</h4>
                                </div>
                                <p>Our dedicated team is available around the clock to provide support and maintain your web applications, ensuring continuous service and swift issue resolution.</p>
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
                            $status = $_GET['status'] ?? '';
                            $message = $_GET['message'] ?? '';

                            if ($status && $message) {
                                $alertClass = $status === 'success' ? 'alert-success' : 'alert-danger';
                                echo "<div class='alert $alertClass'>$message</div>";
                            }
                            ?>
                        </div>
                        <form action="send_mail.php" method="POST" class="form-contact-home">
                            <input type="hidden" name="form_type" value="service">
                            <div class="input-group flex-one">
                                <fieldset class="relative mb-20">
                                    <input type="hidden" name="url" value="web-development">
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