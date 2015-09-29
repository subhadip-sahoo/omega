<?php /* Template Name: News */ ?>
<?php global $post; ?>
<?php get_header(); ?>
<section class="banner-container banner-container-inner clearfix">
    <article class="banner-slider">
        <div class="flexslider bannersider">
            <ul class="slides">
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
            </ul>
        </div>
    </article>
</section>

<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <article class="page-container clearfix">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post();?>
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <h4 class="page-caption"><div id="intro"><p><?php echo get_field('page_caption');?></p></div></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php endif; ?>
            <div class="page-text clearfix grid-row">
                <div class="media-grid grid-row6">
                    <?php query_posts(array('post_type' => 'news', 'posts_per_page' => 5));?>
                    <?php if(have_posts()): ?>
                    <div class="latest-news-blocks-lists">
                        <h2>Latest news</h2>
                        <ul class="latest-news-blockUl">
                            <?php while(have_posts()): the_post(); ?>
                            <li class="latest-news-blocksLi clearfix">
                                <?php if(has_post_thumbnail()): ?>
                                <?php $port_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'home_latest_news_image'); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <figure class="latest-news-blocks-image">
                                        <img src="<?php echo $port_image[0]; ?>" alt="">
                                    </figure>
                                </a>
                                <?php endif; ?>
                                <div class="latest-news-blocks-con">
                                    <p class="latest-newsDate"><?php echo get_the_date(NEWS_DATE_FORMAT,get_the_ID()); ?></p>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </li>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                 <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();?>
                <div class="col right grid-row6">
                    <div id="mediaPreviews">
                        <div class="preview last">
                            <h2>Omega Frontline</h2>
                            <div class="content">
                                <a target="_blank" href="<?php echo get_field('omega_frontline_url'); ?>">
                                    <?php if(has_post_thumbnail()): ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'omega_frontline_image'); ?>
                                    <img width="460" height="259" alt="" src="<?php echo $image[0]; ?>">
                                    <?php endif; ?>
                                    <span class="button">Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mediaContacts">
                <h2>Media contacts</h2>
                <div class="box">
                    <div class="column">
                        <h3>Sydney</h3>
                        <div class="vcard">
                            <div class="org">Head Office</div>
                            <div class="adr">
                                <div class="street-address">111 Kurrajong Avenue,</div>
                                <span class="locality">Mount Druitt,</span>
                                <span class="postal-code">NSW 2770</span>
                                <span class="country-name">Australia</span>
                            </div>
                            <div class="tel">+ 02 9832 0000</div>
                            <a href="mailto:info@omegaind.com.au" class="email">info@omegaind.com.au</a>
                        </div>
                        <div class="map" style="width: 220px;">
                            <a href="https://www.google.co.in/maps/place/111+Kurrajong+Ave,+Mt+Druitt+NSW+2770,+Australia/@-33.762774,150.801659,17z/data=!3m1!4b1!4m2!3m1!1s0x6b129aed6bf00629:0x715248e8228190dd?hl=en">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.918416781719!2d150.801659!3d-33.762774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129aed6bf00629%3A0x715248e8228190dd!2s111+Kurrajong+Ave%2C+Mt+Druitt+NSW+2770%2C+Australia!5e0!3m2!1sen!2sin!4v1443405943494" width="220" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="column last">
                        <h3>Brisbane</h3>
                        <div class="vcard">
                            <div class="org">OLD Branch</div>
                            <div class="adr">
                                <div class="street-address">444 Newman Road,</div>
                                <span class="locality">Geebung,</span>
                                <span class="postal-code">QLD 4034,</span>
                                <span class="country-name">Australia</span>
                            </div>
                            <div class="tel">+ 07 3265 7890</div>
                            <a href="mailto:info@omegaind.com.au" class="email">info@omegaind.com.au</a>
                        </div>
                        <div class="map" style="width: 220px;">
                            <a target="_blank" href="https://www.google.co.in/maps/place/444+Newman+Rd,+Geebung+QLD+4034,+Australia/@-27.364176,153.04849,17z/data=!3m1!4b1!4m2!3m1!1s0x6b93e2923f96899f:0x9fadca7a48b251e9?hl=en">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.3694202593047!2d153.04849!3d-27.364176000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93e2923f96899f%3A0x9fadca7a48b251e9!2s444+Newman+Rd%2C+Geebung+QLD+4034%2C+Australia!5e0!3m2!1sen!2sin!4v1443406105135" width="220" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php endif; ?>
        </article>
    </section>
</section>
<?php get_footer(); ?>