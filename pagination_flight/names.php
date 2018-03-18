<?php

require_once 'dbconfig.php';

?>

<link rel="stylesheet" href="style.css" type="text/css" />

<table align="center" border="1" width="100%" id="data">
<?php 
    $query = "SELECT * FROM users";       
    $records_per_page = 3;
    $newquery = $paginate->paging($query, $records_per_page);
    $paginate->dataview($newquery);
     
?>
</table>

<br><br>

<?php 
	$paginate->paginglink($query, $records_per_page); 
?>





