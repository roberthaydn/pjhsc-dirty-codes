<?php 

require_once 'auth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsInfoController;

if($auth) :

$accountData = AccountsInfoController::Create();

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'inactive|reservation.php|SEAT RESERVATION', 
			'active|account.php|MY ACCOUNT',
			'inactive|logout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'active|account.php|Personal Information',
			'inactive|transaction.php|My Transaction',
			'inactive|info.php|Update Info',
			'inactive|changepassword.php|Change Password'
		)
	);
?>
	
	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12 top-response z-depth-1"><?= '&nbsp;';?></div>
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
						    <thead>
						      <tr>
						        <th colspan="2" class="th p-4">Personal Information</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td class="data-txt txt-a">Username:</td>
						        <td class="display-data-txt txt-a"><?= $accountData->getData('username'); ?></td>
						      </tr>
						      <tr>  
						        <td class="data-txt txt-b">First name:</td>
						        <td class="display-data-txt txt-b"><?= $accountData->getData('firstname'); ?></td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-a">Last name:</td>
						        <td class="display-data-txt txt-a"><?= $accountData->getData('lastname'); ?></td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-b">Gender:</td>
						        <td class="display-data-txt txt-b"><?= $accountData->getData('gender'); ?></td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-a">Email:</td>
						        <td class="display-data-txt txt-a"><?= $accountData->getData('email'); ?></td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-b">Mobile no.:</td>
						        <td class="display-data-txt txt-b"><?= $accountData->getData('mobile_no'); ?></td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-a">Address:</td>
						        <td class="display-data-txt txt-a"><?= $accountData->getData('address'); ?></td>
						      </tr>
						    </tbody>
						</table>
					</div>
				</div>
				<div class="col-0 col-sm-2"></div>
			</div>
		</div>
	</section>
<?php 

//Footer Init
Footer::Create();

else: 
	require_once 'login.php';
endif; 

?>






