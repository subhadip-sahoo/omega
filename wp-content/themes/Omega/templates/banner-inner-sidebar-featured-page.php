<?php /* Template Name: Banner Top Header Sidebar width Featured */ ?>
<?php get_header(); ?>
<?php global $post;?>
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
        <header class="page-heading">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <h4 class="page-caption"><?php echo get_field('page_caption');?></h4>
            <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
        </header>
        <div class="inner-left-container sidebar-container">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
        <div class="inner-right-container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="page-container clearfix">
                        <div class="page-text clearfix">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
             <?php $our_services_section = get_field('our_services_section'); ?>
            <?php if(is_array($our_services_section) && !empty($our_services_section)) : ?>
            <div class="featured-project-lists clearfix">
            <header class="featured-project-title">
                <h2>Featured projects</h2>
            </header>
                <div class="grid-row careers-grid">
                    <?php foreach($our_services_section as $oss): ?>
                    <?php $feature_image = wp_get_attachment_image_src($oss['our_services_image'], 'career_search_image'); ?>
                    <?php $url = ($oss['our_services_url'] <> '') ? $oss['our_services_url'] : '#'; ?>
                    <div class="grid-row6 search-carrer-grid">
                        <div class="grid-row-block feature-project-area">
                            <h4 class="who-are-grid-title">Feature Project</h4>
                            <a href="<?php echo $url; ?>">
                                <?php if(!empty($feature_image[0])) : ?>
                                <figure class="who-are-grid-img">
                                    <img width="560" height="367" alt="image" src="<?php echo $feature_image[0]; ?>">
                                </figure>
                                <?php endif; ?>
                                <div class="search-career-grid-inn">
                                    <p><?php echo $oss['our_services_title']; ?></p>
                                </div>
                            </a>
                            <a href="<?php echo $url; ?>" class="btn btn-block btn-more btn-bottom">More <i class="icon icon-more"></i></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo site_url('our-work'); ?>" class="btn btn-more">See all of our projects <i class="icon icon-more"></i></a>
            </div>
            <?php endif; ?>
        </div>
    </section>
</section>
<?php get_footer(); ?>