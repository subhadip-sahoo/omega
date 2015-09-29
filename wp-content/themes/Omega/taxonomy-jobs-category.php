<?php 
global $wp_query;
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
                <h1 class="page-title"><?php echo get_queried_object()->name; ?></h1>
            </header>
            <div class="inner-left-container sidebar-container">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>
            <div class="inner-right-container job-section">
                <p><?php echo term_description(get_queried_object()->term_id, get_queried_object()->taxonomy); ?></p>
               <?php if(have_posts()): ?>
                <div class="page-text clearfix">
                    <?php while(have_posts()): the_post(); ?>
                        <div class="single-con">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a class="btn btn-viewmore" href="<?php the_permalink(); ?>">Apply<i class="icon icon-viewmore"></i></a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <?php endif; ?>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>