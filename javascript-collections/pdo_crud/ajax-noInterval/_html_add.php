<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<button class="approve-button" style="cursor:pointer;">Send</button><br><br>

	
	<div id="responsecontainer" style="font-size:15px;font-family:sans-serif;">

	</div>

	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		var count = 0; 

		function action_getCounter() {
		   count++;
		}

		function action_getData() {	                 
		    $.ajax({
		        type: "GET",
		        url: "_sql_data.php",             
		        dataType: "html", 
		        success: function(data){                    
		            $("#responsecontainer").html(data); 
		        }
		    });
		}

		function action_addData() {
			$('button[class="approve-button"]').click(function(e){
			   $.ajax({ 
			      url: "_sql_add.php",
			      type: "POST",
			      success: function(){
			          console.log("AJAX request was successfull - action=INSERT");
			      },
			      complete: function() {			     
				    /*setTimeout(action_getData, 1000);            
				    action_getCounter();
				    if (count >= 1) {
				       clearTimeout();
				    }*/
				  },
			      error:function(){
			          console.log("AJAX request was a failure - action=INSERT");
			      } 
			    });
			});
		}

		/*
		* Execute method(s)
		*/
        action_getData();
        action_addData();

      });
	</script>
</body>
</html>

