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

            <li class="">
              <a href="enrollment" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Enrollment</a>
            
            </li>

            <li class="">
            <a href="schedule" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Subject Schedule</a>
            
            </li>

            
                      
            <li class="active">
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
                                        <th colspan = 7>
                                           <h3><b><font color = "red">Payment Schedule</font></b></h3>
                                        </th>
                                  </tr>

                                  <tr>


                                      <?php

                                    echo "<th>Current Section: ". $results['current_section'] . "</th>";
                                    echo "<th>Current Level: ". $results['current_level'] . "</th>";



                                      ?>


                                   </tr>

                                </thead>
                                <tbody>
                 

                           
                                </tbody>
                            </table>

                             <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
                              <thead>
                             
                                       <tr>
                                        <th>Detail Number</th>
                                        <th>Payment Name</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Payment Date</th>
                                        <th>Time of Payment</th>                                  
                                     
                                  
                                    </tr>

                                      <tr>
                                        <th>1</th>
                                        <th>Upon Enrollment</th>
                                        <th>1,000.00</th>
                                        <th>04/16/2018</th>
                                        <th><font color = "green">Paid</font></th>
                                        <th>04/14/2018</th>
                                        <th>2:00 P.M.</th>                                      
                                     
                                  
                                    </tr>

                                      <tr>
                                        <th>2</th>
                                        <th>Monthly</th>
                                        <th>1,000.00</th>
                                        <th>05/16/2018</th>
                                        <th><font color = "green">Paid</font></th>
                                        <th>05/10/2018</th>
                                        <th>7:30 A.M.</th>                                       
                                     
                                  
                                    </tr>

                                     <tr>
                                        <th>3</th>
                                        <th>Monthly</th>
                                        <th>1,000.00</th>
                                        <th>06/16/2018</th>
                                        <th><font color = "red">Not Paid Yet</font></th>
                                        <th></th>                                  
                                     
                                  
                                    </tr>

                                        <tr>
                                        <th>4</th>
                                        <th>Monthly</th>
                                        <th>1,000.00</th>
                                        <th>07/16/2018</th>
                                        <th><font color = "red">Not Paid Yet</font></th>
                                        <th></th>                                      
                                     
                                  
                                    </tr>

                                        <tr>
                                        <th>5</th>
                                        <th>Monthly</th>
                                        <th>1,000.00</th>
                                        <th>08/16/2018</th>
                                        <th><font color = "red">Not Paid Yet</font></th>
                                        <th></th>                                         
                                     
                                  
                                    </tr>

                                     <tr>
                                        <th>6</th>
                                        <th>Monthly</th>
                                        <th>1,000.00</th>
                                        <th>09/16/2018</th>
                                        <th><font color = "red">Not Paid Yet</font></th>
                                        <th></th>                                       
                                     
                                  
                                    </tr>


                                     <tr>
                                        <th>7</th>
                                        <th>Before Finals</th>
                                        <th>1,000.00</th>
                                        <th>10/16/2018</th>
                                        <th><font color = "red">Not Paid Yet</font></th>
                                        <th></th>                                          
                                     
                                  
                                    </tr>

                                    <tr>
                                        <th colspan = "7">Total Amount Due: <input type = "text" value = "7,000.00"></th>

                                      

                                                                            
                                     
                                  
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

