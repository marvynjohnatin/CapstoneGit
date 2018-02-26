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
            
                   <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">                      
                                <thead>
                                    <tr>
                                       <th colspan="2">
                                           <h3><b><font color = "red">Grades List</font></b></h3>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>
                                            Year Level: <font color = "green"> Highschool </font>
                                        </th>
                                           <th>
                                            Section: <font color = "green"> St. Lorenzo </font>
                                        </th>
                                    </tr>

                                     <tr>
                                        <th>
                                            Grade: <font color = "green"> Grade 7 </font>
                                        </th>
                                           <th>
                                            Date: <font color = "green"> 2013-2014 </font>
                                        </th>
                                    </tr>

                                    <tr>
                                        
                                        <th colspan = 6>
                                            <div class="tab">
                                            <button class="tablinks" onclick="openCity(event, '1stquarter')" id="defaultOpen">1st Quarter</button>
                                            <button class="tablinks" onclick="openCity(event, '2ndquarter')">2nd Quarter</button>
                                            <button class="tablinks" onclick="openCity(event, '3rdquarter')">3rd Quarter</button>
                                             <button class="tablinks" onclick="openCity(event, '4thquarter')">4th Quarter</button>
                                             <button class="tablinks" onclick="openCity(event, 'finalgpa')">Final GPA</button>
                                            </div>


    <div id="1stquarter" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <br>
  <br>

    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">                      
    <thead>

        <tr>

        <th colspan = 7>

                        Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>

        </th>

        </tr>

        <tr>
            <th>Code</th>
            <th>Subject</th>
            <th>Section</th>
            <th>Year Level</th>
            <th>Grade</th>

        </tr>

         <tr>
            <th>01</th>
            <th>Math 1</th>
            <th>St. Lorenzo</th>
            <th>Grade 7 - Highschool</th>
            <th>90</th>

        </tr>

        <tr>
            <th>02</th>
            <th>Filipino 1</th>
            <th>St. Lorenzo</th>
            <th>Grade 7 - Highschool</th>
            <th>85</th>

        </tr>

       


         

    </thead>
    </table>

</div>

<div id="2ndquarter" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>

</div>

<div id="3rdquarter" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>

</div>

<div id="4thquarter" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>

</div>

<div id="finalgpa" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <br>
  <br>
   <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">                      
    <thead>

        <tr>

        <th colspan = 7>

                        Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>

        </th>

        </tr>

        <tr>
            <th>Code</th>
            <th>Subject</th>
            <th>Section</th>
            <th>Year Level</th>
            <th>Grade</th>

        </tr>

         <tr>
            <th>01</th>
            <th>Math 1</th>
            <th>St. Lorenzo</th>
            <th>Grade 7 - Highschool</th>
            <th>90</th>

        </tr>

        <tr>
            <th>02</th>
            <th>Filipino 1</th>
            <th>St. Lorenzo</th>
            <th>Grade 7 - Highschool</th>
            <th>85</th>

        </tr>

           <tr>
                                        <th colspan = 2>
                                        General Average: 97.50
                                        </th>

                                        <th colspan = 2>
                                        Remarks: <font color = "green"> All Subjects Passed! </font>
                                        </th>

                                        <th colspan = 2>
                                        <button name="submit" type="submit" class="btn btn-danger" style="width: 200px;"><i class="icon-print icon-large"></i>&nbsp;Print Grades</button>
                                        </th>

                                    </tr>

       


         

    </thead>
    </table>

</div>

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

