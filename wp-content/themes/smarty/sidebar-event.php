<?php
if ( is_active_sidebar( 'event-sidebar' ) ) : ?>
	<div id="tertiary" class="sidebar sidebar_type_blog" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'event-sidebar' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>