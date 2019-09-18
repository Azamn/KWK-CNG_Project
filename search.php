<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'connection.php';

if(isset($_POST['search'])){
    $search = $_POST['Searches'];

  
$sql = "SELECT lic_no,report_no,customer_name,vehicle_no FROM certificate WHERE vehicle_no = '$search' ";


$query = mysqli_query($conn,$sql);
if(!$query){
    echo "Error:".mysqli_error($conn);
}
else{
    while($row = mysqli_fetch_assoc($query)){
        // if($query->num > 0){
        //     while($row = $query->fetch_assoc()){
                $lic = $row['lic_no'];
                $report = $row['report_no'];
                $customer = $row['customer_name'];
                $vahicle = $row['vehicle_no'];
            }
        }
       
    }
if($search==$vahicle){
        echo $lic;
        echo $report;
        echo $customer;
        echo $vahicle;
    }else{
        echo "Please Enter Valid vehicle No.";
    }


echo die();


?>