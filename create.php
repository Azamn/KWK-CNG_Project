
<HTML>
    <head>
    
        <title>
                createCertificate
        </title>

        <style>


.button-success,
     {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: whitesmoke; /* this is a green */
        }

    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

    table
        {
        color:white;
        border-radius:10px;
        }

    #button
        {
        background-color:rgb(174, 179, 174);
        color:rgb(48, 42, 42);
        height:32px;
        width:85px;
        border-radius:0;
        }


    body
        {
        background:grey;
        }
    button{
        height: 50px;
        margin:auto;
        display:block;
    }    
        
</style>
    <script language="javascript" type="text/javascript">
        function calculate_temp(as_pr_making, actual_wt) {
            var as_pr_making = parseFloat(document.getElementById('as_pr_making').value);
            var actual_wt   = parseFloat(document.getElementById('actual_wt').value); 
            var Delta = as_pr_making - actual_wt;
            document.getElementById('Delta').value= Delta.toFixed(2)
            var loss_wt = (Delta/as_pr_making)*100;
            document.getElementById('loss_wt').value = loss_wt.toFixed(2)
        }  
    </script>
    </head>

    <body>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="formoutput.php">View Last Entry</a></li>
            <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul> 

        <form method="POST" enctype='multipart/form-data' action="createCertificate.php">
            <table border="0" bgcolor="black" align="center" cellspacing="30">
                <header id="header">
                <tr><h3>Cylinder Test Report</h3></tr>
                </header>
                <tr>
                    <td>License Number:</td>
                    <td><input type="text" name="license_no" value="G3(3)29/776" required></td>
                    <td>Report Number:</td>
                    <td><input type="text" name="report_no" required></td>
                    <td>Customer Name:</td>
                    <td><input type="text" name="customer_name" required></td>
                </tr>

                <tr>
                    <td>Vehicle Number:</td>
                    <td><input type="text" name="vehicle_no" required></td>
                    <td>Test Date:</td>
                    <td><input type="date" name="test_date" required></td>
                    <td>Next Test Due Date:</td>
                    <td><input type="date" name="next_test_due_date" required></td>
                </tr>

                <tr>
                    <td>Vehicle Type:</td>
                    <td><input type="text" name="vehicle_type" required></td>
                    <td>Fuel Type:</td>
                    <td><input type="text" name="fuel_type" required></td>
                    <td>Cylinder Number:</td>
                    <td><input type="text" name="cylinder_no" required></td>
                </tr>

                <tr>
                    <td>Cylinder Make:</td>
                    <td><input type="text" name="cylinder_make" required></td>
                    <td>Cylinder Specification:</td>
                    <td><input type="text" name="cylinder_spec" required></td>
                    <td>Last Testing Date:</td>
                    <td><input type="date" name="last_testing_date" required></td>
                </tr>

                    <td>Manufacturing Date:</td>
                    <td><input type="date" name="manufacturing_date" required></td>
                    <td>Longitude:</td>
                    <td><input type="text" name="longitude" required></td>
                    <td>Latitude:</td>
                    <td><input type="text" name="latitude" required></td>

                    <table border="0" bgcolor="black" align="center" cellspacing="20">
            <tr><h3>Testing Details</h3></tr>
            <tr>
                <td>Valve Inspection:</td>
                <td><input type="text" name="valve_inspection" required></td>
                <td>Visual Inspection:</td>
                <td><input type="text" name="visual_inspection" required></td>
                <td>Cylinder Threading:</td>
                <td><input type="text" name="cylinder_threading" required></td>
            </tr>
            <tr>
                <td>Internal Inspection:</td>
                <td><input type="text" name="internal_inspection" required></td>
                <td>Plate Number:</td>
                <td><input type="text" name="plate_no" required></td>
            </tr><br>
            <tr><td>Tare Weight(K.G):</td></tr>
            <tr>
                <td>As Per Making:</td>
                <td><input type="text" name="as_pr_making" id="as_pr_making" required></td>
                <td>Actual Weight:</td>
                <td><input type="text" name="actual_wt" id="actual_wt" required></td>
                <td>Difference Weight:</td>
                <td><input type="text" name="diff_wt" id="Delta" onfocus="calculate_temp()" required></td>
            </tr>
            <tr>
                <td>Loss Of Weight:</td>
                <td><input type="text" name="loss_wt" id="loss_wt" onfocus="calculate_temp()" required></td>
            </tr>
        </table>
        
        <table border="0" bgcolor="black" align="center" cellspacing="20">
            
            <tr>
                <h3 align="center">Cylinder Wall</h3>
                <td>Minimum:</td>
                <td><input type="text" name="wall_thick_min" required></td>
                <td>Maximum:</td>
                <td><input type="text" name="wall_thick_max" required></td>
            </tr>

        </table>

        <table border="0" bgcolor="black" align="center" cellspacing="20">
            <tr><h3>Testing Result</h3></tr>
            <tr>
                <td>Volumetric Capacity(Liters):</td>
                <td><input type="text" name="vol_cap" id="" required></td>
                <td>Working Pressure(Kgf/cm2):</td>
                <td><input type="text" name="working_press" id="" required></td>
                <td>Testing Pressure(Kgf/cm2):</td>
                <td><input type="text" name="testing_press" id="" required></td>
            </tr>
            <tr class="last">
                <td>Total Expension:</td>
                <td><input type="text" name="total_expen" id="" required></td>
                <td>Permanent ExpensionTE(cc):</td>
                <td><input type="text" name="permanent_expen" id="" required></td>
                <td>Image:</td>
                <td><input type="file" name="file"></td>
            </tr>
        </table>

             <button type="submit" class=" button-success" value="submit" name="submit"> SUBMIT  </button>
             
        </table>
        
        </form> 

    </body>
</HTML>

