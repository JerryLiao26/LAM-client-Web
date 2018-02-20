<div class="container">
	<div class="welcome_container">
		<h1 class="welcome_title">Welcome to LAM</h1>
		<div class="card welcome_card">
		  <div class="card-body">
		    <h5 class="card-title">View messages</h5>
		    <p class="card-text">
					View all the messages from current setup database(s)
				</p>
		    <a href="<?php echo site_url('message/index') ?>" class="btn btn-primary">Start</a>
		  </div>
		</div>
		<div class="card welcome_card">
		  <div class="card-body">
		    <h5 class="card-title">Set another LAM database</h5>
		    <p class="card-text">
					Setup another connection to a LAM Server database
				</p>
		    <a href="<?php echo site_url('login/index') ?>" class="btn btn-primary">Go setup</a>
		  </div>
		</div>
	</div>
</div>
