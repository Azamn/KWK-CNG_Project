<?php

require_once "connection.php";

// Get images from the database
$sql = "SELECT * FROM certificate";

$query = mysqli_query($conn,$sql);



if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
                $license_no = $row['lic_no'];
                $report_no= $row[' report_no '];
                $customer_name= $row['customer_name '];
                $vehicle_no= $row['vehicle_no'];
                $test_date= $row[' test_date '];
                $next_test_due_date= $row['next_test_date'];
                $vehicle_type= $row['vehicle_type'];
                $fuel_type= $row['fuel_type'];
                $cylinder_no= $row[' cylinder_no '];
                $cylinder_make= $row['cylinder_make'];
                $cylinder_spec= $row['cylinder_spec'];
                $last_testing_date= $row['last_tdate'];
                $manufacturing_date= $row['manufacture_date'];
                $longitude= $row['longitude'];
                $latitude= $row['latitude'];
                $valve_inspection= $row['valve_inspection'];
                $visual_inspection= $row[' visual_inspection '];
                $cylinder_threading= $row['cylinder_threading'];
                $internal_inspection= $row['internal_inspection'];
                $plate_no= $row['plate_no'];
                $as_pr_making = $row['as_pr_making'];
                $actual_wt =  $row['actual_wt'];
                $diff_wt = $row['diff_wait'];
                $loss_wt =  $row['loss_wait'];

                $wall_thick_min =  $row['wall_min'];
                $wall_thick_max = $row['wall_max']; 

                $vol_cap = $row[' v_capacity '];
                $working_press  = $row['w_pressure'];
                $testing_press  = $row['t_pressure'];
                $total_expen = $row['t_expansion'];
                $permanent_expen = $row['p_extension'];



                $imageURL = 'images/'.$row["file_name"];
				//echo $imageURL;
?>
		<div class="image" style="display:inline-block"> 
        <?php echo $license_no;?>
        <?php echo $report_no;?>
        <?php echo $customer_name;?>
        <?php echo $vehicle_no;?>
        <?php echo $test_date;?>
        <?php echo $next_test_due_date;?>
        <?php echo $vehicle_type;?>
        <?php echo $fuel_type;?>
        <?php echo $cylinder_no;?>

        <?php echo $cylinder_make;?>
        <?php echo $cylinder_spec;?>
        <?php echo $last_testing_date;?>

        <?php echo $manufacturing_date;?>
        <?php echo $longitude;?>
        <?php echo $latitude;?>
        <?php echo $valve_inspection;?>
        <?php echo $visual_inspection;?>
        <?php echo $cylinder_threading;?>

        <?php echo $plate_no;?>
        <?php echo $as_pr_making;?>
        <?php echo $actual_wt;?>
        <?php echo $diff_wt;?>

        <?php echo $loss_wt;?>
        <?php echo $wall_thick_min;?>
        <?php echo $wall_thick_max;?>

        <?php echo $vol_cap;?>
        <?php echo $working_press;?>
        <?php echo $testing_press;?>
        <?php echo $total_expen;?>
        <?php echo $permanent_expen;?>
        <?php echo $image;?>

		<a style="display:block; text-align:center;" href="<?php echo $imageURL; ?>" download>
		<img src="<?php echo $imageURL;?>" alt=""  style="height:200px; width=200px;margin-left:50px; display:block;"/>
	Download</a>
		</div>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

?>= $_POST["permanent_expen"];