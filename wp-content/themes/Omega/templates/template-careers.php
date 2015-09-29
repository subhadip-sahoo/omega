<?php /* Template Name: Careers */ ?>
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
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <h4 class="page-caption"><?php echo get_field('page_caption');?></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <div class="page-text clearfix">
                <?php $terms = get_terms('jobs-category', array('hide_empty' => 0)); ?>
                <?php if(is_array($terms) && !empty($terms)): ?>
                <div class="grid-row careers-grid">
                    <?php foreach($terms as $term): ?>
                    <div class="grid-row4">
                        <div class="grid-row-block">
                            <h4 class="who-are-grid-title"><?php echo $term->name; ?></h4>
                            <?php $tax_image = get_field('job_image', $term->taxonomy.'_'.$term->term_id); ?>
                            <?php $image = wp_get_attachment_image_src($tax_image, 'career_page_image'); ?>
                            <?php if(!empty($image[0])): ?>
                            <figure class="who-are-grid-img">
                                <img src="<?php echo $image[0]; ?>" alt="image" width="266" height="200">
                            </figure>
                            <?php endif; ?>
                            <p><?php echo mb_strimwidth(wp_strip_all_tags(term_description( $term->term_id, $term->taxonomy )), 0, 200); ?></p>
                            <a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>" class="btn btn-block btn-more">More <i class="icon icon-more"></i></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="grid-row careers-grid">
                    <div class="grid-row4">
                        <div class="grid-row-block">
                            <h4 class="who-are-grid-title">There is nothing to display!</h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php query_posts(array('post_type' => 'career', 'posts_per_page' => -1)); ?>
                <?php if(have_posts()): ?>
                    <div class="grid-row careers-grid">
                        <?php if($post_id = get_career_search_page('career')) : ?>
                            <div class="grid-row6 search-carrer-grid">
                                <div class="grid-row-block">
                                    <h4 class="who-are-grid-title"><?php echo get_the_title($post_id); ?></h4>
                                    <a href="<?php echo get_permalink(get_career_search_page('career')); ?>">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'career_search_image'); ?>
                                        <?php if(!empty($image[0])): ?>
                                        <figure class="who-are-grid-img">
                                            <img src="<?php echo $image[0];?>" alt="image" width="560" height="367">
                                        </figure>
                                        <?php endif; ?>
                                        <div class="search-career-grid-inn">
                                            <p><?php echo get_field('mini_title', $post_id, TRUE); ?></p>
                                            <h2><?php echo get_field('mini_description', $post_id, TRUE); ?></h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                            <div class="grid-row6 search-carrer-grid">
                                <div class="grid-row-block marketplace-area">
                                    <h4 class="who-are-grid-title">MARKETPLACE</h4>
                                    <a href="<?php echo get_permalink(get_career_search_page('career')); ?>">
                                        <figure class="who-are-grid-img">
                                            <img src="<?php echo $image[0];?>" alt="image" width="560" height="367">
                                        </figure>
                                    
                                        <div class="search-career-grid-inn">
                                            <p>Discover How we support sustainability in construction</p>
                                        </div>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-block btn-more btn-bottom">More <i class="icon icon-more"></i></a>
                                </div>
                            </div>
                        <?php wp_reset_query(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>