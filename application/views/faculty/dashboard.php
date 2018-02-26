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

            <?php //--------------------------------------------------------------------------------------?>

    <div class="span2">
                   
            <div class="life-side-bar">


             <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">              
                                <thead>

            <?php

                echo "<tr>";

                echo "<th>Faculty ID:";
                echo "</th>";
                echo "</tr>";

                echo "<tr>";

                echo "<th>". $results['teacher_ID'] . "";

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>

                <p><img src="<?php echo base_url() ?>assets/images/students/marvynpic.jpg" alt="" width="170" class="img-polaroid"/></p>


           

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    
                        <li class="active">
                        <a href="dashboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
                        
                        </li>
                        
                        <li class="">
                            <a href="subjects" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Schedule</a>
                        
                        </li>
                        
                                            
                        <li class="">
                        <a href="maintenance" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Maintenance</a>
                        
                        </li>
                        
                    
                    
                        
                        
                        
                        
                            
                    </ul>
            </div>
            

            </div>
    
    </div>

            <?php //--------------------------------------------------------------------------------------?>

             

                <div class="span10">
            
                          <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
                                <thead>

                                    <tr>
                                        <th colspan = 2>
                                           <h3><b><font color = "red">General Information</font></b></h3>
                                        </th>
                                    </tr>

            <?php

            echo "<tr>";
            echo "<th>First Name: ". $results['fname'] . "</th>";
            echo "<th>Last Name: ". $results['lname'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Middle Name: ". $results['middlename'] . "</th>";
            echo "<th>Age: ". $results['age'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Date of Birth: ". $results['dateofbirth'] . "</th>";
            echo "<th>Gender: ". $results['gender'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Present Address: ". $results['address'] . "</th>";
            echo "<th>Place of Birth: ". $results['placeofbirth'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Phone Number: ". $results['phone'] . "</th>";
            echo "<th>Telephone Number: ". $results['telephone'] . "</th>";
            echo "</tr>";

          


            ?>

                                </thead>
                                <tbody>
                                 

                           
                                </tbody>
                            </table>
                                
                </div>


             <?php //--------------------------------------------------------------------------------------?>

            </div>


        </div>
</div>

