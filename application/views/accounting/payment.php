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

             <tr>
             <th>Student Number: 2014141811</th>
             </tr>


             <tr>
             <th>First Name: Iris Joshua </th>
             </tr>

             <tr>
             <th>Middle Name: Loren </th>
             </tr>


             <tr>
             <th>Last Name: Tanyag</th>
             </tr>

            

                                  
                  


             <p><img src="<?php echo base_url() ?>assets/images/students/irispic.jpg" alt="" width="170" class="img-polaroid"/></p>

                           </thead>
               </table>

           
            

            </div>
    
    </div>

            <?php //--------------------------------------------------------------------------------------?>

             
                            <div class="span10">
            
                          <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
                              <thead>
                                  <tr>
                                        <th colspan = 7>
                                           <h3><b><font color = "red">Payment Details</font></b></h3>
                                        </th>
                                  </tr>

                                  <tr>

                                    <th>Current Section: St. Lorenzo</th>
                                    <th>Current Grade: Grade 7</th>
                                    <th>Current Level: Highschool</th>


                                   </tr>

                                </thead>
                                <tbody>
                 

                           
                                </tbody>
                            </table>

                             <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
                              <thead>
                                    <tr>
                                        <th colspan>Detail Number: 1</th>
                                        <th colspan>Payment Name: Monthly</th>
                                    </tr>

                                     <tr>
                                        <th colspan>Due Date: 04/15/2018</th>
                                        <th colspan>Status: Not Paid Yet</th>
                                    </tr>

                                    <tr>
                                        <th colspan>Amount: <input type="text" name="amount" value = "1,000.00"  style = "height:32px;width:190px;">
                                        
                                        </th>

                                        <th colspan>Date of Payment: <input type = "date" name = "date" style = "height:35px;">
                                        </th>
                                    </tr>

                                    <tr>
                                      <th colspan = 2>
                                        <a href="sectionlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>Confirm Payment </span></button></a>
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

