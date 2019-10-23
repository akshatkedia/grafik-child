
<?php get_header(); ?>
	<?php grafik_qode_get_title();  ?>
	<?php get_template_part('slider'); ?>
	<div class="qodef-container">
		<?php do_action('grafik_qodef_after_container_open'); ?>
		<div class="qodef-container-inner clearfix">

      <?php
        $instagram_page = get_page_by_title('Get to know us');
        if(is_page($instagram_page->ID)) {
      ?>
      <h1><?php grafik_qodef_title_text(); ?></h1>
      <?php } ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
					<?php the_content(); ?>
					<?php do_action('grafik_qodef_page_after_content'); ?>
				<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
					<div <?php echo grafik_qodef_sidebar_columns_class(); ?>>
						<div class="qodef-column1 qodef-content-left-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('grafik_qodef_page_after_content'); ?>
							</div>
						</div>
						<div class="qodef-column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
					<div <?php echo grafik_qodef_sidebar_columns_class(); ?>>
						<div class="qodef-column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="qodef-column2 qodef-content-right-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('grafik_qodef_page_after_content'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php do_action('grafik_qodef_before_container_close'); ?>
	</div>
<?php get_footer(); ?>
