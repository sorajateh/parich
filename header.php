<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js ie9 ie8 ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie9 ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="title" content="<?php echo get_meta_title(); ?>">
	<meta name="description" content="<?php echo get_meta_description(); ?>">
    <meta name="keywords" content="<?php echo get_meta_keywords() ?>">
    <meta name="author" content="<?php bloginfo('name');?>">
    <meta name="url" content="<?php echo get_permalink(); ?>">

	<meta property="og:title" content="<?php echo get_meta_title(); ?>">
	<meta property="og:image" content="<?php echo get_meta_image(); ?>">
	<meta property="og:site_name" content="<?php bloginfo('name');?>">
	<meta property="og:description" content="<?php echo get_meta_description(); ?>">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- mobile meta -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- icon & favicon -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<![endif]-->
	<!-- or, set /favicon.ico for IE10 win -->
	<meta name="msapplication-TileColor" content="#ff801e">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-image.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<meta name="facebook-domain-verification" content="w8zj3abok178onwgraqen5f8m8yo4e" />

	<!-- Bootstrap 4.0 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title><?php wp_title(''); ?></title>
	
	<?php wp_head(); ?>

	<!-- Google Maps -->
	<?php 	
		if ( qtrans_getLanguage() == "en" ) {
			echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>';
		} else if ( qtrans_getLanguage() == "th" ) {
			echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=th"></script>';
		}
 	?>

 	<!-- Faceboox SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	</script>

	<!-- Google +1 SDK -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- Tweet SDK -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<style type="text/css">
		.imgfill {
			visibility: hidden;
		}
	</style>
	<script>
      audiojs.events.ready(function() {
        audiojs.createAll();
      });
    </script>
</head>
<body <?php body_class(); ?>>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-57120140-5', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Google Code for WEB ALL -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 952425738;
var google_conversion_label = "Mxs-CNmekVkQirqTxgM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/952425738/?value=1.00&amp;currency_code=THB&amp;label=Mxs-CNmekVkQirqTxgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<div id="menuBrands" style="display: none;">
	<div class="row">
		<div class="col-8 brand-group">
			<h6 class="color-parich margin-none"><?php _e("<!--:en-->Mineral Fertilizer<!--:--><!--:th-->ปุ๋ยเคมี<!--:-->"); ?></h6>
			<hr class="hr-orange" />
			<div class="row">
				<div class="col-3 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'parich' ) ); ?>"><h6><?php _e("<!--:en-->PARICH<!--:--><!--:th-->พาริช<!--:-->"); ?></h6></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'parich' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/parich-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Straight and compound mineral fertilizers<!--:--><!--:th-->ปุ๋ยเคมีคุณภาพสูง<!--:-->"); ?></p>
				</div>
				<div class="col-3 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'nitro' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Nitro<!--:--><!--:th-->พาริช ไนโตร<!--:-->"); ?></h5></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'nitro' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/nitro-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Urea treated with urease inhibitor<!--:--><!--:th-->ปุ๋ยไนโตรเจนลดการระเหยหาย<!--:-->"); ?></p>
				</div>
				<div class="col-3 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Bio<!--:--><!--:th-->พาริช ไบโอ<!--:-->"); ?></h6></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/bio-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Compound NPK fertilizer coated with biostimulants<!--:--><!--:th-->ปุ๋ยเคมีเชิงผสม แบบคอมพาวน์ปั้นเม็ด ผลิตด้วยเทคโนโลยีพิเศษจากฝรั่งเศส<!--:-->"); ?></p>
				</div>
				<div class="col-3 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'tonmai' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Tonmai<!--:--><!--:th-->พาริช ต้นไม้<!--:-->"); ?></h6></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'tonmai' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/tonmai-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Bulk blend NPK fertilizer coated with urease inhibitor and biostimulants<!--:--><!--:th-->ปุ๋ยเคมีบัลต์เบลนด์แบบโนฟิลเลอร์ เสริมด้วยธาตุรองธาตุเสริม ผลิตทีละกระสอบ ใช้เทคโนโลยีพิเศษเพื่อให้พืชดูดซับง่าย<!--:-->"); ?></p>
				</div>
			</div>
		</div>
		<div class="col-2 brand-group">
			<h6 class="color-parich margin-none"><?php _e("<!--:en-->Organo-Mineral Fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์เคมี<!--:-->"); ?></h6>
			<hr class="hr-orange" />
			<div class="row">
				<div class="col-mg-11 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Bone<!--:--><!--:th-->พาริช โบน<!--:-->"); ?></h6></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/bone-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Organic-mineral pellet fertilizer made from steam bone meal and leather meal <!--:--><!--:th-->ปุ๋ยอินทรีย์เคมีที่ ผลิตจากหนังและกระดูกสัตว์เป็นหลัก มีอินทรียวัตถุ 20%<!--:-->"); ?></p>
				</div>
			</div>
		</div>
		<div class="col-2 brand-group">
			<h6 class="color-parich margin-none"><?php _e("<!--:en-->Organic Fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์<!--:-->"); ?></h6>
			<hr class="hr-orange" />
			<div class="row">
				<div class="col-mg-11 brand-item">
					<a href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Pagro<!--:--><!--:th-->พาริช พาโกร<!--:-->"); ?></h6></a>
					<a href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><img class="brand-logo margin-vertical" style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); ?>/images/pagro-logo.png" width="60" height="60" /></a>
					<p class="brand-desc"><?php _e("<!--:en-->Animal-based 100% organic fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์แท้ 100% ผลิตโดย เบทาโกร<!--:-->"); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="wrap">

