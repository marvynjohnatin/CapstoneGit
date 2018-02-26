<div class="container">
    <br><br>

<form method="post" action="<?php echo base_url()?>admission/create">
    Number of fields required:
    <select id="number" name="number">
        <option value="0">- SELECT -</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <div id="studdetails"></div>
    <input type="submit" name="submit" value="Submit"/>
</form>
</div>
</body>
<script type="text/javascript">
    //when the webpage has loaded do this
    $(document).ready(function() {
        //if the value within the dropdown box has changed then run this code
        $('#number').change(function(){
            //get the number of fields required from the dropdown box
            var num = $('#number').val();
            var i = 0; //integer variable for 'for' loop
            var html = ''; //string variable for html code for fields
            //loop through to add the number of fields specified
            for (i=1;i<=num;i++) {
                html += '<table><tr><td>'+'Student '+i;
                //concatinate number of fields to a variable
                html += '<tr><td>'+'First name'+': <input type="text" name="fname-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Last name'+': <input type="text" name="lname-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Middle name'+': <input type="text" name="mname-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Admission Year'+': <input type="text" name="admission-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Age'+': <input type="text" name="age-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Birthday'+': <input type="text" name="birthday-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Gender'+': <input type="text" name="gender-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Address'+': <input type="text" name="address-' + i + '"/></td></tr>';
                html += '<tr><td>'+'BirthPlace'+': <input type="text" name="birthplace-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Contact No.'+': <input type="text" name="contactno-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Email'+': <input type="text" name="email-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Current Level'+': <input type="text" name="level-' + i + '"/></td></tr>';
                html += '<tr><td>'+'Current Year'+': <input type="text" name="year-' + i + '"/></td></tr></br></br>';
            }

            //insert this html code into the div with id catList
            $('#studdetails').html(html);
        });
    });

</script>
