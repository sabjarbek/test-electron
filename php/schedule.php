
<?php

$link = mysqli_connect("localhost", "mysql", "", "message_table");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$day=$_POST['day'];
$week=$_POST['week'];
$groups=$_POST['groups'];

echo "<table class=\"table table-hover\">";
echo "<thead>";
echo "<tr>";
echo "<th scope=\"col\">Время</th>";
echo "<th scope=\"col\">Предмет</th>";
echo "<th scope=\"col\">Аудитория</th>";
echo "</tr>";
echo "</thead>";


$msql = "SELECT * FROM schedule WHERE  week='$week' AND day='$day' AND groupss='$groups'";

$mresult = mysqli_query($link, $msql);
if ($mresult->num_rows > 0) {
    // output data of each row
    while($mrow = $mresult->fetch_assoc()) {
        echo "<tr>";  
        echo "<td>";
        echo $mrow['time']  ;
        echo "</td>";
        echo "<td>";
        echo $mrow['subject']  ;
        echo "</td>";
        echo "<td>";
        echo $mrow['room']  ;
        echo "</td>";
        echo "</tr>";    
  }; 
  echo "<table>";
};




// Close connection
mysqli_close($link);

?>