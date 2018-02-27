<div>

    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">
        <thead>
        <tr>
            <th colspan = 12>
                <h3><b><font color = "red">Student List</font></b></h3>
            </th>
        </tr>
        <form action="<?php echo base_url()?>admission/activatestudent"?>
        <tr>
            <th colspan="10">
                Search: <input type="text" name ="search">&nbsp;&nbsp;<button type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>
            </th>
        </form>
            <th colspan="2">
                <a href="addstudent"><button  align='right' data-toggle="modal" data-target="#myModal" class="btn btn-primary" ><i class="icon-search icon-large"></i>&nbsp; Add Student</button></a>
                <br>

            </th>
        </tr>

        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last name </th>
            <th>Middle Name</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Current Level</th>
            <th>Action</th>


        </tr>
        <form method="post" action="<?php echo base_url() ?>admission/activate">
        <?php foreach($results as $student) : ?>
            <tr>
                <th><?php echo $student['studentnumber'] ?></th>
                <th><?php echo $student['fname'] ?></th>
                <th><?php echo $student['lname'] ?></th>
                <th><?php echo $student['mname'] ?></th>
                <th><?php echo $student['age'] ?></th>
                <th><?php echo $student['dateofbirth'] ?></th>
                <th><?php echo $student['gender'] ?></th>
                <th><?php echo $student['address'] ?></th>
                <th><?php echo $student['contactno'] ?></th>
                <th><?php echo $student['current_level'] ?></th>
                <th><button type="submit" name="studentid" value="<?php echo $student['Id'] ?>">Activate </button></th>
            </tr>
        <?php endforeach;?>
        </form>
        <tr>
            <th colspan = 12>
                <button name="submit" type="submit" class="btn btn-danger" style="width: 200px;"><i class="icon-print icon-large"></i>&nbsp;Print Student</button>
            </th>
        </tr>

        </thead>
    </table>
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>




    </thead>
    <tbody>



    </tbody>
    </table>

</div>
</div>


</div>
</div>

