<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="event-listing-banner" style=" background:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>);"></div>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		<?php if(get_field('tickets_on_sale')): ?>
		<div class="tickts-on-sale">
			<h3>Tickets On Sale</h3>
				<ul>

				<?php while(has_sub_field('tickets_on_sale')): ?>

					<li>
						<div class="detail">
							<p><?php the_sub_field('date'); ?></p>
							<p><?php the_sub_field('description'); ?></p>
						</div>
						<div class="btn">
							<a href="<?php the_sub_field('link'); ?>" target="_blank">GET TICKETS</a>
						</div>
					</li>

				<?php endwhile; ?>

				</ul>
		</div>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
