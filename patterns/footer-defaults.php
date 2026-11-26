<?php
/**
 * Title: Default Footer
 * Slug: ashlar-fse/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}},"border":{"top":{"color":"var:preset|color|surface","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--surface);border-top-width:1px;padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"fontSize":"small"} /-->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">
			<?php
			printf(
				/* translators: %s: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'ashlar-fse' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'ashlar-fse' ) ) . '" rel="nofollow">WordPress</a>'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
