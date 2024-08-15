<?php include 'header.php'; ?>

<main id="main">

    <section class="breadcumb-section relative ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18">Contact Us</h1>
                        <div class="title-group text-white">
                            <a href="index.php">Home</a>
                            <a href="#">Contact Us</a>
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

    <section class="contact-us-page pt-130 pb-130">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-us-page-content">
                        <div class="heading-title">
                            <span class="sub-title text-blue2 font-man">Contact us today</span>
                            <h2 class="fs-1 title">We'd love to hear<br> from you</h2>
                            <p class="des">Have a question, need assistance, or eager to explore how GenZbit
                                can elevate your business? Our dedicated team is ready to assist you. Reach
                                out to us through your preferred channel below.</p>
                        </div>
                        <div class="contact-item-wrap">
                            <div class="contact-item">
                                <div class="flex item-contact">
                                    <div class="icon">
                                        <i class="icon-maps"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Location</h4>
                                        <p>45/A, New Satellite Town Bahawalpur, Punjab Pakistan</p>
                                    </div>
                                </div>

                            </div>
                            <div class="contact-item">
                                <div class="flex item-contact">
                                    <div class="icon">
                                        <i class="icon-phones"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Phone</h4>
                                        <p><a href="tel:+923087844475">+923087844475</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="flex item-contact">
                                    <div class="icon">
                                        <i class="icon-envelopes"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Email</h4>
                                        <p><a href="mailto:info@genzbit.com">info@genzbit.com</a></p>
                                    </div>
                                </div>

                            </div>
                            <div class="contact-item">
                                <div class="flex item-contact">
                                    <div class="icon">
                                        <i class="icon-share-nodes"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Social</h4>
                                        <ul class="social-footer flex-three">
                                            <!-- <li>
                                                    <a href="#" class="flex-five"><i
                                                            class="icon-facebook"></i></a>
                                                </li> -->
                                            <li>
                                                <a href="https://www.linkedin.com/company/genzbit/" class="flex-five"><i class="icon-ins"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="assets/images/page/contact.jpg" alt="image">

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="contact-us-page-form bg-2">
                        <h3 class="title">Send Us Message</h3>
                        <?php
                        $status = $_GET['status'] ?? '';
                        $message = $_GET['message'] ?? '';

                        if ($status && $message) {
                            $alertClass = $status === 'success' ? 'alert-success' : 'alert-danger';
                            echo "<div class='alert $alertClass'>$message</div>";
                        }
                        ?>
                        <form class="contact-us-form" id="contactform" action="send_mail.php" method="POST">
                            <input type="hidden" name="form_type" value="contact">
                            <fieldset class="mb-18">
                                <label>Your Name</label>
                                <input type="hidden" name="url" value="contact-us">
                                <input type="text" class="form-control" placeholder="Enter your name"
                                    name="name" id="name" required>
                            </fieldset>
                            <fieldset class="mb-18">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email"
                                    name="email" id="email" required>
                            </fieldset>
                            <fieldset class="mb-18">
                                <label>Website</label>
                                <input type="url" class="form-control" id="url" name="website_url"
                                    placeholder="Enter your website" required>
                            </fieldset>
                            <fieldset class=" mb-18">
                                <label>Message</label>
                                <textarea rows="5" cols="50" placeholder="Write message" name="message"
                                    id="message"
                                    required">                                            </textarea>
                            </fieldset>
                            <button class="btn-submit" type="submit">Send Message <i
                                    class="icon-right-icon"></i></button>
                            <!-- <fieldset>
                                    <button class="btn-submit" type="submit">Send Message <i
                                            class="icon-right-icon"></i></button>
                                </fieldset> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="map-page">
        <div class="tf-container full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map relative">
                        <div><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3475.9791585197545!2d71.7119015746198!3d29.400165748810373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b91c63286145d%3A0xae9f0c9f56d61e67!2seSolutions%20Provider!5e0!3m2!1sen!2s!4v1722248081226!5m2!1sen!2s"
                                width="1400" height="770" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        <!-- <div id="map"></div> -->
                    </div>
                </div>
            </div>

        </div>

    </section>


</main>

<?php include 'footer.php'; ?>