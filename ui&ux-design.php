<?php include 'header.php'; ?>
<main id="main">

    <section class="breadcumb-section relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18">UI/UX Design</h1>
                        <div class="title-group text-white">
                            <a href="index.html">Home</a>
                            <a href="#">UI/UX Design</a>
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
                            <span class="sub-title texts-blue font-man">Exceptional UI/UX Design</span>
                            <h2 class="title">Elevate Your User Experience with Innovative Design</h2>
                            <p class="des">Transform your digital presence with our expert UI/UX design solutions. We focus on creating visually stunning and user-centric interfaces that enhance usability and engagement. From initial concept to final design, our team crafts experiences that are not only beautiful but also intuitive, ensuring every interaction is seamless and satisfying for your users.</p>
                        </div>
                        <img src="assets/images/service/service-bu4.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom:100px">
                    <div class="benefit-list">
                        <ul class="benefit-list-item">
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>User-Centric Design</h4>
                                </div>
                                <p>We prioritize user needs and preferences in our design process, ensuring intuitive interfaces that enhance usability and satisfaction.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Visually Engaging Interfaces</h4>
                                </div>
                                <p>Our designs are crafted to be aesthetically pleasing, combining modern visuals with functional layouts to captivate and retain users.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Consistent User Experience</h4>
                                </div>
                                <p>We ensure a cohesive experience across all touchpoints, maintaining consistency in design elements and interactions to build user trust.</p>
                            </li>
                            <li>
                                <div class="flex-three">
                                    <i class="icon-Check"></i>
                                    <h4>Data-Driven Decisions</h4>
                                </div>
                                <p>Our UX design process is informed by user research and analytics, allowing us to make data-driven decisions that enhance the effectiveness of your product.</p>
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
                                <p>+447846517457</p>
                            </div>
                        </div>
                        <div class="contact-wrap flex-three">
                            <div class="icon text-white">
                                <i class="icon-envelopes"></i>
                            </div>
                            <div class="contact-content">
                                <span class="font-man text-white">Email Us</span>
                                <p>info@genzbit.com</p>
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
                                    <input type="hidden" name="url" value="ui&ux-design">
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