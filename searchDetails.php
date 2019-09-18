
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>View Certificate</title>
    <link rel="stylesheet" type="text/css" href='css/file.css'> 
    <style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 100%;
    margin:0% ;
}

#certificate_table, #certificate_table tr td {
    border: 2px solid rgb(211, 97, 97);
    margin-top: 20%;
    margin-left : 0%;
        }
    .rules{
        border: 2px solid rgb(211, 97, 97);
        margin-top: 1%;
        padding-right: 5%;
        margin-left: 0%
    }
    #certificate_table tr td {
        width: auto;
    }

        #certificate_table tr td table tr td {
            width: 30%;
        }

        #certificate_table tr td.noborder, #certificate_table tr td:nth-child(5) {
            border:none;
        }

        #certificate_table tr td.reqborder {
            border:  2px solid rgb(211, 97, 97) !important;
        }

.inner_table, .txt-cntr {
    text-align: center;
}

.nospace {
    border-spacing: 0px;
    border-color: black;
    border-collapse: collapse;
}

#nodash {
    border-bottom-style: hidden;
}

.rules li {
    font-size: small;
}

div.headerdiv {
    max-width: 1200px;
    padding: 0;
    height: 50px;
}

.container {
    margin-left: auto;
    margin-right: auto;
    height: 80px;
    width: 100%;
}
.head{

}

@media screen and (max-width: 680px) {
    .site-header .header-wrap {
        height: 80px;
    }
}
.img-responsive{
    margin-left : 6%;

}
    </style>
    
<?php
require_once "connection.php";

if(isset($_POST['search'])){
    $search = $_POST['Searches'];

  
$sql = "SELECT lic_no,report_no,customer_name,vehicle_no,test_date,next_test_date,vehicle_type,
                fuel_type,cylinder_no,cylinder_make,cylinder_spec,last_tdate,manufacture_date,longitude,latitude,
                valve_inspection,visual_inspection,cylinder_threading,internal_inspection,plate_no,as_pr_making,
                actual_wt,diff_wait,loss_wait,wall_min,wall_max,v_capacity,w_pressure,t_pressure,t_expansion,p_extension,file_name FROM certificate WHERE vehicle_no = '$search' ";


$query = mysqli_query($conn,$sql);
if(!$query){
    echo "Error:".mysqli_error($conn);
}
else{
    while($row = mysqli_fetch_assoc($query)){
        $license_no = $row['lic_no'];
        $report_no= $row['report_no'];
        $customer_name= $row['customer_name'];
        $vehicle_no= $row['vehicle_no'];
        $test_date= $row['test_date'];
        $next_test_due_date= $row['next_test_date'];
        $vehicle_type= $row['vehicle_type'];
        $fuel_type= $row['fuel_type'];
        $cylinder_no= $row['cylinder_no'];
        $cylinder_make= $row['cylinder_make'];
        $cylinder_spec= $row['cylinder_spec'];
        $last_testing_date= $row['last_tdate'];
        $manufacturing_date= $row['manufacture_date'];
        $longitude= $row['longitude'];
        $latitude= $row['latitude'];
        $valve_inspection= $row['valve_inspection'];
        $visual_inspection= $row['visual_inspection'];
        $cylinder_threading= $row['cylinder_threading'];
        $internal_inspection= $row['internal_inspection'];
        $plate_no= $row['plate_no'];
        $as_pr_making = $row['as_pr_making'];
        $actual_wt =  $row['actual_wt'];
        $diff_wt = $row['diff_wait'];
        $loss_wt =  $row['loss_wait'];

        $wall_thick_min =  $row['wall_min'];
        $wall_thick_max = $row['wall_max']; 

        $vol_cap = $row['v_capacity'];
        $working_press  = $row['w_pressure'];
        $testing_press  = $row['t_pressure'];
        $total_expen = $row['t_expansion'];
        $permanent_expen = $row['p_extension'];

        $permanent_exp_percent= $permanent_expen / $total_expen * 100;
        


        $imageURL = 'images/'.$row["file_name"];
        }
    }
}
				//echo $imageURL;
