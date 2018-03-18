<?php 

use app\controller\accounts\AccountsLoginController;

$login = AccountsLoginController::Create();

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'inactive|index.php|HOME'
		),

		//USER INFO
		array(
			'inactive|#!| ',
		)
	);
?>
	<style>
		.header-user-info {display:none;}
	</style>

    <section class="login">
        <div class="container">
            <div class="row">
            	<div class="col-0 col-sm-2 col-md-3"></div>
				<div class="col-12 col-sm-8 col-md-6">
					<!--
					<h1>CLIENT LOG IN</h1><br>
					<a href="admin.php">Admin Login</a><br><br>

					<form action="" method="POST">
						<label>Username: </label>
						<input type="text" name="username"/><br><br>
						<label>Password: </label>
						<input type="password" name="password"><br><br>
						<input type="submit" value=" Submit ">
					</form><br>-->	
					
					<!-- Form login -->
					<div class="login-form z-depth-2">
						<form action="" method="POST">
						    <p class="h5 text-center mb-4"><i class="fa fa-lock fa-5 prefix"></i> &nbsp; MEMBER - Sign In</p>

						    <div class="md-form">
						        <i class="fa fa-check prefix grey-text fa-4"></i>
						        <input type="text" name="username" class="form-control validate">
						        <label for="defaultForm-user">Username</label>
						    </div>

						    <div class="md-form">
						        <i class="fa fa-lock prefix grey-text fa-4"></i>
						        <input type="password" name="password" class="form-control validate">
						        <label for="defaultForm-pass">Password</label>
						    </div>

						    <div class="text-center">
						        <button class="btn btn-warning">Login</button>
						    </div>
							
							<div class="text-center">
								<div class="display-text">
						    		<?= $login->login('username', 'password'); ?>
						    	</div>
							</div>
						</form>
					</div>
					<!-- Form login -->
                </div>
                <div class="col-0 col-sm-2 col-md-3"></div>
            </div>
        </div>
    </section>

<?php
	//Footer Init
	Footer::Create();
?>