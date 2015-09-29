<?php /* Template Name: Banner Top Header Sidebar Our Business*/ ?>
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
            <?php if(is_active_sidebar('sidebar-5')){dynamic_sidebar('sidebar-5');}; ?>
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

            <div class="business-container clearfix">
                <h3 class="filter-location-label">FILTER PROJECTS BY SECTOR OR SCOPE ...</h3>
                <div class="fliter-portfolio clearfix">
                    <form name="portfolio-filter" id="portfolio-filter" action="" method="GET">
                        <div class="filter-portfolio-block">
                            <div class="filter-select">
                                <label for="">SECTOR</label>
                                <span class="filter-select-select">
                                    <?php 
                                        $args = array(
                                            'show_option_all'    => '',
                                            'show_option_none'   => 'All Sectors',
                                            'option_none_value'  => 'all',
                                            'orderby'            => 'ID', 
                                            'order'              => 'ASC',
                                            'show_count'         => 0,
                                            'hide_empty'         => 0, 
                                            'child_of'           => 0,
                                            'exclude'            => '',
                                            'echo'               => 1,
                                            'selected'           => 1,
                                            'hierarchical'       => 1, 
                                            'name'               => 'sectors',
                                            'id'                 => 'business-sectors',
                                            'class'              => '',
                                            'depth'              => 0,
                                            'tab_index'          => 0,
                                            'taxonomy'           => 'sectors',
                                            'hide_if_empty'      => false,
                                            'value_field'    => 'slug', 
                                        ); 
                                        wp_dropdown_categories( $args );
                                    ?>
                                </span>
                            </div>
                            <div class="filter-select">
                                <label for="location">SCOPE</label>
                                <span class="filter-select-select">
                                    <?php 
                                        $args = array(
                                            'show_option_all'    => '',
                                            'show_option_none'   => 'Type of work',
                                            'option_none_value'  => 'all',
                                            'orderby'            => 'ID', 
                                            'order'              => 'ASC',
                                            'show_count'         => 0,
                                            'hide_empty'         => 0, 
                                            'child_of'           => 0,
                                            'exclude'            => '',
                                            'echo'               => 1,
                                            'selected'           => 1,
                                            'hierarchical'       => 1, 
                                            'name'               => 'locations',
                                            'id'                 => 'business-locations',
                                            'class'              => '',
                                            'depth'              => 0,
                                            'tab_index'          => 0,
                                            'taxonomy'           => 'locations',
                                            'hide_if_empty'      => false,
                                            'value_field'    => 'slug', 
                                        ); 
                                        wp_dropdown_categories( $args );
                                    ?>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="business-lists-container clearfix" id="our-business-filter"></div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>