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
    $company_name = $_POST['company_name'];
    $operation_status = $_POST['operation_status'];
    $date_of_registration = $_POST['date_of_registration'];

$sql_query = "INSERT INTO company (company_name, operation_status, date_of_registration) 
VALUES ('$company_name', '$operation_status', '$date_of_registration')";

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