if($search==$vehicle_no){
    ?> 
   </head>
<body>
    <div style="width:100%"> 
              
                <div style="width:100%">
                    <table style="width:100%" border="0" id="certificate_table" class="nospace ">
                        <tr>
                            <td colspan="5" style="text-align:center;">
                                <span id='head'><h4>Cylinder Test Report</h4></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>License Number</b>
                            </td>
                            <td>
                                <?php echo $license_no;?>
                            </td>
                            <td>
                                <b>Test Date</b>
                            </td>
                            <td>
                                <?php echo $test_date;?>
                            </td>
                            <td rowspan="3" class="noborder">
                                <img src="images/qr.png" width="100" height="100" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Report Number</b>
                            </td>
                            <td>
                                <?php echo $report_no;?>
                            </td>
                            <td>
                                <b>Next Test Due Date</b>
                            </td>
                            <td>
                                <?php echo $next_test_due_date;?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Customer Name</b>
                            </td>
                            <td>
                                <?php echo $customer_name;?>
                            </td>
                            <td>
                                <b>Cylinder Number</b>
                            </td>
                            <td>
                                <?php echo $cylinder_no;?>  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Vehicle Number</b>
                            </td>
                            <td>
                                <?php echo $vehicle_no;?>
                            </td>
                            <td>
                                <b>Cylinder Make</b>
                            </td>
                            <td>
                                <?php echo $cylinder_make;?>
                            </td>
                            <td rowspan="3" class="nospace">
                                
                                <img src='images/OG_logo_png.png' alt="logo" src="" width="100" height="100" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Vehicle Type</b>
                            </td>
                            <td>
                                <?php echo $vehicle_type;?>
                            </td>
                            <td>
                                <b>Cylinder Specification</b>
                            </td>
                            <td>
                                <?php echo $cylinder_spec;?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Fuel Type</b>
                            </td>
                            <td>
                                <?php echo $fuel_type;?>
                            </td>
                            <td>
                                <b>Last Testing Date</b>
                            </td>
                            <td>
                                <?php echo $last_testing_date;?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Latitude</b>
                            </td>
                            <td>
                                <?php echo $latitude;?>
                            </td>
                            <td>
                                <b>Manufacturing Date</b>
                            </td>
                            <td>
                                <?php echo $manufacturing_date;?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <b>Longitude</b>
                            </td>
                            <td>
                                <?php echo $longitude;?>
                            </td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td colspan="4" style="text-align:center;">
                                <span><h4>Testing Details</h4></span>
                            </td>
                            <td colspan="1" class="noborder"></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Valve Inspection</b>
                            </td>
                            <td>
                                <?php echo $valve_inspection;?>
                            </td>
                            <td>
                                <b>Plate Number</b>
                            </td>
                            <td>
                                <?php echo $plate_no;?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Visual Inspection</b>
                            </td>
                            <td>
                                <?php echo $visual_inspection;?>
                            </td>
                            <td colspan="2">
                                <b>Tare weight (KG.)</b>
                            </td>
                            <td class="noborder"></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Cylinder Threading</b>
                            </td>
                            <td>
                                <?php echo $cylinder_threading;?>
                            </td>
                            <td>
                                <b>As per making</b>
                            </td>
                            <td>
                                <?php echo $as_pr_making;?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Internal Inspection</b>
                            </td>
                            <td>
                                <?php echo $valve_inspection;?>
                            </td>
                            <td>
                                <b>Actual Weight</b>
                            </td>
                            <td>
                                <?php echo $actual_wt;?>
                            </td>
                            <td id="nodash"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <b>Cylinder Wall Thickness</b>
                            </td>
                            <td>
                                <b>Difference in weighted</b>
                            </td>
                            <td>
                                <?php echo $diff_wt;?>

                            </td>
                            <td class="noborder"></td>
                        </tr>
                        <tr>
                            <td class="txt-cntr">
                                <b>Minimum</b>
                            </td>
                            <td class="txt-cntr">
                                <b>Maximum</b>
                            </td>
                            <td>
                                <b>Loss of weight (%)</b>
                            </td>
                            <td>
                                <?php echo $loss_wt;?>
                            </td>
                            <td class="noborder"></td>
                        </tr>
                        <tr>
                            <td class="txt-cntr">
                                <?php echo $wall_thick_min;?>
                            </td>
                            <td class="txt-cntr">
                                <?php echo $wall_thick_max;?>
                            </td>
                            <td colspan="2" class="noborder" id="nodash"></td>
                            <td class="noborder"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="noborder"> <b>Testing Result  </b></td>
                            <td colspan="3" class="noborder"></td>
                        </tr>
                        <tr>
                            <td colspan="5" class="noborder">
                                <table border="0" style="border-collapse:collapse" class="nospace">
                                    <tr>
                                        <td>
                                            <b>
                                                Volumetric Capacity (Liters)
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Working Pressure (Kgf/cm2)
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Testing Pressure (Kgf/cm2)
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Total Expension TE(cc)
                                            </b>
                                        </td>
                                        <td class="reqborder">
                                            <b>
                                                Permanent Expension TE(cc)
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Permanent Expension (%)
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Result
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $vol_cap;?>
                                        </td>
                                        <td>
                                            <?php echo $working_press;?>
                                        </td>
                                        <td>
                                            <?php echo $testing_press;?>
                                        </td>
                                        <td>
                                            <?php echo $total_expen;?>
                                        </td>
                                        <td class="reqborder">
                                            <?php echo $permanent_expen;?>
                                        </td>
                                        <td>
                                            <?php echo number_format((float)$permanent_exp_percent, 2, '.', ''); ?>
                                        </td>
                                        <td>
                                            <?php
                                                    if($permanent_exp_percent < 10)
                                                    echo"Pass";
                                                    else{
                                                        echo "Fail";
                                                    }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="width:100%">
                    <ul class="rules">
                        <li>
                            The cylinder has been inspected and tested in accordance with the Gas Cylinder Rules,2016.
                        </li>
                        <li>
                            The cylinder has been tested under supervision of a competent person and found to be free from any defects which might prove injurious to the strength of the cylinder.
                        </li>
                        <li>
                            Hydrostatic stretch test must be prescribed in specification no IS:5844 (Water jacket method) is performed.
                        </li>
                        <li>
                            The cylinder testing procedure is approved by the ‘PESO’ (Government of India)
                        </li>
                    </ul>
                </div>
                <div style="width:100%">
                        <div style="width:50%;float:left;">
                            <img class="img-responsive" alt="momos" src= "<?php echo $imageURL;?> "
                                 style="width: 200px; height: 100px;">
                        </div>
                    <div style="width:44%;float:right;">
                        <br/>
                                KWK CNG Center<br/>
                        
                        <br/>
                        <br/>
                        Authorized Signature
                    </div>
                </div>
    </div>

</body>

<?php
}else{

    echo "Something Wrong Not Found...!";

}


?>

</html>