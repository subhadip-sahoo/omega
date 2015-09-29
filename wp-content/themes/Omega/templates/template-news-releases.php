<?php 
/* Template Name: News releases */
global $post;
get_header();
?>
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

<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <article class="page-container clearfix">
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>
            <div class="inner-left-container sidebar-container">
                <?php dynamic_sidebar('sidebar-7'); ?>
            </div>
            <div class="inner-right-container">
               <div class="page-text clearfix">
                    <div class="fliter-portfolio clearfix">
                        <form name="news-filter" id="news-filter" action="" method="GET">
                            <label for="filter" class="filter-location-label">Filter news by year or hubs ...</label>
                            <div class="filter-portfolio-block">
                                <div class="filter-select">
                                    <label for="year">YEAR</label>
                                    <span class="filter-select-select">
                                        <?php 
                                            $args = array(
                                                'show_option_all'    => '',
                                                'show_option_none'   => 'Years',
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
                                                'name'               => 'years',
                                                'id'                 => 'years',
                                                'class'              => '',
                                                'depth'              => 0,
                                                'tab_index'          => 0,
                                                'taxonomy'           => 'years',
                                                'hide_if_empty'      => false,
                                                'value_field'	 => 'slug',	
                                            ); 
                                            wp_dropdown_categories( $args );
                                        ?>
                                    </span>
                                </div>
                                <div class="filter-select">
                                    <label for="hubs">HUBS</label>
                                    <span class="filter-select-select">
                                        <?php 
                                            $args = array(
                                                'show_option_all'    => '',
                                                'show_option_none'   => 'Hubs',
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
                                                'name'               => 'hubs',
                                                'id'                 => 'hubs',
                                                'class'              => '',
                                                'depth'              => 0,
                                                'tab_index'          => 0,
                                                'taxonomy'           => 'hubs',
                                                'hide_if_empty'      => false,
                                                'value_field'	 => 'slug',	
                                            ); 
                                            wp_dropdown_categories( $args );
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="grid-row portfolio-grid news-releases-page" id="filtered-news"></div>
                </div>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>