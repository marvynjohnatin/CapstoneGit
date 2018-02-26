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

                echo "<th><font color = 'green'>  ". $results['studentnumber'] . "</font>" ;

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>


             <p><img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" alt="" width="170" class="img-polaroid"/></p>

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">

            <li class="active">
              <a href="enrollment" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Enrollment</a>
            
            </li>

            <li class="">
            <a href="schedule" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Subject Schedule</a>
            
            </li>

            
                      
            <li class="">
            <a href="account" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Account Ledger</a>
            
            </li>

            
            <li class="">
            <a href="payment" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Payment Details</a>
            
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
                                        <th colspan = "2">
                                           <h3><b><font color = "red">Enrollment Section</font></b></h3>
                                        </th>
                                    </tr>

                                <tr>
                                    <th colspan="2">
                                        What year are you going to enroll?
                                        <br>
                                        <br>
                                    </th>
                                </tr>

                               <?php

                echo "<tr>";

                echo "</th>";

                echo "<th>Current Level: <font color = 'green'>". $results['current_level'] . " </font> ";
                echo "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>Current Section: <font color = 'green'> ". $results['current_section'] . " </font> ";
                echo "</th>";

                 echo "<th>Date: <font color = 'green'></font> ";
                echo "</th>";
                echo "</tr>";

                              ?>

                                <tr>

                                     <th colspan="2">
                                    &emsp;<b>Payment Type:</b>
                            
                                    &emsp;<input type="radio" name="gender" value="male" checked> Installment

                                    &emsp;<input type="radio" name="gender" value="male"> Full Payment
                                    </th>

                                </tr>


                             

                                <tr>
                                    <th colspan = 2>
                                    <a href = "details">
                                          <button type="buttony" name = "submit" style="vertical-align:middle;background-color:black;" class="button2" ><span>Verify Account </span></button>
                                    </a>
                                    </th>
                                </tr>


                                </thead>
                                <tbody>
                                 

                           
                                </tbody>
                            </table>
                                
                </div>


             <?php //--------------------------------------------------------------------------------------?>
             
            </div>


        </div>
</div>

