<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Murad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <style>
    .hireSmarter__card {
    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/biggestEcllipse.png");
    }
    .hireSmarter__card::after {
    content: url("<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/smallestEclipse.png");
    }
    .hireSmarter__card::before {
    content: url("<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/biggerEcllipse.png");
    }</style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <picture>
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('header_logo')); ?>" alt="">
            </picture>
        </div>
        <nav class="header--navigation">
            <div class="header--navigation__desktop">
                <div class="header--navigation__desktop--pages">
                    <p class="active"><a href="">Home</a></p>
                    <p><a href="">Features</a></p>
                </div>
                <div class="header--navigation__desktop--account"> <button
                        class="header--navigation__desktop--account__login">Login</button> <button
                        class="header--navigation__desktop--account__create">Create Account</button></div>
            </div> <button class="mobile-nav-btn">
                <div class="nav-icon"></div>
            </button>
        </nav>
    </header>
    <div class="mobile-nav">
        <ul class="mobile-nav__list">
            <li style="margin-bottom: 50px;">
                <div class="header--navigation__desktop--account"> <button
                        class="header--navigation__desktop--account__login">Login</button> <button
                        class="header--navigation__desktop--account__create">Create Account</button></div>
            </li>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#!">Features</a></li>
        </ul>
    </div>