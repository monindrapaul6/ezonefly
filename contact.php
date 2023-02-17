<?php
    include "header.php";
?>

    <!--==================== page content ====================-->

    <div class="page-section">
        <!--=============================================
		=            google map container         =
		=============================================-->

        <div class="google-map-container mb-45">
            <div id="google-map"></div>
        </div>

        <!--=====  End of google map container  ======-->

        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45">
                    <!--=======  contact page side content  =======-->

                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Contact Us</h3>
                        <p class="contact-page-message mb-30">Claritas est etiam processus dynamicus, qui sequitur
                            mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus
                            parum claram anteposuerit litterarum formas human.</p>
                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><i class="fa fa-fax"></i> Address</h4>
                            <p>123 Main Street, Anytown, CA 12345 – USA</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><i class="fa fa-phone"></i> Phone</h4>
                            <p>Mobile: (08) 123 456 789</p>
                            <p>Hotline: 1009 678 456</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><i class="fa fa-envelope-o"></i> Email</h4>
                            <p>yourmail@domain.com</p>
                            <p>support@hastech.company</p>
                        </div>

                        <!--=======  End of single contact block  =======-->
                    </div>

                    <!--=======  End of contact page side content  =======-->

                </div>
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <!--=======  contact form content  =======-->

                    <div class="contact-form-content">
                        <h3 class="contact-page-title">Tell Us Your Message</h3>

                        <div class="contact-form">
                            <form id="contact-form" action="https://whizthemes.com/mail-php/jaber/contact.php" method="post">
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" name="name" id="customername" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" name="email" id="customerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" id="contactSubject">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" id="contactMessage"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" value="submit" id="submit" class="theme-button contact-button"
                                        name="submit">Send</button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                    </div>

                    <!--=======  End of contact form content =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of page content  ====================-->


    <?php
    include "footer.php";
?>