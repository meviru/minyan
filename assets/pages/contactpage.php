<?php
/* Template Name: Contact Page
*  Template Post Type: Page
*/

get_header();
?>
<section class="content-section contact-section">
    <div class="container">
        <div class="main-title">
            <h1 class="main-title--text text-center">Contact</h1>
        </div>
        <div class="content-wrapper">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();