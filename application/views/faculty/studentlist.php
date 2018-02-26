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
                                        <th colspan = 3>
                                        Subject: <font color = "green"><b> Math 1 </b></font>
                                        </th>

                                        <th colspan = 3>
                                        Section: <font color = "green"><b> St. Lorenzo </b></font>
                                        </th>
                                    </tr>


                                     <tr>
                                        
                                        <th colspan = 6>
                                            <div class="tab">
                                            <button class="tablinks" onclick="openCity(event, '1stquarter')" id="defaultOpen">1st Quarter</button>
                                            <button class="tablinks" onclick="openCity(event, '2ndquarter')">2nd Quarter</button>
                                            <button class="tablinks" onclick="openCity(event, '3rdquarter')">3rd Quarter</button>
                                             <button class="tablinks" onclick="openCity(event, '4thquarter')">4th Quarter</button>
                                             <button class="tablinks" onclick="openCity(event, '4thquarter')">Final GPA</button>
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
            <th>
                Student Number:
            </th>
            <th>
                First Name
            </th>
            <th>
                Middle Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Grade
            </th>

        </tr>

        
        <tr>
             <th>
                2014141811
                <br>
                <br>
            </th>
            <th>
                Iris Joshua
                <br>
                <br>
            </th>
            <th>
                Joshua
                <br>
                <br>
            </th>
            <th>
                Tanyag
                <br>
                <br>
            </th>

            <th>
              <input type="text" id="1stquarter" name="schedule" required>
    
            </th>
        </tr>


         

        <tr>
            <th colspan = 3 align="right">
                <button name="submit" type="submit" class="btn btn-danger" style = "height:50px;width:200px;"><i class="icon-file icon-large"></i>&nbsp;Import Excel</button>
            </th>

            <th colspan = 3 align="right">
                <button name="submit" type="submit" class="btn btn-success" style = "height:50px;width:200px;"><i class="icon-pencil icon-large"></i>&nbsp;Save</button>
            </th>
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

