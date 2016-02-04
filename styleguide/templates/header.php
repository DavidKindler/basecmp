<?php
    
    global $config, $page, $sub_page, $last_edit;



    if ( isset( $sub_page ) && ( ! empty( $sub_page ) ) ) {
        $title = $config['subpages'][ $page ][ $sub_page ] . ' &middot; ' . $config['pages'][ $page ];

    } else {
        $title = $config['pages'][ $page ];
    }

?><!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo $title; ?> | <?php echo $config[ 'sitename'] ?></title>
        <meta name="description" content="">

       <!--  <link rel="stylesheet" href="/compiled.min.css" media="all"> -->
        <link rel="stylesheet" href="/style.css" media="all">
        <link rel="stylesheet" href="/inc/css/jquery.fancybox.css" media="screen">

        <!--[if gte IE 9]>
          <style type="text/css">
            .divider,
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->        

        <script type="text/javascript" src="/inc/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="/inc/js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="/inc/js/nxp-application.js"></script>

    </head>
    <body class="header-image full-width-content page-<?php echo $page; ?>">

        <div class="site-container">

            <header class="site-header">
                <div class="wrap">

                    <div class="title-area">
                        <p class="site-title" itemprop="headline">
                            <a href="/" title="Site title - Home">NXP Brand Guide - Home</a>
                        </p>
                        <p class="site-description">Brand Guide</p>
                    </div><!-- .title-area -->
                    <div class="help-button">
                        <a href="mailto:identity@nxp.com" title="get support" class="general-cta"><span class="blocker">Support</span></a>
                    </div>
                    <?php echo '<p class="date-edited">Last edit: ' . date( 'r', $last_edit ) . '</p>'; ?>
                </div><!-- .wrap -->
            </header><!-- .site-header -->

            <nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="wrap">              

                    <ul class="nxp-nav-menu">
                        <?php 

                            foreach( $config['pages'] as $slug => $title ) {

                                if ( $slug == $page ) {
                                    $add_top_class = ' current-menu-item';
                                } else {
                                    $add_top_class = '';
                                }

                                echo '<li class="menu-item' .  $add_top_class . '">';

                                if ( is_active_page( $slug ) ) {
                                    echo '<a href="/' . $slug . '.html">' . $title . '</a>';    
                                } elseif ( array_key_exists( $slug, $config['subpages'] ) ) { 
                                    echo '<a href="javascript:void(0)">' . $title . '</a>';
                                } else {
                                    echo '<a class="greyed-out">' . $title . '</a>'; 
                                }
                                   
                                if ( isset(  $config['subpages'][ $slug ] ) && ( ! empty( $config['subpages'][ $slug ] ) && ( is_array( $config['subpages'][ $slug ] ) ) ) ) {
                                    echo '<ul class="sub-menu">';
                                    foreach( $config['subpages'][ $slug ] as $subpage_slug => $subpage_title ) {

                                        if ( $subpage_slug == $sub_page ) {
                                            $add_sub_class = ' current-menu-item';
                                        } else {
                                            $add_sub_class = '';
                                        }      

                                        echo '<li class="menu-item' .  $add_sub_class . '">';

                                            if ( is_active_page( $subpage_slug ) ) {
                                                echo    '<a href="/' . $slug . '/' . $subpage_slug . '.html">' . $subpage_title . '</a>';   
                                            } else {
                                                echo    '<a class="greyed-out">' . $subpage_title . '</a>'; 
                                            }

                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }

                                echo '</li>';

                            }

                        ?>
                    </ul><!-- .nxp-nav-menu -->

                </div><!-- .wrap -->
            </nav><!-- .nav-primary -->

