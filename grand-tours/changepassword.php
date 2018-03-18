<?php 

require_once 'auth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsChangePasswordController;

if($auth) :

$changePassword = AccountsChangePasswordController::Create();
	
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
			'inactive|account.php|Personal Information',
			'inactive|transaction.php|My Transaction',
			'inactive|info.php|Update Info',
			'active|changepassword.php|Change Password'
		)
	);
?>
	
	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="top-response z-depth-1"><?= $changePassword->changePassword(); ?></div>
					<div class="table-responsive">
						<form action="changepassword.php" method="POST">
							<table class="table table-bordered z-depth-1">
							    <thead>
							      <tr>
							        <th colspan="2" class="th p-4">Change Password</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td class="data-txt txt-a">Current Password:</td>
							        <td class="display-data-txt txt-a"><input type="password" name="currentPassword" id="pword" autocomplete="off" class="form-control validate" placeholder="..."></td>
							      </tr>

							      <tr>
							        <td class="data-txt txt">New Password:</td>
							        <td class="display-data-txt txt"><input type="password" name="newPassword1" id="pword1" autocomplete="off" class="form-control validate" placeholder="..."></td>
							      </tr>

							      <tr>
							        <td class="data-txt txt">Retry New Password:</td>
							        <td class="display-data-txt txt"><input type="password" name="newPassword2" id="pword2" autocomplete="off" class="form-control validate" placeholder="..."></td>
							      </tr>	

							      <tr>
									<td class="data-txt txt-a"></td>
									<td class="display-data-txt txt-a">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal" id="save">
										    Change Password
										</button>
									</td>
							      </tr>
							    </tbody>
							</table>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header">
							                <h5 class="modal-title" id="exampleModalLabel"><strong>Change Password</strong></h5>
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
							            </div>
							            <div class="modal-body">
							                <div class="m-confirm-txt"><strong>Do you want to change your password?</strong></div>
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
											<input type="submit" class="btn btn-default btn-md" value="Save Changes" name="changePassword">
							                <button type="button" class="btn btn-blue-grey btn-md" data-dismiss="modal">Close</button>
							            </div>
							        </div>
							    </div>
							</div>
						</form>
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






