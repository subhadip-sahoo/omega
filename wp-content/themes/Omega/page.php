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
            <div class="paginate banner-paginate">
                <div class="banner-paginate-inner">
                    <span class="current-slide"></span>&nbsp;/&nbsp;<span class="total-slide"></span>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <article class="page-container clearfix">
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <h4 class="page-caption"><?php echo get_field('page_caption');?></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <div class="page-text clearfix">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php endif; ?>
    </section>
</section>
<?php get_footer(); ?>