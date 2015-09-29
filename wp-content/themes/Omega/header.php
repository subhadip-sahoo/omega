<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', 'right', TRUE); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class($classes); ?>>
    <!-- <div class="header-top-container">
        <div class="wrapper">
            <div class="header-top-area clearfix">
                <aside class="header-top-left">
                    <a href="tel:1800789123" class="header-top-left-link"><i class="icon icon-phone"></i> 1.800.789.123</a>
                    <a href="mailto:info@omegaindusrties.com" class="header-top-left-link header-top-left-link-mail"><i class="icon icon-mail"></i> info@omegaindusrties.com</a>
                </aside>
                <aside class="header-top-right">
                    <ul class="social social-sm">
                        <li><a href=""><i class="icon icon-fb"></i></a></li>
                        <li><a href=""><i class="icon icon-tw"></i></a></li>
                        <li><a href=""><i class="icon icon-in"></i></a></li>
                        <li><a href=""><i class="icon icon-gp"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div> -->

    <header class="header-container clearfix">
        <div class="wrapper clearfix">
            <section class="header-main clearfix">
                <div class="logo-area">
                    <a href="<?php echo home_url(); ?>" class="logo-site">
                        <img src="<?php header_image(); ?>" alt="Logo" width="175" height="41">
                    </a>
                </div>
                <aside class="header-main-container">
                    <div class="header-top-main-container ">
                        <div class="header-top-area ">
                            <div class="header-topLeft-container">
                                <div class="header-extra-menu">
                                    <?php
                                        $top_header_args = array(
                                            'theme_location'  => 'top-header',
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
                                            'items_wrap'      => '<ul>%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => ''
                                        );
                                        wp_nav_menu( $top_header_args );
                                    ?>
                                </div>
                            </div>
                            <aside class="header-topRight-container">
                                <div class="header-top-left">
                                    <a href="<?php echo(get_field('site_phone_number_value','option')) ? 'tel:'.get_field('site_phone_number_value','option') : '#'; ?>" class="header-top-left-link"><i class="icon icon-phone"></i><?php echo(get_field('site_phone_number_label','option')) ? get_field('site_phone_number_label','option') : ''; ?></a>
                                    <a href="<?php echo(get_field('site_email_address','option')) ? 'mailto:'.get_field('site_email_address','option') : '#'; ?>" class="header-top-left-link header-top-left-link-mail"><i class="icon icon-mail"></i><?php echo(get_field('site_email_address','option')) ? get_field('site_email_address','option') : ''; ?></a>
                                </div>
                                <div class="header-top-right">
                                    <ul class="social social-sm">
                                        <li><a href="<?php echo(get_field('facebook_url','option')) ? get_field('facebook_url','option') : '#'; ?>" target="_blank"><i class="icon icon-fb"></i></a></li>
                                        <li><a href="<?php echo(get_field('twitter_url','option')) ? get_field('twitter_url','option') : '#'; ?>" target="_blank"><i class="icon icon-tw"></i></a></li>
                                        <li><a href="<?php echo(get_field('linkedin_url','option')) ? get_field('linkedin_url','option') : '#'; ?>" target="_blank"><i class="icon icon-in"></i></a></li>
                                        <li><a href="<?php echo(get_field('google_plus_url','option')) ? get_field('google_plus_url','option') : '#'; ?>" target="_blank"><i class="icon icon-gp"></i></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="header-base-main-container ">
                        <aside class="header-nav">
                            <nav class="main-nav">
                                <?php
                                    $header_args = array(
                                        'theme_location'  => 'primary',
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
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );
                                    wp_nav_menu( $header_args );
                                ?>
                            </nav>
                        </aside>
                    </div>
                </aside>
            </section>
        </div>
    </header>
    <section class="main-container clearfix">
        <section class="wrapper clearfix">
            <article class="page-container clearfix">