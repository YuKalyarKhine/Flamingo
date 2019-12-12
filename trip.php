<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Beach</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
   <script type="text/javascript" src="jquery/jquery.js"></script>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/cycle-plugin.js"></script>
   <script type="text/javascript">
   		$(document).ready(function() {
            $(".img").cycle(function(){
				fx: "slide-left";
			});
        });
   </script>
   <style>
	.back-to-top {
			position: fixed;
			bottom: 2em;
			right: 0px;
			text-decoration: none;
			color: #000;
			background-color: rgba(235, 235, 235, 0.80);
			font-size: 18px;
			font-family:David;
			letter-spacing: 2px;
			padding: 1em;
			display: none;
			border: 1px solid #fff;
		}

		.back-to-top:hover {	
			background-color: rgba(135, 135, 135, 0.50);
			text-decoration: none;
		}	
	</style>
</head>

<body>
	<?php
		include("header.php");
	?>
	<div style="margin: 0 auto; width:960px;">
		<?php
			 include("dbconnect.php");
			 $startname=array("YKK#BT 0","YKK#CT 0","YKK#CT 0","YKK#ET 0","YKK#TT 0");
			 $triptype=$_GET['triptypeid'];
			 $sql="select * from packagetb where triptypeid=$triptype";
			 $trip=mysql_query($sql,$con);
			 $titleid=1;
			 while($row=mysql_fetch_array($trip)):
		?>
        	<div class="img">
        	<?php
				$cover=explode("#",$row['cover']);
				foreach($cover as $c)
				{
			?>
            		<img alt="" src='pic/<?php echo $c; ?>' width="320px" height="180px">					
			<?php
            	}
			?>
        	</div>
            <h4>
	            <?php echo $startname[$triptype-1];echo $titleid++; ?> <?php echo $row['packagename']; ?> (<?php echo $row['days']; ?>)
	        </h4>
            <span class="pd">
	            <?php
					echo $row['description'];
				?>
	        </span>
            <form  class="ff" action="<?php if(isset($_SESSION['user'])){echo 'price.php';}else echo 'TravelTour.php'; ?>" method="post">
              <span class="p1">Price : <?php echo $row['price']; ?> Kyats(current) or $<?php echo $row['dollar']; ?></span>
              <span class="pd">Number of person: <input type="text" name="pno" /></span>
              <input  type="hidden" name="packageid" value="<?php echo $row['packageid']; ?>" />
              <input  type="hidden" name="price" value="<?php echo $row['price']; ?>" />
			  <input type="submit" value="SUBMIT" />
            </form>
             
<hr />
        <?php
			 endwhile; 
	   ?>
	
     </div>
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