<button class="approve-button" style="cursor:pointer;">Send</button><br><br>

<link rel="stylesheet" href="style.css" type="text/css" />
<table align="center" width="50%"  border="1">
<tr>
<td><a href="http://cleartuts.blogspot.com/">Pagingggg</a></td>
</tr>
<tr>
<td>
        <table align="center" border="1" width="100%" height="100%" id="data" class="responsecontainer">
        <?php 
	        $query = "SELECT * FROM tbl_tutorials";       
	        $records_per_page=5;
	        $newquery = $paginate->paging($query,$records_per_page);
	        $paginate->dataview($newquery);
	        $paginate->paginglink($query,$records_per_page);  
        ?>
        </table>  
</td>
</tr>
</table>
<div id="footer">
<a href="#">RAN Sistema™</a>
</div>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function action_addData() {
			$('button[class="approve-button"]').click(function(e){
			   $.ajax({ 
			      url: "_sql_add.php",
			      type: "POST",
			      success: function(){
			          console.log("AJAX request was successfull - action=INSERT");
			      },
			      complete: function() {			     
				    setTimeout(action_getData, 1000);            
				    /*action_getCounter();
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
        action_addData();
  
      });
	</script>


