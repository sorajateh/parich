
<?php 
get_header('main'); ?>

<div class="container clearfix">
	<div id="page-container" class="clearfix">
		<div class="col-mg-23">
			<div class="page-content clearfix">
				<div class="wrap12">
					<h2 class="page-title"><em><?php _e("<!--:en-->The page cannot be found.<!--:--><!--:th-->ไม่พบหน้าที่ต้องการ<!--:-->"); ?></em></h2>
					<p>
					<?php _e("
						<!--:en-->
							Please check your URL or use the page menu above.
						<!--:-->
						<!--:th-->
						 	url ของท่านไม่ถูกต้อง หรือเลือกหน้าที่ต้องการได้จากเมนูด้านบน
						<!--:-->
					"); ?>
					</p>
				</div><!-- end .wrap12 -->
			</div><!-- end .page-content -->
		</div>
		<div class="col-mg-13-last">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>