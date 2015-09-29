<?php /* Template Name: Leaderships */ ?>
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
            <?php dynamic_sidebar('sidebar-6'); ?>
        </div>
        <div class="inner-right-container">
            <article class="page-container clearfix senior-leadership-page">
                <div class="page-text clearfix">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <?php endif; ?>
                    <h2>Senior Leadership Team</h2>
                    <?php query_posts(array('post_type' => 'leaderships', 'posts_per_page' => -1)); ?>
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php if(has_post_thumbnail()): ?>
                            <?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'leadership_list_image'); ?>
                            <a href="#leader-<?php echo get_the_ID(); ?>" class="open-popup">
                                <figure>
                                    <img width="220" height="124" alt="image" src="<?php echo $feature_image[0]; ?>">
                                </figure>
                                <?php endif; ?>
                                <div>
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo get_field('leaders_designation'); ?></p>
                                </div>
                            </a>
                            <div id="leader-<?php echo get_the_ID(); ?>" class="white-popup mfp-hide">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_field('leaders_designation'); ?></p>
                                <?php if(has_post_thumbnail()): ?>
                                <?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large'); ?>
                                <figure style="margin: 20px;">
                                    <a href="#leader-<?php echo get_the_ID(); ?>" class="open-popup"><img width="" height="" alt="image" src="<?php echo $feature_image[0]; ?>"></a>
                                </figure>
                                <?php endif; ?>
                                <div>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
            </article>
        </div>
    </section>
</section>
<?php get_footer(); ?>