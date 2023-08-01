<?php
/* Template Name: Homepage
*  Template Post Type: Page
*/

get_header();
?>
<section class="hero-section" style="background-image: url('<?php echo THEME_FILE_PATH; ?>/assets/images/hero-bg.jpg');">
</section>
<section class="search-wrapper">
    <div class="container">
        <form class="search-bar">
            <input class="search-bar--input" type="text" placeholder="44 rue de la Victoire75009, Paris">
            <button type="submit" class="search-bar--btn">
                <img src="<?php echo THEME_FILE_PATH; ?>/assets/images/search-icon.png" alt="Search">
            </button>
        </form>
        <div class="text-primary fs-medium fw-bold">July 12, 2023 - Date in Hebrew</div>
    </div>
</section>
<section class="slider-section bg-primary-light">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title--text fs-medium text-primary fw-bold">Last Minyan created</h2>
        </div>
        <div class="slider-wrapper">
            <div class="slider" id="slider">
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="see-all-btn btn btn-outline">See All</a>
    </div>
</section>
<section class="slider-section">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title--text fs-medium text-primary fw-bold">Featured Synagogues</h2>
        </div>
        <div class="slider-wrapper">
            <div class="slider" id="slider-2">
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="see-all-btn btn btn-outline">See All</a>
    </div>
</section>
<section class="slider-section bg-primary-light">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title--text fs-medium text-primary fw-bold">All the classes near you</h2>
        </div>
        <div class="slider-wrapper">
            <div class="slider" id="slider-3">
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <a href="javascript:void(0)" class="slider-item--btn btn btn-outline">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="see-all-btn btn btn-outline">See All</a>
    </div>
</section>
<section class="slider-section pb-4">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title--text fs-medium text-primary fw-bold">The latest trips</h2>
        </div>
        <div class="slider-wrapper">
            <div class="slider" id="slider-4">
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-1.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-2.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item--inner">
                        <div class="slider-item--picture play-btn">
                            <img class="slider-item--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/minyan-3.png" alt="Minyan">
                        </div>
                        <div class="slider-item--content">
                            <h3 class="slider-item--title">LOREM IPSUM</h3>
                            <p class="slider-item--desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptas, assumenda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="see-all-btn btn btn-outline">See All</a>
    </div>
</section>
<?php
get_footer();