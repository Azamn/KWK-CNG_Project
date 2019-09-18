<?php

include 'connection.php';


 // File upload path
//  $targetDir = "images/";
//  $fileName = basename($_FILES["file"]["name"] );
//  $targetFilePath = $targetDir . $fileName;
//  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$msg = "";

if(isset($_POST['submit'])){
    $license_no = $_POST["license_no"];
    $report_no = $_POST["report_no"]; 
    $customer_name = $_POST["customer_name"];
    $vehicle_no = $_POST["vehicle_no"];
    $test_date = $_POST["test_date"]; 
    $next_test_due_date = $_POST["next_test_due_date"];

    $vehicle_type = $_POST["vehicle_type"];
    $fuel_type = $_POST["fuel_type"];
    $cylinder_no = $_POST["cylinder_no"];
    $cylinder_make = $_POST["cylinder_make"];
    $cylinder_spec = $_POST["cylinder_spec"];
    $last_testing_date = $_POST["last_testing_date"]; 
    $manufacturing_date = $_POST["manufacturing_date"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];

    $valve_inspection = $_POST["valve_inspection"];
    $visual_inspection = $_POST["visual_inspection"];
  	$cylinder_threading = $_POST["cylinder_threading"];
    $internal_inspection = $_POST["internal_inspection"]; 
    $plate_no = $_POST["plate_no"];

    $as_pr_making = $_POST["as_pr_making"];
    $actual_wt = $_POST["actual_wt"];
    $diff_wt = $_POST["diff_wt"];
    $loss_wt = $_POST["loss_wt"];

    $wall_thick_min = $_POST["wall_thick_min"];
    $wall_thick_max = $_POST["wall_thick_max"]; 

    $vol_cap = $_POST["vol_cap"];
    $working_press = $_POST["working_press"];
    $testing_press = $_POST["testing_press"];
    $total_expen = $_POST["total_expen"];
    $permanent_expen = $_POST["permanent_expen"];

    $image = $_FILES['file']['name'];

    $target = "images/".basename($image);
    // echo $target;
    // echo die;

            $query = "INSERT INTO certificate (lic_no,report_no,customer_name,vehicle_no,test_date, next_test_date,vehicle_type,fuel_type,
                cylinder_no, cylinder_make,cylinder_spec,last_tdate,manufacture_date,longitude,latitude,valve_inspection ,visual_inspection,cylinder_threading,
                internal_inspection,plate_no,as_pr_making,actual_wt,diff_wait,loss_wait,wall_min,wall_max,v_capacity,w_pressure,t_pressure,t_expansion,p_extension,file_name) 
                VALUES('$license_no','$report_no','$customer_name','$vehicle_no','$test_date','$next_test_due_date','$vehicle_type',
                '$fuel_type','$cylinder_no','$cylinder_make','$cylinder_spec','$last_testing_date','$manufacturing_date','$longitude',
                '$latitude','$valve_inspection','$visual_inspection','$cylinder_threading','$internal_inspection','$plate_no','$as_pr_making',
                '$actual_wt','$diff_wt','$loss_wt','$wall_thick_min','$wall_thick_max','$vol_cap','$working_press','$testing_press','$total_expen','$permanent_expen','$image')";


                //$result=mysqli_query($conn, $query);

                $result=mysqli_query($conn, $query);
                

                if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
                    header('location:create.php');
                    echo "Data Uploaded";
                    
                }else{
                   echo " Failed to upload data";
                }

                // if(!$result){
                // echo "Error please check the field";
                // }else{
                // header ('location:index.php');
                // echo "THANKS FOR REGISTRATION...";
                // }

        }

       

?>