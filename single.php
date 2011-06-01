<?php
/**
 * The single post template file.
 *
 * @package WordPress
 * @subpackage Chameleon
 * @since Chameleon 1.0
 */

get_header(); ?>
<section class="container">
	<div class="row">
		<div class="eightcol">
			<?php get_template_part( 'loop', 'single' );?>
		</div><!--.eightcol-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>