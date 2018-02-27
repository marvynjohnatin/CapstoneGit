<body>
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
                
                    
                
                    
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="studentlist"><i class="icon-home icon-large"></i>&nbsp;General Management</a>
                    </li>

                  
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="history"><i class="fa fa-newspaper-o" icon-large"></i>&nbsp;Payment History</a>
                    </li>

                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="reports"><i class="fa fa-newspaper-o" icon-large"></i>&nbsp;Reports</a>
                    </li>
                    
                   
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="<?php echo base_url(); ?>faculty/logout"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
                    </li>

                        <li class="signup"><span class="sg"></span></li>
                    </ul>

                      <div class="pull-right">
                        <div class="admin">Logged in as:</div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
</body>


<div class="container">

    <div class="margin-top">
        <div class="row">

          <div class="span12">
                    <div class="alert alert-danger">
                        <img src="<?php echo base_url(); ?>assets/images/sja.png" alt="" width="60" class="img-polaroid"/>
                        <strong>Heads Up!</strong>&nbsp;Welcome to Saint James Academy Online
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <i class="icon-calendar icon-large"></i>
                                <?php
                                $Today = date('y:m:d');
                                $new = date('l, F d, Y', strtotime($Today));
                                echo $new;
                                ?>
                    </div>
            </div>


    