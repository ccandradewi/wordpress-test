<?php get_header(); ?>
<div class="site-header">
    <?php if (get_theme_mod('website_logo')) : ?>
        <img src="<?php echo esc_url(get_theme_mod('website_logo')); ?>" alt="<?php echo esc_attr(get_theme_mod('website_name')); ?>">
    <?php endif; ?>

    <h1><?php echo esc_html(get_theme_mod('website_name', 'Default Site Name')); ?></h1>
    <p><?php echo esc_html(get_theme_mod('website_tagline', 'Default Tagline')); ?></p>
</div>


<section class="hero">
    <h2>Welcome to Our Company</h2>
    <p>We deliver the best solutions for your business needs.</p>
    <a href="#contact" class="btn">Contact Us</a>
</section>


<section class="features">
    <div class="feature">
        <h3>Professional</h3>
        <p>We have an experienced and professional team.</p>
    </div>
    <div class="feature">
        <h3>Innovative</h3>
        <p>Always providing creative ideas and solutions.</p>
    </div>
    <div class="feature">
        <h3>Efficient</h3>
        <p>Save time and money with our top-notch services.</p>
    </div>
</section>

<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>Email: info@yourcompany.com</p>
    <p>Phone: +1 123-456-7890</p>
</section>

<?php get_footer(); ?>
