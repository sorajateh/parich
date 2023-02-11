<?php

class Share_Util {

	static private $response = '';
	static private $missing_content = "Please supply all information.";
  	static private $email_invalid   = "Email Address Invalid.";
  	static private $message_unsent  = "Message was not sent. Try Again.";
  	static private $message_sent    = "Thanks! Your message has been sent.";

	function __construct() {
		add_action( 'wp_ajax_nopriv_ajax_sharing_email', array($this, 'ajax_sharing_email') );
		add_action( 'wp_ajax_ajax_sharing_email', array($this, 'ajax_sharing_email') );
	}

	static function get_social_share($post = null) {
	    $href = get_permalink($post);
	    $html = '<div class="post-share clearfix">';
	    $html .= '<h6>'.__('<!--:en-->Share This:<!--:--><!--:th-->แชร์หน้านี้:<!--:-->').'</h6>';
	    $html .= '<ul class="social-share clearfix">';
	    $html .= '<li class="fb"><div class="fb-share-button" data-href="'.$href.'" data-layout="button_count">Facebook</div></li>';
	    $html .= '<li class="tw"><a href="'.$href.'" class="twitter-share-button">Tweet</a></li>';
	    $html .= '<li class="gp"><div class="g-plusone" data-size="medium" data-href="'.$href.'" >Google+</div></li>';
	    $html .= '<li class="em"><a id="sendThis" class="btn" href="#"><span>Email</span></a>'.self::render_sharing_email_form($post).'</li>';
	    // $html .= '<li class="em">'.Post_Util::get_email_button().'</li>';
	    $html .= '</ul></div>';
	    return $html;
	}

	static function get_response_message($status, $message) {
		global $response;
		if ($status == "miss") {
			$response = '<div class="response-msg">'.$message.'</div>';
		} 
	}


	function ajax_sharing_email($formid) {		

		if (isset($_POST['sharing_submit'])) {

			$target_email = isset($_POST['target_email']) ? $_POST['target_email'] : null;
			$sender_name = isset($_POST['sender_name']) ? $_POST['sender_name'] : null;
			$sender_email = isset($_POST['sender_email']) ? $_POST['sender_email'] : null;

			if(empty($target_email) || empty($sender_name) || empty($sender_email)) {
				self::get_response_message("error", self::$missing_content); 
			} else {
				//validate presence of name and message
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				  	self::get_response_message("error", self::$email_invalid); //email is valid
				}
				else {
				  	$message = 'Hello Test 123';
				  	$to  = $target_email;
		          	$subject = 'Sharing Email';
					$headers = 'From: '.$sender_name.' <'.$sender_email.'>' . "\r\n";
					mail($to, $subject, $message, $headers);
				  // if($sent) ninedesi_reply_message("success", $message_sent); //message sent!
				  // else ninedesi_reply_message("error", $message_unsent); //message wasn't sent
				}
			}
		}
		die;
	}


	static function render_sharing_email_form($post_id) {
		$html = '<div id="sharing_email">
				<form id="se-form-'.$post_id.'" class="se-form">

					<label for="target_email">ส่งอีเมลล์ถึง</label>
					<input type="email" name="target_email" id="target_email" value="">

					<label for="sender_name">ชื่อผู้ส่ง</label>
					<input type="text" name="sender_name" id="sender_name" value="">

					<label for="sender_email">อีเมลล์ของผู้ส่ง</label>
					<input type="email" name="sender_email" id="sender_email" value="">

					<input type="submit" value="ส่งอีเมลล์" name="sharing_submit" class="btn-next sharing_send">
					<a rel="nofollow" href="#cancel" class="btn-email sharing_cancel">Cancel</a>

				</form>'.self::$response.'
				</div>';
		return $html;
	}

}
