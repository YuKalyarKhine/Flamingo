		function noNumbers(e){
			var keynum;
			var keychar;
			var numcheck;
			if(window.event){
				keynum=e.keyCode;
				
			}
			else if(e.which){
				keynum=e.which;
			}
			keychar=String.fromCharCode(keynum);
			numcheck=/\d/;
			return !numcheck.test(keychar);
			
		}
		function noChar(e){
			var keynum;
			var keychar;
			var charcheck;
			if(window.even){
				keychar=e.keyCode;
			}
			else if(e.which){
				keychar=e.which;
			}
			keynum=String.fromCharCode(keychar);
			charcheck=/[a-z A-Z]/;
			return !charcheck.test(keynum);		
		}
	

