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
                        <a  rel="tooltip"  data-placement="bottom" href="<?php echo base_url(); ?>admission/addstudent"><i class="icon-home icon-large"></i>&nbsp;Add Student</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="<?php echo base_url(); ?>admission/activatestudent"><i class="icon-signout icon-large"></i>&nbsp;Activate Student</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a  rel="tooltip"  data-placement="bottom" href="<?php echo base_url(); ?>admission/logout"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
                    </li>




                    <li class="divider-vertical"></li>
                    <li class="signup"><span class="sg"></span></li>
                </ul>


            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="margin-top">
        <div class="row">

            <?php //--------------------------------------------------------------------------------------?>

            <div class="span12">
                <div class="alert alert-danger">
                    <Strong>Heads Up!</strong>&nbsp;Welcome to Saint James Academy Online Logged in as
<!--<?php //echo $this->session->userdata['accounttype']?><!--:--><?php //echo $this->session->userdata['user_id']. ','.$this->session->userdata['username'] ?>-->
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


