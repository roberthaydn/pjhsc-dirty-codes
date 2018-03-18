<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		<a href="#" class="drop-id">Drop!</a>
	</form><br>

	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		function drop_id() {
			// wrap inside the jquery ready() function
			//Attach an onclick handler to each of your buttons that are meant to "approve"
			$('a[class="drop-id"]').click(function(e) {

			   //Get the ID of the button that was clicked on
			   //var id_del = $(this).attr("id");
			   
			   $.ajax({
			      url: "_alter.php", //This is the page where you will handle your SQL insert
			      type: "POST",
			      //data: "id=" + id_del, //The data your sending to some-page.php
			      success: function(){
			          console.log("AJAX request was successfull");
			          //clearAllInterval();
			      },
			      error:function(){
			          console.log("AJAX request was a failure");
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
        drop_id();
      });

	</script>
</body>
</html>

