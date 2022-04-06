<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="environmentalmanagementsystem";

$conn=mysqli_connect($server_name, $username, $password, $database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $act_id = $_POST['act_id'];
    $comp_id = $_POST['comp_id'];
    $exp_id = $_POST['exp_id'];
    $date_of_activity = $_POST['date_of_activity'];
    $extra_notes = $_POST['extra_notes'];

$sql_query = "INSERT INTO activity_scheduling (act_id, comp_id, exp_id, date_of_activity, extra_notes) 
VALUES ('$act_id', '$comp_id', '$exp_id', '$date_of_activity', '$extra_notes')";

if (mysqli_query($conn, $sql_query))
{
    echo "New Details Entry inserted successfully !";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>