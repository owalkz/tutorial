<?php
  
  $server_name="localhost";
  $username="root";
  $password="";
  $database_name="environmentalmanagementsystem";

$mysqli = new mysqli($server_name, $username, 
                $password, $database_name);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM environmental_activities ORDER BY activity_id ASC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>ALL ACTIVITIES</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>ACTIVITIES</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>ACTVITY_ID</th>
                <th>ACTIVITY_NAME</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['activity_id'];?></td>
                <td><?php echo $rows['activity_name'];?></td
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>