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
                            <a href="subjectlist" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Management</a>
                        
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
                                       <th colspan = 3>
                                           <h3><b><font color = "red">Subject List</font></b></h3>
                                        </th>
                                    </tr>

                                    <tr>

                                    <th colspan = 6>

                    Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>

                                    </th>

                                    </tr>

                                     <tr>
                                        <th>Code</th>
                                        <th>Subject</th>                                               
                                        <th>Year Level</th>
                                        <th>Subject Time</th>
                                        <th>Subject Schedule</th>
                                        <th>Action</th>                                          
                                                                                        
                                    </tr>

                                  <tr>
                                        <th>01</th>
                                        <th>Math 1</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>

                                        <a href="sectionlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Section </span></button></a>
                                             
                                        </th>                                       
                                                                                                                    
                                  
                                    </tr>

                                      <tr>
                                        <th>01</th>
                                        <th>MAPEH 1</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>

                                        <a href="sectionlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Section </span></button></a>
                                             
                                        </th>                                       
                                                                                                                    
                                  
                                    </tr>

                                      <tr>
                                        <th>01</th>
                                        <th>Filipino 1</th>                                                 
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>
                                        <th>

                                        <a href="sectionlist"> <button type="button" name = "submit" style="vertical-align:middle" class="button1" ><span>View Section </span></button></a>
                                             
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

