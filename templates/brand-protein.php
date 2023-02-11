<?php 
/*
 Template Name: PARICH Protein
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_197430323.jpg" />
	</div>
</section>
<section class="page-content">
	<div class="container">
		<h1><?php _e("<!--:en-->PARICH <em>Protein</em><!--:--><!--:th-->พาริช <em>โปรตีน</em><!--:-->") ?></h1>
		<?php if ( qtrans_getLanguage() == "en" ) :  ?>
			<p>PARICH Protein is a compound and straight mineral fertilizer added with more than 20 groups of Amino Acids and plant hormones, 
				which can be utilized by all crops and plants instantly increasing yields and quality of the produces.</p>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<ul class="bullet">
				<li>ไม่ใช่แค่ปุ๋ยเคมีทั่วไป แต่เพิ่มอะมิโนและฮอร์โมนพืช กว่า 20 ชนิดที่พืชต้องการ</li>
				<li>พืชสมบูรณ์ โตไว แข็งแรงทนทานโรคและแมลง</li>
				<li>ปลดล็อครากช่วยในการดูดซึมธาตุอาหาร</li>
				<li>ระบบควบคุมคุณภาพจากเยอรมัน ยิงเลเซอร์การันตีทุกถุง</li>
			</ul>
		<?php endif; ?>
		<div class="row">
			<div class="col-mg-13">
				<h5>21-0-0 + 24S</h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Protein-Nitrogen-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Protein-Nitrogen-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Protein-Nitrogen-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/21-0-0-Protein-Nitrogen-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-Protein-Nitrogen.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/21-0-0-Protein-Nitrogen_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>21%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>0%</td></tr>
					<?php if ( qtrans_getLanguage() == "th" ) :  ?>
						<tr><td width="50%">ธาตุอาหารรอง</td><td>กำมะถัน 24%</td></tr>
					<?php endif; ?>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->อื่นๆ<!--:-->") ?></td><td><?php _e("<!--:en-->Sulfur 24% Amino Acids<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืช<!--:-->") ?></td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col-mg-13">
				<h5>10-0-30 + 9S</h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-30-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-30-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-30-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-30-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/10-0-30.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/10-0-30_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>10%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>30%</td></tr>
					<?php if ( qtrans_getLanguage() == "th" ) :  ?>
						<tr><td width="50%">ธาตุอาหารรอง</td><td>กำมะถัน 9%</td></tr>
					<?php endif; ?>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->อื่นๆ<!--:-->") ?></td><td><?php _e("<!--:en-->Sulfur 9% Amino Acids<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืช<!--:-->") ?></td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col-mg-13">
				<h5>10-0-22 + 9S</h5>
				<ul class="packset">
					<li class="front-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-22-front.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-22-front_thumb.png" />
						</a>
					</li>
					<li class="back-side">
						<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-22-back.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/packs/10-0-22-back_thumb.png" />
						</a>
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/10-0-22.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/10-0-22_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table-ll">
					<tr><td width="50%"><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>10%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>0%</td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>22%</td></tr>
					<?php if ( qtrans_getLanguage() == "th" ) :  ?>
						<tr><td width="50%">ธาตุอาหารรอง</td><td>กำมะถัน 15%</td></tr>
					<?php endif; ?>
					<tr><td width="50%"><?php _e("<!--:en-->Others<!--:--><!--:th-->อื่นๆ<!--:-->") ?></td><td><?php _e("<!--:en-->Sulfur 15% Amino Acids<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืช<!--:-->") ?></td></tr>
					<tr><td width="50%"><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>50 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
		</div>
		<p><strong><em><?php _e("<!--:en-->PARICH Protein<!--:--><!--:th-->พาริช โปรตีน<!--:-->") ?></em></strong> 
			<?php _e("
				<!--:en-->uses special technology to incorporate amino acids and plant hormones into, otherwise, an ordinary chemical fertilizer.  These amino acids help promote and activate plant’s protein building process as well as being a chelating agent.  Researches have proven that about 20 kinds of amino acids are essential for plant to function and synthesize protein.  PARICH Protein’s unique technology is able to supply this broad spectrum of amino acids to cater to this need in addition to other major nutrients that plant requires.<!--:-->
				<!--:th-->เหนือกว่าปุ๋ยเคมีทั่วไปโดยการใช้เทคโนโลยีพิเศษ  ในการใส่โปรตีนพืช หรือ กรดอะมิโน (Amino Acid) กว่า 20 ชนิด และฮอร์โมนพืช (Plant Hormones) ลงในเม็ดปุ๋ย ทำให้นอกจากจะให้อาหารพืชทำให้พืชเจริญเติบโต แต่ยังมีส่วนช่วยให้ต้นแข็งแรง ผลผลิตสูงและมีคุณภาพอีกด้วย<!--:-->") 
			?>
		</p>
		<div style="padding: 20px; background-color: #eee; margin-bottom: 20px;">
			<div class="row margin-none">
				<div class="col-mg-12">
					<p class="margin-none"><?php _e("
							<!--:en-->Plants are also like human.  They need protein to grow strong and be healthy. When we eat, we need to eat protein in 
							addition to other food groups. Plant also requires protein as well. If we continue to feed it with mineral fertilizers, where 
							will it get the protein from? This is why <strong><em>PARICH Protein</em></strong> uses special techniques to add protein (amino acids) and other important 
							nutrients such as plant hormones into each fertilizer granule. So that when you apply our products, your plant can all the nutrients 
							that it needs.<!--:-->
							<!--:th-->ถ้าเรากินข้าวเปล่าอย่างเดียวเราก็ได้แค่อิ่มแต่จะไม่แข็งแรง ร่างกายจะไม่เจริญเติบโต ดังนั้นถ้าอยากแข็งแรงต้องทานข้าวพร้อมเนื้อ นม ไข่ หรือ โปรตีน หรือทานให้ครบห้าหมู่ 
							ที่ผ่านมาการที่เราใส่แต่ปุ๋ยเคมีให้พืชก็เปรียบเทียบได้กับการที่เราป้อนแต่ข้าวไม่มีกับ ใส่มากพืชก็ทานไม่หมด และยังกลับทำให้ดินเสีย ดินแข็ง ดังนั้นพาริช จึงใช้เทคโนโลยีพิเศษ 
							<strong><em>พาริช โปรตีน</em></strong> ใส่กรดอะมิโนพร้อมด้วยฮอร์โมนพืชต่างๆ ลงในปุ๋ยทุกเม็ด เปรียบเหมือนการเพิ่มกับลงบนข้าว  ไม่ป้อนป้อนพืชด้วยข้าวเปล่า แต่ป้อมด้วยข้าวพร้อมกับ 
							ทำให้พืชได้อาหารครบ 5 หมู่<!--:-->") 
						?>
					</p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/protein-tech-logo.jpg" style="height: 220px; margin: 20px auto;" />
				</div>
				<div class="col-mg-12">
					<?php if ( qtrans_getLanguage() == "en" ) :  ?>
						<img class="margin-none" src="<?php echo get_template_directory_uri(); ?>/images/Protein-is-Important-en.jpg" />
					<?php endif; ?>
					<?php if ( qtrans_getLanguage() == "th" ) :  ?>
						<img class="margin-none" src="<?php echo get_template_directory_uri(); ?>/images/Protein-is-Important-th.jpg" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_89195956.jpg" width="680" />
		<h4><?php _e("<!--:en-->Why amino acids are so important?<!--:--><!--:th-->ความรู้เกี่ยวกับโปรตีน (กรดอะมิโน)<!--:-->") ?></h4>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h5><em>ความสำคัญของโปรตีน</em></h5>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "en" ) : ?>
			<p>Amino acids is required in essential quantities to increase yield and overall quality of crops.  It is the fundamental ingredient 
				in the process of protein synthesis, which is the basic component of living cells.  Plants need about 20 types of amino acids in their 
				lifecycle to reach its full potential.  In contrast to human and animals that consume protein through food, plants must source their 
				necessary amino acids.  PARICH Protein offers broad spectrum of amino acids to fulfill this needs.</p>
			<p>In addition, amino acids also help activate the bacterial life in the soil, which is essential in the uptake of nutrients in plants. 
				The development of the microbial flora of the agriculture soil is a basic foundation for a good mineralisation of the organic matter 
				and also for a good soil structure and fertility around the roots.</p>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<p>โปรตีน (Proteins) คือโมเลกุลของกรดอะมิโนต่างๆ ที่มาต่อเรียงกันเป็นลูกโซ่ เป็นองค์ประกอบพื้นฐานของเซลล์สิ่งมีชีวิตของทั้งพืชและสัตว์ที่ช่วยในการเจริญเติบโต 
				และควบคุมกระบวนการกลไกทางชีวภาพต่างๆ ไม่ว่าจะเป็นการสร้างคลอโรฟิลล์หรือกระบวนการเกี่ยวกับเอนไซม์ เป็นต้น จึงเป็นส่วนสำคัญที่ช่วยให้พืชเพิ่มปริมาณ 
				และคุณภาพของผลผลิต</p>
			<p>ปกติพืชสามารถสร้างกรดอะมิโนหรือโปรตีนขึ้นได้เองจากการสังเคราะห์แสง โดยการนำ คาร์บอน, และออกซิเจน จากอากาศมารวมกับไฮโดรเจนที่ได้จากน้ำ แล้วผสมเข้ากับไนโตรเจน
				จากดิน กลายเป็นกรดอะมิโน ชนิด L ที่จำเป็นต่อพืช แต่หากว่าพืชไม่สามารถสร้าง กรดอะมิโนได้ในปริมาณที่เพียงพอต่อความต้องการ ดังนั้นพืชจึงต้องดูดซับบางส่วนจากดินทำให้
				กรดอะมิโนในดินค่อยๆหมดไป พร้อมกับการที่เกษตรกรไทยเน้นการใส่ปุ๋ยเคมีมาตลอดในช่วงหลายสิบปีที่ผ่านมา โดยขาดการใส่สารอินทรีย์ลงไปในดินทำให้ดินหลายๆที่ขาดกรดอะมิโนเป็น
				อย่างหนัก จนทำให้พืชไม่แข็งแรง ขาดความสมบูรณ์ หรือ ออกดอก ออกผลได้ไม่ดีเท่าที่ควร</p>
			<p>การให้ปุ๋ยกับพืชโดยการใส่แค่ปุ๋ยเคมีอย่างเดียวแล้วหวังว่าพืชจะเจริญเติบโตอย่างสวยงามนั้นคงไม่เพียงพอ พาริช จึงแก้ปัญหาดังกล่าวโดยการใช้เทคโนโลยีนำกรดอะมิโน มาใส่ในเม็ดปุ๋ย
				ทุกเม็ด โดยกรดอะมิโนนั้นมีโมเลกุลที่เล็ก น้ำหนักโมเลกุลเบา พืชสามารถดูดซืมได้ง่ายและนำไปใช้ประโยชน์ได้เลย โดยไม่ต้องผ่านขบวนการทางชีวเคมีที่พืชต้องสร้างขึ้นเอง จึงทำให้ช่วย
				เพิ่มผลผลิตและช่วยให้ผลผลิตมีคุณภาพที่สมบูรณ์ เห็นผลรวดเร็ว พืชแข็งแรง</p>
		<?php endif; ?>
		<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_340650278.jpg" width="680" />
		<h4><?php _e("<!--:en-->Effects of amino acids on plants<!--:--><!--:th-->ประโยชน์ทั่วไปของกรดอะมิโน<!--:-->") ?></h4>
		<ul class="bullet">
			<li><strong><em><?php _e("<!--:en-->Stress Resistance & Immune support:<!--:--><!--:th-->ลดความเครียดของพืช:<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino acids are directly related to an anti-stress physiology as they help to strengthen the cellular walls in such a way 
					that they increase resistance to unfavorable climatic conditions and other stresses such as low humidity, pest attack, flood, etc.<!--:-->
					<!--:th-->การเปลี่ยนแปลงของสิ่งแวดล้อม ทำให้พืชเกิดความเครียดไม่ว่าอากาศร้อนจัด, ความชื้นต่ำ, แมลงลง, น้ำท่วม ต่างเป็นปัจจัยให้ระบบเมทาโบลิซึม 
					(metabolism) ของต้นไม้นั้นบกพร่อง ทำให้ผลผลิตไม่มีคุณภาพ ส่งผลให้ การเติบโตและการสังเคราะห์โปรตีนของพืชลดลง เป็นผลต่อให้ปริมาณแอมโนเนียสูงขึ้น 
					ซึ่งจะทำให้เป็นพิษกับพืช การฉีดพ่นกรดอะมิโนเข้าไปจะช่วยให้เกิดการสังเคราะห์โปรตีนในพืช ช่วยลดความเป็นพิษจากแอมโมเนียลง เป็นผลให้พืชแข็งแรงมากขึ้น<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Pollination and Fruit Formation:<!--:--><!--:th-->เพิ่มชีวิตชีวาให้พืช:<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino acids increase the pollen germination.<!--:-->
					<!--:th-->พืชต้องต้องใช้พลังงานมากในการสังเคราะห์กรดอะมิโน ดังนั้นการให้กรดอะมิโนอิสระ ซึ่งมีโมเลกุลเล็กและพืชดูดซับได้ทันที จะช่วยให้พืชสามารถประหยัด
					พลังงานในการจะไปใช้สร้างกรดอะมิโน และสามารถนำพลังงานนี้ไปใช้กระบวนการอื่น และนอกจากนั้นยังช่วยกระตุ้นการทำงานของเอนไซม์อื่นๆอีกด้วย<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Photosynthesis:<!--:--><!--:th-->ช่วยในการสังเคราะห์แสง:<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino Acids help to increase chlorophyll concentration in the plant leading to higher degree of photosynthesis.<!--:-->
					<!--:th-->คลอโรฟิลล์ในใบนั้นมีส่วนสำคัญในการเปลี่ยนแสงให้เป็นพลังงานของพืช กรดอะมิโนช่วยในการเพิ่มปริมาณของคลอโรฟิลล์ในใบ ทำให้ใบมีสีเขียวเข้ม
					และเพิ่มการสังเคราะห์แสง<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Function of the Stoma:<!--:--><!--:th-->ช่วยในการลำเลียงอาหาร:<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino Acids encourage the plant stoma to open, thereby facilitating better absorption of nutrients.<!--:-->
					<!--:th-->ตามปกติเมื่อแสงและความชื้นต่ำ พืชจะปิดท่อลำเลียงอาหารและน้ำ ทำให้อาหารไม่ขึ้นไปสู่ลำต้น แต่อะมิโนจะมีผลช่วยให้ท่อเปิดลำเลียงอาหาร 
					ทำให้พืชมีความทนทานต่อการขาดน้ำหรือแสงมากกว่าพืชทั่วไป<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Chelating Effect:<!--:--><!--:th-->ช่วยในการดูดซับธาตุอาหาร (Chelating Effect):<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino acids make it easier for plant to absorb and transport nutrients.  They form complexes with inorganic particles in the soil, 
					resulting in the chelating effect, which help release the nutrients that were fixated in the soil particles such as phosphorous.<!--:-->
					<!--:th-->ฟอสฟอรัส ส่วนใหญ่จะอยู่ในรูปของสารที่ละลายน้ำได้ยาก ส่วนโพแทสเซียมสามารถละลายน้ำได้ดี แต่ส่วนใหญ่จะรวมตัวกับธาตุอื่นหรือถูกยึดในชั้นดิน 
					กรดอะมิโนจะไปช่วยหุ้มธาตุอาหารเอาไว้ ทำให้ประจุกลายเป็นกลางไม่ถูกตรึง ทำให้ธาตุอาหารสามารถซึมเข้าสู่ลำต้นได้ดีขึ้น พืชได้กินอาหารมากขึ้น<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Plant Hormones:<!--:--><!--:th-->ช่วยในการสร้างฮอร์โมนพืช (Plant Hormones หรือ Phytohormones):<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino acids are activators of plant hormones and other growth substances.<!--:-->
					<!--:th-->อะมิโนเป็นตัวสำคัญในการกระตุ้นให้พืชสร้างฮอร์โมน ซึ่งฮอร์โมนเหล่านี้ก็มีส่วนสำคัญในเรื่องต่างๆ เช่น กระตุ้นให้มีการขยายเซลล์และการเติบโตของลำต้น,
					ชักนำให้เกิดการออกดอก,เพิ่มการติดผล หรือทำให้ผลมีรสชาติเพิ่มขึ้น เกษตรกรอาจรู้จักการใช้ฮอร์โมนเพื่อเพิ่มผลผลิตหรือทำให้ผลผลิตมีคุณภาพ แต่หารู้ไม่ว่าสารที่
					ช่วยสร้างฮอร์โมนในธรรมชาติอย่างหนึ่งในนั้นคือกรดอะมิโนนี่เอง<!--:-->") 
				?>
			</li>
			<li><strong><em><?php _e("<!--:en-->Healthy Soil Microbial Activity:<!--:--><!--:th-->ช่วยฟื้นฟูสภาพดิน:<!--:-->") ?></em></strong>
				<?php _e("
					<!--:en-->Amino acids increase soil microbial population, which is a basic requirement for good mineralization of organic matter and also for 
					good soil structure and nutrient mobility around the root zone.<!--:-->
					<!--:th-->นอกจากผลประโยชน์ทางตรง กรดอะมิโนยังมีผลประโยชน์ทางอ้อมคือการเป็นอาหารของจุลินทรีย์ในดิน ทำให้จุลินทรีย์เติบโตดินเริ่มมีความสมบูรณ์ ซึ่งเมื่อ
					จุลินทรีย์มีจำนวนมาก สิ่งมีชีวิตขนาดใหญ่ขึ้นเช่นไส้เดือนดินก็จะมาอยู่ โดยไส้เดือนนี้จะชอนไชดินทำให้ดินร่วนซุย อากาศสามารถลงไปสู่รากทำให้พืชดูดซับอาหารได้ดี 
					นอกจากนั้นจุลินทรีย์ยังช่วยย่อยสลายอินทรียวัตถุต่างๆบนดินซึ่งก็สามารถกลายเป็นอารหารพืช ห่วงโซ่อาหารก็กลับมาหมุน ความต้องการที่จะต้องใช้ปุ๋ยก็ลดน้อยลงทำให้เกษตรกร
					ไม่จำเป็นต้องใส่ปุ๋ยในปริมาณที่มากเท่าเดิม <!--:-->") 
				?>
			</li>
		</ul>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<h4>ความรู้ทั่วไปเกี่ยวกับฮอร์โมนพืช (Plant Hormones)</h4>
			<p>นอกจากกรดอะมิโน <strong><em>พาริช โปรตีน</em></strong> ยังเสริมด้วยฮอร์โมนพืช ซึ่งเป็นสารเคมีภายในพืชที่มีผลในด้านการส่งเสริมการเจริญเติบโตของพืชแต่ละส่วน ฮอร์โมนพืชสามารถเคลื่อนย้ายภายในต้นพืช
				ได้และมีผลกระทบต่อการเปลี่ยนแปลงทางคุณภาพและการพัฒนาของเนื้อเยื่อ และอวัยวะของพืชซึ่งได้รับฮอร์โมนนั้นๆ แม้พืชจะใช้ในปริมาณที่น้อยมาก</p>
			<p>โดยฮอร์โมนที่พาริชใส่ เป็นสารที่ทำหน้าที่เกี่ยวกับการยืดตัวของเซลล์ (Cell elongation) และกระตุ้นการออกดอกของพืชบางชนิด และยังช่วยเพิ่มการติดดอกออกผล คล้ายกับฮอร์โมนจำพวก Gibberellins 
				พร้อมกับยังประโยชน์ด้านอื่นๆดังนี้</p>
			<ul class="bullet">
				<li>ส่งเสริมการงอกของเมล็ดและเพิ่มการติดตา</li>
				<li>ส่งเสริมการสังเคราะห์เอทิลีน ซึ่งเป็นฮอร์โมนพืชที่ช่วยในการ ควบคุมกระบวนการหลุดร่วงของใบ ดอก ผลอ่อน และทําใหผลสุกเร็วขึ้น ในไม้ผลบางชนิด</li>
				<li>ช่วยให้พืชทนทานต่อการเปลี่ยนแปลงที่รุนแรงของสิ่งแวดล้อม เช่นความหนาวเย็น, หรือความแห้งแล้ง</li>
				<li>ช่วยให้พืชมีความต้านทานต่อโรคพืช ที่มีสาเหตุจากแบคทีเรียเชื้อราและไวรัส มากยิ่งขึ้น</li>
				<li>ช่วยย่อยสลายและขับสารฆ่าศัตรูพืชและสัตว์ออกจากพืช ทําให้การบริโภคปลอดภัยยิ่งขึ้น ช่วยลดการปนเปื้อนจากโลหะหนักที่มาจากการใช้ปุ๋ยเคมีใน มันฝรั่ง</li>
				<li>เพิ่มปริมาณและคุณภาพไม้ผล</li>
			</ul>
			<h4>ประโยชน์ทั่วไปของกรดอะมิโน</h4>
			<ul class="bullet">
				<li>
			</ul>
		<?php endif; ?>
		
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
