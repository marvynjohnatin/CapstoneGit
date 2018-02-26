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
                            <a href="sectionlist" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Management</a>
                        
                        </li>
 
                    </ul>
            </div>
            

            </div>
    
    </div>

            <?php //--------------------------------------------------------------------------------------?>

             

                <div class="span10">
            
                        <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">                      
                                <thead>
                                    <tr>
                                       <th colspan = 6>
                                           <h3><b><font color = "red">Section List</font></b></h3>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th colspan = 6>
                                        Subject: <font color = "green"><b> Math 1 </b></font>
                                        </th>
                                    </tr>

                                    <tr>

                                    <th colspan = 6>

                    Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>

                                    </th>

                                    </tr>

                                     <tr>
                                        
                                        <th>Section</th>                                               
                                        <th>Year Level</th>
                                        <th>Subject Time</th>
                                        <th>Subject Schedule</th>
                                        <th>Student Count</th>
                                        <th>Action</th>                                          
                                                                                        
                                    </tr>

                                    <tr>
                                 
                                        <th>St. Lorenzo</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>45</th>
                                        <th>

                                        <a href="studentlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Students </span></button></a>
                                             
                                        </th>                                       
                                                                                                                    
                                  
                                    </tr>

                                      <tr>
                                    
                                        <th>St. Blaise</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>45</th>
                                        <th>

                                        <a href="studentlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Students  </span></button></a>
                                             
                                        </th>                                       
                                                                                                                    
                                  
                                    </tr>

                                      <tr>
                                   
                                        <th>St. Martin</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>45</th>
                                        <th>

                                        <a href="studentlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Students  </span></button></a>
                                             
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

