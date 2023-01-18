<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col_left" data-aos="fade-down">
                    <svg width="138px" height="305px" viewBox="0 0 138 305" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>e-large</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="ME-landing-Desktop-light" transform="translate(-247.000000, -320.000000)"
                               fill="#000000">
                                <g id="header" transform="translate(247.000000, 37.000000)">
                                    <path d="M119.175,455.285 L137.311,455.285 L137.311,437.582 L119.175,437.582 L119.175,455.285 Z M100.176,455.285 L114.857,440.604 L114.857,455.285 L100.176,455.285 Z M96.722,518.759 L96.722,483.352 L114.857,483.352 L114.857,518.759 C114.857,543.803 94.994,564.097 70.814,564.961 L70.814,546.826 C85.063,545.962 96.722,533.872 96.722,518.759 L96.722,518.759 Z M119.175,483.352 L137.311,483.352 L137.311,518.759 C137.311,555.893 107.517,586.55 70.814,587.414 L70.814,569.71 C97.585,568.415 119.175,545.962 119.175,518.759 L119.175,483.352 Z M70.814,323.588 L70.814,305.885 C94.994,306.748 114.857,327.043 114.857,351.655 L114.857,429.378 L96.722,411.674 L96.722,351.655 C96.722,336.974 85.063,324.452 70.814,323.588 L70.814,323.588 Z M70.814,301.135 L70.814,283 C107.517,284.295 137.311,314.521 137.311,351.655 L137.311,432.832 L119.175,432.832 L119.175,351.655 C119.175,324.452 97.585,301.998 70.814,301.135 L70.814,301.135 Z M43.611,455.285 L25.476,437.582 L111.402,437.582 L93.699,455.285 L43.611,455.285 Z M93.699,414.697 L111.402,432.832 L25.476,432.832 L43.611,414.697 L93.699,414.697 Z M22.453,440.604 L40.156,458.308 L40.156,518.759 C40.156,533.44 51.815,545.53 66.064,546.826 L66.064,564.961 C41.884,563.665 22.453,543.371 22.453,518.759 L22.453,440.604 Z M66.064,305.885 L66.064,323.588 C51.815,324.884 40.156,336.974 40.156,351.655 L40.156,411.674 L22.453,429.378 L22.453,351.655 C22.453,327.043 41.884,307.18 66.064,305.885 L66.064,305.885 Z M0,518.759 L0,437.582 L17.703,437.582 L17.703,518.759 C17.703,545.962 39.293,567.983 66.064,569.71 L66.064,587.414 C29.362,586.119 0,555.893 0,518.759 L0,518.759 Z M17.703,432.832 L0,432.832 L0,351.655 C0,314.953 29.362,284.727 66.064,283.432 L66.064,301.135 C39.293,302.431 17.703,324.884 17.703,351.655 L17.703,432.832 Z"
                                          id="e-large"></path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <?php if ($titel = get_field('titel')) : ?>
                        <?php echo $titel; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 pr-md-0 col_right" data-aos="fade-left">
                    <?= !empty($img = get_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'header_img']) : '' ?>

                </div>
            </div>
        </div>
    </section>

    <section id="intro" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <p class="subtitle"><?php the_field('intro_title'); ?></p>
                    <p class="content"><?php the_field('intro_content'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="relax" >
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 col-lg-4 col_left">
                    <svg class="letter" width="138px" height="307px" viewBox="0 0 138 307" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Group 3</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="ME-landing-Desktop-light" transform="translate(-248.000000, -1482.000000)"
                               fill="#000000">
                                <g id="R--slider-1" transform="translate(71.000000, 1385.000000)">
                                    <g id="Group-3" transform="translate(176.999800, 96.999900)">
                                        <path d="M70.26,174.781 L43.804,174.781 L26.023,156.999 L70.694,156.999 C81.536,157.433 91.511,161.336 98.884,167.842 C108.859,176.516 115.364,189.093 115.364,203.405 L115.364,306.192 L97.583,306.192 L97.583,203.405 C97.583,188.226 85.44,175.648 70.26,174.781 L70.26,174.781 Z M97.583,105.823 L97.583,68.958 C97.583,53.344 84.572,40.767 68.958,40.767 L43.804,40.767 L25.588,22.552 L68.958,22.552 C94.547,22.552 115.364,43.369 115.364,68.958 L115.364,105.823 C115.364,120.135 108.859,132.712 98.884,141.386 C91.511,147.891 81.536,151.795 70.694,152.228 L26.023,152.228 L43.804,134.447 L70.26,134.447 C85.44,133.579 97.583,121.002 97.583,105.823 L97.583,105.823 Z M22.553,160.035 L40.334,177.817 L40.334,306.192 L22.553,306.192 L22.553,160.035 Z M22.553,26.022 L40.334,43.803 L40.334,131.411 L22.553,149.193 L22.553,26.022 Z M22.553,0 L68.958,0 C107.124,0 137.917,30.792 137.917,68.958 L137.917,105.823 C137.917,124.906 130.111,142.253 117.967,154.831 C130.111,166.974 137.917,184.323 137.917,203.405 L137.917,306.192 L120.135,306.192 L120.135,203.405 C120.135,188.226 113.63,175.215 103.221,165.673 C98.017,160.903 91.511,156.999 84.138,154.831 C91.511,152.228 98.017,148.325 103.221,143.554 C113.63,134.013 120.135,121.002 120.135,105.823 L120.135,68.958 C120.135,40.767 97.15,18.215 68.958,18.215 L22.553,18.215 L22.553,0 Z M0,306.192 L17.782,306.192 L17.782,156.999 L0,156.999 L0,306.192 Z M0,152.228 L17.782,152.228 L17.782,22.552 L0,22.552 L0,152.228 Z M0,18.215 L17.782,18.215 L17.782,0 L0,0 L0,18.215 Z"
                                              id="Fill-1"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="letter_title"><?php echo __('Relax', 'max'); ?></span>
                </div>
                <div class="col-sm-12 col-lg-8 col_right pr-lg-0" data-aos="fade-left">
                    <div class="main-carousel">
                        <?php if (have_rows('slider')) : ?>
                            <?php while (have_rows('slider')) :
                                the_row(); ?>
                                <div class="carousel-cell">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6 px-lg-0">
                                            <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide_img']) : '' ?>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 content pr-lg-0">
                                            <?php if ($content = get_sub_field('content')) : ?>
                                                <?php echo $content; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-4 offset-lg-4 slide_text">
                    <?php if ($relax_content = get_field('relax_content')) : ?>
                        <?php echo $relax_content; ?>
                    <?php endif; ?>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 slider_info">
                    <div class="info">
                        <a class="button--prev">
                            <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   stroke-linecap="round" stroke-linejoin="round">
                                    <g id="ME-landing-Desktop-light"
                                       transform="translate(-124.000000, -2809.000000)"
                                       stroke="#000000" stroke-width="2">
                                        <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                            <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                <g id="slider" transform="translate(55.000000, 516.000000)">
                                                    <g id="Group" transform="translate(0.000000, 8.000000)">
                                                        <g id="arrow-right-copy"
                                                           transform="translate(12.000000, 6.000000) scale(-1, 1) translate(-12.000000, -6.000000) ">
                                                            <line x1="24" y1="6" x2="18" y2="0" id="Path"></line>
                                                            <polyline id="Path" points="18 12 24 6 0 6"></polyline>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a class="button--next">
                            <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   stroke-linecap="round" stroke-linejoin="round">
                                    <g id="ME-landing-Desktop-light"
                                       transform="translate(-171.000000, -2809.000000)"
                                       stroke="#000000" stroke-width="2">
                                        <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                            <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                <g id="slider" transform="translate(55.000000, 516.000000)">
                                                    <g id="Path" transform="translate(47.000000, 8.000000)">
                                                        <line x1="24" y1="6" x2="18" y2="0"></line>
                                                        <polyline points="18 12 24 6 0 6"></polyline>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <p class="carousel-status"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="appartments">
        <div class="container-big">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-2 slider_info px-0">
                    <div class="content">
                        <div class="appartementen_slider_names">
                            <?php
                            $args = array(
                                'post_type' => 'appartement',  // Sort post type
                                'posts_per_page' => -1, // Aantal posts
                                'order' => 'DESC',
                            );
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="slide">
                                    <p class="name"><?php the_title(); ?></p>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="slide_info_block">
                        <div class="info">
                            <a class="button_prev_appartment">
                                <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                       stroke-linecap="round" stroke-linejoin="round">
                                        <g id="ME-landing-Desktop-light"
                                           transform="translate(-124.000000, -2809.000000)"
                                           stroke="#000000" stroke-width="2">
                                            <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                                <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                    <g id="slider" transform="translate(55.000000, 516.000000)">
                                                        <g id="Group" transform="translate(0.000000, 8.000000)">
                                                            <g id="arrow-right-copy"
                                                               transform="translate(12.000000, 6.000000) scale(-1, 1) translate(-12.000000, -6.000000) ">
                                                                <line x1="24" y1="6" x2="18" y2="0" id="Path"></line>
                                                                <polyline id="Path" points="18 12 24 6 0 6"></polyline>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a class="button_next_appartment">
                                <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                       stroke-linecap="round" stroke-linejoin="round">
                                        <g id="ME-landing-Desktop-light"
                                           transform="translate(-171.000000, -2809.000000)"
                                           stroke="#000000" stroke-width="2">
                                            <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                                <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                    <g id="slider" transform="translate(55.000000, 516.000000)">
                                                        <g id="Path" transform="translate(47.000000, 8.000000)">
                                                            <line x1="24" y1="6" x2="18" y2="0"></line>
                                                            <polyline points="18 12 24 6 0 6"></polyline>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p class="appartments_slider_numbers"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-6 px-0">
                    <div class="appartments_slider">
                        <?php
                        $args = array(
                            'post_type' => 'appartement',  // Sort post type
                            'posts_per_page' => -1, // Aantal posts
                            'order' => 'DESC',
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post(); ?>

                            <div class="slide">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'related_campaign_img')) ?>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 appartementen_slider_content">
                    <div class="content" data-aos="fade-up">
                        <div class="d-flex align-items-end">
                            <svg width="138px" height="306px" viewBox="0 0 138 306" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Group 3</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="ME-landing-Desktop-light" transform="translate(-917.000000, -2287.000000)"
                                       fill="#000000">
                                        <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                            <g id="Group-3" transform="translate(1322.000000, 131.000000)">
                                                <path d="M97.583,236.801 L97.583,68.959 C97.583,53.346 84.572,40.335 68.959,40.335 L43.804,40.335 L26.022,22.553 L68.959,22.553 C94.547,22.553 115.364,43.371 115.364,68.959 L115.364,236.801 C115.364,262.389 94.547,283.207 68.959,283.207 L25.589,283.207 L43.804,265.426 L68.959,265.426 C84.572,265.426 97.583,252.414 97.583,236.801 L97.583,236.801 Z M40.334,261.956 L22.553,279.738 L22.553,26.023 L40.334,43.804 L40.334,261.956 Z M68.959,305.759 L22.553,305.759 L22.553,287.978 L68.959,287.978 C97.149,287.978 120.136,264.991 120.136,236.801 L120.136,68.959 C120.136,40.768 97.149,17.782 68.959,17.782 L22.553,17.782 L22.553,0.001 L68.959,0.001 C107.124,0.001 137.917,30.793 137.917,68.959 L137.917,236.801 C137.917,274.967 107.124,305.759 68.959,305.759 L68.959,305.759 Z M0,305.759 L17.782,305.759 L17.782,287.977 L0,287.977 L0,305.759 Z M0,283.207 L17.782,283.207 L17.782,22.553 L0,22.553 L0,283.207 Z M0,17.782 L17.782,17.782 L17.782,0 L0,0 L0,17.782 Z"
                                                      id="Fill-1"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="slides">
                                <h2><?php the_field('appartementen_titel'); ?></h2>
                                <div class="building_list">
                                    <?php
                                    $args = array(
                                        'post_type' => 'appartement',  // Sort post type
                                        'posts_per_page' => -1, // Aantal posts
                                        'order' => 'DESC',
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <div class="slide_name w-100">
                                            <p><?php the_title(); ?></p>
                                        </div>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <div class="appartementen_slider_text">
                            <?php
                            $args = array(
                                'post_type' => 'appartement',  // Sort post type
                                'posts_per_page' => -1, // Aantal posts
                                'order' => 'DESC',
                            );
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post(); ?>

                                <div class="slide">
                                    <?php the_content(); ?>
                                </div>

                                <?php wp_reset_postdata(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="living">
        <div class="container-big">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 col_left" data-aos="fade-right">
                    <?= !empty($img = get_field('afbeelding_links')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-1 offset-lg-3 col_right" data-aos="fade-left">
                    <?= !empty($img = get_field('afbeelding_rechts')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                    <div class="content">
                        <?php if ($content = get_field('content')) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brainpark">
        <div class="container-big">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="letter_block">
                        <svg class="letter" width="138px" height="307px" viewBox="0 0 138 307" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Fill 1</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="ME-landing-Desktop-light" transform="translate(-71.000000, -4010.000000)"
                                   fill="#000000">
                                    <g id="kaart" transform="translate(71.000000, 4007.000000)">
                                        <g id="Brainpark" transform="translate(0.000000, 2.999000)">
                                            <path d="M97.582,237.235 L97.582,202.105 C97.582,186.492 84.571,173.481 68.957,173.481 L43.803,173.481 L26.021,155.699 L68.957,155.699 C80.234,155.699 91.076,160.036 98.883,166.542 C108.858,175.215 115.364,187.793 115.364,202.105 L115.364,237.235 C115.364,262.823 94.546,283.64 68.957,283.64 L26.021,283.64 L43.803,265.859 L68.957,265.859 C84.571,265.859 97.582,252.848 97.582,237.235 L97.582,237.235 Z M98.883,140.086 C91.076,147.025 80.234,150.928 68.957,150.928 L25.587,150.928 L43.803,133.146 L68.957,133.146 C84.571,133.146 97.582,112.762 97.582,97.149 L97.582,68.959 C97.582,53.345 84.571,40.768 68.957,40.768 L43.803,40.768 L25.587,22.552 L68.957,22.552 C94.546,22.552 115.364,43.371 115.364,68.959 L115.364,97.149 C115.364,111.462 108.858,131.412 98.883,140.086 L98.883,140.086 Z M40.767,262.389 L22.552,280.171 L22.552,158.735 L40.333,176.95 L40.767,176.95 L40.767,262.389 Z M40.767,129.676 L22.552,147.892 L22.552,26.022 L40.767,43.804 L40.767,129.676 Z M22.552,306.193 L22.552,288.412 L68.957,288.412 C97.148,288.412 120.134,265.425 120.134,237.235 L120.134,202.105 C120.134,187.359 113.629,173.915 103.22,164.373 C98.016,159.602 91.51,155.699 84.137,153.53 C91.51,150.928 98.016,147.459 103.22,142.255 C113.629,133.146 120.134,111.895 120.134,97.149 L120.134,68.959 C120.134,40.768 97.148,18.215 68.957,18.215 L22.552,18.215 L22.552,0.001 L68.957,0.001 C107.124,0.001 137.916,30.794 137.916,68.959 L137.916,97.149 C137.916,116.232 130.109,140.953 117.966,153.53 C130.109,165.674 137.916,183.022 137.916,202.105 L137.916,237.235 C137.916,275.4 107.124,306.193 68.957,306.193 L22.552,306.193 Z M0,306.193 L18.215,306.193 L18.215,288.412 L0,288.412 L0,306.193 Z M0,283.64 L18.215,283.64 L18.215,155.699 L0,155.699 L0,283.64 Z M0,150.928 L18.215,150.928 L18.215,22.552 L0,22.552 L0,150.928 Z M0,18.215 L18.215,18.215 L18.215,0 L0,0 L0,18.215 Z"
                                                  id="Fill-1"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <span class="text"><?php the_field('b_titel'); ?></span>
                    </div>

                    <div class="content">
                        <?php if ($b_content = get_field('b_content')) : ?>
                            <?php echo $b_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 park" data-aos="fade-up">
                    <?= !empty($img = get_field('brainpark_afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hotspot">
        <div class="container-big">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="hotspot_slider">
                        <?php if (have_rows('hotspot_slider')) : ?>
                            <?php while (have_rows('hotspot_slider')) :
                                the_row(); ?>
                                <div class="slide">
                                    <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>

                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-3 offset-lg-2">
                                                <h3><?php the_sub_field('titel'); ?></h3>
                                            </div>
                                            <div class="col-sm-12 col-lg-7 col_right">
                                                <p><?php the_sub_field('content'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 hotspot_overlay_slider">
                    <div class="letter_block" data-aos="fade-up">
                        <svg class="letter" viewBox="0 0 138 305" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Fill 1</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="ME-landing-Desktop-light" transform="translate(-987.000000, -4795.000000)"
                                   fill="#000000">
                                    <g id="slider-2-hotspots" transform="translate(70.807828, 4793.000000)">
                                        <g id="Hotdpots" transform="translate(908.192172, 2.000000)">
                                            <path d="M127.174,149.832 L145.309,149.832 L145.309,0 L127.174,0 L127.174,149.832 Z M104.722,0 L104.722,128.674 L122.856,146.81 L122.856,0 L104.722,0 Z M30.453,0 L30.453,146.81 L30.885,146.378 L48.156,128.674 L48.156,0 L30.453,0 Z M8,149.832 L25.703,149.832 L25.703,0 L8,0 L8,149.832 Z M51.61,132.129 L33.475,149.832 L119.402,149.832 L101.699,132.129 L51.61,132.129 Z M127.174,304.414 L145.309,304.414 L145.309,154.582 L127.174,154.582 L127.174,304.414 Z M33.907,154.582 L51.61,172.285 L101.699,172.285 L119.402,154.582 L33.907,154.582 Z M8,304.414 L25.703,304.414 L25.703,154.582 L8,154.582 L8,304.414 Z M104.722,175.739 L104.722,304.414 L122.856,304.414 L122.856,157.604 L104.722,175.739 Z M30.453,304.414 L48.156,304.414 L48.156,175.739 L30.885,158.036 L30.453,157.604 L30.453,304.414 Z"
                                                  id="Fill-1"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <?php if ($tekst_naar_letter = get_field('tekst_naar_letter')) : ?>
                            <span class="text" ><?php echo $tekst_naar_letter; ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="content" data-aos="fade-up">
                        <?php if ($h_content = get_field('h_content')) : ?>
                            <?php echo $h_content; ?>
                        <?php endif; ?>
                    </div>

                    <div class="info" data-aos="fade-up">
                        <a class="button_prev_hotspot">
                            <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   stroke-linecap="round" stroke-linejoin="round">
                                    <g id="ME-landing-Desktop-light"
                                       transform="translate(-124.000000, -2809.000000)"
                                       stroke="#000000" stroke-width="2">
                                        <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                            <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                <g id="slider" transform="translate(55.000000, 516.000000)">
                                                    <g id="Group" transform="translate(0.000000, 8.000000)">
                                                        <g id="arrow-right-copy"
                                                           transform="translate(12.000000, 6.000000) scale(-1, 1) translate(-12.000000, -6.000000) ">
                                                            <line x1="24" y1="6" x2="18" y2="0" id="Path"></line>
                                                            <polyline id="Path" points="18 12 24 6 0 6"></polyline>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a class="button_next_hotspot">
                            <svg width="26px" height="14px" viewBox="0 0 26 14" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   stroke-linecap="round" stroke-linejoin="round">
                                    <g id="ME-landing-Desktop-light"
                                       transform="translate(-171.000000, -2809.000000)"
                                       stroke="#000000" stroke-width="2">
                                        <g id="gebouwen" transform="translate(-405.000000, 2156.000000)">
                                            <g id="inzet-wit" transform="translate(475.000000, 130.000000)">
                                                <g id="slider" transform="translate(55.000000, 516.000000)">
                                                    <g id="Path" transform="translate(47.000000, 8.000000)">
                                                        <line x1="24" y1="6" x2="18" y2="0"></line>
                                                        <polyline points="18 12 24 6 0 6"></polyline>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <p class="hotspot_slider_info"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interesse" style="background-image:url(<?php echo esc_url(get_field('bg_image')); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 col_left" data-aos="fade-up">
                    <div class="content">
                        <?php if ($i_title = get_field('i_title')) : ?>
                            <h2><?php echo esc_html($i_title); ?></h2>
                        <?php endif; ?>
                        <?php if ($I_content = get_field('i_content')) : ?>
                            <p><?php echo $I_content; ?></p>
                        <?php endif; ?>
                    </div>
                    <?php
                    $form = get_field('form');
                    if ($form) :
                        $post = $form;
                        setup_postdata($post);
                        $id = get_the_ID();

                        echo do_shortcode('[wpforms id="' . $id . '"]');

                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="col-sm-12 col-lg-3 d-none d-lg-flex col_right" data-aos="fade-down">
                    <div class="letter_block">
                        <svg class="letter" width="138px" height="307px" viewBox="0 0 138 307" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="ME-landing-Desktop-light" transform="translate(-1002.000000, -5990.000000)"
                                   fill="#FFFFFF">
                                    <g id="inzet-intersse" transform="translate(-11.000000, 5591.000000)">
                                        <g id="B-be-part-of-the-future" transform="translate(1013.000000, 399.000000)">
                                            <path d="M97.582,237.235 L97.582,202.105 C97.582,186.492 84.571,173.481 68.957,173.481 L43.803,173.481 L26.021,155.699 L68.957,155.699 C80.234,155.699 91.076,160.036 98.883,166.542 C108.858,175.215 115.364,187.793 115.364,202.105 L115.364,237.235 C115.364,262.823 94.546,283.64 68.957,283.64 L26.021,283.64 L43.803,265.859 L68.957,265.859 C84.571,265.859 97.582,252.848 97.582,237.235 L97.582,237.235 Z M98.883,140.086 C91.076,147.025 80.234,150.928 68.957,150.928 L25.587,150.928 L43.803,133.146 L68.957,133.146 C84.571,133.146 97.582,112.762 97.582,97.149 L97.582,68.959 C97.582,53.345 84.571,40.768 68.957,40.768 L43.803,40.768 L25.587,22.552 L68.957,22.552 C94.546,22.552 115.364,43.371 115.364,68.959 L115.364,97.149 C115.364,111.462 108.858,131.412 98.883,140.086 L98.883,140.086 Z M40.767,262.389 L22.552,280.171 L22.552,158.735 L40.333,176.95 L40.767,176.95 L40.767,262.389 Z M40.767,129.676 L22.552,147.892 L22.552,26.022 L40.767,43.804 L40.767,129.676 Z M22.552,306.193 L22.552,288.412 L68.957,288.412 C97.148,288.412 120.134,265.425 120.134,237.235 L120.134,202.105 C120.134,187.359 113.629,173.915 103.22,164.373 C98.016,159.602 91.51,155.699 84.137,153.53 C91.51,150.928 98.016,147.459 103.22,142.255 C113.629,133.146 120.134,111.895 120.134,97.149 L120.134,68.959 C120.134,40.768 97.148,18.215 68.957,18.215 L22.552,18.215 L22.552,0.001 L68.957,0.001 C107.124,0.001 137.916,30.794 137.916,68.959 L137.916,97.149 C137.916,116.232 130.109,140.953 117.966,153.53 C130.109,165.674 137.916,183.022 137.916,202.105 L137.916,237.235 C137.916,275.4 107.124,306.193 68.957,306.193 L22.552,306.193 Z M0,306.193 L18.215,306.193 L18.215,288.412 L0,288.412 L0,306.193 Z M0,283.64 L18.215,283.64 L18.215,155.699 L0,155.699 L0,283.64 Z M0,150.928 L18.215,150.928 L18.215,22.552 L0,22.552 L0,150.928 Z M0,18.215 L18.215,18.215 L18.215,0 L0,0 L0,18.215 Z"
                                                  id="Fill-1"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="text"><?php the_field('tekst_bij_letter'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();


