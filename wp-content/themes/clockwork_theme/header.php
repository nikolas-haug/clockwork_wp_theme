<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <?php wp_head();?>

    <!-- Customizer - colors -->
    <?php
$content_text_color = get_option('content_text_color');
$content_link_color = get_option('content_link_color');
?>
    <style>
    p {
        color: <?php echo $content_text_color;
        ?>;
    }

    a {
        color: <?php echo $content_link_color;
        ?> !important;
    }
    </style>
    <!-- end customizer -->

</head>

<body <?php body_class();?>>

    <div class="scroll-top-btn"></div>

    <header class="main-header">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-12 col-lg-2 pos-relative dis-flex align-items-center">
                    <a href="<?php echo esc_url(site_url('/')); ?>">
                        <?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
if (has_custom_logo()) {
    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="img-100 custom-logo">';
    echo '<h1 class="visually-hidden">' . get_bloginfo('name') . '</h1>';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
?>
                    </a>
                    <div class="slider-menu__toggler"><span></span></div>
                </div>
                <div class="col-sm-12 col-lg-10 align-self-center">
                    <h1 class="title-tag">
                        <a href="<?php echo esc_url(site_url('/')); ?>"><?php bloginfo('name');?></a>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <nav class="container-lg">
        <div class="row">
            <div class="col-12">
                <nav class="slider-menu">
                    <?php wp_nav_menu(array(
    'theme_location' => 'primary',
));?>
                </nav>
                <!-- <div class="slider-menu__toggler"><span></span></div> -->
            </div>
        </div>
    </nav>

    <main>