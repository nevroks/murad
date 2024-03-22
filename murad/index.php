    <?php get_header()?>
    <main>
        <section class="hireSmarter">
            <div class="hireSmarter__card">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/facebookIco.svg" type="image/webp"><img
                        class="hireSmarter__card-socials facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/facebookIco.svg" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/twitterIco.svg" type="image/webp"><img
                        class="hireSmarter__card-socials twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/twitterIco.svg" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/snapchatIco.svg" type="image/webp"><img
                        class="hireSmarter__card-socials snapchat" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/snapchatIco.svg" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/instagramIco.svg" type="image/webp"><img
                        class="hireSmarter__card-socials instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/instagramIco.svg" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/personImg.webp" type="image/webp"><img
                        class="hireSmarter__card-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewsCard/personImg.png" alt="">
                </picture>
            </div>
            <div class="hireSmarter__content">
                <div class="hireSmarter__text">
                    <div class="hireSmarter__text--title">
                        <p><?php echo carbon_get_theme_option('text_block1-text1'); ?></p>
                        <h1><?php echo carbon_get_theme_option('text_block1-title'); ?></h1>
                    </div>
                    <div class="hireSmarter__text--content">
                        <p><?php echo carbon_get_theme_option('text_block1-text2'); ?></p>
                        <div class="hireSmarter__text--content__btns"> <button>Create Account</button> <button>Learn
                                More</button></div>
                    </div>
                </div>
                <div class="hireSmarter__companies">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/companies/dribblle.webp" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/dribblle.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/companies/stackOverflow.webp" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/stackOverflow.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/companies/instagram.webp" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/instagram.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/companies/befance.webp" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/befance.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="checkBefore">
            <h2><?php echo carbon_get_theme_option('text_block2-title'); ?></h2>
            <div class="checkBefore__benefits">
                <div>
                    <h3><?php echo carbon_get_theme_option('text_block2-block1-title'); ?></h3>
                    <p><?php echo carbon_get_theme_option('text_block2-block1-text'); ?></p>
                </div>
                <div>
                    <h3><?php echo carbon_get_theme_option('text_block2-block2-title'); ?></h3>
                    <p><?php echo carbon_get_theme_option('text_block2-block2-text'); ?></p>
                </div>
                <div>
                    <h3><?php echo carbon_get_theme_option('text_block2-block3-title'); ?></h3>
                    <p><?php echo carbon_get_theme_option('text_block2-block3-text'); ?></p>
                </div>
                <div>
                    <h3><?php echo carbon_get_theme_option('text_block2-block4-title'); ?></h3>
                    <p><?php echo carbon_get_theme_option('text_block2-block4-text'); ?></p>
                </div>
            </div>
        </section>
        <section class="ourFeatures">
            <div class="ourFeatures__wrapper">
                <div class="ourFeatures__text-container">
                    <h2 class="ourFeatures__text-container__title"><?php echo carbon_get_theme_option('text_block3-title'); ?></h2> 
                    <button class="ourFeatures__text-container__button">Try For Free</button>
                </div>
                <div class="ourFeatures__feature-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/features/strongFeatImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/features/strongFeatImg.svg" alt="">
                    </picture>
                    <p class="ourFeatures__feature-container__title"><?php echo carbon_get_theme_option('text_block3-block1-title'); ?></p>
                    <p class="text-medium"><?php echo carbon_get_theme_option('text_block3-block1-text'); ?></p>
                </div>
                <div class="ourFeatures__feature-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/features/reviewFeatImg.webp" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/features/reviewFeatImg.png" alt="">
                    </picture>
                    <p class="ourFeatures__feature-container__title"><?php echo carbon_get_theme_option('text_block3-block2-title'); ?></p>
                    <p class="text-medium"><?php echo carbon_get_theme_option('text_block3-block2-text'); ?></p>
                </div>
                <div class="ourFeatures__feature-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/features/reatedFeatImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/features/reatedFeatImg.svg" alt="">
                    </picture>
                    <p class="ourFeatures__feature-container__title"><?php echo carbon_get_theme_option('text_block3-block3-title'); ?></p>
                    <p class="text-medium"><?php echo carbon_get_theme_option('text_block3-block3-text'); ?></p>
                </div>
                <div class="ourFeatures__feature-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/features/findFeatImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/features/findFeatImg.svg" alt="">
                    </picture>
                    <p class="ourFeatures__feature-container__title"><?php echo carbon_get_theme_option('text_block3-block4-title'); ?></p>
                    <p class="text-medium"><?php echo carbon_get_theme_option('text_block3-block4-text'); ?></p>
                </div>
                <div class="ourFeatures__feature-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/features/portfolioFeatImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/features/portfolioFeatImg.svg" alt="">
                    </picture>
                    <p class="ourFeatures__feature-container__title"><?php echo carbon_get_theme_option('text_block3-block5-title'); ?></p>
                    <p class="text-medium"><?php echo carbon_get_theme_option('text_block3-block5-text'); ?></p>
                </div>
            </div>
        </section>
        <section class="explore">
            <div class="explore__text-container">
                <h2>Explore The Marketplace</h2>
                <p class="text-medium">Find the perfect freelance services for your business · Popular professional
                    services ·</p>
            </div>
            <div class="explore-list">
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/graphicImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/graphicImg.svg" alt="">
                    </picture>
                    <h3 class="explore-list__item-title">Graphic Design</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text1'); ?></p>
                </div>
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/uiImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/uiImg.svg"
                            alt="">
                    </picture>
                    <h3 class="explore-list__item-title">UI Designer</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text2'); ?></p>
                </div>
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/uxImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/uxImg.svg"
                            alt="">
                    </picture>
                    <h3 class="explore-list__item-title">UX Designer</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text3'); ?></p>
                </div>
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/contentImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/contentImg.svg" alt="">
                    </picture>
                    <h3 class="explore-list__item-title">Content Writing</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text4'); ?></p>
                </div>
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/digitalImg.svg" type="image/webp"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/digitalImg.svg" alt="">
                    </picture>
                    <h3 class="explore-list__item-title">Digital Marketing</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text5'); ?></p>
                </div>
                <div class="explore-list__item">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/explore/seoImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/explore/seoImg.svg"
                            alt="">
                    </picture>
                    <h3 class="explore-list__item-title">SEO</h3>
                    <p><?php echo carbon_get_theme_option('text_block4-text6'); ?></p>
                </div>
            </div>
            <div class="explore__footer">
                <div class="explore__footer-text">
                    <h3>Get Starting Work With Startup Today.</h3>
                    <p class="text-medium">Starting a business and getting it off the ground is easy if you follow.</p>
                </div> <button class="explore__footer-button">Start Now</button>
            </div>
        </section>
        <section class="checkOut">
            <div class="checkOut-text">
                <h2>Check out Recent Review</h2>
                <p class="text-medium">Find the perfect freelance services for your business · Popular professional
                    services ·</p>
            </div>
            <div class="checkOut-list">
                <div class="checkOut-list__item">
                    <div class="checkOut-list__item-rate">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" alt="">
                        </picture>
                        <p class="text-medium">5.0</p>
                    </div>
                    <p class="text-medium">“Starting a business and getting it off the ground is easy if you follow.”
                    </p>
                    <div class="checkOut-list__item-person">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.webp" type="image/webp"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.png" alt="">
                        </picture>
                        <p class="checkOut-list__item-person__title">Jhon Smith</p>
                        <p class="checkOut-list__item-person__text">CEO Of Heart Business</p>
                    </div>
                </div>
                <div class="checkOut-list__item">
                    <div class="checkOut-list__item-rate">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" alt="">
                        </picture>
                        <p class="text-medium">5.0</p>
                    </div>
                    <p class="text-medium">“Starting a business and getting it off the ground is easy if you follow.”
                    </p>
                    <div class="checkOut-list__item-person">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.webp" type="image/webp"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.png" alt="">
                        </picture>
                        <p class="checkOut-list__item-person__title">Jhon Smith</p>
                        <p class="checkOut-list__item-person__text">CEO Of Heart Business</p>
                    </div>
                </div>
                <div class="checkOut-list__item">
                    <div class="checkOut-list__item-rate">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/starImg.svg" alt="">
                        </picture>
                        <p class="text-medium">5.0</p>
                    </div>
                    <p class="text-medium">“Starting a business and getting it off the ground is easy if you follow.”
                    </p>
                    <div class="checkOut-list__item-person">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.webp" type="image/webp"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/persons/person1.png" alt="">
                        </picture>
                        <p class="checkOut-list__item-person__title">Jhon Smith</p>
                        <p class="checkOut-list__item-person__text">CEO Of Heart Business</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer()?>