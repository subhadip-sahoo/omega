<?php /* Template Name: Who We Are */ ?>
<?php get_header(); ?>
<!--<section class="banner-container banner-container-inner clearfix">
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
</section>-->

<section class="main-container main-page-container clearfix inner-page-main-container">
    <section class="wrapper clearfix">
        <article class="page-container clearfix">
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <h4 class="page-caption"><?php echo get_field('page_caption');?></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <div class="page-text clearfix">
                <?php $page_manager = get_field('page_manager'); ?>
                <?php if(is_array($page_manager) && !empty($page_manager)) : ?>
                <div class="grid-row who-are-grid">
                    <?php foreach($page_manager as $page) : ?>
                    <?php $page_id = url_to_postid($page['selected_page']); ?>
                    <?php $page_object = get_post($page_id); ?>
                    <?php $page_thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'who_we_are_page_image'); ?>
                    <div class="grid-row4">
                        <div class="grid-row-block">
                            <h4 class="who-are-grid-title"><a href="<?php echo href($page_id); ?>"><?php echo $page_object->post_title; ?></a></h4>
                            <?php if(!empty($page_thumbnail_image[0])) :  ?>
                            <figure class="who-are-grid-img">
                                <a href="<?php echo href($page_id); ?>"><img src="<?php echo $page_thumbnail_image[0]; ?>" alt="image" width="266" height="292"></a>
                            </figure>
                            <?php endif; ?>
                            <p><?php echo mb_strimwidth(wp_strip_all_tags($page_object->post_content), 0, 200); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php $logo_manager = get_field('logo_manager'); ?>
                <?php if(is_array($logo_manager) && !empty($logo_manager)) : ?>
                <div class="who-are-logo-grid clearfix">
                    <div class="owl-carousel logo-carousel">
                        <?php foreach($logo_manager as $logo) : ?>
                        <?php $logo_image = wp_get_attachment_image_src($logo['logo'], 'who_we_are_certification_image'); ?>
                        <?php if(!empty($logo_image[0])) : ?>
                        <div class="item">
                            <figure class="who-are-logo-image">
                                <a href="<?php echo ($logo['logo_url'] <> '') ? $logo['logo_url'] : '#' ; ?>"><img src="<?php echo $logo_image[0]; ?>" alt="image" width="264" height="171"></a>
                            </figure>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();?>
                    <div class="page-text-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
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