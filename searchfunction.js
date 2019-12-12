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