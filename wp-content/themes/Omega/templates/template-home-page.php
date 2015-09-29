<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section class="banner-container clearfix">
    <article class="banner-slider">
        <div class="flexslider bannersider">
            <?php $banner_slider = get_field('banner_slider'); ?>
            <?php if(!empty($banner_slider)): ?>
            <ul class="slides">
                <?php foreach($banner_slider as $img):?>
                <?php $ban_img = wp_get_attachment_image_src($img['banner_image'], 'banner_image');  ?>
                <li style="background-image:url(<?php echo (is_array($ban_img) && !empty($ban_img[0])) ? $ban_img[0] : ''; ?>); ">
                    <?php if(!empty($ban_img[0])):?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-imageA.jpg" alt="" width="2000" height="568" />
                    <?php endif; ?>
                    <div class="banner-caption">
                        <div class="wrapper">
                            <div class="banner-caption-inner">
                                <div class="banner-text">
                                    <p><?php echo $img['banner_text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="wrapper">
            <div class="paginate banner-paginate">
                <div class="banner-paginate-inner">
                    <span class="current-slide"></span>&nbsp;/&nbsp;<span class="total-slide"></span>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="main-container home-text-container clerafix">
    <div class="wrapper">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
        <article class="home-main-text">
            <h2><?php echo mb_strimwidth(wp_strip_all_tags(get_the_content(get_the_ID())), 0, 300); ?></h2>
        </article>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php endif; ?>
    </div>
</section>

<section class="main-container clearfix">
    <section class="wrapper clearfix">
        <section class="home-main-content-blocks clearfix">
            <?php $page_who_we_are = get_post(WHO_WE_ARE); ?>
            <?php if($page_who_we_are <> NULL): ?>
            <aside class="home-main-content-blocks-left">
                <header class="heading-title">
                    <h2><?php echo $page_who_we_are->post_title; ?></h2>
                </header>
                <article class="home-main-content-text">
                    <p><?php echo mb_strimwidth(wp_strip_all_tags($page_who_we_are->post_content), 0, 500); ?></p>
                </article>
                <a href="<?php echo href(WHO_WE_ARE); ?>" class="btn readmore-btn">Read More</a>
            </aside>
            <?php endif; ?>
            <aside class="home-main-content-blocks-right">
                <header class="heading-title">
                    <?php 
                        $menus = wp_get_nav_menus();
                        $menu_locations = get_nav_menu_locations();

                        $location_id = 'our-products';
                        if (isset($menu_locations[ $location_id ])) {
                            foreach ($menus as $menu) {
                                if ($menu->term_id == $menu_locations[$location_id]) {
                                    $nav_menu = wp_get_nav_menu_object($menu->term_id);
                                    $product_menu_name = $nav_menu->name;
                                    break;
                                }
                            }
                        }else{
                            $product_menu_name = 'our products';
                        } 
                    ?>
                    <h2><?php echo $product_menu_name; ?></h2>
                </header>
                <div class="home-main-content-links">
                    <?php
                        $home_products = array(
                            'theme_location'  => 'our-products',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="home-main-linkul">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
                        wp_nav_menu( $home_products );
                    ?>
                </div>
            </aside>
        </section>
    </section>
</section>

<section class="main-container whatwe-container clearfix">
    <div class="wrapper">
        <div class="whatwe-main-container clearfix">
            <?php $what_we_do = get_post(WHAT_WE_DO); ?>
            <?php if($what_we_do <> NULL): ?>
            <?php $title = explode(' ', $what_we_do->post_title, 2); ?>
            <?php $back_image = wp_get_attachment_image_src(get_post_thumbnail_id(WHAT_WE_DO), 'home_what_we_do_image'); ?>
            <?php if(!empty($back_image[0])) : ?>
            <?php $image = $back_image[0]; ?>
            <?php else: ?>
            <?php $image = ''; ?>
            <?php endif; ?>
            <div class="whatwe-blocks">
                <div class="whatwe-blocks-inner">
                    <div class="whatwe-title-background" style="background-image:url(<?php echo $image; ?>);">
                        <div class="whatwe-title-text-area">
                            <h2 class="what-title"><?php echo $title[0]; ?> <span><?php echo $title[1]; ?></span></h2>
                            <p><?php echo mb_strimwidth(wp_strip_all_tags($what_we_do->post_content), 0, 200); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $iconic_field = get_field('iconic_field'); ?>
            <?php if(!empty($iconic_field)): ?>
            <div class="whatwe-blocks">
                <div class="whatwe-blocks-inner">
                    <div class="whatwe-block-content">
                        <ul class="whatwe-contentul">
                            <?php $count = 0; ?>
                            <?php foreach($iconic_field as $icon) : $count++;?>
                            <?php $postid = url_to_postid( $icon['selected_page'] ); ?> 
                            <?php $pages = get_post($postid); ?>
                            <li class="whatwe-contentli">
                                <figure class="whatwe-content-img"><a href="<?php echo href($postid); ?>"><i class="icon icon-whatwe<?php echo $count; ?>"></i></a></figure>
                                <div class="whatwe-content-txt">
                                    <h4 class="whatwe-content-title"><a href="<?php echo href($postid); ?>"><?php echo $pages->post_title; ?></a></h4>
                                    <p class="whatwe-content-tt"><?php echo mb_strimwidth(wp_strip_all_tags($pages->post_content), 0, 130, '&nbsp;[...]'); ?></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php query_posts(array('post_type' => 'portfolios', 'posts_per_page' => -1)); ?>
<?php if(have_posts()) : ?>
<section class="main-container main-container-portfolio clearfix">
    <div class="wrapper">
        <div class="portfolio-container clearfix">
            <header class="heading-title">
                <h2>Latest Projects</h2>
            </header>
            <div class="portfolio-slide clearfix">
                <div class="flexslider portfolio-slider">
                    <ul class="slides">
                        <?php while(have_posts()) : the_post();?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                <?php $port_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); //home_portfolio_banner_image ?>
                                <img src="<?php echo $port_image[0]; ?>" alt="" width="1109" height="346" />
                                <?php endif; ?>
                                <div class="portfolio-slider-description">
                                    <h3><?php the_title(); ?></h3>
                                    <div>
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
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
                <div class="paginate banner-paginate">
                    <div class="banner-paginate-inner">
                        <span class="current-port-slide"></span>&nbsp;/&nbsp;<span class="total-port-slide"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="main-container featured-main-container clearfix">
    <div class="wrapper">
        <?php query_posts(array('post_type' => 'news', 'posts_per_page' => 2)); ?>
        <?php if(have_posts()) : ?>
        <div class="featured-video-col2">
            <article class="featured-video-blocks-content latest-news-blocks">
                <header class="heading-title">
                    <h2>latest news</h2>
                </header>
                <div class="latest-news-blocks-lists">
                    <ul class="latest-news-blockUl">
                        <?php while(have_posts()): the_post(); ?>
                        <li class="latest-news-blocksLi clearfix">
                            <?php if(has_post_thumbnail()): ?>
                            <?php $port_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'home_latest_news_image'); ?>
                            <figure class="latest-news-blocks-image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $port_image[0]; ?>" alt=""></a>
                            </figure>
                            <?php endif; ?>
                            <div class="latest-news-blocks-con">
                                <p class="latest-newsDate"><?php echo get_the_date(NEWS_DATE_FORMAT,get_the_ID()); ?></p>
                                <p><?php echo mb_strimwidth(wp_strip_all_tags(get_the_content(get_the_ID())), 0, 200); ?></p>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
                <?php /*?><p><?php echo $feature_video->post_excerpt; ?></p> <?php */ ?> 
                <a href="<?php echo href(NEWS_PAGE); ?>" class="btn viewmore-btn">All News</a>
            </article>
        </div>
        <?php endif; ?>
        <?php $feature_video = get_field('featured_video'); ?>
        <?php $video_id = get_field('you_tube_video_id', $feature_video->ID, TRUE); ?>
        <div class="featured-video-col2">
            <article class="featured-video-blocks-video">
                <header class="heading-title">
                    <h2>featured video</h2>
                </header>
                <div class="video-bl">
                    <iframe width="372" height="237" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe> 
                </div>
            </article>
        </div>
    </div>
</section>
<?php get_footer(); ?>