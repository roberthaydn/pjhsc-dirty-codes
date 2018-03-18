<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsAccountsController;
use app\controller\accounts\AccountsResetPasswordController;

if($auth) :

$accounts = AccountsAccountsController::Create();
$rPassword = AccountsResetPasswordController::Create();
$rows = $accounts->accounts();
	
	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'inactive|seatreservation.php|SEAT RESERVATION', 
			'inactive|accountreg.php|ACCOUNT REGISTRATION',
			'active|accounts.php|ACCOUNTS',
			'inactive|alogout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'inactive|#!| '
		)
	);
	
?>
	<style>
		.header-user-info {display:none;}
	</style>
	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="col-12 top-response z-depth-1"><?=$rPassword->resetPassword(); ?></div>
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
						    <thead>
						      <tr>
						        <th colspan="8" class="th p-4">List of Client Accounts</th>				        
						      </tr>
						    </thead>
						    <thead>
								<tr>
									<th>Username</th>
									<th>First name</th>
									<th>Last name</th>
									<th>Gender</th>
									<th>Email</th>
									<th>Mobile No</th>
									<th>Address</th>
									<th>&nbsp;</th>
								</tr>
						    </thead>
						    <tbody>
						      
						      	<?php
							      	foreach ($rows as $row) {
							      		$id = $row['Id'];
										$username = $row['username'];
										$firstname = $row['firstname'];
										$lastname = $row['lastname'];
										$gender = $row['gender'];
										$email = $row['email'];
										$mobile_no = $row['mobile_no'];
										$address = $row['address'];

										//echo $username.' '.$firstname.' '.$lastname;
								?>	
									<tr>
										<td><?= $username; ?></td>
										<td><?= $firstname; ?></td>
										<td><?= $lastname; ?></td>
										<td><?= $gender; ?></td>
										<td><?= $email; ?></td>
										<td><?= $mobile_no; ?></td>
										<td><?= $address; ?></td>
										<td>
											<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#<?=$id;?>" name="save" id="save">
										    <i class="fa fa-retweet" style="font-size:18px;"></i></a> Reset Password
										</button>
										</td>
									</tr>
									<!-- Modal -->
									<div class="modal fade" id="<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									    <div class="modal-dialog" role="document">
									        <div class="modal-content">
									            <div class="modal-header">
									                <h5 class="modal-title" id="exampleModalLabel"><strong>Account Registration</strong></h5>
									                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                    <span aria-hidden="true">&times;</span>
									                </button>
									            </div>
									            <div class="modal-body">
									                <div class="m-confirm-txt">Do you want to reset the password?</div>
									                	<div class="uname"><strong><?='Username: '.$username;?></strong></div>
									                	
									                <!--<div class="m-review-txt">
									                	<strong>Review:</strong>
														<div class="m-display-txt">Username:</div>
														<div class="m-display-txt">First name: <span id="display_firstname"></span></div>
														<div class="m-display-txt">Last name: <span id="display_lastname"></span></div>-->
														<!--<div class="m-display-txt">Gender: <span id="display_gender"></div>-->
														<!--<div class="m-display-txt">Email: <span id="display_email"></span></div>
														<div class="m-display-txt">Mobile No: <span id="display_mobile_no"></span></div>
														<div class="m-display-txt">address: <span id="display_address"></span></div>
									                </div>-->
									            </div>
									            <div class="modal-footer">
									            	<!--<button type="button" name="submit" class="btn btn-default btn-md" id="accountReg" data-dismiss="modal">Save Changes</button>-->
													<a href="accounts.php?id=<?=$id;?>"><input type="submit" class="btn btn-default btn-md" value="Save Changes" name="register"></a>
									                <button type="button" class="btn btn-blue-grey btn-md" data-dismiss="modal">Close</button>
									            </div>
									        </div>
									    </div>
									</div>
								<?php 
									}			
								?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php 

//Footer Init
Footer::Create();

?>

<script type="text/javascript">
	$(document).ready(function() {

	});
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






