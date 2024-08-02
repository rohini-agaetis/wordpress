<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php ?>
</head>

<body>

    <div>
        <?php
        $query_args = array(
            'post_type' => 'post'
        );

        $posts_query = new WP_Query($query_args);

        echo " <h1><?php bloginfo( 'name' ); ?></h1>";
        echo "<h2><?php bloginfo( 'description' ); ?></h2>";

        if ($posts_query->have_posts()) {

            $first_post = true;
            while ($posts_query->have_posts()) {
                $posts_query->the_post();

                if ($first_post) {
        ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>

                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    </article>
                <?php
                    $first_post = false;
                } else {
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>

                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    </article>
            <?php
                }
            }
            wp_reset_postdata();
        } else {
            ?>
            <p>No posts found.</p>
        <?php
        }
        ?>
    </div>


</body>

</html>