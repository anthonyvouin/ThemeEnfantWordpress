<?php
/* Template Name: singular */

get_header();
?>

<main class="singular"id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php




if(current_user_can('manage_options') ) {
	echo 'Vous êtes admin';
}




get_footer(); ?>
