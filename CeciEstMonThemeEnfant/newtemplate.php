<?php

/* Template Name: newtemplate 
Template Post Type: post, page*/

get_header();
?>

<main class="newtemplate" id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php $lien = wp_get_recent_posts(array(
    'numberposts' => 1,
    'post_status' => 'publish'
));

foreach( $lien as $post_item ) : ?>
    <li>
        <a href="<?php echo get_permalink($post_item['ID']) ?>">
            <?php echo get_the_post_thumbnail($post_item['ID']); ?>
            <p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
        </a>
    </li>
    <?php endforeach; ?>

<?php get_footer(); ?>