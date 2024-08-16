<?php include 'header.php'; ?>

<main id="main">

    <section class="breadcumb-section relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18">Software Development</h1>
                        <div class="title-group text-white">
                            <a href="index.php">Home</a>
                            <a href="service.php">Services</a>
                            <a href="#">Software Development</a>
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
                                    <i class="icon-asterisk"></i>
                                    <span class="text-slider">Web Development</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-benefit mb-60 pt-122">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="benefit-content">
                        <div class="heading-title mb-40">
                            <span class="sub-title texts-blue font-man">Innovative Software Development</span>
                            <h2 class="title fs-2">Transforming Ideas into Powerful Software Solutions</h2>
                            <p class="des">Unlock the potential of your business with our creative software development services. We turn visionary concepts into high-performance applications, blending creativity with technology to deliver scalable, secure, and bespoke software solutions that drive efficiency and growth.</p>
                        </div>
                    </div>
                    <img src="assets/images/service/service-1.jpg" alt="image">
                </div>
                <div class="col-md-6" style="margin-bottom:100px">
                    <div class="benefit-list">
                        <ul class="benefit-list-item">
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Customized Solutions</h4>
                                </div>
                                <p>We craft bespoke software solutions tailored to your specific business needs, ensuring a perfect fit for your goals and challenges.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Innovative Technology</h4>
                                </div>
                                <p>Leveraging the latest technologies and methodologies to build robust, scalable software that keeps you ahead in the competitive landscape.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Efficient Development Process</h4>
                                </div>
                                <p>Streamlined development practices to deliver high-quality software on time and within budget, minimizing delays and maximizing productivity.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Ongoing Support</h4>
                                </div>
                                <p>Our dedicated team delivers continuous support and maintenance, ensuring your software remains up-to-date and performing optimally.</p>
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
                            <h2 class="title fs-2 text-white">Ready to Start Your Next Project?</h2>
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
                                    <input type="hidden" name="url" value="software-development">
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