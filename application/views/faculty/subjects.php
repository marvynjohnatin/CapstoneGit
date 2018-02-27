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

                echo "<th><font color = 'green'>". $results['teacher_ID'] . "</font>";

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>

                <p><img src="<?php echo base_url() ?>" alt="" width="160" class="img-polaroid"/></p>


           

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    
                        <li class="">
                        <a href="dashboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
                        
                        </li>
                        
                        <li class="active">
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
                                        <th>Section</th>                                                  
                                        <th>Year Level</th>
                                        <th>Subject Time</th>
                                        <th>Subject Schedule</th>                                                
                                                                                        
                                    </tr>

                                    <tr>
                                        <th>01</th>
                                        <th>Math 1</th>                                                 
                                        <th>St. Blaise</th>                                           
                                        <th>Highschool - Grade 7</th>
                                        <th>8:00 A.M. - 9:00 A.M.</th>
                                        <th>Monday to Friday</th>                                       
                                                                                                                    
                                  
                                    </tr>

                                     <tr>
                                        <th>01</th>
                                        <th>Math 1</th>                                                 
                                        <th>St. Lorenzo</th>                                           
                                        <th>Highschool - Grade 7</th>
                                        <th>1:00 P.M. - 2:00 P.M.</th>
                                        <th>Monday to Friday</th>                                       
                                                                                                                    
                                  
                                    </tr>

                                     <tr>
                                        <th>01</th>
                                        <th>Math 1</th>                                                 
                                        <th>St. Martin</th>                                           
                                        <th>Highschool - Grade 7</th>
                                        <th>3:00 P.M. - 4:00 P.M.</th>
                                        <th>Monday to Friday</th>                                       
                                                                                                                    
                                  
                                    </tr>


                             

                                    <tr>
                                        <th colspan = 3>
                                       <button name="submit" type="submit" class="btn btn-danger" style="width: 200px;"><i class="icon-print icon-large"></i>&nbsp;Print Schedule</button>
                                        </th>

                                        <th colspan = 3>
                                        Total Teaching Hours: 58 Hours
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

