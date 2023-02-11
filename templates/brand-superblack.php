<?php 
/*
 Template Name: PARICH Super Black
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/Black_Hero_01.jpg" />
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php _e("<!--:en--><h1 class='margin-none'><em>PARICH</em> Super Black</h1> <h3>Innovative Organo-Mineral Fertilizer with 5 modes of action</h3><!--:--><!--:th--><h1><em>พาริช</em> ซุปเปอร์แบล็ค พลังดำ 5 เด้ง</h1><!--:-->") ?>
		<div class="row">
			<div class="col-mg-13">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Lowres-Black-hero4-no-background.png" />
			</div>
			<div class="col-mg-23">
				<?php if ( qtrans_getLanguage() == "en" ) :  ?>
					<p>PARICH Super Black is a compound organo-mineral fertilizer produced by a latest technology developed in Europe. 
						It contains not only chemical fertilizer, but also amino acids made from vegetal and animal organic matters, humic acids 
						as well as 10% of organic matter
					</p>
					<ul class="bullet">
						<li>Unique blends of organic and mineral fertilizer combining fast and slow release nutrients</li>
						<li>In addition to providing nutrients, organic matter improves soil condition and contributes to the activation of microflora activity enabling nutrients to be taken more effectively by plants.</li>
					</ul>
				<?php endif; ?>
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<p><strong>ปุ๋ยอินทรีย์เคมี ผลิตด้วยเทคโนโลยีล่าสุดจากยุโรป ผสมกรดอะมิโนและฮอร์โมนพืช พร้อมด้วยสารอินทรียวัตถุคุณภาพสูงอีก 10%</strong></p>
					<ul class="bullet">
						<li><strong><em>ให้คุณค่ากับพืชได้ถึง 5 เด้ง</em></strong> เป็นปุ๋ยอินทรีย์เคมีที่เหนือกว่าปุ๋ยทั่วไปเพราะประกอบด้วย 1) ปุ๋ยเคมีคุณภาพสูง 2) อินทรียวัตถุชั้นยอด 3) กรดอะมิโน 4) กรดฮิวมิค และ 5) ฮอร์โมนพืช ทำให้ดินดี รากแข็งแรง พืชดูดซับอาหารได้มาก ผลผลิตสูง</li>
						<li><strong><em>ผลิตด้วยระบบผลิตล่าสุดจากยุโรป</em></strong> เป็นปุ๋ยแบบคอมพาวน์ผลิตด้วยเทคโนโลยีชั้นสูงล่าสุดจากยุโรป ทุกเม็ดได้คุณภาพมีธาตุอาหารคงที่ ควบคุมคุณภาพด้วยเครื่องมือจากเยอรมัน</li>
						<li><strong><em>อินทรียวัตถุที่เหนือกว่าอินทรียวัตถุทั่วไป</em></strong> ขณะที่ปุ๋ยอินทรียเคมีอื่นอาจผสมสารอินทรียวัตถุที่ไร้คุณภาพ แต่ พาริช ซุปเปอร์แบล็คใช้อินทรียวัตถุคุณภาพสูง ไร้ดิน แต่แน่นด้วยกรดฮิวมิค กรดอะมิโน และฮอร์โมนพืช</li>
						<li><strong><em>เพิ่มอะมิโนกว่า 20 ชนิด และฮอร์โมนพืช หลายชนิดที่พืชต้องการ</em></strong> ประกอบด้วยกรดอะมิโนกว่า 20 ชนิดและฮอร์โมนพืชต่างๆ เกษตรกรไม่ต้องฉีดฮอร์โมนหรือกรดอะมิโนเพิ่มเพื่อช่วยเพิ่มผลผลิต
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			
			<div class="col-mg-14">
				<h4>12-3-3 + 10 OM</h4>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-3-3-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-3-3-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-3-3-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-3-3-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/PARICH-Super-Black.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/PARICH-Super-Black_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>12%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>3%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>3%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Organic Matter<!--:--><!--:th-->อินทรียวัตถุ<!--:-->") ?></td><td>10%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Amino Acids Plant Hormones<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืช<!--:-->") ?></td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col-mg-14">
				<h4>12-6-3</h4>
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-6-3-liquid.png" style="height: 344px"/>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>12%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>6%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>3%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Amino Acids Plant Hormones<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืช<!--:-->") ?></td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td><?php _e("<!--:en-->500 cc and 1 liter<!--:--><!--:th-->500 cc และ 1 ลิตร<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>
		<h2><?php _e("<!--:en-->PARICH Super Black’s <em>5 Modes of Action</em><!--:--><!--:th-->ขั้นตอนการทำงานของ ซุปเปอร์แบล็ค พลังดำ <em>5 เด้ง</em><!--:-->") ?></h2>
		<?php if ( qtrans_getLanguage() == "en" ) :  ?>
			<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/NPK-Superblack-5actions-en.png" />
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) :  ?>
			<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/NPK-Superblack-5actions-th.png" />
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "en" ) :  ?>
			<ol>
				<li><strong><em>Chemical Fertilizer:</em></strong> Chemical fertilizer can quickly dissolved and be absorbed by plants immediately.</li>
				<li><strong><em>Plant Hormones:</em></strong> Hormones control growth and physiological functions. Providing plants with hormones they need can help increase both yield and crop quality.</li>
				<li><strong><em>Humic Acids:</em></strong> Humic Acids de-block minerals that the soil already contains, which result in a well-balanced soil.  It can also absorb water, up to 15 times the of its own weight.  As a result it increases soil water holding capacity, and protects it from erosion and ensures bacterial viability in the soil. </li>
				<li><strong><em>Amino Acids:</em></strong> Amino acids helps in many function such as
					<ul class="bullet margin-none">
						<li>Enhances micro-biological activity</li>
						<li>Acts as chelating agent help increases nutrient availability to plants</li>
						<li>Promotes plant growth</li>
						<li>Improves plant respiration</li>
						<li>Stimulates plant enzyme</li>
						<li>Increases vitamin content of plants</li>
					</ul>
				</li>
				<li><strong><em>Organic Matter:</em></strong> PARICH Super Black contains 10% of organic matter, which has many essential trace elements and can contribute greatly to soil fertility. 
					It also increases the nutrient holding capacity of soil (CEC), improves aggregation and prevent soil erosion.</li>
			</ol>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4><em>เด้ง 1:</em> ปุ๋ยเคมี NPK สามารถปลดปล่อยให้พืชใช้ได้ทันที</h4>
			<p><strong><em>ไนโตรเจน (N):</em></strong> ไนโตรเจนในปุ๋ยบางส่วนมาจากโปรตีนอะมิโนที่พืชกินได้ทันที พืชได้ประโยชน์มากกว่าปุ๋ยที่ทำมาจากไนโตรเจนทั่วไป</p>
			<p><strong><em>ฟอสฟอรัส (P):</em></strong> ดินโดยทั่วไปมีความจุในการดูดตรึงฟอสฟอรัสไว้ได้มาก แต่อินทรียวัตถุในพาริช ซุปเปอร์แบล็คสามารถช่วยทำให้ลดการดูดตรึงฟอสฟอรัสของดิน ทำให้พืชสามารถดูดซับธาตุฟอสฟอรัสได้มากกว่าปุ๋ยเคมีอื่นๆ</p>
			<p><strong><em>โพแทสเซี่ยม (K):</em></strong>  กรดอะมิโนมีคุณสมบัติเป็นสารคีเลท สามารถรวมตัวกับธาตุต่างๆที่มีประจุบวกต่างๆได้ดีเช่น โพแทสเซียม(K+) ทำให้พืชดูดและใช้โพแทสเซี่ยมได้อย่างมีประสิทธิภาพ และนอกจากนั้นอินทรียวัตถุในพาริช ซุปเปอร์แบล็คยังช่วยลดอัตราการชะล้างโปแตสเซียมออกจากดิน</p>
			<h4><em>เด้ง 2:</em> ฮอร์โมนช่วยส่งเสริมการเจริญเติบโตของพืช</h4>
				<p>ฮอร์โมนพืชในพาริช ซุปเปอร์แบล็คมีส่วนสำคัญในการกระตุ้นการแบ่งเซลล์ การยืดของเซลล์ ทำให้พืชเจริญเติบโตเร็ว รากแข็งแรง แตกหน่อมาก และสร้างตาดอกได้ดี</p>
			<h4><em>เด้ง 3:</em> กรดฮิวมิคช่วยพัฒนาดิน</h4>
				<p>กรดฮิวมิคช่วยให้ดินสามารถอุ้มน้ำและรักษาความชื้นได้มากขึ้น พร้อมกับยังทำให้ดินร่วนซุยและโปร่งทำให้อากาศได้ลงไปถึงรากมาขึ้น ต้นไม้ดูดซับอาหารได้ดี</p>
			<h4><em>เด้ง 4:</em> กรดอะมิโน โมเลกุลเล็กพืชดูดซับง่าย พืชแข็งแรง เพิ่มคุณภาพผลผลิต</h4>
				<p>อะมิโน เป็นรูปแบบโมเลกุลที่เล็กที่สุดพืชดูดซับได้ทันที ให้ความแข็งแรงอุดมสมบูรณ์ แตกใบเขียว แตกใบดี แตกรากดี ต้นแข็งแรง ผลผลิตคุณภาพสูง และยังเป็นอาหารให้จุลินทรีย์</p>
			<h4><em>เด้ง 5:</em> อินทรียวัตถุคุณภาพสูง ช่วยปรับปรุงสภาพสิ่งแวดล้อม</h4>
			<p>สารอินทรียวัตถุสามารถปลดปล่อยอหาหรให้พืชอย่างช้าๆ ช่วยปรับสภาพของดินเหมาะแก่การเจริญของจุลินทรีย์ พืชได้รับประโยชน์จากวงจรธาตุอาหารที่เหมาะสม</p>
		<?php endif; ?>

		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h2>เทคโนโลยีของ<em>พาริช</em> ซุปเปอร์แบล็ค</h2>
			<p><strong><em>พาริช ซุปเปอร์แบล็ค พลังดำ</em></strong> เป็นนวัตกรรมใหม่ล่าสุดของปุ๋ยอินทรีย์เคมีแบบคอมพาวนด์ ล้ำหน้าด้วยเทคโนโลยีการผลิตล่าสุดจากยุโรป ที่ทำให้ปุ๋ยให้เป็นเนื้อเดียวกันมากกว่าปุ๋ยที่ผลิตจากจานปั้นหรือท่อปั้นทั่วไป 
				ละยังอัดกรดอะมิโนและฮอร์โมนพืชลงบนปุ๋ยทุกเม็ด  เม็ดปุ๋ยมีธาตุอาหารคงที่เท่ากันทุกเม็ด ไม่มีสิ่งเจือปน ละลายง่าย สามารถให้ธาตุอาหารอย่างเพียงพอกับความต้องการของพืช ช่วยให้ต้นแข็งแรง โตไว มีผลผลิตสูง 
				และยังช่วยฟื้นฟูสภาพดินให้สมบูรณ์อีกด้วย</p>
			<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/NPK-Superblack-process-th.png" />
			<h1><em>พาริช</em> ซุปเปอร์แบล็ค น้ำ</h1>
			<div class="row">
				<div class="col-mg-13">
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/packs/Superblack-12-6-3-liquid.png" height="400" />
				</div>
				<div class="col-mg-23">
					<p><strong><em>พาริช ซุปเปอร์แบล็ค สูตรน้ำ</em></strong> ผลิตจากเอ็นไซม์จากประเทศเยอรมัน ทำให้โมเลกุลแตกตัวเป็นอะมิโนชนิดเล็กดูดซับง่าย ด้วยกระแสไฟฟ้าแรงสูง พร้อมเติมด้วยไนเตรทที่พืชดูดซับง่าย พืชสามารถนำไปใช้ประโยชน์ได้ทันที 
					เสมือนหนึ่งเป็นอาหารเสริมบารุงพืช (Plant growth promoter) ฉีดได้ทั้งทางใบและราดบนดิน สามารถใช้กับอาการขาดธาตุอาหารในระยะแรกๆ ได้ดี และยังช่วยลดความเครียดที่เกิดจากภาวะอากาศ ช่วยเพิ่มความแข็งแรง
					และคุณภาพผลผลิต</p>
					<h6>ข้อโดดเด่น:</h6>
					<ul class="chevron">
						<li>มีโปรตีนอะมิโน และธาตุอาหารรองและเสริมสูง</li>
						<li>ใช้กระแสไฟฟ้าทำให้โมเลกุลของอะมิโนแตกเป็นโมเลกุลเล็กที่พืชดูดซับได้ทันที</li>
						<li>ใช้เอ็นไซม์จากเยอรมัน มีจุลินทรีย์ที่พืชนำไปใช้ได้มาก</li>
						<li>มีส่วนผสมของไนเตรท สามารถกระจายตัวง่าย ทำให้ธาตุอาหารสามารถถูกดูดซับและลำเลียงในลำต้นได้ง่ายและรวดเร็ว จึงมีธาตุอาหารลงไปสู่รากทำให้รากดี พืชแข็งแรง</li>
					</ul>
				</div>
			</div>
		<?php endif; ?>
		<br/>
		<?php if ( qtrans_getLanguage() == "en" ) :  ?>
			<h4>Why amino acids are so important?</h4>
			<p>Amino acids is required in essential quantities to increase yield and overall quality of crops.  It is the fundamental ingredient in the process of protein synthesis, which is the basic component of living cells.  Plants need about 20 types of amino acids in their lifecycle to reach its full potential.  In contrast to human and animals that consume protein through food, plants must source their necessary amino acids.  PARICH Protein offers broad spectrum of amino acids to fulfill this needs.</p>
			<p>In addition, amino acids also help activate the bacterial life in the soil, which is essential in the uptake of nutrients in plants.  The development of the microbial flora of the agriculture soil is a basic foundation for a good mineralisation of the organic matter and also for a good soil structure and fertility around the roots.</p>
			<h4>Effects of amino acids on plants</h4>
			<ul class="bullet">
				<li><strong><em>Stress Resistance &amp; Immune support:</em></strong> Amino acids are directly related to an anti-stress physiology as they help to strengthen the cellular walls in such a way that they increase resistance to unfavorable climatic conditions and other stresses such as low humidity, pest attack, flood, etc.</li>
				<li><strong><em>Pollination and Fruit Formation:</em></strong> Amino acids increase the pollen germination.</li>
				<li><strong><em>Photosynthesis:</em></strong> Amino Acids help to increase chlorophyll concentration in the plant leading to higher degree of photosynthesis.</li>
				<li><strong><em>Function of the Stoma:</em></strong> Amino Acids encourage the plant stoma to open, thereby facilitating better absorption of nutrients.</li>
				<li><strong><em>Chelating Effect:</em></strong> Amino acids make it easier for plant to absorb and transport nutrients.  They form complexes with inorganic particles in the soil, resulting in the chelating effect, which help release the nutrients that were fixated in the soil particles such as phosphorous.</li>
				<li><strong><em>Plant Hormones:</em></strong> Amino acids are activators of plant hormones and other growth substances.</li>
				<li><strong><em>Healthy Soil Microbial Activity:</em></strong> Amino acids increase soil microbial population, which is a basic requirement for good mineralization of organic matter and also for good soil structure and nutrient mobility around the root zone.</li>
			</ul>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) :  ?>
			<h4>ความรู้เกี่ยวกับโปรตีน (กรดอะมิโน)</h4>
			<h5><em>ความสำคัญของโปรตีน</em></h5>
			<p>โปรตีน (Proteins) คือโมเลกุลของกรดอะมิโนต่างๆ ที่มาต่อเรียงกันเป็นลูกโซ่ เป็นองค์ประกอบพื้นฐานของเซลล์สิ่งมีชีวิตของทั้งพืชและสัตว์ที่ช่วยในการเจริญเติบโต และควบคุมกระบวนการกลไกทางชีวภาพต่างๆ ไม่ว่าจะเป็นการสร้างคลอโรฟิลล์หรือกระบวนการเกี่ยวกับเอนไซม์ เป็นต้น จึงเป็นส่วนสำคัญที่ช่วยให้พืชเพิ่มปริมาณ และคุณภาพของผลผลิต</p>
			<p>ปกติพืชสามารถสร้างกรดอะมิโนหรือโปรตีนขึ้นได้เองจากการสังเคราะห์แสง โดยการนำ คาร์บอน, และออกซิเจน จากอากาศมารวมกับไฮโดรเจนที่ได้จากน้ำ แล้วผสมเข้ากับไนโตรเจนจากดิน กลายเป็นกรดอะมิโน ชนิด L ที่จำเป็นต่อพืช แต่หากว่าพืชไม่สามารถสร้าง กรดอะมิโนได้ในปริมาณที่เพียงพอต่อความต้องการ ดังนั้นพืชจึงต้องดูดซับบางส่วนจากดินทำให้กรดอะมิโนในดินค่อยๆหมดไป พร้อมกับการที่เกษตรกรไทยเน้นการใส่ปุ๋ยเคมีมาตลอดในช่วงหลายสิบปีที่ผ่านมา โดยขาดการใส่สารอินทรีย์ลงไปในดินทำให้ดินหลายๆที่ขาดกรดอะมิโนเป็นอย่างหนัก จนทำให้พืชไม่แข็งแรง ขาดความสมบูรณ์ หรือ ออกดอก ออกผลได้ไม่ดีเท่าที่ควร</p>
			<p>การให้ปุ๋ยกับพืชโดยการใส่แค่ปุ๋ยเคมีอย่างเดียวแล้วหวังว่าพืชจะเจริญเติบโตอย่างสวยงามนั้นคงไม่เพียงพอ พาริช จึงแก้ปัญหาดังกล่าวโดยการใช้เทคโนโลยีนำกรดอะมิโน มาใส่ในเม็ดปุ๋ยทุกเม็ด โดยกรดอะมิโนนั้นมีโมเลกุลที่เล็ก น้ำหนักโมเลกุลเบา พืชสามารถดูดซืมได้ง่ายและนำไปใช้ประโยชน์ได้เลย โดยไม่ต้องผ่านขบวนการทางชีวเคมีที่พืชต้องสร้างขึ้นเอง จึงทำให้ช่วยเพิ่มผลผลิตและช่วยให้ผลผลิตมีคุณภาพที่สมบูรณ์ เห็นผลรวดเร็ว พืชแข็งแรง</p>
			<h4>ประโยชน์ทั่วไปของกรดอะมิโน</h4>
			<ul class="bullet">
				<li><strong><em>ลดความเครียดของพืช:</em></strong> การเปลี่ยนแปลงของสิ่งแวดล้อม ทำให้พืชเกิดความเครียดไม่ว่าอากาศร้อนจัด, ความชื้นต่ำ, แมลงลง, น้ำท่วม ต่างเป็นปัจจัยให้ระบบเมทาโบลิซึม (metabolism) ของต้นไม้นั้นบกพร่อง ทำให้ผลผลิตไม่มีคุณภาพ ส่งผลให้ การเติบโตและการสังเคราะห์โปรตีนของพืชลดลง เป็นผลต่อให้ปริมาณแอมโนเนียสูงขึ้น ซึ่งจะทำให้เป็นพิษกับพืช การฉีดพ่นกรดอะมิโนเข้าไปจะช่วยให้เกิดการสังเคราะห์โปรตีนในพืช ช่วยลดความเป็นพิษจากแอมโมเนียลง เป็นผลให้พืชแข็งแรงมากขึ้น</li>
				<li><strong><em>เพิ่มชีวิตชีวาให้พืช:</em></strong> พืชต้องต้องใช้พลังงานมากในการสังเคราะห์กรดอะมิโน ดังนั้นการให้กรดอะมิโนอิสระ ซึ่งมีโมเลกุลเล็กและพืชดูดซับได้ทันที จะช่วยให้พืชสามารถประหยัดพลังงานในการจะไปใช้สร้างกรดอะมิโน และสามารถนำพลังงานนี้ไปใช้กระบวนการอื่น และนอกจากนั้นยังช่วยกระตุ้นการทำงานของเอนไซม์อื่นๆอีกด้วย</li>
				<li><strong><em>ช่วยในการสังเคราะห์แสง:</em></strong> คลอโรฟิลล์ในใบนั้นมีส่วนสำคัญในการเปลี่ยนแสงให้เป็นพลังงานของพืช กรดอะมิโนช่วยในการเพิ่มปริมาณของคลอโรฟิลล์ในใบ ทำให้ใบมีสีเขียวเข้มและเพิ่มการสังเคราะห์แสง</li>
				<li><strong><em>ช่วยในการลำเลียงอาหาร:</em></strong> ตามปกติเมื่อแสงและความชื้นต่ำ พืชจะปิดท่อลำเลียงอาหารและน้ำ ทำให้อาหารไม่ขึ้นไปสู่ลำต้น แต่อะมิโนจะมีผลช่วยให้ท่อเปิดลำเลียงอาหาร ทำให้พืชมีความทนทานต่อการขาดน้ำหรือแสงมากกว่าพืชทั่วไป</li>
				<li><strong><em>ช่วยในการดูดซับธาตุอาหาร (Chelating Effect):</em></strong> ฟอสฟอรัส ส่วนใหญ่จะอยู่ในรูปของสารที่ละลายน้ำได้ยาก ส่วนโพแทสเซียมสามารถละลายน้ำได้ดี แต่ส่วนใหญ่จะรวมตัวกับธาตุอื่นหรือถูกยึดในชั้นดิน กรดอะมิโนจะไปช่วยหุ้มธาตุอาหารเอาไว้ ทำให้ประจุกลายเป็นกลางไม่ถูกตรึง ทำให้ธาตุอาหารสามารถซึมเข้าสู่ลำต้นได้ดีขึ้น พืชได้กินอาหารมากขึ้น</li>
				<li><strong><em>ช่วยในการสร้างฮอร์โมนพืช (Plant Hormones หรือ Phytohormones):</em></strong> อะมิโนเป็นตัวสำคัญในการกระตุ้นให้พืชสร้างฮอร์โมน ซึ่งฮอร์โมนเหล่านี้ก็มีส่วนสำคัญในเรื่องต่างๆ เช่น กระตุ้นให้มีการขยายเซลล์และการเติบโตของลำต้น,ชักนำให้เกิดการออกดอก,เพิ่มการติดผล หรือทำให้ผลมีรสชาติเพิ่มขึ้น เกษตรกรอาจรู้จักการใช้ฮอร์โมนเพื่อเพิ่มผลผลิตหรือทำให้ผลผลิตมีคุณภาพ แต่หารู้ไม่ว่าสารที่ช่วยสร้างฮอร์โมนในธรรมชาติอย่างหนึ่งในนั้นคือกรดอะมิโนนี่เอง</li>
				<li><strong><em>ช่วยฟื้นฟูสภาพดิน:</em></strong> นอกจากผลประโยชน์ทางตรง กรดอะมิโนยังมีผลประโยชน์ทางอ้อมคือการเป็นอาหารของจุลินทรีย์ในดิน ทำให้จุลินทรีย์เติบโตดินเริ่มมีความสมบูรณ์ ซึ่งเมื่อจุลินทรีย์มีจำนวนมาก สิ่งมีชีวิตขนาดใหญ่ขึ้นเช่นไส้เดือนดินก็จะมาอยู่ โดยไส้เดือนนี้จะชอนไชดินทำให้ดินร่วนซุย อากาศสามารถลงไปสู่รากทำให้พืชดูดซับอาหารได้ดี นอกจากนั้นจุลินทรีย์ยังช่วยย่อยสลายอินทรียวัตถุต่างๆบนดินซึ่งก็สามารถกลายเป็นอารหารพืช ห่วงโซ่อาหารก็กลับมาหมุน ความต้องการที่จะต้องใช้ปุ๋ยก็ลดน้อยลงทำให้เกษตรกรไม่จำเป็นต้องใส่ปุ๋ยในปริมาณที่มากเท่าเดิม</li>
			</ul>
			<h4>ความรู้ทั่วไปเกี่ยวกับฮอร์โมนพืช (Plant Hormones)</h4>
			<p>นอกจากกรดอะมิโน <strong><em>พาริช ซุปเปอร์แบล็ค</em></strong> ยังเสริมด้วยฮอร์โมนพืช ซึ่งเป็นสารเคมีภายในพืชที่มีผลในด้านการส่งเสริมการเจริญเติบโตของพืชแต่ละส่วน ฮอร์โมนพืชสามารถเคลื่อนย้ายภายในต้นพืชได้และมีผลกระทบต่อการเปลี่ยนแปลงทางคุณภาพและการพัฒนาของเนื้อเยื่อ และอวัยวะของพืชซึ่งได้รับฮอร์โมนนั้นๆ แม้พืชจะใช้ในปริมาณที่น้อยมาก</p>
			<p>โดยฮอร์โมนที่พาริชใส่ เป็นสารที่ทำหน้าที่เกี่ยวกับการยืดตัวของเซลล์ (Cell elongation) และกระตุ้นการออกดอกของพืชบางชนิด และยังช่วยเพิ่มการติดดอกออกผล คล้ายกับฮอร์โมนจำพวก Gibberellins พร้อมกับยังประโยชน์ด้านอื่นๆดังนี้</p>
			<ul class="bullet">
				<li>ส่งเสริมการงอกของเมล็ดและเพิ่มการติดตา</li>
				<li>ส่งเสริมการสังเคราะห์เอทิลีน ซึ่งเป็นฮอร์โมนพืชที่ช่วยในการ ควบคุมกระบวนการหลุดร่วงของใบ ดอก ผลอ่อน และทําให้ผลสุกเร็วขึ้น ในไม้ผลบางชนิด</li>
				<li>ช่วยให้พืชทนทานต่อการเปลี่ยนแปลงที่รุนแรงของสิ่งแวดล้อม เช่นความหนาวเย็น, หรือความแห้งแล้ง</li>
				<li>ช่วยให้พืชมีความต้านทานต่อโรคพืช ที่มีสาเหตุจากแบคทีเรียเชื้อราและไวรัส มากยิ่งขึ้น</li>
				<li>ช่วยย่อยสลายและขับสารฆ่าศัตรูพืชและสัตว์ออกจากพืช ทําให้การบริโภคปลอดภัยยิ่งขึ้น ช่วยลดการปนเปื้อนจากโลหะหนักที่มาจากการใช้ปุ๋ยเคมีใน มันฝรั่ง</li>
			</ul>
		<?php endif; ?>	
		
		<br/>
		<h4 class="margin-none"><?php _e("<!--:en-->Functions of some of the amino acids in <em>PARICH</em> Super Black<!--:--><!--:th-->ประโยชน์ของกรดอะมิโนที่เป็นส่วนประกอบของ<em>พาริช</em> ซุปเปอร์ แบล็ค<!--:-->") ?></h4>
		<table class="table-ll">
			<thead>
				<tr>
					<td width="25%"><strong><?php _e("<!--:en-->Amino Acids<!--:--><!--:th-->ชนิดของกรดอะมิโน<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Advantage<!--:--><!--:th-->ประโยชน์<!--:-->") ?></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong><?php _e("<!--:en-->Glutamic Acid<!--:--><!--:th-->กรดกลูตามิก (Glutamic Acid)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Carriers of nitrogen Enhance taste Promote growth of leaves and roots<!--:--><!--:th-->ช่วยในการดูดซับไนโตรเจน, เพิ่มรสชาติ, ส่งเสริมการเจริญเติบโตของใบและราก<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Proline<!--:--><!--:th-->โปรลีน (Proline)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Involve making buds, pollination and fruit bearing Enlarge fruits Increase sweetness and enhance taste<!--:--><!--:th-->ช่วยในการงอกของตา, การผสมเกสร และการออกผล ทำให้ผลใหญ่ เพิ่มความหวานและเพิ่มรสชาติ<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Glycine<!--:--><!--:th-->ไกลซีน (Glycine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Increase sweetness<!--:--><!--:th-->เพิ่มความหวาน<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Serine<!--:--><!--:th-->ซีรีน (Serine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Increase sweetness<!--:--><!--:th-->เพิ่มความหวาน<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Lysine<!--:--><!--:th-->ไลซีน (Lysine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Enhance fruit colors<!--:--><!--:th-->เพิ่มสีสันของผลไม้<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Asparagine<!--:--><!--:th-->แอสพาราจีน (Asparagine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Increase sourness<!--:--><!--:th-->เพิ่มความเปรี้ยว<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Leucine<!--:--><!--:th-->ลิวซีน (Leucine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Promote growth of leaves and roots<!--:--><!--:th-->ส่งเสริมการเจริญเติบโตของใบและราก<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Arginine<!--:--><!--:th-->อาร์จินีน (Arginine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Enhance taste<!--:--><!--:th-->เพิ่มรสชาติ<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Thereonine<!--:--><!--:th-->ธรีโอนีน (Thereonine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Increase sweetness and fruit bearing<!--:--><!--:th-->เพิ่มความหวานและการออกผล<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Methionine<!--:--><!--:th-->เมทไทโอนีน (Methionine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Accelerate the growth of plant cell and ripening Increase sourness and sweetness Promote fruit bearing<!--:--><!--:th-->เร่งการเจริญเติบโตของเซลล์พืชและการทำให้สุก เพิ่มความหวานและการออกผล<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Histidine<!--:--><!--:th-->ฮิสทิดีน (Histidine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Increase sourness<!--:--><!--:th-->เพิ่มความเปรี้ยว<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Phenylalanine<!--:--><!--:th-->ฟีนิลอะลานีน (Phenylalanine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Prevent plant disease<!--:--><!--:th-->ป้องกันโรคพืช<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Alanine<!--:--><!--:th-->อะลานีน (Alanine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Enhance taste<!--:--><!--:th-->เพิ่มรสชาติ และเพิ่มความหวาน<!--:-->") ?></td>
				</tr>
				<tr>
					<td><strong><?php _e("<!--:en-->Valine<!--:--><!--:th-->วาลีน (Valine)<!--:-->") ?></strong></td>
					<td><?php _e("<!--:en-->Enhance taste<!--:--><!--:th-->เพิ่มรสชาติ<!--:-->") ?></td>
				</tr>
			</tbody>
		</table>
		<br/>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4>ประโยชน์ของกรดฮิวมิคและอินทรียวัตถุใน<em>พาริช</em> ซุปเปอร์แบล็ค</h4>
			<p>อินทรียวัตถุและกรดฮิวมิคใน สามารถช่วยในการเพิ่มศักยภาพของดินโดยช่วยปรับปรุงคุณสมบัติของดินในด้านต่างๆดังนี้</p>
			<ul class="bullet">
				<li>
					<h6><em>ปรับปรุงคุณสมบัติทางกายภาพของดิน :</em></h6>
					<ul class="chevron">
						<li><strong>ช่วยให้ดินซับน้ำได้มากขึ้น :</strong> กรดฮิวมิคสามารถอุ้มน้ำได้ถึง 10-20 เท่าของขนาดตัวมันเองทำให้ดินสามารถอุ้มน้ำและรักษาความชื้นได้มากขึ้น</li>
						<li><strong>ทําให้โครงสร้างดิน (soil structure) ดีขึ้น :</strong> ฮิวมัสใน “พลังดำ” จะรวมตัวกับอนุภาคของดิน เกิดหน่วยโครงสร้างที่เกาะกันเป็นกลุ่มก้อนเล็กๆ 
							(soil aggregates) ทำให้ช่วยรักษาสภาพความร่วน โปร่ง  เป็นเม็ดละเอียด (granular) และเพิ่มความคงทนของดินได้ ดินกลายเป็นเม็ดกลมเล็ก ลดช่องว่างขนาดใหญ่ 
							และช่วยชะลอการไหล  ชะลางธาตุอาหารโดยน้ำ รากพืชชอนไชได้ง่าย และได้รับออกซิเจนอย่างต่อเนื่องเพื่อการหายใจและเจริญเติบโต รากแข็งแรง</li>
					</ul>
				</li>
				<li>
					<h6><em>ปรับปรุงคุณสมบัติทางเคมีของดิน :</em></h6>
					<ul class="chevron">
						<li><strong>เพิ่มความสามารถของดินในการดูดซับธาตุอาหารไม่ให้สูญเสียไปได้ง่าย :</strong> ดินส่วนใหญ่จะมีประจุลบทำให้สามารถดูดซับธาตุอาหารพืชที่มีประจุบวกได้ 
							เช่นแอมโมเนียม โพแทสเซียม แคลเซียม แมกนีเซียม เป็นต้น อินทรียวัตถุใน “พลังดำ” สามารถช่วยเพิ่มคา CEC (Cation Exchange Capacity) หรือความสามารถ
							ในการแลกเปลี่ยนไอออนบวก ช่วยให้ดินเก็บธาตุอาหารเอาไว้ไม่ให้ละลายน้ำหายไปเสียหมด แต่พืชสามารถดูดมาใช้เป็นอาหารจากดินได้ พืชจึงเจริญเติบโตได้ดี</li>
						<li><strong>ช่วยต้านทานการเปลี่ยนแปลงค่า pH ของดิน :</strong> อินทรียวัตถุใน “พลังดำ” มีความสามารถในการดูดซับแคตไอออนได้สูง จึงมีผลทำให้ดินมีความต้านทาน
							ต่อการเปลี่ยนแปลง pH ของดินได้ดี หรือมี buffering capacity สูงขึ้น</li>
						<li><strong>เพิ่มประชากรสิ่งมีชีวิตและจุลินทรีย์ดิน :</strong> “พลังดำ” ช่วยให้สภาพของดินเหมาะแก่การเจริญของจุลินทรีย์ ทําให้ปริมาณของจุลินทรีย์ดินที่เป็น
							ประโยชน์เพิ่มและมีความหลายหลายทางชีวภาพมากขึ้น พืชได้รับประโยชน์จากวงจรธาตุอาหารที่เหมาะสมในดิน</li>
					</ul>
				</li>
			</ul>
			<h4>ประโยชน์ของฮอร์โมนใน<em>พาริช</em> ซุปเปอร์แบล็ค</h4>
			<p>ฮอร์โมนพืชเป็นสารอินทรีย์ที่พืชสร้างขึ้นมาในปริมาณเพียงเล็กน้อย แต่ก็สำคัญต่อกระบวนการทางสรีรวิทยา (physiological Processes) และการเจริญเติบโตของต้นพืช 
				(plant growth and development) โดยฮอร์โมนที่ พาริช เลือกใช้ มีส่วนสำคัญกับพืช ดังนี้</p>
			<ul class="bullet">
				<li>ช่วยส่งเสริมการยืดตัวของเนื้อเยื่อบริเวณกิ่งก้าน</li>
				<li>ช่วยในการพัฒนาของราก การงอกของเมล็ด และส่งเสริมการออกดอก</li>
				<li>ช่วยเพิ่มความทนทานต่อสภาวะเครียดต่างๆ</li>
				<li>ช่วยเพิ่มการสังเคราะห์แสง ส่งผลให้พืชสามารถผลิตแป้ง และผลผลิตได้มากขึ้น</li>
			</ul>
		<?php endif; ?>		
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
