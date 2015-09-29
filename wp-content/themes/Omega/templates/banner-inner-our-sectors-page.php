<?php /* Template Name: Banner Top Header Our sectors */ ?>
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
        <?php $args = array('hide_empty' => 1); ?>
        <?php $categories = get_terms('sectors',$args); ?>
        <?php if(is_array($categories) && !empty($categories)): ?>
        <p><a href="<?php echo site_url('our-work'); ?>" class="btn btn-project">See our projects</a></p>
        <div class="sectors-container clearfix">
            <div class="sectors-lists-container clearfix">
                <ul class="sectors-listsUl">
                    <?php foreach ($categories as $category) : $term_link = get_term_link($category->slug, $category->taxonomy);?>
                    <li class="sectors-listsli">
                        <?php $image = get_field('feature_image', $category->taxonomy.'_'.$category->term_id); ?>
                        <?php if(is_numeric($image)) :?>
                        <?php $image_src = wp_get_attachment_image_src($image, 'portfolio_image'); ?>
                        <?php if(!empty($image_src[0])) : ?>
                        <figure class="sectors-listsFigure">
                            <a href="<?php echo $term_link;?>">
                                <img src="<?php echo $image_src[0]; ?>" alt="Portfolio Image" width="555" height="278">
                            </a>
                        </figure>
                        <?php endif; ?>
                        <?php endif; ?>
                        <div class="sectors-listsContent">
                            <h3 class="sectors-liststitle">
                                <a href="<?php echo $term_link;?>"><?php echo $category->name; ?></a>
                            </h3>
                            <div class="sectors-listsText"><?php echo get_field('short_description', $category->taxonomy.'_'.$category->term_id); ?></div>
                            <a href="<?php echo $term_link;?>" class="btn btn-read">Read more</a>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </section>
</section>
<?php get_footer(); ?>
