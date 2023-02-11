<?php 
/*
 Template Name: PARICH
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/parich-bg.jpg" />
	</div>	
</section>

<section class="page-content py-5">
	<div class="container">
		<!-- <h1><em><?php //_e("<!--:en-->PARICH<!--:--><!--:th-->พาริช<!--:-->") ?></em></h1>
		<h2 class="cond"><?php //_e("<!--:en-->High quality mineral fertilizer<!--:--><!--:th-->ปุ๋ยเคมี ชั้นดีจากแหล่งผลิตคุณภาพสูง<!--:-->") ?></h2>
		<h3><em><?php //_e("<!--:en-->Single Fertilizers<!--:--><!--:th-->แม่ปุ๋ยคุณภาพสูง<!--:-->") ?></em></h3> -->

		<h3><?php _e("<!--:en-->Nitrogen Fertilizers<!--:--><!--:th-->ปุ๋ยไนโตรเจน (Nitrogen Fertilizers)<!--:-->") ?></h3>
		<h4 class="text-orange"><?php _e("<!--:en-->Ammonium Sulphate 21-0-0 + 24S<!--:--><!--:th-->แอมโมเนียมซัลเฟต  21-0-0 + 24S<!--:-->") ?></h4>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    		<div class="col">
				<h5>21-0-0 AMS</h5>
				<p><?php _e("<!--:en-->Powder<!--:--><!--:th-->ชนิด ผง ผลิตโดย ปตท. อาซาฮี<!--:-->") ?></p>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Red-AMS-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Red-AMS-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Red-AMS-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Red-AMS-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-AMS.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-AMS_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col">
				<h5>21-0-0 ASW</h5>
				<p><?php _e("<!--:en-->Caprolactam Grade<!--:--><!--:th-->ชนิด โดนัทผสม ผลิตโดย อูเบะ<!--:-->") ?></p>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Green-ASCB-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Green-ASCB-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Green-ASCB-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Green-ASCB-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-ASW.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-ASW_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col">
				<h5>21-0-0 ASCL</h5>
				<p><?php _e("<!--:en-->Caprolactam Grade<!--:--><!--:th-->ชนิด โดนัทผสม ผลิตโดย อูเบะ<!--:-->") ?></p>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-ASCL-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-ASCL-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-ASCL-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-ASCL-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-ASCL.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-ASCL_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col">
				<h5>21-0-0 Compact</h5>
				<p><?php _e("<!--:en-->Caprolactam Grade<!--:--><!--:th-->ชนิด โดนัทผสม ผลิตโดย อูเบะ<!--:-->") ?></p>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Blue-AMS-Compact-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Blue-AMS-compact-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Blue-AMS-compact-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Blue-AMS-compact-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-Compact.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-Compact_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
		</div>

		<h4 class="text-orange"><?php _e("<!--:en-->Urea 46-0-0<!--:--><!--:th-->ยูเรีย 46-0-0<!--:-->") ?></h4>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			<div class="col">
				<h5><?php _e("<!--:en-->46-0-0 Prill<!--:--><!--:th-->46-0-0 (ยูเรีย) เม็ดใส<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-Prill-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-Prill-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-Prill-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-Prill-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/46-0-0-Prill.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/46-0-0-Prill_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col">
				<h5><?php _e("<!--:en-->46-0-0 Granular<!--:--><!--:th-->46-0-0 (ยูเรีย)<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/46-0-0-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/46-0-0.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/46-0-0_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col">
				<!-- <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">สรรพคุณ</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">sadf</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">3452345</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.asdf</div>
				</div> -->
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>ละลายง่าย ช่วยเร่งการการเจริญเติบโตทางด้านลำต้นและใบ ทำให้พืชมีใบดก และสีเขียวเข้ม</p>
					<h6>คุณสมบัติพิเศษ</h6>
					<p>ได้คุณภาพ มีค่าไบยูเร็ตที่ต่ำ (&lt;1&#37;) ปลอดภัยในการใช้</p>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">46%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>0%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<h3><?php _e("<!--:en-->Potassium Fertilizers<!--:--><!--:th-->ปุ๋ยโพแทสเซี่ยม (Potassium Fertilizers)<!--:-->") ?></h3>
		<h4 class="text-orange"><?php _e("<!--:en-->Potassium Chloride (MOP) 0-0-60<!--:--><!--:th-->โพแทสเซียม 0-0-60<!--:-->") ?></h4>

		<div class="row">
			<div class="col-4">
				<h5><?php _e("<!--:en-->0-0-60 (MOP) Powder<!--:--><!--:th-->0-0-60 (MOP) เม็ด<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-60-Red-Granular-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-60-Red-Granular-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-60-Red-Granular-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-60-Red-Granular-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/0-0-60-Red.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/0-0-60-Red_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col-8">
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>ช่วยการการส่งเสริมให้พืชแตกรากได้ดี ทำให้พืชสามารถสะสมแป้งได้</p>
					<h6>คุณสมบัติพิเศษ</h6>
					<p>ได้คุณภาพ มีค่าไบยูเร็ตที่ต่ำ (&lt;1&#37;) ปลอดภัยในการใช้</p>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">0%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>60%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<h4 class="text-orange"><?php _e("<!--:en-->Potassium Sulphate<!--:--><!--:th-->โพแทสเซียมซัลเฟต<!--:-->") ?></h4>

		<div class="row pb-5">
			<div class="col-4">
				<h5><?php _e("<!--:en-->Sulfate of Potash (SOP)<br/>0-0-45 + 15S Powder<!--:--><!--:th-->0-0-45 + 15S ผง<br/>Sulfate of Potash (SOP)<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-45-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-45-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-45-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/0-0-45-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/PARICH-0-0-45-01.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/PARICH-0-0-45-01_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col-8">
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>ช่วยการการส่งเสริมให้พืชแตกรากได้ดี ทำให้พืชสามารถสะสมแป้งได้</p>
					<h6>คุณสมบัติพิเศษ</h6>
					<ul>
						<li>เป็นปุ๋ยโพแทสปลอดคลอไรด์ มีความเหมาะสมกับการใช้ในกรณีต่อไปนี้
							<ul>
								<li>ใช้กับพืชบางชนิดที่ไม่ทนต่อคลอไรด์ เช่น ยาสูบและผลไม้บางชนิดเช่น สับปะรด, องุ่น, ส้ม, เสาวรส และมะม่วง</li>
								<li>ดินในบางที่มีปริมาณคลอไรด์สะสมอยู่มาก หรือน้ำในบริเวณนั้นมีคลอไรด์ค่อนข้างสูงอยู่แล้ว ดังนั้นการใช้งานปุ๋ยโพแทสเซียมคลอไรด์ อาจจะทำให้พืชสะสมคลอไรด์เกินความจำเป็นจนอาจจะกลายเป็นพิษจนทำให้ของใบแห้ง ใบเหลือง</li>
							</ul>
						</li>
						<li>มีกำมะถันสามารถช่วยการสังเคราะห์แสง ส่งเสริมความแข็งแรงในการเจริญเติบโตของพืช</li>
					</ul>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">0%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>45%</td></tr>
					<tr><td><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Sulfur<!--:--><!--:th-->กำมะถัน<!--:-->") ?> 15%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<h3><?php _e("<!--:en-->Compound NPK Mineral Fertilizer<!--:--><!--:th-->ปุ๋ย NPK แบบคอมพาวน์<!--:-->") ?></h3>

		<div class="row pb-5">
			<div class="col-4">
				<h5>19-9-9 +1Mg +4S</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_19-9-9_f.png" />
					</li>
					<li class="back-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_19-9-9_b.png" />
					</li>
				</ul>
				<!-- <div class="granular-circ">
					<a class="fancybox" href="<?php //echo get_template_directory_uri(); ?>/images/granular/17-6-18.jpg">
						<img src="<?php //echo get_template_directory_uri(); ?>/images/granular/17-6-18_thumb.jpg" />
					</a>
					<span class="caption"><?php //_e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div> -->
			</div>
			<div class="col-8">
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>เป็นปุ๋ยคอมพาวน์ ธาตุอาหารครบถ้วนในเม็ดเดียว เม็ดแกร่ง ละลายง่าย พร้อมด้วยแมกนีเซียมเป็นองค์ประกอบหลักที่สำคัญของคลอโรฟิลล์และเป็นตัวเร่งปฏิกิริยาของเอนไซม์ที่สำคัญหลายชนิด และยังมีกำมะถันซึ่งมีความจำเป็นต่อการสร้างโปรตีนพืช และเป็นองค์ประกอบของวิตามินบางตัวที่มีผลทางอ้อมต่อการสร้างสีเขียวของพืช ช่วยให้พืชเกิดการหายใจและการปรุงอาหารพืช</p>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">19%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>9%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>9%</td></tr>
					<tr><td><?php _e("<!--:en-->Magnesium (MgO)<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1%</td></tr>
					<tr><td><?php _e("<!--:en-->Sulfur<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>4%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<div class="row pb-5">
			<div class="col-4">
				<h5>17-17-17 +0.8S +1Mg +0.01B</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_17-17-17_f.png" />
					</li>
					<li class="back-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_17-17-17_b.png" />
					</li>
				</ul>
			</div>
			<div class="col-8">
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>เป็นปุ๋ยคอมพาวน์ ธาตุอาหารครบถ้วนในเม็ดเดียว เม็ดแกร่ง ละลายง่าย พร้อมด้วยกำมะถันซึ่งมีความจำเป็นต่อการสร้างโปรตีนพืช และเป็นองค์ประกอบของวิตามินบางตัวที่มีผลทางอ้อมต่อการสร้างสีเขียวของพืช ช่วยให้พืชเกิดการหายใจและการปรุงอาหารพืช</p>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">17%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>17%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>17%</td></tr>
					<tr><td><?php _e("<!--:en-->Sulfur<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>0.8%</td></tr>
					<tr><td><?php _e("<!--:en-->Magnesium (MgO)<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1%</td></tr>
					<tr><td><?php _e("<!--:en-->Boron<!--:--><!--:th-->โบรอน<!--:-->") ?></td><td>0.01%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<div class="row pb-5">
			<div class="col-4">
				<h5>10-7-28 +3S +1.5Mg +0.3B</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_10-7-28_f.png" />
					</li>
					<li class="back-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/BIO_10-7-28_b.png" />
					</li>
				</ul>
			</div>
			<div class="col-8">
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<h6>สรรพคุณ</h6>
					<p>เป็นปุ๋ยคอมพาวน์ ธาตุอาหารครบถ้วนในเม็ดเดียว เม็ดแกร่ง ละลายง่าย พร้อมด้วยแมกนีเซียมเป็นองค์ประกอบหลักที่สำคัญของคลอโรฟิลล์และเป็นตัวเร่งปฏิกิริยาของเอนไซม์ที่สำคัญหลายชนิด และยังมีกำมะถันซึ่งมีความจำเป็นต่อการสร้างโปรตีนพืช และเป็นองค์ประกอบของวิตามินบางตัวที่มีผลทางอ้อมต่อการสร้างสีเขียวของพืช ช่วยให้พืชเกิดการหายใจและการปรุงอาหารพืช</p>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table table-bordered">
					<tr><td scope="col"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td scope="col">10%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>7%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>28%</td></tr>
					<tr><td><?php _e("<!--:en-->Sulfur<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>3%</td></tr>
					<tr><td><?php _e("<!--:en-->Magnesium (MgO)<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1.5%</td></tr>
					<tr><td><?php _e("<!--:en-->Boron<!--:--><!--:th-->โบรอน<!--:-->") ?></td><td>0.3%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>

		<h3>ปุ๋ย NPK แบบบัลค์เบลนด์</h3>
		<h4 class="text-orange">กลุ่มรองพื้น เพิ่มการเจริญเติบโต</h4>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			<div class="col mb-5">
				<h5>27-12-6</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_27-12-6_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_27-12-6_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>25-7-7</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_25-7-7_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_25-7-7_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>20-3-3</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_20-3-3_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_20-3-3_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>18-20-0</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-20-0_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-20-0_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>18-8-8</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-8-8_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-8-8_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>18-4-5</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-4-5_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_18-4-5_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>17-3-6</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_17-3-61MgO15s_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_17-3-61MgO15s_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>16-8-8</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_16-8-8_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_16-8-8_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>30-0-0</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_30-0-0_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_30-0-0_b.png" />
					</li>
				</ul>
			</div>
		</div>
		<h4 class="text-orange">กลุ่มเพิ่มผลผลิต เพิ่มคุณภาพ</h4>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			<div class="col mb-5">
				<h5>21-4-21</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_21-4-21_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_21-4-21_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>21-7-18</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_21-7-18_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_21-7-18_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>20-8-20</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_20-8-201MgO_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_20-8-201MgO_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>16-4-16</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_16-4-16_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_16-4-16_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>15-5-20</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_15-5-20_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_15-5-20_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>13-5-33</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_13-5-33_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_13-5-33_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>15-7-18</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_15-7-181MgO6s_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_15-7-181MgO6s_b.png" />
					</li>
				</ul>
			</div>
			<div class="col mb-5">
				<h5>13-6-27</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_13-6-27_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Tonmai_13-6-27_b.png" />
					</li>
				</ul>
			</div>
		</div>

		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h3>เกร็ดความรู้</h3>
			<h4 class="text-orange">ปุ๋ยไนโตรเจน (Nitrogen Fertilizers)</h4>
			<p>ไนโตรเจนเป็นธาตุที่สำคัญมากต่อการเจริญเติบโตของพืช อาจเรียกว่าสำคัญที่สุดในหมู่ธาตุอาหารหลักก็ว่าได้ 
				เพราะไนโตรเจนเป็นส่วนสำคัญในการสร้างโปรตีนของพืช เป็นส่วนสำคัญในการช่วยในการให้พลังงาน และส่งเสริม
				การเจริญเติบโตและสร้างผลผลิต โดยพืชจะนำไนโตรเจนที่ดูดซับไปผสมกับไฮโดรเจนที่ได้จากน้ำ และก๊าซคาร์บอนได้ออกไซด์
				ในอากาศมารวมกันแล้วสร้างเป็นโปรตีนซี่งมาสร้างเนื้อเยื่อและส่วนประกอบสำคัญต่างๆของพืช คล้ายกับคนที่โปรตีนก็เป็น
				สิ่งสำคัญที่ทำให้เราเติบโตและช่วยซ่อมแซมส่วนที่สึกหรอ การขาดไนโตรเจนก็เหมือนไม่มีอาหารมาให้พืชสร้างลำต้น ไม่มี
				พลังงานให้พืชเติบโต พืชก็โทรมใบเหลืองแก่นและตายในที่สุด ดังนั้นเราจึงต้องใส่ปุ๋ยไนโตรเจนเพื่อส่งเสริมให้พืชเจริญ
				อย่างสมบูรณ์ป้องกันมิให้พืชแก่ก่อนกำหนด</p>
			<p>ปุ๋ยเคมีที่เกษตรกรใช้ในการช่วยเสริมไนโตรเจนในดินหลักๆได้แก่แอมโมเนียมซัลเฟตและยูเรีย  ข้อแตกต่างระหว่างยูเรียและ
				แอมโมเนียมซัลเฟตคือยูเรียมีไนโตรเจนเป็นส่วนประกอบถึง 46% แต่แอมโมเนียมซัลเฟตมีเพียง 21% ดูผิวเผินเหมือนยูเรีย
				จะดีกว่าเพราะมีราคาต่อหน่วยไนโตรเจนที่ต่ำกว่า แต่จริงๆก็ไม่ใช่ว่ายูเรียจะดีกว่าเสมอไปเพราะแอมโมเนียมซัลเฟตมีซัลเฟอร์
				หรือกำมะถันเป็นส่วนประกอบอีกมากถึง 24%ซึ่งกำมะถันช่วยในการสังเคราะห์โปรตีน และเป็นส่วนหนึ่งที่สร้างคลอโรฟิลหรือสาร
				ที่ช่วยสังเคราะห์แสงพืช เป็นส่วนประกอบสำคัญที่ทำให้พืชเติบโต ผลผลิตมีรสชาติสีสัน หากพืชขาดกำมะถันก็จะสร้างอาหารไม่ได้
				สมบูรณ์ ต้นไม่โต เราจึงต้องใส่กำมะถันให้กับพืช และนอกจากนั้น แอมโมเนียมซัลเฟตยังสูญเสียจากการระเหยไปในอากาศช้ากว่ายูเรีย 
				การเลือกใช้นั้นต้องขึ้นอยู่กับสภาพดินและความต้องการธาตุอาหารของพืชเป็นหลัก โดยเฉพาะอย่างยิ่งพื้นที่ที่มักขาดแคลนแร่ธาตุกำมะถัน
				คือ พื้นที่ขาดแคลนอินทรียวัตถุ หรือพื้นที่ดินทราย</p>
			<p>พาริช เป็นตัวแทนจำหน่าย 21-0-0  แอมโมเนียมซัลเฟต ของ บริษัทชั้นนำ เช่นบริษัท อูเบะเคมิคัลส์ (เอเชีย) จำกัด (มหาชน) หรือ ทีซีแอล
				และ บริษัท พีทีที อาซาฮี เคมิคอล จำกัด (บริษัทในเครือของ บริษัท ปตท. จำกัด (มหาชน))  พร้อมยังสามารถนำมาอัดรวมเป็นเม็ดแบบคอมแพ๊ค 
				เราจึงมี แอมโมเนียมซัลเฟต ให้เลือกมากหลากชนิดตามความต้องการ  นอกจากนั้นสำหรับปุ๋ยยูเรีย 46-0-0 พาริชยังจำหน่าย ยูเรียเม็ดใส เพื่อเป็น
				วัตถุดิบสำหรับอาหารสัตว์ และสารตั้งต้นผลิตผงชูรสให้กับโรงงานที่มีชื่อเสียงอีกหลายแห่ง ดังนั้นจึงมั้นใจได้ว่า เม็ดใส ของพาริชได้คุณภาพ มีค่า
				ไบยูเร็ตที่ต่ำ (&lt;1&#37;) ปลอดภัยในการใช้
			<p>และเนื่องจากการใช้ยูเรียจะต้องระมัดระวังเรื่องการสูญหายของธาตุไนโตรเจนที่ระเหยง่าย เพราะโดยปกติยูเรียจะระเหยหายไปในอากาศภายในไม่กี่วัน 
				ใบพืชจึงมีใบเขียวไม่นานแล้วก็กลับมาเหลืองเหมือนเดิม ปัจจุบันจึงต้องมีเทคโนโลยีใหม่ๆที่ต่างประเทศใช้อย่างแพร่หลายเช่นการนำสารลดการระเหย
				ต่างๆเช่นสาร NBPT (N Butyl ThiophosphoricTriamide)มาเคลือบ ซึ่งเทคโนโลยีนี้มีใช้แล้วทั่วโลกและรองรับโดยกระทรวงเกษตรสหรัฐ โดยพาริชได้
				จัดจำหน่ยภายใต้ตรา <a class="color-nitro" href="<?php echo get_permalink( get_page_by_path( 'nitro' ) ); ?>"><strong>พาริช ไนโตร</strong></a></p>
			<h4 class="text-orange">ปุ๋ยฟอสฟอรัส (Phosphorus Fertilizers)</h4>
			<p>ธาตุฟอสฟอรัส มีความสำคัญต่อการเจริญเติบโตของราก ทำให้รากของพืชแข็งแรง นอกจากนั้นยังช่วยสร้าง ดอก ผล และเอนไซม์ ทำหน้าที่ในการสร้างแป้งและน้ำตาล และเป็นตัวนำการสร้างพลังงานเพื่อนำแร่ธาตุส่งไปเลี้ยงส่วนต่างๆของต้นพืช ซึ่งส่งผลทำให้ให้ต้นแข็งแรง</p>
			<p>ธาตุฟอสฟอรัสในดินที่จะเป็นประโยชน์ต่อพืชได้จะต้องอยู่ในรูปของอนุมูลของ สารประกอบที่เรียกว่า ฟอสเฟตไอออน (H2PO4- หรือ HPO4-) ซึ่งจะต้องละลายอยู่ในน้ำในดิน ในประเทศไทยธาตุฟอสฟอรัสจะมีอยู่ในดินมากพอสมควร แต่เป็นธาตุที่ไม่เคลื่อนที่ในดินหรือละลายน้ำได้ยากทำให้พืชดูดเอา ไปใช้ได้ยาก ดังนั้นแม้แต่ปุ๋ยที่ใส่ลงไปในดินโดยตรงก็ประมาณกันไว้ว่า 80-90 % ของธาตุฟอสฟอรัสทั้งหมดนั้นจะถูกดินยึดไว้โดยการทำปฏิกิริยากับแร่ธาตุต่าง ๆ ในดิน จึงมักจะมีปัญหาเสมอว่าถึงแม้จะมีฟอสฟอรัสในดินมากก็จริงแต่พืชก็ยัง ขาดฟอสฟอรัส เพราะส่วนใหญ่อยู่ในรูปที่ละลายน้ำยากนั่นเอง  การใส่ปุ๋ยฟอสเฟตจึงไม่ควรคลุกเคล้าให้เข้ากับดิน เพราะยิ่งจะทำให้ปุ๋ยถูกตรึงในดินได้เร็วยิ่งขึ้น แต่ควรจะใส่แบบโรยเป็นแถบให้ลึกลงไปในดินในบริเวณรากของพืช หรือเป็นโรยจุด</p>
			<p>วิธีแก้อย่างหนึงคือต้องใส่คู่กับปุ๋ยอินทรีย์หรืออะมิโนซึ่งจะช่วยให้รากดูดซับธาตุฟอสฟอรัสได้ง่ายขึ้น ซึ่งพาริช มีหลายทางเลือกที่จะช่วยแก้ปัญหาดังกล่าว เช่น ปุ๋ยเคมที่เสริมไบโอสติมูแลนท์ <a class="color-bio" href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><strong>พาริช ไบโอ</strong></a> ปุ๋ยอินทรีย์เคมี <a class="color-bone" href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><strong>พาริช โบน</strong></a> หรือ ปุ๋ยอินทรีย์ล้วน <a class="color-nitro" href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><strong>พาริช พาโกร</strong></a></p>
			<h4 class="text-orange">ปุ๋ยโพแทสเซี่ยม (Potassium Fertilizers)</h4>
			<p>ธาตุโพแทสเซียมเป็นธาตุที่จำเป็นต่อกิจกรรมหรือกระบวนการต่าง ๆ ในเซลล์พืช  มีความสำคัญในการสร้างราก ช่วยทำให้ผนังเซลล์แข็งแรง ช่วยเพิ่มพื้นที่ใบและปริมาณคลอโรฟิลล์ จึงช่วยในการสร้างและการเคลื่อนย้ายอาหารพวกแป้งและน้ำตาลที่เกิดจากการสังเคราะห์แสงในพืช ไปเลี้ยงส่วนที่กำลังเติบโต และส่งไปเก็บไว้เป็นเสบียงที่หัวหรือที่ลำต้น</p>
			<p>นอกจากนั้นยังช่วยเร่งการสุกแก่ การติดดอกออกผล และคุณภาพของเมล็ดและผล ทำให้มีจำนวนเมล็ดและจำนวนเมล็ดดีต่อรวงสูง โดยเฉพาะพืชจำพวก อ้อย ปาล์มและ ไม้ผล นั้นต้องการโพแทสเซียมสูงมากเพื่อทำให้เนื้อของผลไม้มีคุณภาพสูง สร้างน้ำมัน ได้รสชาติ และนอกจากนั้นพืชหัวที่เกิดจากราก (root tuber) เช่น มันเทศ และมันสำปะหลังก็ต้องการโพแทสเซียมเพื่อทำให้พืชหัวสร้างหัวได้สมบูรณ์  นอกจากนั้น หน้าที่สำคัญอีกส่วนหนึงคือช่วยกระตุ้นการทำงานของ enzyme ที่เกี่ยวข้องกับกระบวนการต่างๆเช่น การสังเคราะห์แสง การหายใจ และ การควบคุมแรงดันภายในเซลล์ ซึ่งเกี่ยวข้องกับการดูดน้ำ และการปิดเปิดของปากใบ ทำให้พืชทนทานต่อการเปลี่ยนแลปงของอากาศไดยเฉพาะยามที่อากาศร้อนจัด ถ้าพืชขาดโพแทสเซียมจะทำให้อัตราการสังเคราะห์แสงลดลงและอัตราการหายใจสูงขึ้นในไม้ผล จะทำให้คุณภาพและปริมาณผลผลิตของพืชลดต่ำลง คุณภาพของผลไม้ เช่น สีของผลไม้สวย เนื้อจะฟ่าม เนื้อไม่แน่น หัวจะลีบ และอ้อยก็ไม่ค่อยมีน้ำตาล</p>
			<p>ปุ๋ยโพแทสเซียมสุดนิยม คือ สูตร 0-0-60  หรือที่เรียกว่า โพแทสเซียมคลอไรด์ (Potassium Chloride, KCL) ซึ่งพาริชมีจำหน่ายทั้งแบบเม็ดและแบบที่เป็นผง และนอกจาก 0-0-60 พาริชยังจำหน่าย ปุ๋ยโพแทสปลอดคลอไรด์ (chloride free fertilizers) หรือโพแทสเซี่ยมซัลเฟต (Sulfate of Potash) 0-0-45 ผลิตโดย บริษัท ไทยโอลีโอเคมี จำกัด (บริษัทในเครือของ บริษัท ปตท. จำกัด (มหาชน)) มีส่วนของกำมะถันสูงมากถึง 15%</p>
			<p>รากพืชก็สามารถดึงดูดธาตุนี้ไปใช้ประโยชน์ได้ง่ายคล้ายกับไนโตรเจน แต่โพแทสเซียมที่พืชจะดึงดูดไปใช้ได้ต้องอยู่ในรูปอนุมูลบวก (โพแทสเซียมไอออน K+) เท่านั้น 
				โดยปริมาณโพแทสเซียมที่พืชต้องการขึ้นอยู่กับชนิดของดิน เช่นดินเหนียวจะมีโพแทสเซียมเมากกว่าดินทราย เพราะโพแทสเซียมไอออนจะดูดยึดอยู่ที่อนุภาคดินเหนียว
				หรือดินที่มีเนื้อละเอียดได้มาก ส่วนดินทรายและดินร่วนป่นจะมีโพแทสเซียมอยู่น้อยและถูกชะล้างได้ง่าย จึงอาจทำให้มีโปโพแทสเซียมไม่เพียงพอตอ่พืช วิธีที่ดีคือ
				ต้องช่วยเสริมทำให้ดินดีมีเนื้อที่ดีขึ้น อุ้มน้ำมากขึ้นด้วยการปรับปรุงดิน โดยใช้ปุ๋ยที่ผสมสารอินทรีย์หรือไบโอสติมูแลนท์เช่น <a class="color-bio" href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><strong>พาริช ไบโอ</strong></a> หรือ
				ปุ๋ยอินทรีย์เคมีที่เต็มไปด้วยสารอินทรียวัตถุคุณภาพสูงเช่น <a class="color-bone" href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><strong>พาริช โบน</strong></a> หรือ ปุ๋ยอินทรีย์ล้วน <a class="color-pagro" href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><strong>พาริช พาโกร</strong></a></p>
		<?php endif; ?>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
