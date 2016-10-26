<?php // SETUP VARIABLES
$videolink = get_post_meta( $post->ID, 'video', true );
$youtube = get_post_meta( $post->ID, 'youtube', true );
$audiolevel = get_post_meta( $post->ID, 'audiolevel', true );
if ( '' === $audiolevel ) { $audiolevel = '.3';  }
if ( has_tag( 'home' ) ) { $loop = ' loop'; $ytloop = '&loop=1'; } else { $loop = ''; $ytloop = ''; };
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( '' !== $videolink ) { ?>

	<video class="video-js vjs-default-skin" controls autoplay<?php echo $loop; ?> preload="auto" width="1920" height="1080" poster="" data-setup='{"example_option":true}'>
		<source src="<?php echo esc_url( get_post_meta( $post->ID, 'video', true ) ); ?>" type='video/mp4' />
	</video>

	<script>
	if ($('video').length) {
		$('video').get(0).volume = <?php echo $audiolevel; ?>;
		}
	</script>

<?php } elseif ( '' !== $youtube ) { ?>

<iframe width="1920" height="1080" src="//www.youtube.com/embed/<?php echo esc_attr( get_post_meta( $post->ID, 'youtube', true ) ); ?>?version=3&enablejsapi=1&rel=0&showinfo=0&autoplay=1&controls=0&html5=1<?php echo $ytloop; ?>&volume=100" frameborder="0"  scrolling="yes" allowfullscreen></iframe>

<?php } ?>

</article>
