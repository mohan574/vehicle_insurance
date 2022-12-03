<?php

include('config.php');

if (isset($_POST["Brand"])) {
    //Get all state data
     $brand = $_POST['Brand'];
   
    $query = "select distinct(model) as model from TBL_CAR_DETAILS where brand='$brand'";
    $run_query = mysqli_query($link, $query);

    //Count total number of rows
        $count = mysqli_num_rows($run_query);

    //Display states list
    if ($count > 0) {
        echo '<option value="">--Select Model--</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $circleid = $row['model'];
            echo "<option value='$circleid'>$circleid</option>";
        }
    } else {
        echo '<option value="">State not available</option>';
    }
}


if (isset($_POST["state_id"])) {
    $state_id = $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
        ORDER BY city_name ASC";
    $run_query = mysqli_query($link, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);

    //Display cities list
    if ($count > 0) {
        echo '<option value="">Select city</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $city_id = $row['city_id'];
            $city_name = $row['city_name'];
            echo "<option value='$city_id'>$city_name</option>";
        }
    } else {
        echo '<option value="">City not available</option>';
    }
}
