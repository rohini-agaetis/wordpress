<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php echo get_the_post_thumbnail(); ?>
            <div><?php the_content(); ?></div>
        <?php endwhile; ?>

    <?php else : ?>
        <p>No posts found. :(</p>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>

</html>