<div class="qodef-portfolio-title">
	<h2><?php the_title(); ?></h2>
</div>
<div class="qodef-portfolio-horizontal-holder">
    <div class="qodef-portfolio-info-holder">
        <?php

        //get portfolio tags section
        grafik_qode_portfolio_get_info_part('tags');

        //get portfolio custom fields section
        grafik_qode_portfolio_get_info_part('custom-fields');

        ?>
    </div>
</div>
<div class="qodef-two-columns-66-33 clearfix">
	<div class="qodef-column1">
		<div class="qodef-column-inner">
			<?php
			$media = grafik_qodef_get_portfolio_single_media();

			if(is_array($media) && count($media)) : ?>
				<div id="portfolio-slider" class="qodef-portfolio-media qodef-owl-slider qodef-portfolio-small-slider">
					<?php foreach($media as $single_media) : ?>

							<?php grafik_qodef_portfolio_get_media_html($single_media); ?>

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
