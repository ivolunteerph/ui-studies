		<div class="container">
			<div class="<?php
			if($_GET['single'] == "true"){
				echo("hide"); 
			} 
			else 
			{
				echo("col-md-3 col-sm-3");
			}
		?>">
				<ul class="nav nav-pills nav-stacked user-nav">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Organizations</a></li>
					<li><a href="#">Profile</a></li>
					<li class="active"><a href="#">Account</a></li>
				</ul>
			</div>
			<div class="<?php
			if($_GET['single'] == "true"){
				echo("col-md-6 col-md-offset-3"); 
			} 
			else 
			{
				echo("col-md-8 col-sm-9");
			}
		?>">
				<h1 class="head">Account</h1>
				<div id="account" class="user account well">
			        <form>
			        	<div class="form-group email">
							<label for="email">Email</label>
							<input type="text" placeholder="email@address.com" id="email" class="form-control" <?php
								if($_GET['single'] == "true"){
									echo("disabled"); 
								} 
								else 
								{
									echo("");
								}
							?>>
						</div>
			        	<div class="form-group current-password">
							<label for="password">Current Password</label>
							<input type="password" placeholder="" id="password" class="form-control">
							<p class="help-block">Enter your current password to make changes</p>
						</div>
						<hr>
						<div class="form-group new-password">
							<label for="password">New Password</label>
							<input type="password" placeholder="" id="password" class="form-control">
						</div>
			        	<div class="form-group confirm-password">
							<label for="confirmPassword">Confirm Password</label>
							<input type="password" placeholder="" id="confirmPassword" class="form-control">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary">Update Account</button>
						</div>
			        </form>
				</div>
	        </div>
		</div>