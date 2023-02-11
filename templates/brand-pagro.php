<?php 
/*
 Template Name: PARICH Pagro
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/pagro-bg.jpg" />
	</div>
</section>

<section class="page-content py-5">
	<div class="container">
		<h1><?php _e("<!--:en-->PARICH <em>Pagro</em><!--:--><!--:th-->พาริช <em>พาโกร</em><!--:-->") ?></h1>
		<div class="row">
			<div class="col-9">
				<p><strong><?php _e("<!--:en-->PARICH Pagro<!--:--><!--:th-->พาริช พาโกร<!--:-->") ?></strong> 
				<?php _e("<!--:en-->is a result of a cooperation between PARICH and Betagro -  one of the country’s largest food conglomerates.  It is an animal based organic fertilizer made from all the by products of Betagro’s, production process.  In addition, we also add, Penergetic-P, which give a stimulating effect on microbiology in the root area and increase the plant’s natural nutrient uptake.<!--:--><!--:th-->เกิดจากความร่วมมือระหว่างพาริชกับเบทาโกรเพื่อผลิตปุ๋ยอินทรีย์ชั้นยอด โดยใช้วัตถุดิบที่นำมาผลิตไม่ใช่แค่มูลไก่ แต่รวมถึง วัตถุดิบหลากชนิด ที่มาจากกระบวนการผลิตต่างๆ จากโรงงานในเครือเบทาโกร นอกจากนั้นยังเสริมด้วยสารพีเนอร์จีทิค เทคโนโลยีล่าสุดจากสวิตเซอร์แลนด์<!--:-->") ?></p>
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/penergetic-logo.png" width="480" />
			</div>
			<div class="col-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ifoam-logo.jpg" />
				<strong><?php _e("<!--:en-->Certified Organic Inputs for organic farming by IFOAM (International Federation of Organic Agriculture Movements)<!--:--><!--:th-->ได้รับรองมาตรฐานเกษตรอินทรีย์ โดยสหพันธ์เกษตรอินทรีย์นานาชาติ (International Federation of Organic Agriculture Movements - IFOAM)<!--:-->") ?></strong>
			</div>
		</div>
		<h3 class="mt-3"><?php _e("<!--:en-->Key raw materials include:<!--:--><!--:th-->วัตถุดิบหลักของพาริช พาโกร<!--:-->") ?></h3>
		<table class="table table-bordered">
			<thead>
			<tr>
				<td><?php _e("<!--:en-->Pig placenta<!--:--><!--:th-->รกสุกร<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Eggs shells<!--:--><!--:th-->เปลือกไข่<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Eggs<!--:--><!--:th-->ไข่ไก่<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Bone Meal<!--:--><!--:th-->กระดูกต้ม<!--:-->") ?></td>
			</tr>
			</thead>
			<tr>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Pig-Placenta.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Eggs-Shells.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Eggs.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Bone-Meal.jpg" /></td>
			</tr>
			<tr>
				<td><?php _e("<!--:en-->Nitrogen (N) 11%<!--:--><!--:th-->ไนโตรเจน 11%<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Calcium (Ca)<!--:--><!--:th-->แคลเซียม<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Nitrogen and calcium<!--:--><!--:th-->ไนโตรเจน และแคลเซียม<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Phosphorus (P<sub>2</sub>O<sub>5</sub>) 14%<!--:--><!--:th-->ฟอสฟอรัส (P<sub>2</sub>O<sub>5</sub>) 14%<!--:-->") ?></td>
		</table>
		<table class="table table-bordered">
			<thead>
			<tr>
				<td><?php _e("<!--:en-->Blood meal<!--:--><!--:th-->ลิ่มเลือด<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Pig Manure<!--:--><!--:th-->มูลสุกร<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Chicken Manure<!--:--><!--:th-->มูลไก่<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Animal processing by products<!--:--><!--:th-->กากตะกอนแปรรูป<!--:-->") ?></td>
			</tr>
			</thead>
			<tr>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Blood-Meal.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Pig-Manure.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Chicken-Manure.jpg" /></td>
				<td><img src="<?php echo get_template_directory_uri(); ?>/images/Animal-Processing.jpg" /></td>
			</tr>
			<tr>
				<td><?php _e("<!--:en-->Nitrogen (N) 3%<!--:--><!--:th-->ไนโตรเจน 3%<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Phosphorus (P<sub>2</sub>O<sub>5</sub>) 8%<!--:--><!--:th-->ฟอสฟอรัส (P<sub>2</sub>O<sub>5</sub>) 8%<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Potassium (K<sub>2</sub>O) 3%<!--:--><!--:th-->โพแทสเซียม (K<sub>2</sub>O) 3%<!--:-->") ?></td>
				<td><?php _e("<!--:en-->Nitrogen (N) 5%<!--:--><!--:th-->ไนโตรเจน 5%<!--:-->") ?></td>
		</table>
		<h3 class="mt-5"><?php _e("<!--:en-->PARICH Pagro Advantages<!--:--><!--:th-->ข้อโดดเด่นของสารอินทรีย์ในพาริช พาโกร<!--:-->") ?></h3>
		<ul>
			<li><strong class="text-green"><?php _e("<!--:en-->Animal-based can regularly supply of plant nutrients and improve soil fertility:<!--:--><!--:th-->ผลิตจากวัสดุอินทรีย์ที่มาจากสัตว์:<!--:-->") ?></strong>
				<?php _e("
					<!--:en-->Animal-based fertilizers release more quickly than plant-based and most manure-based organic fertilizers.  It also contains groups of amino acids that 
						plant-based organic fertilizer do not have contributing to better crop yield.<!--:-->
					<!--:th-->ปุ๋ยทุกตราของพาริช จะเน้นที่ปุ๋ยที่มีส่วนผสมของโปรตีน กรดอะมิโน และวัสดุอินทรีย์ที่มาจากสัตว์ เพราะไม่ใช่ว่าสารอินทรีย์ทุกประเภท
						จะมีประโยชน์เท่ากันหมด หลายคนมักเข้าใจผิดว่าปุ๋ยอินทรีย์ผลิตมาจากไหนก็เหมือนกัน แต่หารู้ไม่ว่า ปุ๋ยอินทรีย์ที่ผลิตจากวัสดุอินทรีย์ที่มาจากพืชเมื่อย่อยสลายแล้วจะให้กรดอินทรีย์ 
						และแอลกอฮอล์เป็นหลัก แต่จะให้ธาตุอาหารพืชน้อยมาก ในทางตรงกันข้าม วัสดุอินทรีย์ที่มาจากสัตว์ เมื่อย่อยสลายจะได้โปรตีน เปปไทด์ กรดอะมิโน ธาตุอาหารพืช (N-P-K) และฮอร์โมนพืช
						ที่เป็นประโยชน์กับพืชมาก<!--:-->"
					) 
				?>
			</li>
			<li><strong class="text-green"><?php _e("<!--:en-->The fertilizer is fully decomposted:<!--:--><!--:th-->หมักสมบูรณ์:<!--:-->") ?></strong>
				<?php _e("
					<!--:en-->PARICH Pagro has already been through the process of decomposition.  We leave the raw materials to be decomposed for more than 6 months before we process these materials.  
						Therefore, farmers can use our fertilizers without the worry of burning plants.<!--:-->
					<!--:th-->นอกจากวัสดุอินทรีย์ที่มาจากพืชและสัตว์จะมีประโยชน์ที่แตกต่าง สิ่งที่ต้องคำนึงอีกอย่างหนึ่งคือการหมักที่สมบูรณ์ เพราะวัสดุอินทรีย์ที่ยังไม่ผ่านการหมัก  หรือยังหมักไม่สมบูรณ์เมื่อใส่ลงดินจุลินทรีย์
						วัสดุอินทรีย์นั้นจะดึงธาตุอาหารจากดินมาใช้ ทำให้พืชขาดอาหาร และกรดอินทรีย์ที่เกิดขึ้นระหว่างการหมักจะเป็นอันตรายต่อรากพืช ทำให้พืชเหลืองหรือตายได้<!--:-->"
					) 
				?>
			</li>
		</ul>
		<div class="row">
			<div class="col-6">
				<?php if ( qtrans_getLanguage() == "en" ) : ?>
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Result-Compare-01-en.jpg" />
				<?php endif; ?>
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Result-Compare-01-th.jpg" />
				<?php endif; ?>
			</div>
			<div class="col-6">
				<?php if ( qtrans_getLanguage() == "en" ) : ?>
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Result-Compare-02-en.jpg" />
				<?php endif; ?>
				<?php if ( qtrans_getLanguage() == "th" ) : ?>
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Result-Compare-02-th.jpg" />
				<?php endif; ?>
			</div>
		</div>
		<ul>
			<li><strong class="text-green"><?php _e("<!--:en-->Organic matter helps unlock the nutrients and regulate the elements in the soil:<!--:--><!--:th-->ส่งเสริมปุ๋ยเคมีให้เป็นประโยชน์แก่พืชอย่างมีประสิทธิภาพยิ่งขึ้น:<!--:-->") ?></strong>
				<?php _e("
					<!--:en-->Organic matter helps deblocking the nutrients in the soil. Plants can more effectively use these nutrients and can produce more robust crops.<!--:-->
					<!--:th-->นอกจากธาตุอาหารที่มีอยู่สูงกว่าปุ๋ยอินทรีย์ทั่วไป เพราะทำมาจากสัตว์ พาริช พาโกรยังสามารถช่วยเพิ่มความจุในการแลกเปลี่ยนไอออนบวกของดิน จึงละลายปุ๋ยที่มีอยู่ในดิน 
						ทำให้รากดูดซับอาหารได้ดีขึ้น ต้นแข็งแรง ผลผลิตสูง<!--:-->"
					) 
				?>
			</li>
		</ul>
		<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Plants.png" />
		<ul>
			<li><strong class="text-green"><?php _e("<!--:en-->Organic matter enhances the biological activity and biodiversity of soils:<!--:--><!--:th-->ส่งเสริมให้จุลินทรีย์ทำงานอย่างมีประสิทธิภาพยิ่งขึ้น ช่วยให้รากดูซับธาตุอาหารได้ดีขึ้น:<!--:-->") ?></strong>
				<?php _e("
					<!--:en-->Organic matter is the main source of food for several microorganisms. It also facilitates aggregation, which reduces the runoff of water and nutrients, and soil erosion.<!--:-->
					<!--:th-->สารอินทรียวัตถุในพาริช พาโกร สามารถช่วยทำให้จุลินทรีย์ในดินเติบโต และยังช่วยปรับปรุงคุณสมบัติทางฟิสิกส์ของดิน เช่น ความโปร่ง ความร่วนซุย ความสามารถในการอุ้มน้ำ ทำให้ดินดีขึ้น ปลดปล่อยธาตุอาหารให้พืชได้ใช้มากขึ้น 
						รากแข็งแรง ใบสมบูรณ์<!--:-->"
					) 
				?>
			</li>
		</ul>
		<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Results.jpg" />
		<ul>
			<li><strong class="text-green"><?php _e("<!--:en-->Strict quality control:<!--:--><!--:th-->ควบคุมคุณภาพด้วยมาตรฐานเบทาโกร:<!--:-->") ?></strong>
				<?php _e("
					<!--:en-->Betagro is known for it’s high quality food products, and we use the same quality control technique to control the quality of our fertilizers.  Farmers can be sure that our fertilizers are safe for use and 
						free of weeds and pests.<!--:-->
					<!--:th-->ปุ๋ยอินทรีย์ทั่วไปอาจมีโรคพืช แมลงศัตรูพืช และเมล็ดวัชพืชติดมาด้วย โดยเฉพาะปุ๋ยที่ทำจากมูลไก่ซึ่งอาจมีน้ำกรดที่ใช้ล้างเล้าไก่ติดมาด้วย ซึ่งทำให้เป็นอันตรายต่อพืช แต่ปุ๋ย พาริช พาโกรนั้น ผ่านกรรมวิธีการผลิตที่มีคุณภาพได้มาตรฐาน 
						เบทาโกร จึงมั่นใจได้ว่า ปุ๋ยนั้นสะอาดและปลอดภัยในการใช้<!--:-->"
					) 
				?>
			</li>
		</ul>
		<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Pagro-Labs.jpg" />
		<ul>
			<li><strong class="text-green"><?php _e("<!--:en-->PARICH Pagro also add Penergetic – P during granulation process : <!--:--><!--:th-->เพิ่มสารพิเศษ พีเนอร์จีทิค-พี จากประเทษสวิตเซอร์แลนด์ : <!--:-->") ?></strong>
				<?php _e("
					<!--:en-->penergetic p is used as a plant tonic. The programmed information boosts the plants, has a stabilizing effect on plant growth and strengthens the immune system of the plants. Additional information has a stimulating effect on microbiology in the root area and increase the plant’s natural nutrient uptake.<!--:-->
					<!--:th-->มีคุณสมบัติเป็นสารคีเลท ช่วยดูดซึมและเคลื่ยนย้ายธาตุอาหารที่เป็นประโยชน์เข้าสู่พืช ช่วยให้พืชคงขบวนการเมทาบอลิสซึ่ม (Metabolism) ได้ในสภาวะที่ไม่เหมาะสม กระตุ้นการพัฒนาของเนื้ อเยื่อเจริญ ทั้ งบริเวณปลายยอด และปลายราก ลดปัญหาตาดอกฝ่อเมื่อกระทบหนาว หรือฝนตกชุก ช่วยในกระตุ้นการแบ่งเซลล์เพื่อขยายขนาดใบและขนาดผล รวมถึงช่วยยืดความยาวข้องข้อเถาว์ ช่วยให้ผลผลิตหลังเก็บเกี่ยวคงความสดอยู่ได้นานขึน<!--:-->"
					) 
				?>
			</li>
		</ul>
		<div class="row">
			<div class="col-6">
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/pagro-compare-03.jpg" />
			</div>
			<div class="col-6">
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/pagro-compare-04.jpg" />
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/pagro-compare-05.jpg" />
			</div>
			<div class="col-6">
				<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/pagro-compare-06.jpg" />
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
