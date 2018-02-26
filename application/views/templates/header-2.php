<?php
ob_start();
?>
    <html>
    <head>
        <title>Saint James Online Grade inquiry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/diapo.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/design.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/DT_bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/combobox.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer-distributed-with-contact-form.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>assets/js/DT_bootstrap.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/scripts/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/scripts/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/scripts/diapo.js'></script>
        <script>
            jQuery(document).ready(function() {
                $(function(){
                    $('.pix_diapo').diapo();
                });
            });
        </script>

        <noscript>
            <style>
                .da-thumbs li a div {
                    top: 0px;
                    left: -100%;
                    -webkit-transition: all 0.3s ease;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .da-thumbs li a:hover div{
                    left: 0px;
                }
            </style>
        </noscript>
    </head>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#home').tooltip('show')
            $('#home').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#home1').tooltip('show')
            $('#home1').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#login').tooltip('show')
            $('#login').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#signup').tooltip('show')
            $('#signup').tooltip('hide')
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#sort').tooltip('show')
            $('#sort').tooltip('hide')
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#select').tooltip('show')
            $('#select').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#select1').tooltip('show')
            $('#select1').tooltip('hide')
        });
    </script>

     <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

// Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

    <script>
    function openLeftMenu() {
        document.getElementById("leftMenu").style.display = "block";
    }
    function closeLeftMenu() {
        document.getElementById("leftMenu").style.display = "none";
    }

    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
    </script>

    <style>

input[type=text], select 
{
    padding: 16px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    width: 294px;
}

</style>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: red;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 28px;
}

.topright:hover {color: red;}
</style>


    



