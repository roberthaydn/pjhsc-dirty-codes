<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsAdminInfoController;

if($auth) :

$accountData = AccountsAdminInfoController::Create();

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'active|#!|SEAT RESERVATION', 
			'inactive|accountreg.php|ACCOUNT REGISTRATION',
			'inactive|accounts.php|ACCOUNTS',
			'inactive|alogout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'inactive|#!| ',
		)
	);


?>
	
	<h1>Welcome Page! (ADMIN)</h1>
	<p>Home | <a href="logout.php">Logout</a></p>

	You're Login~!
	<br>
	
	<?= 'Username: '.$accountData->getData('username'); ?>
	<br>

	<?= 'Fullname: '.$accountData->getData('firstname').' '.$accountData->getData('lastname'); ?>
	<br>

	<?= 'Gender: '.$accountData->getData('gender'); ?>
	<br>

	<?= 'Email: '.$accountData->getData('email'); ?>
	<br>

	<?= 'Mobile No.: '.$accountData->getData('mobile_no'); ?>
	<br>

	<?= 'Address: '.$accountData->getData('address'); ?>
	<br>


<?php 

//Footer Init
Footer::Create();

else: 
	require_once 'alogin.php';
endif; 

?>






