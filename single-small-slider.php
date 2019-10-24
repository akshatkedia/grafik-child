<div class="qodef-portfolio-title">
	<h2><?php the_title(); ?></h2>
</div>
<div class="qodef-two-columns-66-33 clearfix">
	<div class="qodef-column1">
		<div class="qodef-column-inner">
			<?php
			$media = grafik_qode_get_portfolio_single_media();

			if(is_array($media) && count($media)) : ?>
				<div class="qodef-portfolio-media qodef-owl-slider">
					<?php foreach($media as $single_media) : ?>

							<?php grafik_qode_portfolio_get_media_html($single_media); ?>

					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="qodef-column2">
		<div class="qodef-column-inner">
			<div class="qodef-portfolio-info-holder">
				<?php
				//get portfolio content section
				grafik_qode_portfolio_get_info_part('content');
				?>
			</div>
		</div>
	</div>
</div>
