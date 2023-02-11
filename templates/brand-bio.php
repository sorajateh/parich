<?php 
/*
 Template Name: PARICH Bio
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/bio-bg.jpg" />
	</div>
</section>
<section class="page-content py-5">
	<div class="container">
		<h1 class="text-purple"><?php _e("<!--:en-->PARICH Bio<!--:--><!--:th-->พาริช ไบโอ<!--:-->") ?></h1>
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
			<h5>Compound NPK fertilizers that contain primary and secondary macronutrients as well as micronutrients coated with an exclusive bio-coating technology from France</h5>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
		<ul>
			<li><strong>ไม่ใช่แค่ปุ๋ยเคมีทั่วไป แต่เป็นปุ๋ย NPK แบบคอมพาวด์ อัดแน่นด้วยธาตุอาหารรอง ธาตุอาหารเสริม และผลิตด้วยเทคโนโลยีพิเศษจาก<em>ฝรั่งเศส</em></strong></li>
			<li><strong>พืชสมบูรณ์ โตไว แข็งแรงทนทานโรคและแมลง</strong></li>
			<li><strong>ปลดล็อครากช่วยในการดูดซึมธาตุอาหาร</strong></li>
			<li><strong>ทุกเม็ดมีธาตุอาหารเท่ากัน พืชได้สารอาหารสม่ำเสมอ</strong></li>
		</ul>
		<?php endif; ?>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-5">
			<div class="col pb-3">
				<h5>19-9-9 + TE<?php _e("<!--:en-->&nbsp+&nbspBiostimulants<!--:--><!--:th-->&nbsp<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/19-9-9-bio-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/19-9-9-bio-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/19-9-9-bio-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/19-9-9-bio-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/19-9-9+TE.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/19-9-9+TE_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>19%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>9%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>9%</td></tr>
					<tr><td><?php _e("<!--:en-->MgO<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1%</td></tr>
					<tr><td><?php _e("<!--:en-->S<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>8%</td></tr>
					<tr><td><?php _e("<!--:en-->Zn<!--:--><!--:th-->สังกะสี<!--:-->") ?></td><td>0.1%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กก.<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col pb-3">
				<h5>15-15-15 + TE<?php _e("<!--:en-->&nbsp+&nbspBiostimulants<!--:--><!--:th-->&nbsp<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/15-15-15-bio-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/15-15-15-bio-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/15-15-15-bio-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/15-15-15-bio-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/15-15-15+TE.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/15-15-15+TE_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>15%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>15%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>15%</td></tr>
					<tr><td><?php _e("<!--:en-->MgO<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1%</td></tr>
					<tr><td><?php _e("<!--:en-->S<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>5%</td></tr>
					<tr><td><?php _e("<!--:en-->Zn<!--:--><!--:th-->สังกะสี<!--:-->") ?></td><td>0.1%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กก.<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col pb-3">
				<h5>10-7-28 + TE<?php _e("<!--:en-->&nbsp+&nbspBiostimulants<!--:--><!--:th-->&nbsp<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-7-28-bio-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-7-28-bio-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-7-28-bio-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-7-28-bio-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/10-7-28+TE.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/10-7-28+TE_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>10%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>7%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>28%</td></tr>
					<tr><td><?php _e("<!--:en-->MgO<!--:--><!--:th-->แมกนีเซียม (MgO)<!--:-->") ?></td><td>1%</td></tr>
					<tr><td><?php _e("<!--:en-->S<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>5%</td></tr>
					<tr><td><?php _e("<!--:en-->Zn<!--:--><!--:th-->สังกะสี<!--:-->") ?></td><td>0.1%</td></tr>
					<tr><td><?php _e("<!--:en-->Br<!--:--><!--:th-->โบรอน<!--:-->") ?></td><td>0.3%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กก.<!--:-->") ?></td></tr>
				</table>
			</div>
		
			<div class="col pb-3">
				<h5>8-24-24 + TE<?php _e("<!--:en-->&nbsp+&nbspBiostimulants<!--:--><!--:th-->&nbsp<!--:-->") ?></h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/8-24-24-bio-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/8-24-24-bio-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/8-24-24-bio-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/8-24-24-bio-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/8-24-24.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/8-24-24_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>8%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>24%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>24%</td></tr>
					<tr><td><?php _e("<!--:en-->S<!--:--><!--:th-->กำมะถัน<!--:-->") ?></td><td>5%</td></tr>
					<tr><td><?php _e("<!--:en-->Zn<!--:--><!--:th-->สังกะสี<!--:-->") ?></td><td>0.1%</td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->Kg<!--:--><!--:th-->กก.<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col">
				<h5>12-12-17 +TE</h5>
			</div>
			<div class="col">
				<h5>10-7-28</h5>
			</div>
		</div>
		
		<h3 class="text-purple"><?php _e("<!--:en-->Contains major nutrients, micronutrients as well as trace elements that are enough for plant needs<!--:--><!--:th-->อะไรที่ทำให้พาริชไบโอแตกต่าง<!--:-->") ?></h3>
		<ul>
			<li><?php _e("<!--:en-->What’s unique about PARICH Bio?<!--:--><!--:th-->เป็นปุ๋ยคอมพาวน์ที่มีธาตุอาหารหลังครบถ้วนและยังอัดแน่นด้วยธาตุอาหารรอง<!--:-->") ?></li>
			<li><?php _e("<!--:en-->Coated with biostimulant formulated exclusively from France<!--:--><!--:th-->ผลิตด้วยเทคโนโลยีพิเศษจากฝรั่งเศสทำให้พืชดูดซับได้ดีขึ้น<!--:-->") ?></li>
		</ul>
		<?php 	
		if ( qtrans_getLanguage() == "en" ) {
			echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/biostimulants-diagram-en.png" />';
		}
		if ( qtrans_getLanguage() == "th" ) {
			echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/biostimulants-diagram-th.png" />';
		}
		?>
			
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
		<h3 class="text-purple">What are the benefits of PARICH Bio biostimulant?</h3>
		<p>PARICH Bio biostimulants are exclusively formulated in France.  The compounds include enzyme and micro-organisms that when apply together with mineral fertilizers, they help improve crop vigour, yields, quality and tolerance of abiotic stresses.  Other benefits include</p>
		<ul>
			<li>Stimulate crops nutrients absorption and facilitating nutrient assimilation, thranslocation and use</li>
			<li>Increased insects and fungi resistance as well as abiotic stresses</li>
			<li>Increase yield and quality by improving the efficiency of the plant’s metabolism</li>
			<li>Fostering the development of soil micro-organisms and enhance soil fertility</li>
		</ul>
		<h4 class="text-purple">What are the roles of secondary macronutrients and micronutrients in PARICH Bio?</h4>
		<h5>Secondary Macronutrients</h5>
		<ul>
			<li><strong class="text-purple">Magnesium</strong> – Chlorophyll needs Magnesium to capture capture sun energy needed for photosynthesis. It is located in the enzymes, in the heart of the chlorophyll molecule giving leaves their green color. Magnesium is also used by plants for the metabolism of carbohydrates and in the cell membrane stabilization.</li>
			<li><strong class="text-purple">Sulfur</strong> – Sulfur is a vital part of all plant proteins, and certain plant hormones.  It is also a major constituent of one of the enzymes required for the formation of the chlorophyll molecule.</li>
		</ul>
		<h5>Micro-nutrients</h5>
		<ul>
			<li><strong class="text-purple">Zinc</strong> - Zinc activates enzymes that are responsible for the synthesis of certain proteins. It is used in the formation of chlorophyll and some carbohydrates, conversion of starches to sugars and its presence in plant tissue helps the plant to withstand cold temperatures. It is also essential in the formation of auxins, which help with growth regulation and stem elongation.</li>
			<li><strong class="text-purple">Boron</strong> - Boron plays a key role in a diverse range of plant functions including cell wall formation and stability, maintenance of structural and functional integrity of biological membranes, movement of sugar or energy into growing parts of plants, and pollination and seed set. Adequate B is also required for effective nitrogen fixation and nodulation in legume crops.</li>
		</ul>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
		
		<h3 class="text-purple">พาริช ไบโอมีธาตุอาหารรอง/ธาตุอาหารเสริมอะไรบ้าง?</h3>
		<h5>ธาตุอาหารรอง</h5>
		<ul>
			<li><strong class="text-purple">แมกนีเซียม</strong> - เป็นองค์ประกอบของคลอโรฟีลล์ ทำให้ใบเขียว และเป็นตัวเร่งปฏิกิริยาของเอนไซม์ที่สำคัญหลายชนิดและนอกจากนั้นยังช่วยในการเคลื่อนย้ายอาหารในพืชและเป็นตัวนำพาฟอสฟอรัสในการดูดซึมจากรากไปยังส่วนต่าง ๆ ของพืช นอกจากนั้นยังทำให้ความสม่ำเสมอของการสุกของผลไม้</li>
			<li><strong class="text-purple">กำมะถัน</strong> - เป็นส่วนประกอบที่สำคัญในการสร้างโปรตีนพืช ช่วยในกระบวนการหายใจ และเป็นองค์ประกอบของสารระเหยที่มีกลิ่นเฉพาะตัว</li>
		</ul>
		<h5>ธาตุอาหารเสริม</h5>
		<ul>
			<li><strong class="text-purple">ธาตุสังกะสี</strong> - ช่วยเร่งการเจริญเติบโตของพืช แม้จะพืชจะต้องการในปริมาณที่เล็กน้อยแต่มีความจำเป็นอย่างยิ่งต่อการสังเคราะห์อาหาร การผลิตน้ำตาล การสังเคราะห์โปรตีน และการผลิตเมล็ดพืช ตลอดจนการเติบโตอย่างสม่ำเสมอและสร้างความต้านทานโรค</li>
			<li><strong class="text-purple">โบรอน</strong> - ช่วยให้พืชดูดเอาธาตุแคลเซียมและไนโตรเจนไปใช้ร่วมกันอย่างมีประสิทธิภาพมากขึ้น และยังช่วยให้พืชใช้ธาตุโปแตสเซียมได้มากขึ้น มีบทบาทในการสังเคราะห์แสงการย่อยโปรตีน คาร์โบไฮเดรต และเพิ่มคุณภาพทั้งรสชาติ ขนาด และน้ำหนักของผลผลิต</li>
		</ul>
		<?php endif; ?>
		<?php
		if ( qtrans_getLanguage() == "th" ) {
			echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/bio-profit.jpg" />';
		}
		?>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
