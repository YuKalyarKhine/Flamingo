<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Beach</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
</head>

<body>
		<?php
			 include("dbconnect.php");
			 include("header.php"); 
			 if(isset($_GET['$triptypeid']))
			 {
				 $triptype=$_GET['$triptypeid'];
			 }
			 
			 
		?>
        <div style="margin: 0 auto; width:960px;height:1670px;">
        <div class="img"><img alt="" src='pic/ngwesaung.jpg' width="320px" height="180px">
        </div>
	                         	<h4>
	                         	YKK#BT 01 : Yangon-Ngwesaung-Yangon (5 Days/ 4 Nights)
	                         	</h4>
                                <span class="pd">
	                            Day 1: Arrive Yangon - Ngwesaung
	                            </span>
	                              <span class="pd">
	                            Day 2-3: Ngwesaung
	                            </span>
	                              <span class="pd">
	                            Day 4: Ngwesaung - Yangon
	                            </span>
	                              <span class="pd">
	                            Day 5: Yangon Departure
	                            </span>
                                  <p>Can be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).
	                            </p>
                                <?php include("price-design1.php"); ?>                                   
								<div class="img"><img alt="" src="pic/Ngapali.jpg" width="320px" height="180"></div>
        						<h4>
	                         	YKK#BT 02 : Yangon-Ngapali-Yangon (6 Days/ 5 Nights)
	                         	</h4>
	                            <span class="pd">
	                            Day 1: Arrive Yangon
	                            </span>
	                              <span class="pd">
	                            Day 2: Yangon - Thandwe  - Ngapali
	                            </span>
	                              <span class="pd">
	                            Day 3-4: Ngapali - Thandwe - Yangon
	                            </span>
	                              <span class="pd">
	                            Day 5: Ngapali - Thandwe - Yangon
	                            </span>
	                              <span class="pd">
	                            Day 6: Yangon Departure
	                            </span>
	                              <p>Can be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).
	                            </p>
     					 <?php include("price-design1.php"); ?> 
     					 <div class="img"><img alt="" src="pic/SCENE02.JPG" width="320px" height="200">
        						</div>
	                         	<h4>
	                         	YKK#BT 03 : Yangon-Kyaungthar-Yangon (5 Days/ 4 Nights)
	                         	</h4>
                                <span class="pd">
	                            Day 1: Arrive Yangon - Kyaungthar
	                            </span>
	                              <span class="pd">
	                            Day 2-3: Kyaungthar
	                            </span>
	                              <span class="pd">
	                            Day 4: Kyaungthar - Yangon
	                            </span>
	                              <span class="pd">
	                            Day 5: Yangon Departure
	                            </span>
                                  <p>Can be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).
	                            </p>
     <?php include("price-design1.php"); ?>  
     <?php include("footer1.php"); ?>
     </div>
     </body>
		

</html>