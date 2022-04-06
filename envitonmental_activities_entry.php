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
    $activity_name = $_POST['activity_name'];

$sql_query = "INSERT INTO environmental_activities (activity_name) 
VALUE ('$activity_name')";

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