  function name_suggestion()
        {
            var packagename = document.getElementById("packagename").value;
            var xhr;
            if (window.XMLHttpRequest) { // Mozilla, Safari, ...
                xhr = new XMLHttpRequest();
        }
         else if (window.ActiveXObject) { // IE 8 and older
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
      //  var data=packagename;
           var data = "packagename=" + packagename;
             xhr.open("POST", "packagenamedb.php", true); 
             xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
             xhr.send(data);
             xhr.onreadystatechange = display_data;
            function display_data() {
             if (xhr.readyState == 4) {
              if (xhr.status == 200) {
               //alert(xhr.responseText);       
              document.getElementById("suggestion").innerHTML = xhr.responseText;
              } 
              else {
                alert('There was a problem with the request.');
              }
             }
            }
        }