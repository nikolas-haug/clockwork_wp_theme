<?php

function clockwork_customize_register($wp_customize)
{
    // echo '<pre>';
    // var_dump($wp_customize);
    // echo '</pre>';

    // Use $wp_customize->get_section/controller/setting to change existing options

    // Panel -> Section -> (Setting -> in DB : Control -> Inputs for Settings)

    // Example:

    // Section (with two inputs)

    // Setting (with default in DB)
    // Control (all inputs with initial values from 'settings')

    //All our sections, settings, and controls will be added here - defaults should match $variables
    $colors = array();
    $colors[] = array(
        'slug' => 'content_text_color',
        // 'default' => '#fff',
        'label' => __('Content Text Color', 'clockwork'),
    );
    $colors[] = array(
        'slug' => 'content_link_color',
        // 'default' => '#3C2E37',
        'label' => __('Content Link Color', 'clockwork'),
    );
    foreach ($colors as $color) {
        // SETTINGS
        $wp_customize->add_setting(
            $color['slug'], array(
                'default' => $color['default'],
                'type' => 'option',
                'capability' =>
                'edit_theme_options',
            )
        );
        // CONTROLS
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $color['slug'],
                array('label' => $color['label'],
                    'section' => 'colors',
                    'settings' => $color['slug'])
            )
        );
    }
    // SOCIAL SECTION ***************************************
    $wp_customize->add_section('icons', array(
        'title' => __('Footer Icons', 'clockwork'),
        'description' => sprintf(__('Options for footer icons - see https://fontawesome.com/ for icon class names', 'clockwork')),
        'priority' => 130,
    ));

    // icon 1

    // icon 1 name setting
    $wp_customize->add_setting('icon1_name', array(
        'default' => _x('name', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 1 name control
    $wp_customize->add_control('icon1_name', array(
        'label' => __('icon 1 name (for accessibility)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 1 url setting
    $wp_customize->add_setting('icon1_url', array(
        'default' => _x('url', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 1 url control
    $wp_customize->add_control('icon1_url', array(
        'label' => __('icon 1 url', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 1 Icon setting
    $wp_customize->add_setting('icon1_icon', array(
        'default' => _x('Enter fontawesome class here', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 1 text control
    $wp_customize->add_control('icon1_icon', array(
        'label' => __('icon 1 Icon (fontawesome class name)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));

    // icon 2

    // icon 2 name setting
    $wp_customize->add_setting('icon2_name', array(
        'default' => _x('name', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 2 name control
    $wp_customize->add_control('icon2_name', array(
        'label' => __('icon 2 name (for accessibility)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 2 url setting
    $wp_customize->add_setting('icon2_url', array(
        'default' => _x('url', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 2 url control
    $wp_customize->add_control('icon2_url', array(
        'label' => __('icon 2 url', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 2 Icon setting
    $wp_customize->add_setting('icon2_icon', array(
        'default' => _x('Enter fontawesome class here', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 2 text control
    $wp_customize->add_control('icon2_icon', array(
        'label' => __('icon 2 Icon (fontawesome class name)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));

    // icon 3

    // icon 3 name setting
    $wp_customize->add_setting('icon3_name', array(
        'default' => _x('name', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 3 name control
    $wp_customize->add_control('icon3_name', array(
        'label' => __('icon 3 name (for accessibility)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 3 url setting
    $wp_customize->add_setting('icon3_url', array(
        'default' => _x('url', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 3 url control
    $wp_customize->add_control('icon3_url', array(
        'label' => __('icon 3 url', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));
    // icon 3 Icon setting
    $wp_customize->add_setting('icon3_icon', array(
        'default' => _x('Enter fontawesome class here', 'clockwork'),
        'type' => 'theme_mod',
    ));
    // icon 3 text control
    $wp_customize->add_control('icon3_icon', array(
        'label' => __('icon 3 Icon (fontawesome class name)', 'clockwork'),
        'section' => 'icons',
        'priority' => 20,
    ));

    // HERO SECTION
    $wp_customize->add_section('call_to_action', array(
        'title' => __('Hero Section', 'clockwork'),
        'description' => sprintf(__('Add details to the hero section of the welcome template.', 'clockwork')),
        'priority' => 100,
    ));

    $wp_customize->add_setting('hero_heading', array(
        'default' => _x('a wordpress theme by you', 'clockwork'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Heading', 'clockwork'),
        'section' => 'call_to_action',
        'priority' => 20,
    ));

    $wp_customize->add_setting('hero_button', array(
        'default' => _x('action!', 'clockwork'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control('hero_button', array(
        'label' => __('Button Text', 'clockwork'),
        'section' => 'call_to_action',
        'priority' => 20,
    ));

    $wp_customize->add_setting('hero_button_route', array(
        'default' => _x('page name', 'clockwork'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control('hero_button_route', array(
        'label' => __('Linked Page Name (leave empty for no button)', 'clockwork'),
        'section' => 'call_to_action',
        'priority' => 20,
    ));
}