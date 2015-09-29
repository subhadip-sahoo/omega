<?php get_header(); global $post;?>
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
        <div class="paginate banner-paginate">
            <div class="banner-paginate-inner">
                <span class="current-slide"></span>&nbsp;/&nbsp;<span class="total-slide"></span>
            </div>
        </div>
    </article>
</section>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <article class="page-container portfolio-details-page-container clearfix">
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?>. <?php echo get_portfolio_locations('locations');?></h1>
            </header>
            <div class="portfolio-details-dta clearfix">
                <ul>
                    <?php if(get_field('client') <> '') : ?>
                    <li><span>Client</span>  /  <?php echo get_field('client'); ?></li>
                    <?php endif; ?>
                    <?php if(get_portfolio_locations('sectors') <> '') : ?>
                    <li><span>Sector</span> / <?php echo get_portfolio_locations('sectors');?></li>
                    <?php endif; ?>
                    <?php if(get_field('services') <> '') : ?>
                    <li><span>Services</span> / <?php echo get_field('services'); ?></li>
                    <?php endif; ?>
                    <?php if(get_field('duration') <> '') : ?>
                    <li><span>Duration</span> / <?php echo get_field('duration'); ?></li>
                    <?php endif; ?>
                    <?php if(get_field('project_partners') <> '') : ?>
                    <li><span>Project partners</span> / <?php echo get_field('project_partners'); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="page-text clearfix">
                <div class="grid-row portfolio-details-grid">
                    <?php if(get_the_content($post->ID) <> '') : ?>
                    <div class="grid-row2">
                        <div class="grid-row-block">
                            <h4 class="portfolio-details-content-title">Full project details</h4>
                            <?php echo get_the_content($post->ID); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php $project_facts = get_field('project_facts'); ?>
                    <?php if(is_array($project_facts) && !empty($project_facts)) : $cls_count = 0;?>
                    <div class="grid-row2">
                        <div class="grid-row-block">
                            <h4 class="portfolio-details-content-title">Project facts</h4>
                            <div class="portfolio-details-fact-area">
                                <?php foreach ($project_facts as $fact) : $cls_count++;?>
                                <p <?php echo ($cls_count <= 2) ? 'class="lead"' : '';?>><?php echo $fact['fact']; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div> 
                <?php $portfolio_gallery = get_field('portfolio_gallery'); ?>
                <?php if(is_array($portfolio_gallery) && !empty($portfolio_gallery)) : ?>
                <div class="portfolio-details-slider-area clearfix">
                    <div class="flexslider portfoliodetails-slider">
                        <ul class="slides">
                            <?php foreach ($portfolio_gallery as $gal) : ?>
                            <?php $portfolio_gallery_image = wp_get_attachment_image_src($gal['id'], 'portfolio_gallery_image'); ?>
                            <li> 
                                <img src="<?php echo $portfolio_gallery_image[0]; ?>" alt="" width="1118" height="582" />
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="paginate banner-paginate">
                        <div class="banner-paginate-inner">
                            <span class="current-port-slide"></span>&nbsp;/&nbsp;<span class="total-port-slide"></span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(get_field('portfolio_you_tube_video_id') <> '') : ?>
                <div class="portfolio-details-video-area clearfix">
                    <h4 class="portfolio-details-video-title"><?php echo get_field('portfolio_video_title'); ?></h4>
                    <div class="portfolio-details-video clearfix">
                        <iframe width="695" height="391" src="https://www.youtube.com/embed/<?php echo get_field('portfolio_you_tube_video_id'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <?php endif; ?>
                <footer class="portfolio-details-footer clearfix">
                    <ul class="portfolio-detailsul">
                        <li class="portfolio-detailsli">
                            <a href="<?php echo href(CONTACT_US_PAGE); ?>">
                                <i class="icon icon-contact"></i>
                                <div>
                                    <h4>CONTACT US</h4>
                                    <p>ABOUT YOUR PROJECT</p>
                                </div>
                            </a>
                        </li>
                        <li class="portfolio-detailsli">
                            <a href="<?php echo site_url('our-work'); ?>">
                                <i class="icon icon-view"></i>
                                <div>
                                    <h4>View</h4>
                                    <p>All projects</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo site_url('our-work'); ?>" class="btn btn-all-portfolio">see all of our portfolio</a>
                </footer>
            </div>
        </article>
    </section>
</section>
<?php endwhile;?>
<?php wp_reset_query(); ?>
<?php endif; ?>
<?php get_footer(); ?>        