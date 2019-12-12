<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top</title>
    <link rel="stylesheet" type="text/css"  />
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <style>
	.back-to-top {
			position: fixed;
			bottom: 2em;
			right: 0px;
			text-decoration: none;
			color: #000000;
			background-color: rgba(235, 235, 235, 0.80);
			font-size: 16px;
			letter-spacing: 2px;
			padding: 1em;
			display: none;
		}

		.back-to-top:hover {	
			background-color: rgba(135, 135, 135, 0.50);
		}	
	</style>
	
</head>

<body>
	<a href="#" class="back-to-top">Top</a>
<script type="text/javascript">
	$(document).ready(function(){
		$('#edit').click(function(){
			$('.edit').toggle('hide');
		});
		$('#hideBack').click(function(){
			$('.edit').toggle('hide');
		});
		var offset = 220;
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {
					$('.back-to-top').fadeIn(duration);
			} else {
					$('.back-to-top').fadeOut(duration);
				}
		});
				
		$('.back-to-top').click(function(event) {
				event.preventDefault();
				$('html, body').animate({scrollTop: 0}, duration);
				return false;
		})		

	});
</script>                
</body>
</html>