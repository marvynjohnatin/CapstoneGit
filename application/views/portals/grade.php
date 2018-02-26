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

                echo "<th><font color = 'green'>  ". $results['student_ID'] . "</font>" ;

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>


             <p><img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" alt="" width="170" class="img-polaroid"/></p>

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    
                        <li class="">
                        <a href="dashboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
                        
                        </li>
                        
                        <li class="active">
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
                                           <h3><b><font color = "red">Student List</font></b></h3>
                                        </th>
                                    </tr>


                                    <tr>
                                        <th colspan = 6>
                                             Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>
                                        </th>
                                    </tr>

                                    <tr>
                                      
                                        <th>Year Level</th>
                                        <th>Section</th>
                                        <th>Grade</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>


                                    <tr>
                                     
                                        <th>Highschool</th>
                                        <th>St. Lorenzo</th>
                                        <th>Grade 7</th>
                                        <th>2013-2014</th>
                                        <th>
                                            <a href = "gradelist">
                                            <button name="submit" type="submit" class="btn btn-success"><i class="icon-view icon-large"></i>&nbsp;View Grade</button>
                                        </a>
                                        </th>
                                    </tr>

                                    <tr>
                                    
                                        <th>Highschool</th>
                                        <th>St. Mary</th>
                                        <th>Grade 8</th>
                                        <th>2015-2016</th>
                                        <th><button name="submit" type="submit" class="btn btn-success"><i class="icon-view icon-large"></i>&nbsp;View Grade</button></th>
                                    </tr>

                                    <tr>
                                     
                                        <th>Highschool</th>
                                        <th>St. Matthew</th>
                                        <th>Grade 9</th>
                                        <th>2017-2018</th>
                                        <th><button name="submit" type="submit" class="btn btn-success"><i class="icon-view icon-large"></i>&nbsp;View Grade</button></th>
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

