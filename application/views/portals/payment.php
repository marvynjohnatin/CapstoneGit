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


             <p><img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" alt="" width="160" class="img-polaroid"/></p>

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">

            <li class="">
              <a href="enrollment" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Enrollment</a>
            
            </li>

            <li class="">
            <a href="schedule" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Subject Schedule</a>
            
            </li>

            
                      
            <li class="">
            <a href="account" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Account Ledger</a>
            
            </li>

            
            <li class="active">
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
                                        <th colspan = 5>
                                           <h3><b><font color = "red">Online Payment</font></b></h3>
                                        </th>
                                    </tr>


                                       <tr>
                                        <th>Detail Number</th>
                                        <th>Payment Name</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Action</th>                                  
                                     
                                  
                                    </tr>

                                     
                                     <tr>
                                        <th>3<br><br>
                                        </th>
                                        <th>Monthly<br><br>
                                        </th>
                                        <th>1,000.00<br><br>
                                        </th>
                                        <th>06/16/2018<br><br>
                                        </th>
                                        <th>  <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Pay Online </span></button></th>                                  
                                     
                                  
                                    </tr>

                                     <tr>
                                        <th>4<br><br>
                                        </th>
                                        <th>Monthly<br><br>
                                        </th>
                                        <th>1,000.00<br><br>
                                        </th>
                                        <th>07/16/2018<br><br>
                                        </th>
                                        <th>  <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Pay Online </span></button></th>                                  
                                     
                                  
                                    </tr>

                                    <tr>
                                        <th>5<br><br>
                                        </th>
                                        <th>Monthly<br><br>
                                        </th>
                                        <th>1,000.00<br><br>
                                        </th>
                                        <th>08/16/2018<br><br>
                                        </th>
                                        <th>  <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Pay Online </span></button></th>                                  
                                     
                                  
                                    </tr>

                                    <tr>
                                        <th>6<br><br>
                                        </th>
                                        <th>Monthly<br><br>
                                        </th>
                                        <th>1,000.00<br><br>
                                        </th>
                                        <th>09/16/2018<br><br>
                                        </th>
                                        <th>  <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Pay Online </span></button></th>                                  
                                     
                                  
                                    </tr>   


                                    <tr>
                                        <th>10<br><br>
                                        </th>
                                        <th>Before Finals<br><br>
                                        </th>
                                        <th>1,000.00<br><br>
                                        </th>
                                        <th>10/16/2018<br><br>
                                        </th>
                                        <th>  <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Pay Online </span></button></th>                                  
                                     
                                  
                                    </tr>                                
                                     
                                  
                                    </tr>

                                    <tr>
                                        <th colspan = "5">Total Amount Due: <input type = "text" value = "5,000.00"></th>
                                    </tr>

                                    <tr>
                                        <th colspan = "5" style = "background-color:lightblue;color:black;">
                    <br>
                    <b>Note: All payments done here are to used for PayPal!</b>
                    <br>
                    <br>

                                        </th>
                                    </tr>



                                    

                                 
                              </thead>
                            </table>

                </div>



             <?php //--------------------------------------------------------------------------------------?>
             
            </div>


        </div>
</div>

