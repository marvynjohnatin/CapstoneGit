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


             <p><img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" alt="" width="160" class="img-polaroid"/></p>

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
                                        <th colspan = 4>
                                           <h3><b><font color = "red">Enrollment Details</font></b></h3>
                                        </th>
                                    </tr>

                                   <tr>
                                        <th colspan = 4>
                                        School Year: <font color = "green">2016-2017</font>
                                        </th>


                                    </tr>

                                <tr>          
                                    <th>Subject</th>
                                    <th>Level</th>
                                    <th>Grade</th>
                                </tr>

                                <tr>          
                                    <th>Math 1</th>
                                    <th>Highschool</th>
                                    <th>Grade 8</th>
                                </tr>

                                <tr>          
                                    <th>English 1</th>
                                    <th>Highschool</th>
                                    <th>Grade 8</th>
                                </tr>


                                <tr>
                                    <th colspan = 2>
                                    Total Bill: <font color = red>P12,000.00</font>
                                    </th>

                                        <th colspan = 2>
                                        Payment Type: <font color = red>Installment</font>
                                        </th>

                                </tr>


                            

                              
                                <tr>
                                    <th colspan = 4>
                                <font color = "green">You are able to enroll in this grade!</font>
                                    </th>
                                </tr>

                                <tr>
                                    <th colspan = 4>
                                             <button type="button" name = "submit" style="vertical-align:middle" class="button2" ><span>Apply For Enrollment! </span></button>
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

