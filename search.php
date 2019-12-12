<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
<script type="text/javascript" src="ajax.js"></script>
</head>
<script>
function showDays(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
   else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      //  alert(xmlhttp.responseText);
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","show.php?q="+str,true);
  xmlhttp.send();
}


function showmore(x)
{
	if(x=="day")
	{
		document.getElementById("sd1").style.display="block";
		document.getElementById("sn1").style.display="none";
	}
	else if(x=="name")
	{
		document.getElementById("sn1").style.display="block";
		document.getElementById("sd1").style.display="none";
	}
	
}
</script>

</head>
<body>

		<?php include("header.php"); ?>
        <div style="margin: 0 auto; width:960px;height:1400px;">
        <div class="sd">
        <input type="radio" name="search" value="day" onclick="showmore(this.value)" id="day"/>
        <label for="day">Search By Day</label>
        
        
      	 <form class="sd1" id="sd1">
			Select Days<select name="days" id="days" onchange="showDays(this.value)">
         <option value="">Select Days</option>
   		 <option value="4 Days / 3 Nights">4 Days / 3 Nights</option> 
  		 <option value="5 Days / 4 Nights">5 Days / 4 Nights</option>
         <option value="6 Days / 5 Nights">6 Days / 5 Nights</option>
         <option value="7 Days / 6 Nights">7 Days / 6 Nights</option>
         <option value="8 Days / 7 Nights">8 Days / 7 Nights</option>
         <option value="9 Days / 8 Nights">9 Days / 8 Nights</option>
         <option value="13 Days / 12 Nights">13 Days / 12 Nights</option>
   		 </select>
		</form>
        </div>
        
        
         <div class="sn">
        <input type="radio" name="search" id="name" value="name" onclick="showmore(this.value)" />
        <label for="name">Search By Package Name</label>
        </div>
        
        <div class="sd2" id="txtHint"></div>
        
        
        
         <form id="sn1" class="sn1" class="well-home span6 form-horizontal" name="ajax-demo" id="ajax-demo">
    		<div>
             <label for="packagename">Enter Package Name</label>
             <input type="text" id="packagename" onKeyUp="name_suggestion()">
             <!--<div>
             <button type="submit" >Search</button>
             </div>-->
             <div id="suggestion"></div>
             </div>
     	</form> 
        
         
     </div>
 </body>
</html>