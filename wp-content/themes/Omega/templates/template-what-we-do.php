<?php /* Template Name: What We Do */ ?>
<?php global $post;  ?>
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
                <h4 class="page-caption"><div id="intro"><p><?php echo get_field('page_caption');?></p></div></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <div class="page-text clearfix">
                <?php query_posts(array('post_type' => 'services', 'posts_per_page' => -1)); ?>
                <?php if(have_posts()) : ?>
                <div class="grid-row careers-grid">
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="grid-row4">
                        <div class="grid-row-block">
                            <h4 class="who-are-grid-title"><?php the_title(); ?></h4>
                            <?php if(has_post_thumbnail()) : ?>
                            <?php $services_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'career_page_image'); ?>
                            <figure class="who-are-grid-img">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $services_image[0]; ?>" alt="image" width="266" height="200"></a>
                            </figure>
                            <?php endif; ?>
                            <p><?php echo mb_strimwidth(get_the_content(get_the_ID()), 0, 200); ?></p>
                            <a href="<?php (get_field('page_link') <> '') ? the_field('page_link') : the_permalink(); ?>" class="btn btn-block btn-more">More <i class="icon icon-more"></i></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <?php endif; ?>               
                <?php if(1<>1): ?>
                <div class="who-are-logo-grid clearfix">
                    <div class="owl-carousel logo-carousel">
                        <div class="item">
                            <figure class="who-are-logo-image">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/about-logo1.jpg" alt="image" width="264" height="171"></a>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="who-are-logo-image">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/about-logo2.jpg" alt="image" width="264" height="171"></a>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="who-are-logo-image">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/about-logo3.jpg" alt="image" width="264" height="171"></a>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="who-are-logo-image">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/about-logo4.jpg" alt="image" width="264" height="171"></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="featured-section clearfix">
                    <?php 
                        $postid = $post->ID;
                        $content_post = get_post($postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                    ?>
    <!--                <p><?php //echo $content; ?></p>-->
                    <div class="grid-row careers-grid">
                    <div class="grid-row6 search-carrer-grid">
                        <div class="grid-row-block">
                            <h4 class="who-are-grid-title">Feature Content</h4>
                            <a href="<?php echo (get_field('feature_content_url') <> '') ? get_field('feature_content_url') : '#'; ?>">
                                <?php $feature_image = wp_get_attachment_image_src(get_field('feature_content_image'), 'career_search_image'); ?>
                                <?php if(!empty($feature_image[0])) : ?>
                                <figure class="who-are-grid-img">
                                    <img width="560" height="367" alt="image" src="<?php echo $feature_image[0]; ?>">
                                </figure>
                                <?php endif; ?>
                                <div class="search-career-grid-inn">
                                    <p><?php echo get_field('feature_title'); ?></p>
                                    <h2><?php echo get_field('feature_short_description'); ?></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php $project = get_field('featured_project'); ?>
                    <?php if(!empty($project)) : ?>
                    <div class="grid-row6 search-carrer-grid">
                        <div class="grid-row-block feature-project-area">
                            <h4 class="who-are-grid-title">Feature Project</h4>
                            <?php query_posts(array('post_type' => 'portfolios', 'p' => $project[0]->ID)); ?>
                            <?php while(have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) : ?>
                                <?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'career_search_image'); ?>
                                <figure class="who-are-grid-img">
                                    <img width="560" height="367" alt="image" src="<?php echo $feature_image[0]; ?>">
                                </figure>
                                <?php endif; ?>
                                <div class="search-career-grid-inn">
                                    <p><?php the_title(); ?></p>
                                    <?php if(get_field('client') <> '') : ?>
                                    <p><?php echo get_field('client'); ?></p>
                                    <?php endif; ?>
                                    <?php if(get_portfolio_locations('sectors') <> '') : ?>
                                    <p><?php echo get_portfolio_locations('sectors'); ?></p>
                                    <?php endif; ?>
                                    <?php if(get_field('services') <> '') : ?>
                                    <p><?php echo get_field('services'); ?></p>
                                    <?php endif; ?>
                                    <?php if(get_field('duration') <> '') : ?>
                                    <p><?php echo get_field('duration'); ?></p>
                                    <?php endif; ?>
                                    <?php if(get_field('project_partners') <> '') : ?>
                                    <p><?php echo get_field('project_partners'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="btn btn-block btn-more btn-bottom">View Project <i class="icon icon-more"></i></a>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>