<?php 
/*
Template Name: Typography
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container clearfix">
	<div class="row">
		<div class="col-mg-12">
			<h1>หัวข้อ 1<br /><span class="cond">หัวข้อผอม 1</span></h1>
			<h2>หัวข้อ 2<br /><span class="cond">หัวข้อผอม 2</span></h2>
			<h3>หัวข้อ 3<br /><span class="cond">หัวข้อผอม 3</span></h3>
			<h4>หัวข้อ 4<br /><span class="cond">หัวข้อผอม 4</span></h4>
			<h5>หัวข้อ 5<br /><span class="cond">หัวข้อผอม 5</span></h5>
			<h6>หัวข้อ 6<br /><span class="cond">หัวข้อผอม 6</span></h6>
			<p>
				<em>ดราม่าแพทเทิร์น</em> แอโรบิคแอดมิชชั่นเยอร์บีร่า ปิโตรเคมีวันเวย์ แบล็คเฟรชชี่แทงโก้ เรซิ่นแอนด์โทรโข่ง ไฮเอนด์บิ๊กเฟรชโรแมนติคสไตล์ หลวงปู่อัตลักษณ์คีตปฏิภาณก๋ากั่นเพทนาการ 
				ปฏิสัมพันธ์โฮมแกสโซฮอล์ เปียโนเฟรมไบเบิลนอมินี ดีมานด์ ผู้นำรีไซเคิลสึนามิอัลไซเมอร์ฮ่องเต้ วิลล์ ทาวน์แครอท ซังเตราสเบอร์รีอัลไซเมอร์โบรกเกอร์บาลานซ์ สแควร์เลกเชอร์ 
				วีเจเห็นด้วยแล็บ
			</p>
			<strong>ตัวหนา</strong>
			<strong><i>ตัวหนาเอียง</i></strong>
		</div>
		<div class="col-mg-12">
			<h1>Heading 1<br /><span class="cond">Heading Condense 1</span></h1>
			<h2>Heading 2<br /><span class="cond">Heading Condense 2</span></h2>
			<h3>Heading 3<br /><span class="cond">Heading Condense 3</span></h3>
			<h4>Heading 4<br /><span class="cond">Heading Condense 4</span></h4>
			<h5>Heading 5<br /><span class="cond">Heading Condense 5</span></h5>
			<h6>Heading 6<br /><span class="cond">Heading Condense 6</span></h6>
			<p>
				<em>Lorem ipsum dolor sit amet,</em> consectetur adipiscing elit. Pellentesque at augue erat. Praesent vel felis ut nisi efficitur euismod. 
				Cras dictum finibus tincidunt. Etiam dapibus erat turpis, eget lacinia magna euismod maximus. Vestibulum ante ipsum primis in faucibus 
				orci luctus et ultrices posuere cubilia Curae; Phasellus sodales turpis nec condimentum sagittis.
			</p>
			<strong>Strong</strong>
			<strong><i>Strong Italic</i></strong>
		</div>
	</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
