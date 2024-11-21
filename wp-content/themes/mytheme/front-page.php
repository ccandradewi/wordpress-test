<?php
get_header();
?>

<section class="hero">
    <h1>Welcome to <?php echo esc_html(get_theme_mod('website_name', 'Default Site Name')); ?></h1>
    <p><?php echo esc_html(get_theme_mod('website_tagline', 'Default Tagline')); ?></p>
    <a href="#services" class="btn">Learn More</a>
</section>

<section id="services">
    <h2>Our Services</h2>
    <p>Discover what we offer to help you succeed.</p>
</section>

<?php
get_footer();
?>
