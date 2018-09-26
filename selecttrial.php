<?php 
 $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
              mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());

$sql = "SELECT service_name FROM services";
$result = mysqli_query($db,$sql);

echo "<select name='service_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['service_name'] ."'>" . $row['service_name'] ."</option>";
}
echo "</select>";

?>