<div id="main" class="clearfix">

	<header id="header" class="header-default">
		<div class="container clearfix">

			<div class="menu-overlay"></div>
			
				<a class="home position-relative" href="<?php echo qtrans_convertURL( home_url() , qtrans_getLanguage() ) ?>">
					<h1 class="hlogo">
						<span>PARICH &#124; CARE.MORE</span>
					</h1>
					<div class="tmark">
						<svg version="1.1" class="pr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 100 33" xml:space="preserve">
						<path d="M15.814,14.198c0-0.941-0.118-1.866-0.355-2.773c-0.236-0.905-0.624-1.711-1.162-2.417
							c-0.542-0.707-1.257-1.277-2.137-1.713c-0.885-0.436-1.971-0.654-3.264-0.654H0v25.204h5.084v-10.06h2.718
							c1.2,0,2.295-0.154,3.281-0.461c0.989-0.303,1.829-0.764,2.526-1.373c0.693-0.613,1.231-1.402,1.624-2.363
							C15.618,16.619,15.814,15.49,15.814,14.198z M9.797,17.127c-0.627,0.61-1.444,0.916-2.455,0.916H5.084v-7.661h2.114
							c1.272,0,2.18,0.332,2.722,0.989c0.539,0.66,0.811,1.624,0.811,2.896C10.732,15.563,10.418,16.515,9.797,17.127z M20.472,6.641
							l-6.669,25.204h5.293l1.166-5.329h6.708l1.163,5.329h5.295L26.755,6.641H20.472z M21.142,22.35l2.438-11.329h0.072l2.432,11.329
							H21.142z M49.909,30.185c-0.093-0.705-0.162-1.727-0.209-3.07c-0.027-0.68-0.048-1.3-0.07-1.852
							c-0.022-0.553-0.059-1.064-0.107-1.537c-0.142-1.413-0.505-2.436-1.093-3.07c-0.59-0.635-1.52-1.044-2.789-1.236v-0.07
							c1.436-0.306,2.493-0.995,3.177-2.065c0.683-1.07,1.021-2.455,1.021-4.146c0-2.188-0.586-3.818-1.763-4.891
							c-1.174-1.07-2.823-1.607-4.942-1.607h-9.388v25.204h5.082V21.184h2.718c1.057,0,1.813,0.284,2.26,0.848
							c0.447,0.565,0.694,1.341,0.739,2.329l0.142,4.834c0.022,0.495,0.072,0.972,0.142,1.43c0.072,0.461,0.236,0.868,0.492,1.219h5.509
							v-0.21C50.359,31.374,50.053,30.893,49.909,30.185z M43.769,16.791c-0.657,0.576-1.599,0.866-2.823,0.866h-2.118v-7.273h2.399
							c2.354,0,3.531,1.165,3.531,3.497C44.758,15.245,44.429,16.214,43.769,16.791z M52.171,6.641h5.082v25.204h-5.082V6.641z
							 M70.312,25.51c-0.165,0.837-0.388,1.481-0.671,1.941c-0.281,0.458-0.618,0.764-1.006,0.916c-0.385,0.154-0.806,0.231-1.253,0.231
							c-0.541,0-1.019-0.113-1.427-0.337c-0.416-0.222-0.753-0.658-1.028-1.304c-0.27-0.649-0.467-1.559-0.599-2.736
							c-0.129-1.177-0.193-2.716-0.193-4.624c0-1.787,0.048-3.301,0.143-4.537c0.093-1.233,0.256-2.233,0.492-3
							c0.235-0.764,0.559-1.317,0.972-1.657c0.414-0.343,0.936-0.512,1.57-0.512c1.154,0,1.947,0.416,2.383,1.253
							c0.435,0.834,0.654,2.168,0.654,4.003h5.083c0-0.916-0.065-1.899-0.194-2.947c-0.133-1.048-0.456-2.022-0.969-2.927
							c-0.521-0.904-1.302-1.652-2.349-2.242c-1.049-0.587-2.479-0.882-4.29-0.882c-1.908,0-3.427,0.322-4.552,0.972
							c-1.132,0.646-1.996,1.544-2.596,2.697c-0.601,1.155-0.991,2.54-1.166,4.149c-0.177,1.612-0.264,3.371-0.264,5.278
							c0,1.928,0.087,3.694,0.264,5.293c0.175,1.601,0.565,2.978,1.166,4.129c0.6,1.152,1.464,2.035,2.596,2.646
							c1.125,0.613,2.644,0.918,4.552,0.918c1.669,0,3.031-0.261,4.075-0.775c1.048-0.516,1.859-1.236,2.436-2.154
							c0.579-0.916,0.972-1.989,1.183-3.211c0.212-1.222,0.318-2.517,0.318-3.885H70.56C70.56,23.575,70.479,24.676,70.312,25.51z
							 M88.1,16.279h-5.927V6.641h-5.084v25.204h5.084V20.656H88.1v11.189h5.085V6.641H88.1V16.279z M99.897,2.247
							c-0.071-0.267-0.173-0.514-0.304-0.741c-0.129-0.23-0.286-0.438-0.473-0.621c-0.186-0.186-0.391-0.343-0.617-0.475
							c-0.228-0.129-0.475-0.233-0.742-0.303C97.498,0.037,97.219,0,96.927,0s-0.57,0.037-0.835,0.106
							c-0.261,0.07-0.508,0.174-0.735,0.303c-0.229,0.132-0.434,0.289-0.619,0.475c-0.185,0.183-0.339,0.391-0.471,0.621
							c-0.133,0.227-0.233,0.474-0.307,0.741c-0.069,0.261-0.107,0.54-0.107,0.829c0,0.289,0.038,0.567,0.107,0.832
							c0.073,0.263,0.174,0.511,0.307,0.736c0.132,0.23,0.286,0.436,0.471,0.621c0.186,0.182,0.391,0.343,0.619,0.472
							c0.228,0.132,0.475,0.233,0.738,0.304c0.265,0.073,0.543,0.11,0.832,0.11c0.292,0,0.57-0.037,0.834-0.11
							c0.268-0.07,0.515-0.171,0.742-0.304c0.227-0.129,0.432-0.29,0.617-0.472c0.187-0.185,0.344-0.39,0.473-0.621
							c0.131-0.225,0.232-0.473,0.304-0.736C99.967,3.643,100,3.365,100,3.076C100,2.787,99.967,2.508,99.897,2.247z M99.4,3.767
							c-0.061,0.219-0.144,0.427-0.254,0.621c-0.109,0.194-0.241,0.365-0.396,0.525c-0.15,0.155-0.322,0.292-0.513,0.402
							c-0.189,0.112-0.394,0.197-0.615,0.258c-0.22,0.062-0.453,0.093-0.694,0.093c-0.242,0-0.475-0.031-0.693-0.093
							c-0.221-0.062-0.426-0.146-0.61-0.258c-0.188-0.11-0.359-0.247-0.511-0.402c-0.154-0.16-0.287-0.331-0.394-0.525
							s-0.191-0.402-0.247-0.621c-0.059-0.22-0.09-0.452-0.09-0.691s0.031-0.467,0.09-0.691c0.056-0.219,0.141-0.427,0.247-0.618
							c0.106-0.191,0.239-0.369,0.394-0.526c0.151-0.157,0.322-0.292,0.511-0.407c0.185-0.11,0.39-0.2,0.61-0.259
							c0.219-0.062,0.451-0.095,0.693-0.095c0.241,0,0.475,0.033,0.694,0.095c0.222,0.059,0.426,0.149,0.615,0.259
							c0.19,0.114,0.362,0.25,0.513,0.407c0.155,0.157,0.287,0.334,0.396,0.526c0.11,0.191,0.193,0.398,0.254,0.618
							c0.056,0.225,0.087,0.453,0.087,0.691S99.456,3.547,99.4,3.767z M97.824,3.196c0.101-0.048,0.191-0.115,0.27-0.197
							c0.079-0.083,0.141-0.179,0.186-0.298c0.045-0.114,0.066-0.252,0.066-0.407c0-0.332-0.093-0.584-0.275-0.753
							c-0.185-0.171-0.482-0.258-0.891-0.258h-1.382v3.579h0.481V3.3h0.683l0.999,1.562h0.576L97.495,3.3
							C97.61,3.281,97.719,3.247,97.824,3.196z M97.083,2.876c-0.08,0.003-0.167,0.006-0.254,0.006h-0.551V1.708h0.77
							c0.102,0,0.199,0.008,0.298,0.025c0.099,0.017,0.186,0.047,0.264,0.092c0.076,0.045,0.138,0.104,0.186,0.178
							c0.045,0.078,0.069,0.174,0.069,0.292c0,0.09-0.014,0.171-0.041,0.239c-0.025,0.067-0.065,0.121-0.112,0.163
							c-0.049,0.042-0.104,0.076-0.169,0.104c-0.068,0.026-0.138,0.045-0.213,0.056C97.253,2.868,97.171,2.874,97.083,2.876z"/>
						</svg>
					</div><!-- end .tmark -->
				</a>

			<div id="main-menu">
				
				<div class="scroller">
					<?php parich_nav_main(); ?>
					<div class="top-bar clearfix">
						<?php if ( function_exists( 'qtrans_generateLanguageSelectCode' ) ) qtrans_generateLanguageSelectCode( 'text' ); ?>
						<nav class="social-links">
						<a href="https://th-th.facebook.com/parichfertilizer" target="_blank" class="fb"><i class="fa fa-facebook"></i><span>Facebook</span></a>
						<a href="https://twitter.com/parich_official" target="_blank" class="tw"><i class="fa fa-twitter"></i><span>Twitter</span></a>
						<a href="http://websta.me/n/parich_official" target="_blank" class="ig"><i class="fa fa-instagram"></i><span>Instagram</span></a>
						</nav>
						
						<div class="prchannel">
							<a href="http://www.youtube.com/channel/UClTtJT-O63XiPPCyhmUnmgQ" target="_blank"><em>PARICH</em> <span>CHANNEL</span>
							</a>
						</div>
						
						<a id="add-line" href="https://lin.ee/fkS9ELd"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0"></a>
						
						<?php parich_nav_top(); ?>
					</div><!-- end .top-bar -->
				</div><!-- end .scroller -->
			</div><!-- end #main-menu -->
			<div id="toggle-menu">MENU
				<span class="arrow"></span>
			</div>
			
		</div>
		<nav id="side-nav" class="inactive">
			<a href="<?php echo get_permalink(286); ?>"><span class="sn-parich">PARICH®</span></a>
			<a href="<?php echo get_permalink(283); ?>"><span class="sn-nitro">PARICH Nitro</span></a>
			<a href="<?php echo get_permalink(300); ?>"><span class="sn-superblack">PARICH Super Black</span></a>
			<a href="<?php echo get_permalink(303); ?>"><span class="sn-bone" >PARICH Bone</span></a>
			<a href="<?php echo get_permalink(307); ?>"><span class="sn-pagro" >PARICH Pagro</span></a>
		</nav>
		
	</header>

	<div id="content">


