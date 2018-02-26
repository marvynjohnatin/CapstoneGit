		    <div class="container">
		<div class="margin-top">
			<div class="row">
<div class="span12">
					<div class="alert alert-danger"><Strong>Welcome to Saint James Academy Online
                        </strong>
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
</div>
</div>
</div>
	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner" style="background-color:#FF0000">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
				
					
	
						  <li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom"   href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Student Records</a>
								</li>

						 <li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom"   href="enrollment.php"><i class="fa fa-newspaper-o" icon-large"></i>&nbsp;Sectioning</a>
								</li>

						<li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom"    href="enrollment.php"><i class="fa fa-newspaper-o" icon-large"></i>&nbsp;Scheduling</a>
								</li>

						  <li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom"   href="change.php"><i class="icon-pencil icon-large"></i>&nbsp;Change Password</a>
									</li>

						<li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom"    href="<?php echo base_url(); ?>registrar/logout"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
								</li>

                        <li class="divider-vertical"></li>
                        <li class="">
                            Logged in as <?php echo $this->session->userdata['accounttype']?>:<?php echo $this->session->userdata['studentnumber']. ','.$this->session->userdata['fname'] ?>
                        </li>

						<li class="divider-vertical">
						<li class="signup"><span class="sg"></span></li>

						 
</ul>
					     
                    </div>
                </div>
            </div>
        </div>
