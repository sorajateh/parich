<?php 
/*
 Template Name: PARICH Nitro
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/nitro-bg.jpg" />
	</div>
</section>
<section class="page-content py-5">
	<div class="container">
		<h1><?php _e("<!--:en--><span class='text-yellow'>PARICH</span> Nitro 40-0-0 + 4S<!--:--><!--:th--><span class='text-yellow'>พาริช</span> ไนโตร 40-0-0 + 4S<!--:-->") ?></h1>
		<div class="row">
			<div class="col-6">
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/40-0-0-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/40-0-0-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/40-0-0-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/40-0-0-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/40-0-0.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/40-0-0_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
			</div>
			<div class="col-6">
				<?php if ( qtrans_getLanguage() == "en" ) : ?>
					<ul class="bullet">
						<li>Nitrogen Loss is controlled through urease inhibitors</li>
						<li>Increase yields with reduced nitrogen rates</li>
						<li>Proven yield results across the US and around the world</li>
					</ul>
				<?php endif; ?>
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<ul class="bullet">
						<li><strong>ใช้แทนยูเรีย ละลายง่าย ระเหยน้อย</strong> สารป้องกันการระเหยนำเข้าจากอเมริกา ลดการระเหยหายกว่า 30%</li>
						<li><strong>ใช้น้อยไม่สิ้นเปลือง</strong> สามารถลดการใช้ลงได้ถึง 20% เพราะไม่ระเหยหาย ประหยัด และเป็นมิตรกับสิ่งแวดล้อม</li>
						<li><strong>มีกำมะถัน (sulfer) เป็นส่วนประกอบมากถึง 4%</strong> ช่วยสร้างคลอโรฟิลล์ ทำให้พืชมีใบเขียว สังเคราะห์แสงได้ดี และยังเสริมการทำงานของเอ็นไซม์บางชนิด</li>
						<li><strong>นำเข้าจากประเทศสหรัฐอเมริกา</strong></li>
					</ul>
				<?php endif; ?>
				<h6><?php _e("<!--:en-->Nutrient Contents<!--:--><!--:th-->ธาตุอาหารผลิตภัณฑ์<!--:-->") ?></h6>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>40%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>0%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Sulfur<!--:--><!--:th-->กำมะถัน<!--:-->") ?> 4%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>40 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="vdo-container">
					<video 	class="video-js pr-player vjs-default-skin" 
							controls
							width="auto" height="auto"
					      	data-setup='{}'>
					    <source src="<?php echo wp_get_attachment_url( 373 ); ?>" type='video/mp4' />
					    <source src="<?php echo wp_get_attachment_url( 374 ); ?>" type='video/ogg' />
					    <source src="<?php echo wp_get_attachment_url( 375 ); ?>" type='video/webm' />
					</video>
				</div>
			</div>
			<div class="col-6">
				<?php 	
					if ( qtrans_getLanguage() == "th" ) {
						echo '<img src="'.get_template_directory_uri(). '/images/40-0-0-01-01.png" />';
					}
				?>
			</div>
		</div>
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
			<h4>What is PARICH Nitro?</h4>
			<p>PARICH Nitro is a bulk blend fertilizer mixing 20% ammonium sulphate and 80% urea coated with N-(n-butyl) triophosphoric tramide (NBPT) which is a proven, highly effective coating agent to control 
				nitrogen loss from urea due to volatility.  By treating urea, NBPT makes volatilization virtually impossible for up to 14 days. It works by inhibiting the activity of the urease enzyme preventing 
				it to change urea into the form of ammonia.</p>
			<p>There are more than 1,300 researches performed on NBPT from many leading universities around the world to prove its efficacy and its environmental and health safety.  By keeping nitrogen in the urea 
				form longer, nitrogen losses from volatilization are minimized and seedling burn is reduced.  Urea remains in a plant available form longer, so more of this vital nutrient is delivered to the trees.</p>
			<p>In addition, it also contains 4% of sulfur, which is an important secondary nutrient.  It helps with the formation of amino acids, proteins, and chlorophyll. Sulfur has become more important as a limiting 
				nutrient in crop production in recent years.  Therefore, the sulfur in PARICH Nitro can help farmers achieve higher crop yields.</p>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4>เทคโนโลยีของพาริช ไนโตร</h4>
			<p>พาริช ไนโตร คือปุ๋ยไนโตรเจนชนิดใหม่ ละลายง่าย แต่ระเหยยาก สามารถใช้แทนปุ๋ยยูเรียทั่วไปแต่เพิ่มความคุ้มค่า ผลิตโดยการผสมแอมโมเนียมซัลเฟต กับยูเรียที่ลดการระเหยจาดประเทศสหรัฐอเมริกาที่เรียกว่า N-butyl thiophosphoric 
				triamide (NBPT) ซึ่งสารนี้ได้รับการยอมรับมาแล้วจากทั่วโลกว่าสามารถลดการระเหยได้จริงและปลอดภัยต่อผู้ใช้และสิ่งแวดล้อมมีขายแล้วในมากกว่า 70 ประเทศ มีวิจัยรับรองจากมหาวิทยาลัยชั้นนำทั่วโลกมากกว่า 1,300 ชิ้น
			</p>
			<p>โดยการที่ไนโตรเจนไม่ระเหยไปในอากาศ ทำให้มีสารไนโตรเจนเหลือในดินมากและยาวนาน ช่วยให้พืชได้ดูดซับธาตุอาหารอย่างครบถ้วน พืชจึงแข็งแรง เขียวนาน ผลผลิตสูง นอกจากนั้น พาริช ไนโตร ยังประกอบด้วยธาตุกำมะถันหรือซัลเฟอร์ (Sulfer) มากถึง 4% 
				โดยกำมะถันจะช่วยพืชในการสร้างโปรตีน, เอ็นไซม์ และไวตามินต่างๆ โดยเฉพาะอย่างยิ่ง ยังช่วยในการสร้างคลอโรฟิลล์ ทำให้พืชมีใบเขียวแข็งแรง สร้างอาหารได้มาก ผลผลิตสูง
			</p>
		<?php endif; ?>
		
		<h4><?php _e("<!--:en-->Comparison<!--:--><!--:th-->เปรียบเทียบยูเรียทั่วไปและพาริช ไนโตร<!--:-->") ?></h4>
		<?php 	
			if ( qtrans_getLanguage() == "en" ) {
				echo '<img class="push-bottom" src="'.get_template_directory_uri(). '/images/nitro-compare-en.jpg" />';
			}
			if ( qtrans_getLanguage() == "th" ) {
				echo '<img class="push-bottom" src="'.get_template_directory_uri(). '/images/nitro-compare-th.jpg" />';
			}
		?>
		<h4><?php _e("<!--:en-->How it works?<!--:--><!--:th-->หลักการทำงานของพาริช ไนโตร<!--:-->") ?></h4>
		<p><?php _e("
			<!--:en-->When urea is applied, urease enzyme breaks down the urea molecule (hydrolysis) into ammonia.  Unfortunately, some of the ammonia is lost to the atmosphere as a gas in a process called volatilisation.<!--:-->
			<!--:th-->ปกติเมื่อใส่ยูเรียลงดิน จะมีเอ็นไซม์ที่เรียกว่าเอ็นไซม์ยูริเอสเปลี่ยนยูเรียให้เป็นแอมโมเนียและไนเตรท ซึ่งในกระบวนการดังกล่าวไนโตรเจนจะระเหยหายในรูปของแก๊สแอมโมเนียและแก๊สไนโตรเจน ใส่ไม่นานยูเรียก็ระเหยหายหมด<!--:-->") 
		?></p>
		<?php 	
			if ( qtrans_getLanguage() == "en" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/urea-flow-en.jpg" />';
			}
			if ( qtrans_getLanguage() == "th" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/urea-flow-th.jpg" />';
			}
		?>
		<p><?php _e("
			<!--:en-->PARICH Nitro works by effectively inhibiting the activity of the urease enzyme preventing it to change urea into the form of ammonia.  
			The process helps the soil to keep nitrogen in the form of urea longer.  Volatilization loss is minimized and improve the fertilizer efficiency and improve yield!<!--:-->
			<!--:th-->แต่สาร N-butyl thiophosphoric triamide (NBPT)  ใน พาริช ไนโตร ช่วยชะลอการทำงานของเอ็นไซม์ยูริเอส ทำให้ยูเรียเปลี่ยนรูปเป็นแอมโมเนียและไนเตรทช้าลง ปุ๋ยจึงค่อยๆปลดปล่อยไนโตรเจนให้พืชได้ใช้ พืชได้อาหารมากและยาวนานขึ้น ใบจึงเขียวนาน ต้นแข็งแรง และให้ผลผลิตมาก<!--:-->") 
		?></p>
		<?php 	
			if ( qtrans_getLanguage() == "en" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/nitro-flow-en.jpg" />';
			}
			if ( qtrans_getLanguage() == "th" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/nitro-flow-th.jpg" />';
			}
		?>
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
			<h4>How is PARICH Nitro different from Sulfer Coated Urea (SCU)?</h4>
			<p>Sulfer Coated Urea uses sulfer to make urea to become slow release (slowly dissolved).  Form this point, urea will be kept in its original form to avoid transformed into NO<sub>3</sub> and then to N<sub>2</sub> to 
				evaporated into the air (cause N loss).  On the other hand, the working mechanism of  NBPT is totally different.  It is urease inhibitor, which means it will keep the enzyme urease away from 
				attacking urea to transform urea into NH<sub>3</sub> and form this point NH<sub>3</sub> will evaporate into the air.  It does not create a physical barrier around the urea granule and therefore does not restrict N 
				availability to the plant at early stages of plant development.</p>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4>พาริช ไนโตร ต่างกับปุ๋ยอื่นๆ อย่างไร?</h4>
			<p>สาร N-butyl thiophosphoric triamide หรือ NBPT ไม่ใช่การนำสารต่างๆไปเคลือบเปลือกนอกของยูเรียเหมือนกับซัลเฟอโค๊ตยูเรียหรือโพลิเมอร์โค้ตยูเรีย ซึ่งคล้ายกับการนำน้ำตาลมาเคลือบเม็ดช็อคโกแล็ตของ m&amp;m 
				ซึ่งจะทำให้ยูเรียละลายช้าเกษตรกรอาจไม่ชอบ นอกจากนั้นถ้าเปลือกนอกยังไม่ละลายต้นไม้ก็ไม่ได้กินยูเรียข้างในทำให้ต้นไม้ ไม่ได้รับธาตุไนโตรเจนในช่วงต้น และพอเปลือกนอกละลาย ยูเรียก็จะทำปฏิกริยากับเอ็นไซม์ยูริเอส
				ทำให้ยูเรียระเหยหายอยู่ดี</p>
			<p>แต่การทำงานของ พาริช ไนโตร เป็นการนำสารเคมีไปทำปฏิกริยากับผิวของยูเรีย เพื่อป้องกันไม่ให้ยูเรียเปลี่ยนรูปไปเป็นก๊าซแอมโมเนีย แล้วระเหิดหายไป ดังนั้นสาร NBPT จึงทำหน้าที่เป็นสารลดการละเหย ไม่ใช่สารชะลอการละลาย 
				ทำให้สามารถละลายง่ายแต่ระเหยยาก พืชได้รับไนโตรเจนในปริมาณที่เหมาะสมอย่างต่อเนื่อง โดยนอกจากจะทำให้ต้นไม้ได้กินอาหารอย่างเพียงพอตั้งแต่ระยะต้นอย่างต่อเนื่องนั้น พาริช ไนโตร ยังไม่ทำให้รากช็อกจากการใส่ปุ๋ยเกินขนาดอีกด้วย 
				เมื่ออยู่ในน้ำ สาร NBPT ก็ยังสามารถทำปฏิกิริยากับเอ็นไซม์ยูริเอสได้ จึงทำให้สามารถใช้กับพืชที่ต้องแช่อยู่ในน้ำนาน เช่นข้าวอีกด้วย</p>
		<?php endif; ?>
		<?php 	
			if ( qtrans_getLanguage() == "en" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/nitro-coated-compare-en.jpg" />';
			}
			if ( qtrans_getLanguage() == "th" ) {
				echo '<img class="align-center" src="'.get_template_directory_uri(). '/images/nitro-coated-compare-th.jpg" />';
			}
		?>
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
			<h4>Why is sulfur important?</h4>
			<p>PARICH Nitro contains 4% of sulfur, which is an essential nutrient for plant growth. In recent years, it is considered to be as important as phosphorus and is sometimes called “the 4th major nutrient”.</p>
			<p>Sulfur has many functions in plants.  About 90% that is absorbed by the plant is used in the formation of amino acids, the building block of proteins.  It is also necessary for chlorophyll formation, 
				promotes nodulation in legumes, and is essential in the synthesis of oils.  These functions are closely related to the function of nitrogen, therefore the crop’s need for nitrogen is closely related 
				to the need for sulfur.  Crops that require high level of nitrogen usually require more sulfur as well.</p>
			<p>Because it is very soluble and is easily leached out of the root zone, it has become more important as limiting nutrient in crop production. Soil conditions where sulfur is most likely to be deficient 
				are low organic matter levels (usually below 2%), sandy texture with good drainage, and high rainfall conditions.</p>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4>ซัลเฟอร์ (Sulfur) หรือกำมะถันในพาริช ไนโตรสำคัญอย่างไร</h4>
			<p>พาริช ไนโตร ผสมธาตุกำมะถันมากถึง 4% เพื่อที่จะช่วยในการ</p>
			<ul>
				<li>เสริมการทำงานของเอ็นไซม์บางชนิดและสังเคราะห์วิตามินให้กับพืช</li>
				<li>สร้างคลอโรฟิลล์ ทำให้พืชมีใบเขียว สังเคราะห์แสงได้ดี</li>
				<li>ส่งเสริมเจริญเติบโตของรากและการผลิดเมล็ด(ข้าว)</li>
				<li>ทำให้ต้นไม้สามารถทนต่อการเปลี่ยนแปลงของอากาศ</li>
			</ul>
			<p>ธาตุกำมะถันจัดเป็นธาตุอาหารพืชในกลุ่มธาตุอาหารรองแต่มีความจำเป็นต่อพืชมาก เนื่องจากธาตุกำมะถันเป็นส่วนประกอบที่สำคัญของกรดอะมิโน วิตามินและโคเอนไซม์ ที่ช่วยในการสร้างคลอโรฟิลล์และสังเคราะห์โปรตีน เพราะธาตุกำมะถันช่วยในการควบคุม
				ชนิดและโครงสร้างของเม็ดสีคลอโรพลาสต์ เมื่อพืชขาดธาตุกำมะถันปริมาณของคลอโรฟีลล์จะลดลง ทำให้พืชมีสีเหลืองซีด โดยเฉพาะพืชที่ต้องการธาตุกำมะถันมากเป็นพิเศษ เช่น กาแฟ ปาล์มน้ำมัน อ้อย พืชตระกูลถั่วที่เป็นอาหารสัตว์ และพืชผักต่างๆ</p>
			<p>โดยปกติอินทรียวัตถุเป็นแหล่งสำรองของธาตุกำมะถัน โดยจะสังเกตได้ว่าดินที่ขาดอินทรียวัตถุ (มีอินทรียวัตถุต่ำกว่า 2%) ส่วนใหญ่จะขาดกำมะถันด้วย และเพราะการเผาฟางข้าวหลังเก็บเกี่ยว และการขาดการเติมอินทรียวัตถุในดิน รวมไปถึงการใช้ปุ๋ยเคมี
				ที่ไม่มีกำมะถันเป็นส่วนประกอบ เช่น ยูเรีย ทำให้ดินมีปริมาณกำมะถันไม่เพียงพอต่อการเจริญเติบโต นอกจากนั้นซัลเฟอร์ซึ่งส่วนใหญ่อยู่ในรูปซัลเฟตสามารถละลายน้ำได้ดีจึงถูกชะออกจากดินได้ง่าย</p>
			<p>ต้นไม้ที่ขาดกำมะถันจะมีอาการคล้ายกับการขาดไนโตรเจน แต่มีข้อแตกต่างคือการขาดไนโตรเจนจะเกิดที่ใบแก่ก่อน แต่การขาดกำมะถันจะเกิดที่ใบอ่อนก่อนแล้วตามด้วยใบแก่ ในข้าวกาบใบจะเริ่มมีสีเหลืองก่อนแล้วค่อยลุกลามสู่ใบ ข้าวจะแตกกอเล็กลง รวงจะน้อยและสั้น 
				จำนวนเมล็ดต่อรวงลดลง</p>
		<?php endif; ?>
		<h4><?php _e("<!--:en-->Comparison Table<!--:--><!--:th-->ตารางสรุปความแตกต่าง<!--:-->") ?></h4>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td width="20%"><strong><?php _e("<!--:en-->Title<!--:--><!--:th-->หัวข้อ<!--:-->") ?></strong></td>
					<td width="20%"><strong><?php _e("<!--:en-->Urea<!--:--><!--:th-->ยูเรีย (เม็ดโฟม)<!--:-->") ?></strong></td>
					<td width="20%"><strong><?php _e("<!--:en-->PARICH Nitro<!--:--><!--:th-->40-0-0 พาริชไนโตร<!--:-->") ?></strong></td>
					<td width="40%"><strong><?php _e("<!--:en-->Difference<!--:--><!--:th-->ข้อแตกต่าง<!--:-->") ?></strong></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ปริมาณไนโตรเจน<!--:-->") ?></td>
					<td><center>46%</center></td>
					<td><center>40%</center></td>
					<td><?php _e("<!--:en-->Contains less nitrogen than normal urea, but the nitrogen does not get loss in the air and it also contains 4% of sulfur.<!--:--><!--:th-->พาริชไนโตรอาจมีธาตุไนโตรเจนน้อยกว่า ยูเรียเม็ดโฟมทั่วไป<!--:-->") ?></td>
				</tr>
				<tr>
					<td><?php _e("<!--:en-->Loss<!--:--><!--:th-->การสูญเสียธาตุอาหาร (ระเหยไปอากาศ)<!--:-->") ?></td>
					<td><center><?php _e("<!--:en-->Loss via volatilization<!--:--><!--:th-->สูญเสียมาก<!--:-->") ?><img src="<?php echo get_template_directory_uri(); ?>/images/silver-bucket.gif" /></center></td>
					<td><center><?php _e("<!--:en-->Controlled release<!--:--><!--:th-->สูญเสียน้อย<!--:-->") ?><img src="<?php echo get_template_directory_uri(); ?>/images/yellow-bucket.gif" /></center></td>
					<td><?php _e("<!--:en-->NBPT helps stop nitrogen loss making PARICH Nitro much more economical<!--:--><!--:th-->ยูเรียทั่วไประเหยหายไปในอากาศได้ง่าย ต่างจาก พาริช ไนโตร ที่ลดการระเหยทำให้ยูเรียอยู่ในดินให้พืชได้ใช้นาน<!--:-->") ?></td>
				</tr>
				<tr>
					<td><?php _e("<!--:en-->Recommended Usage<!--:--><!--:th-->อัตราการใช้<!--:-->") ?></td>
					<td><center><?php _e("<!--:en-->Normal<!--:--><!--:th-->ปกติ<!--:-->") ?></center></td>
					<td><center><?php _e("<!--:en-->At least 10-20% lower than normal urea<!--:--><!--:th-->ลดลง 10 - 20%<!--:-->") ?></center></td>
					<td><?php _e("<!--:en-->Can stop nitrogen loss up to more than 30%<!--:--><!--:th-->พาริช ไนโตร ระเหยหายน้อยจึงสามารถลดการใช้ ประหยัด<!--:-->") ?></td>
				</tr>
				<tr>
					<td><?php _e("<!--:en-->Sulfer<!--:--><!--:th-->ปริมาณกำมะถัน<!--:-->") ?></td>
					<td><center>0%</center></td>
					<td><center>4%</center></td>
					<td><?php _e("<!--:en-->PARICH Nitro contains as much as 4% of sulfer which helps in formation of amino acids and chlorophyl<!--:--><!--:th-->พาริช ไนโตร มีส่วนผสมของซัลเฟอร์หรือกำมะถันมากถึง 4% ซึ่งซัลเฟอร์เป็นส่วนสำคัญในการสร้างคลอโรฟิลล์ทำให้พืชสังเคราะห์แสงได้ดี มีใบเขียวเข้ม<!--:-->") ?></td>
				</tr>
				<tr>
					<td><?php _e("<!--:en-->Solubility<!--:--><!--:th-->การละลาย<!--:-->") ?></td>
					<td><center><?php _e("<!--:en-->Fully dissolved<!--:--><!--:th-->เร็ว<!--:-->") ?></center></td>
					<td><center><?php _e("<!--:en-->Fully dissolved<!--:--><!--:th-->เร็ว<!--:-->") ?></center></td>
					<td><?php _e("<!--:en-->Quick and easy to be dissolved<!--:--><!--:th-->สามารถละลายได้ง่าย และเร็วเท่ากัน<!--:-->") ?></td>
				</tr>
			</tbody>
		</table>

	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
