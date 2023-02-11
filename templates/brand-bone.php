<?php 
/*
 Template Name: PARICH Bone
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-banner">
	<div class="main-banner">
		<img class="imgfill" src="<?php echo get_template_directory_uri(); ?>/images/bone-bg.jpg" />
	</div>
</section>
<section class="page-content py-5">
	<div class="container">
		<h1 class="text-red"><?php _e("<!--:en-->PARICH Bone<!--:--><!--:th-->พาริช โบน<!--:-->") ?></h1>
		<h3 class="cond"><?php _e("
			<!--:en-->Organo-Mineral fertilizer made from combining chemical fertilizer with steamed bone meal and leather meal<!--:-->
			<!--:th-->ปุ๋ยอินทรีย์เคมีคุณภาพสูงผลิตด้วยเทคโนโลยีญี่ปุ่น ทำจากกระดูกและหนังสัตว์ผสมกับแม่ปุ๋ยคุณภาพสูง<!--:-->") ?>
		</h3>
		<?php if ( qtrans_getLanguage() == "en" ) :  ?>
			<h5>Advantage</h5>
			<ul>
				<li><strong><em>Has the perfect combination of fast and slow-acting materials – </em></strong>chemical fertilizer will quickly dissolved to be absorbed by plants and bone meal and leather meal will slowly 
					release the nutrients and also help release the nutrients that were fixated in the soil. They reduce yield losses resulting from washing thanks to natural chelated contents which 
					enable nutrient elements to be taken more effectively.</li>
				<li><strong><em>Naturally rich in phosphorous, and many important trace elements – </em></strong>PARICH bone is rich in important nutrients such as Manganese, Zinc, Copper, and Boron. It is especially 
					high in magnesium (2%) and calcium (5%), which help the leaf photosynthesis resulting in strong roots and strong stems. In addition, bone meal phosphorus is easy for plants to take up.</li>
				<li><strong><em>Produced by state-of-the-art pilleting technology - </em></strong>Such process ensures that PARICH bone is packed with major nutrients, micronutrients, and trace elements, while contains
				 	low moisture content (&lt;5%) and high organic matter (&gt;20%)</li>
				<li><strong><em>Guaranteed free from weeds and pests</em></strong></li>
			</ul>
		<?php endif; ?>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
			<ul>
				<li><strong><em>ใช้กระดูกและหนังสัตว์เป็นวัตถุดิบหลัก</em></strong> ส่วนประกอบหลักของพาริชโบนคือกระดูกและหนังสัตว์ ซึ่งมีทั้งอินทรียวัตถุ กรดอะมิโนที่สำคัญ และยังมีแคลเซียม และแมกนีเซียมสูง 
					สามารถช่วยเพิ่มทั้งปริมาณและคุณภาพผลผลิตของพืช
				</li>
				<li><strong><em>ปุ๋ยทำงาน 2 ระยะ</em></strong> เมื่อใส่ปุ๋ย แม่ปุ๋ยเคมีจะปลดปล่อยให้พืชได้ใช้ทันที หลังจากนั้นกระดูกและหนังสัตว์จะค่อยๆละลายให้พืชได้ใช้อย่างยาวนาน</li>
				<li><strong><em>อินทรียวัตถุมากถึง 20%</em></strong> สารอินทรียวัตถุช่วยพัฒนาดิน เพิ่มความทนทานให้กับพืช เป็นอาหารที่ดีให้กับ ไมโครไลซ่า หรือ “เชื้อราที่ดี" ช่วยในการย่อยสารอินทรีย์
					และช่วยให้รากสามารถดูดและรับอาหารได้มากขึ้น
				</li>
				<li><strong><em>เทคโนโลยีการผลิตจากญี่ปุ่น</em></strong> ใช้วิธีการอัดเม็ดโดยไม่ผ่านความร้อน ไม่ใช้น้ำ ไม่มีดินเป็นส่วนผสมซึ่งเป็นวิธีการเดียวกับประเทศญี่ปุ่น จึงทำให้ไม่เสียคุณค่าทางอาหารในกระบวนการผลิต 
					สะอาดปลอดภัยในการใช้
				</li>
			</ul>
		<?php endif; ?>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
			<div class="col">
				<h5>8-8-8 +20OM</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_8-8-8_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_8-8-8_b.png" />
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/Bone.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/Bone_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>8%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>8%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>8%</td></tr>
					<tr><td><?php _e("<!--:en-->Organic Matter<!--:--><!--:th-->อินทรียวัตถุ<!--:-->") ?></td><td>20%</td></tr>
					<tr><td><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Amino Acids and other essential trace elements<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืชที่ได้จากกระดูกและหนังสัตว์<!--:-->") ?></td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>25 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col">
				<h5>12-6-6 +20OM</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_12-6-6_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_12-6-6_b.png" />
					</li>
				</ul>
				<div class="granular-circ">
					<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/granular/Bone.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/granular/Bone_thumb.jpg" />
					</a>
					<span class="caption"><?php _e("<!--:en-->Click to enlarge<!--:--><!--:th-->คลิกดูเม็ดปุ๋ย<!--:-->") ?></span>
				</div>
				<table class="table table-bordered">
					<tr><td><?php _e("<!--:en-->Nitrogen<!--:--><!--:th-->ไนโตรเจน<!--:-->") ?></td><td>10%</td></tr>
					<tr><td><?php _e("<!--:en-->Phosphorus<!--:--><!--:th-->ฟอสฟอรัส<!--:-->") ?></td><td>5%</td></tr>
					<tr><td><?php _e("<!--:en-->Potassium<!--:--><!--:th-->โพแทสเซี่ยม<!--:-->") ?></td><td>10%</td></tr>
					<tr><td><?php _e("<!--:en-->Organic Matter<!--:--><!--:th-->อินทรียวัตถุ<!--:-->") ?></td><td>20%</td></tr>
					<tr><td><?php _e("<!--:en-->Others<!--:--><!--:th-->ธาตุอาหารรอง<!--:-->") ?></td><td><?php _e("<!--:en-->Amino Acids and other essential trace elements<!--:--><!--:th-->กรดอะมิโนและฮอร์โมนพืชที่ได้จากกระดูกและหนังสัตว์<!--:-->") ?></td></tr>
					<tr><td><?php _e("<!--:en-->Packing<!--:--><!--:th-->ขนาดบรรจุ<!--:-->") ?></td><td>25 <?php _e("<!--:en-->kg<!--:--><!--:th-->กิโลกรัม<!--:-->") ?></td></tr>
				</table>
			</div>
			<div class="col">
				<h5>6-12-12 +20OM</h5>
				<ul class="packset">
					<li class="front-side">
						<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_6-12-12_f.png" />
					</li>
					<li class="back-side">
					<img src="http://www.parichfertilizer.com/wp-content/uploads/Bone_6-12-12_b.png" />
					</li>
				</ul>
			</div>
		</div>
		<?php if ( qtrans_getLanguage() == "th" ) : ?>
		<h3 class="mt-5">ตารางสรุปความแตกต่าง</h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td width="20%"><strong>หัวข้อ</strong></td>
					<td>ความแตกต่าง</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>ปริมาณธาตุอาหารหลัก</strong></td>
					<td>พาริช โบน มีปริมาณปุ๋ยเคมีสูง (N+P+K &gt; 20-30%) มีธาตุอาหารรอง และเสริมอยู่มาก แต่ปุ๋ยอินทรีย์เคมีทั่วไปมีปริมาณปุ๋ยเคมีปานกลาง (N+P+K 12-18%) และมีการสูญเสียมาก</td>
				</tr>
				<tr>
					<td><strong>ปริมาณอินทรียวัตถุ</strong></td>
					<td>มีปริมาณอินทรียวัตถุสูง &gt; 20-40% ในขณะที่กฎหมายระบุปริมาณอินทรียวัตถุในปุ๋ยอินทรีย์เคมีไว้เพียงแค่ 10%</td>
				</tr>
				<tr>
					<td><strong>วัตถุดิบในการผลิต</strong></td>
					<td>ใช้วัตถุดิบอินทรีย์คุณภาพสูง โดยเฉพาะกระดูกและหนังสัตว์ สามารถย่อยสลายได้รวดเร็วและสามารถปลดปล่อยออกมาทันกับการปลดปล่อยของปุ๋ยเคมี จึงช่วยเรื่องลดการตรึง และนำพาธาตุอาหารได้ดี มีการปลดปล่อยต่อเนื่อง 
						จึงไม่ทำให้พืชชะงักการเจริญเติบโตได้ง่าย และยังทำให้ดินมีคุณสมบัติทางกายภาพดีขึ้น (ร่วนซุย ควบคุมประโยชน์ของน้ำได้ดี) ช่วยให้ดินมีคุณสมบัติทางเคมีเหมาะสม กรดอ่อน-กลาง ช่วยลดการตรึงกันระหว่างธาตุอาหาร 
						ในขณะที่ปุ๋ยอินทรีย์เคมีอื่นอาจมีปูนเป็นส่วนผสมมาก จึงทำให้เกิดการตรึงระหว่างธาตุอาหาร และนอกจากนั้นมักจะมีการย่อยสลายยังไม่ดีพอ จึงใช้เวลานานก่อนที่พืชจะได้ประโยชน์</td>
				</tr>
				<tr>
					<td><strong>ความง่ายในการใช้</strong></td>
					<td>อยู่ในรูปปุ๋ยผสมเสร็จ (Compound) มีธาตุอาหารและขนาดเม็ดสม่ำเสมอ มีความชื้นต่ำสามารถพ่นและใช้กับเครื่องหว่านปุ๋ยได้</td>
				</tr>
				<tr>
					<td><strong>เทคโนโลยีในการผลิต</strong></td>
					<td>ใช้เทคโนโลยีในการผลิตที่มีคุณภาพสูง จึงทำให้เกิดการสูญเสียน้อยกว่าหลังการผลิต ป้องกันปัญหาด้านปริมาณธาตุอาหารต่ำลงหลังการผลิต</td>
				</tr>
				<tr>
					<td><strong>ความสะอาดและปลอดภัย</strong></td>
					<td>ปุ๋ยพาริช โบน สะอาดปลอดภัยด้มาตรฐานญี่ปุ่น ไม่มีไข่แมลง เมล็ดวัชพืช และเชื้อราเจือปน</td>
				</tr>
			</tbody>
		</table>
		<h3 class="mt-5">ผลลัพธ์ที่ได้จากการใช้ปุ๋ย <span class="text-red">พาริช โบน</h3>
		<div class="row">
			<div class="col">
				<center>
					<h6>ใบเขียวเข้มแข็งแรง</h6>
					<img class="align-center" src="<?php echo get_template_directory_uri(); ?>/images/Strong-Leaves.jpg" />
				</center>
			</div>
			<div class="col">
				<center>
					<h6>ผลผลิตสูงได้คุณภาพ</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/High-Advantage.jpg" />
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<center>
					<h6>รากใหญ่ทำให้พืชดูดซับอาหารได้มาก</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/Bigger-Root.jpg" />
				</center>
			</div>
			<div class="col">
				<center>
					<h6>ดินดีสมบูรณ์</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/Fertile-01.jpg" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/Fertile-02.jpg" />
				</center>
			</div>
			<div class="col">
				<center>
					<h6>ช่วยพัฒนาดินเสริมสร้างเชื้อราที่ดีเป็นอาหารให้ใส้เดือน</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/Fungi.png" />
				</center>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
