<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsRegistrationController;

if($auth) :

$registration = AccountsRegistrationController::Create();
	
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
			'active|accountreg.php|ACCOUNT REGISTRATION',
			'inactive|accounts.php|ACCOUNTS',
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
					<div class="top-response z-depth-1"><?=$registration->register();?></div>
					<div class="table-responsive">
						<form action="accountreg.php" method="POST">
							<table class="table table-bordered z-depth-1">
							    <thead>
							      <tr>
							        <th colspan="2" class="th p-4">Account Registration</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
									<td class="data-txt txt-a"></td>
									<td class="display-data-txt txt-a">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal" name="save" id="save">
										    Save
										</button>
									</td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-b"><label for="defaultForm-user">Username</label></td>
							        <td class="display-data-txt txt-b">
							        	<input type="text" name="username" id="username" autocomplete="off" class="form-control validate" placeholder="..." value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
							        	<div id="display_data_username" style="color:red;font-size:0.8em;">this field is required*</div>
							        </td>
							      </tr>
							      <tr>  
							        <td class="data-txt txt-a">First name:</td>
							        <td class="display-data-txt txt-a"><input type="text" name="firstname" id="firstname" class="form-control validate" placeholder="..." value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
							        </td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-b">Last name:</td>
							        <td class="display-data-txt txt-b"><input type="text" name="lastname" id="lastname" class="form-control validate" placeholder="..." value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
							        </td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-a">Gender:<label></td>
							        <td class="display-data-txt txt-a">
							        	<input type="radio" name="gender" value="male"> <label>Male</label> &nbsp;
							        	<input type="radio" name="gender" value="female"> <label>Female</label>
							        </td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-b">Email:</td>
							        <td class="display-data-txt txt-b"><input type="email" name="email" id="email" class="form-control validate" placeholder="..." value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
							        </td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-a">Mobile no.:</td>
							        <td class="display-data-txt txt-a"><input type="number" name="mobile_no" id="mobile_no" class="form-control validate" placeholder="..." value="<?php if(isset($_POST['mobile_no'])) echo $_POST['mobile_no']; ?>">
							        </td>
							      </tr>
							      <tr>
							        <td class="data-txt txt-b">Address:</td>
							        <td class="display-data-txt txt-b"><input type="text" name="address" id="address" class="form-control validate" placeholder="...">
							        </td>
							      </tr>
							      <tr>
									<td class="data-txt txt-a"></td>
									<td class="display-data-txt txt-a">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal" name="save" id="save">
										    Save
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
							                <h5 class="modal-title" id="exampleModalLabel"><strong>Account Registration</strong></h5>
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
							            </div>
							            <div class="modal-body">
							                <div class="m-confirm-txt">Do you want to add this account?</div>
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
											<input type="submit" class="btn btn-default btn-md" value="Save Changes" name="register">
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

?>

<script type="text/javascript">
	$(document).ready(function() {
	    /*$('#accountReg').click(function() {
            // show when page load
            //toastr.info('Page Loaded!');
            //toastr.success('Page Loaded!');
            //
        });  

	   	if($('#username').val().length <= 3) {
	   		$('#save').attr("disabled", "disabled");
	   	}

		$('#username').keyup(function() {
		    if($(this).val().length <= 3) 
		    {
	   	 		$('#save').attr("disabled", "disabled");
	    	}
	    	else if($(this).val().length >= 4) 
	    	{
				$("#save").removeAttr("disabled");
	    	}
		});*/

		//display data (modal)
		/*function displayData(data, display_data) {
			$(data).keyup(function() {
				$(display_data).text($(this).val());
			});
		}*/

		/*displayData('#firstname', '#display_firstname');
		displayData('#lastname', '#display_lastname');
		displayData('#email', '#display_email');
		displayData('#mobile_no', '#display_mobile_no');
		displayData('#address', '#display_address');*/

		/*
		function displayRadio() {
			$('#gender').click(function() {
			   if($(this).is(':checked')) { alert("it's checked"); }
			});
		}

		displayRadio();
		*/
	});
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






