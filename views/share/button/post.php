<?php if ( ! $data['added'] ) : ?>
	<span class="portfolio-actions portfolio-actions-<?php echo (int) $data['id']; ?>">
		<button id="add-to-portfolio-<?php echo (int) $data['id']; ?>" class="add" data-entry="<?php echo esc_attr( wp_json_encode( $data ) ); ?>">
			<?php _e( 'Add to Portfolio', 'openlab-portfolio' ); ?>
		</button>
	</span>
<?php else: ?>
	<span class="portfolio-actions">
		<a href="<?php echo esc_url( $data['edit_link'] ); ?>">
			<?php _e( 'Added to my Portfolio', 'openlab-portfolio' ); ?>
		</a>
	</span>
<?php endif; ?>
