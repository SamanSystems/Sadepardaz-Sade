<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
		echo $html->meta('icon')."\n".
		$html->charset()."\n".
		$html->css('style.css')."\n".
		$javascript->link(array('jquery','functions','pngfix','tiny_mce/tiny_mce'))."\n".
		$scripts_for_layout;
?>
<script type="text/javascript">
	tinyMCE.init({
		mode : "exact",
		elements : "editor",
		theme : "advanced",
		skin : "o2k7",
		plugins : "safari,table,advimage,advlink,emotions,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,inlinepopups,falang",
		theme_advanced_buttons1 : "faen,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,code",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,media,|,ltr,rtl,|,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "center",
		directionality : "rtl",
		theme_advanced_statusbar_location : "bottom",
		force_br_newlines: true,
		forced_root_block: "",
		convert_urls : false,
		verify_html : false
	});
</script>
<title>مديريت سامانه پرداخت زرين پال <?php echo $title_for_layout; ?></title>
</head>
<body>

<div class="wrapper">
	
	<div class="advertise">
	<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://advertise.aftabteam.com/www/delivery/ajs.php':'http://advertise.aftabteam.com/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=14");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
	//]]>--></script><noscript><a href='http://advertise.aftabteam.com/www/delivery/ck.php?n=ae6972b8&amp;cb=9623' target='_blank'><img src='http://advertise.aftabteam.com/www/delivery/avw.php?zoneid=14&amp;cb=9623&amp;n=ae6972b8' border='0' alt='' /></a></noscript>
	</div>
	
	<div class="top_corners"></div>
	
	<div class="main">
		
		<div class="right">
			<?php
				echo $this->element('admin-menu', array('cache' => '+1 month'));
			?>
		</div>
		
		<div class="left">
			<div class="content">
				<?php 
				if ( $session->check('Message.flash') ) $session->flash();
				echo $content_for_layout; ?>
			</div>
		</div>
		
		<div class="clear"></div>
		
	</div>
	<div class="clear"></div>
	<div class="footer">
		<p>اين صفحه توسط <a href="https://www.zarinpal.com/pages/labs/index/">آزمايشگاه زرين پال</a> توسعه داده شده است.
	</p>
	</div>
	
	<div class="bottom_corners"></div>
	
</div>

</body>
</html>