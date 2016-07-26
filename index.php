<main class="featured">

<button id="reload"></button>
<header>
	<nav>
		<?php if ( 'video' === $format && '' !== $videolink ) : ?>
			<button id="pauseplay" class="play ss-pause"></button>
			<button id="mute" class="unmuted ss-highvolume"></button>
		<?php endif; ?>
		<button id="menu" class="closed touchy">
			<menu>hello
			<ul id="featured">
			<?php $args = array(
				'numberposts' => 10,
				'offset' => 0,
				'tag' => 'featured',
				'orderby' => 'post_date',
				'order' => 'DESC',
				'suppress_filters' => true,
			);

			$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
			foreach ( $recent_posts as $recent ) {
				echo '<li><a href="' . get_permalink( $recent['ID'] ) . '" title="'.esc_attr( $recent['post_title'] ).'" >' . wp_kses_post( $recent['post_title'] ) . '</a> </li> ';
			}
			?>
			</ul>
			</menu>
		</button>
	</nav>
</header>

<?php
$args = array(
	'posts_per_page'   => 1,
	'offset'           => 0,
	'category'         => '',
	'tags'      	   => 'home',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true,
);
?>

<?php $posts_array = get_posts( $args ); ?> 

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; // end of the loop. ?>

</main>
