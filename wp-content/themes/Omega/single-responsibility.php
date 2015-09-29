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
            <?php dynamic_sidebar('sidebar-4'); ?>
            </div>
            <div class="inner-right-container">
               <?php if(have_posts()): ?>
                <div class="page-text clearfix">
                    
                    <?php while(have_posts()): the_post(); ?>
                        <?php if(has_post_thumbnail() && 1 <> 1): ?>
                        <?php $port_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium'); ?>
                        <figure class="latest-news-blocks-image">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $port_image[0]; ?>" alt=""></a>
                        </figure>
                        <?php endif; ?>
                        <div class="single-con">
                            <p><?php the_content(); ?></p>
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