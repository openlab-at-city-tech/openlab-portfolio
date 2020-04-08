<div class="wrap nosubsub import-page">
	<?php $this->render_header(); ?>

	<p><del><?php _e( 'Step 1: Choose and upload your Portfolio Archive file (.zip).', 'openlab-portfolio' ); ?></del></p>
	<p><del><?php _e( 'Step 2: Import the Portfolio Archive', 'openlab-portfolio' ); ?></del></p>
	<p id="import-status-message"><strong><?php _e( 'Step 3: Now importing.', 'openlab-portfolio' ); ?></strong></p>

	<table id="import-log" class="widefat">
		<thead>
			<tr>
				<th><?php _e( 'Type', 'openlab-portfolio' ); ?></th>
				<th><?php _e( 'Message', 'openlab-portfolio' ); ?></th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
