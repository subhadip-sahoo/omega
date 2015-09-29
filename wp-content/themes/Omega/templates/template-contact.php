<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section class="banner-container banner-container-inner clearfix">
    <article class="banner-slider">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6633.8530571096735!2d150.80220617057228!3d-33.7625643945103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129aed6bf00629%3A0xa144c915be524ed4!2sOmega+Paints!5e0!3m2!1sen!2sin!4v1434429610570" width="1200" height="400" frameborder="0" style="border:0"></iframe>
        </div>
    </article>
</section>

<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <article class="page-container clearfix">
            <header class="page-heading">
                <h1 class="page-title">contact</h1>
                <h4 class="page-caption">We are a flourishing ISO 9001 and APAS Certified and NATA accredited Australian owned and operated paint manufacturer specialising in providing professional paint services and support to a myriad of clients in both domestic and commercial sectors throughout Australia since 1987.</h4>
                <p class="page-caption-text">Our aim is to deliver top quality painting solutions that exceed our client’s expectations.</p>
            </header>
            <div class="page-text clearfix">
                <div class="grid-row">
                    <div class="grid-row4">
                        <div class="grid-row-block contact-info-area">
                            <h3 class="contactin-title">Contact Info</h3>
                            <address>
                                <p>Omega Paints</p>
                                <p>111 Kurrajong Ave, <br>
                                 Mount Druitt <br>
                                 NSW 2770,<br>
                                 Australia</p>
                                <p><strong>Email:</strong> <a href="mailto:artwork@omega.com.au">artwork@omega.com.au</a></p>
                            </address>
                        </div>
                    </div>
                    <div class="grid-row8">
                        <div class="grid-row-block">
                            <div class="contact-form">
                                <h3 class="contactin-title">Contact Form</h3>
                                <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>