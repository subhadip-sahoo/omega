        </article>
    </section>
</section>
<footer class="footer-container clearfix">
    <div class="footer-top-container clearfix">
        <div class="wrapper">
            <div class="footer-top-container-inner">
                <div class="grid-row">
                    <div class="grid-row3">
                        <div class="gird-row-block">
                            <div class="footer-cols clearfix">
                                <h3 class="footer-cols-title">Quick Links</h3>
                                <div class="footer-cols-content">
                                    <nav class="footer-nav">
                                        <?php
                                            $footer_args = array(
                                                'theme_location'  => 'footer',
                                                'menu'            => '',
                                                'container'       => '',
                                                'container_class' => '',
                                                'container_id'    => '',
                                                'menu_class'      => 'menu',
                                                'menu_id'         => '',
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul>%3$s</ul>',
                                                'depth'           => 0,
                                                'walker'          => ''
                                            );
                                            
                                            wp_nav_menu( $footer_args );
                                        ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-row3">
                        <div class="gird-row-block">
                            <div class="footer-cols clearfix">
                                <h3 class="footer-cols-title">Latest News</h3>
                                <div class="footer-cols-content latest-jobs">
                                    <ul>
                                        <?php query_posts(array('post_type' => 'news', 'posts_per_page' => 2)); ?>
                                        <?php if(have_posts()): ?>
                                        <?php while(have_posts()) : the_post();?>
                                        <li><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(wp_strip_all_tags(get_the_content(get_the_ID())), 0, 50, '..[..]'); ?></a></li>
                                        <?php endwhile; ?>
                                        <?php wp_reset_query(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-row3">
                        <div class="gird-row-block">
                            <div class="footer-cols clearfix">
                                <h3 class="footer-cols-title">find us here</h3>
                                <div class="footer-cols-content ">
                                    <p class="footer-tel"><i class="icon icon-footer-tel"></i> <a href="<?php echo(get_field('site_phone_number_value','option')) ? 'tel:'.get_field('site_phone_number_value','option') : '#'; ?>"><?php echo(get_field('site_phone_number_label','option')) ? get_field('site_phone_number_label','option') : ''; ?></a></p>
                                    <p class="footer-mail"><i class="icon icon-footer-mail"></i> <a href="<?php echo(get_field('site_email_address','option')) ? 'mailto:'.get_field('site_email_address','option') : '#'; ?>"><?php echo(get_field('site_email_address','option')) ? get_field('site_email_address','option') : ''; ?></a></p>
                                    <div class="footer-social">
                                        <ul class="social social-lg">
                                            <li><a href="<?php echo(get_field('facebook_url','option')) ? get_field('facebook_url','option') : '#'; ?>" target="_blank"><i class="icon icon-fb"></i></a></li>
                                            <li><a href="<?php echo(get_field('twitter_url','option')) ? get_field('twitter_url','option') : '#'; ?>" target="_blank"><i class="icon icon-tw"></i></a></li>
                                            <li><a href="<?php echo(get_field('linkedin_url','option')) ? get_field('linkedin_url','option') : '#'; ?>" target="_blank"><i class="icon icon-in"></i></a></li>
                                            <li><a href="<?php echo(get_field('you_tube_url','option')) ? get_field('you_tube_url','option') : '#'; ?>" target="_blank"><i class="icon icon-gp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-base-container clearfix">
        <div class="wrapper">
            <div class="footer-base-container-inner">
                <p class="copyright-text">© 2015 Omega Industries. All Right Reserved</p>
                <!--<p class="powerd-text">Powered by <a href="https://www.businessprodesigns.com/" target="_blank" rel="nofollow">businessprodesigns.com</a></p>-->
            </div>
        </div>
    </div>
</footer>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.0.js"><\/script>')</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.meanmenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.fitvids.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>