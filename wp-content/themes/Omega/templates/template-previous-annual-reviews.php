<?php 
/* Template Name: Previous Annual Reviews */
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
                <article class="page-container clearfix">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="page-text clearfix"><?php the_content(); ?></div>
                    <?php $terms = get_terms('years', array('hide_empty' => 1)); ?>
                    <?php if(is_array($terms) && !empty($terms)) : ?>
                    <ul>
                        <?php foreach($terms as $term) : ?>
                        <?php $pdf = get_field('upload_pdf', 'years_'.$term->term_id); ?>
                        <li>
                            <a href="<?php echo $pdf; ?>" target="_blank"><?php echo $term->name; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <?php endif; ?>
                </article>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>