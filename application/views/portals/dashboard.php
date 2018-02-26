

            <?php //--------------------------------------------------------------------------------------?>

    <div class="span2">
                   
            <div class="life-side-bar">


             <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">              
                                <thead>

            <?php

                echo "<tr>";

                echo "<th>Student Number:";
                echo "</th>";
                echo "</tr>";

                echo "<tr>";

                echo "<th>". $results['studentnumber'] . "";

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>


             <p><img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" alt="" width="160" class="img-polaroid"/></p>

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    
                        <li class="active">
                        <a href="dashboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
                        
                        </li>
                        
                        <li class="">
                            <a href="grade" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Grades</a>
                        
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
                                           <h3><b><font color = "red">Student Information</font></b></h3>
                                        </th>
                                    </tr>

            <?php

            echo "<tr>";
            echo "<th>First Name: ". $results['fname'] . "</th>";
            echo "<th>Last Name: ". $results['lname'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Middle Name: ". $results['mname'] . "</th>";
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
            echo "<th>Phone Number: ". $results['contactno'] . "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th colspan = 2>";
            echo "<h3><b><font color = 'red'>Academy Status</font></b></h3>";
            echo "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Current Section: ". $results['current_section'] . "</th>";
            echo "<th>Enrolled: ". $results['status_enrolled'] . "</th>";;
            echo "</tr>";

            echo "<tr>";

            echo "<th>Current Level: ". $results['current_level'] . "</th>";
            echo "<th>Current Grade: ". $results['current_grade'] . "</th>";
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

