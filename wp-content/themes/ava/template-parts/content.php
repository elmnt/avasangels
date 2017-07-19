<?php
/**
 * Template part for displaying main blog feed (via home.php) and posts
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ava
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<?php ava_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if ( is_single() ) : ?>
			<div class="grid">
				<p>single</p>
			</div>
		<?php else: ?>
			<p>all posts</p>
		<?php endif; ?>

		<?php // if excerpt and thumbnail OR no excerpt and thumbnail
		if ( ( has_excerpt() && has_post_thumbnail() ) || ( !has_excerpt() && has_post_thumbnail() )  ): ?>

		<div class="grid--flex">
			<div class="gfitem-1">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</div>
			<div class="gfitem-2">
				<?php the_excerpt(); ?>
			</div>
		</div>

		<?php // if excerpt and no thumbnail OR no excerpt and no thumbnail
		elseif ( ( has_excerpt() && !has_post_thumbnail() ) || ( !has_excerpt() && !has_post_thumbnail() ) ): ?>

		<div class="grid">
			<?php the_excerpt(); ?>
		</div>

		<?php else: ?>
		<?php the_content(); // safe fallback ?>
		<?php endif; ?>

		<p class="mt2"><a href="#">Continue Reading</a></p>

		<?php
			/*
			the_content( sprintf(
				// translators: %s: Name of current post.
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ava' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ava' ),
				'after'  => '</div>',
			) );
			*/
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ava_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
