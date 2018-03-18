<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

// Execute the query
 $stmt = $dbh->query('SELECT * FROM `employees` ORDER BY `id` ASC');

// Retrieve all of the rows
 $rows = $stmt->fetchAll();

 $count = 0;

// Output the rows
foreach ($rows as $row) {

	 $id = $row['id'];
	 $username = $row['username'];
	 $firstname = $row['firstname'];
	 $lastname = $row['lastname'];
	 $gender = $row['gender'];
	 
	 $count++;

	echo '<span style="color:red;cursor:pointer;">
		     <a href="#" class="approve-button-del" data-id="'.$id.'">
		     	[x]
		     </a>
		 </span>'.$count.' '.$username.' '.$firstname.' '.$gender.'</div><hr>';
}

?>

<script type="text/javascript">
	$(document).ready(function(){
		function action_deleteData() {
			// wrap inside the jquery ready() function
			//Attach an onclick handler to each of your buttons that are meant to "approve"
			$('a[class="approve-button-del"]').click(function(){

			   //Get the ID of the button that was clicked on
			   var id_of_item_to_approve = $(this).attr("data-id");

			   $.ajax({
			      url: "_sql_delete.php", //This is the page where you will handle your SQL insert
			      type: "POST",
			      data: "id=" + id_of_item_to_approve, //The data your sending to some-page.php
			      success: function(){
			          console.log("AJAX request was successfull - action=DELETE");			          
			      },
			      error:function(){
			          console.log("AJAX request was a failure - action=DELETE");
			      }   
			    });
			});				
		}

		/*
		* Execute methods
		*/
		action_deleteData();
	});
</script>
