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
                
                    
                
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="dashboard"><i class="icon-home icon-large"></i>&nbsp;Teacher Profile</a>
                    </li>

                    <li class="divider-vertical"></li>
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="posting"><i class="fa fa-newspaper-o" icon-large"></i>&nbsp;Grade Posting</a>
                    </li>
                    
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="<?php echo base_url(); ?>faculty/logout"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
                    </li>
                        


                        <li class="divider-vertical"></li>
                        <li class="signup"><span class="sg"></span></li>
                    </ul>
                    

                    </div>
                </div>
            </div>
        </div>
</body>

<div class="container">

    <div class="margin-top">
        <div class="row">

            <?php //--------------------------------------------------------------------------------------?>

            <div class="span12">
                <div class="alert alert-danger">
                    <Strong>Heads Up!</strong>&nbsp;Welcome to Saint James Academy Online
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