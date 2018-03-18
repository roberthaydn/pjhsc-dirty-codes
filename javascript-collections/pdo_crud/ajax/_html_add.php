<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documentasd</title>
</head>
<body>
	<form>
		<a href="#" class="approve-button">Send</a>
	</form><br>
	
	<div id="auto_load_div" style="font-size:15px;font-family:sans-serif;">

	</div>

	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		function action_getData(){
	        $.ajax({
	          url: "_sql_data.php",
	          cache: false,
	          success: function(data){
	             $("#auto_load_div").html(data);
	          } 
	        });
	    }

		function action_addData() {
			// wrap inside the jquery ready() function
			//Attach an onclick handler to each of your buttons that are meant to "approve"
			$('a[class="approve-button"]').click(function(e){

			   //Get the ID of the button that was clicked on
			   //var id_del = $(this).attr("id");
			   
			   $.ajax({
			      url: "_sql_add.php", //This is the page where you will handle your SQL insert
			      type: "POST",
			      //data: "id=" + id_del, //The data your sending to some-page.php
			      success: function(){
			          console.log("AJAX request was successfull - action=INSERT");
			          //clearAllInterval();
			      },
			      error:function(){
			          console.log("AJAX request was a failure - action=INSERT");
			      }   
			    });
			});
		}
		
		/*
		function clearAllInterval() {
			for (var i = 1; i < 99999; i++)
       		window.clearInterval(i);
		}
		*/
	
		/*
		* Execute methods
		*/
        action_getData();
        action_addData();
        setInterval(action_getData, 3000);

      });

	</script>
</body>
</html>

