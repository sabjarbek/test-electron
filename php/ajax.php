
<?php

$link = mysqli_connect("localhost", "mysql", "", "message_table");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST['names'];
$message=$_POST['message'];

// Attempt insert query execution
$sql = "INSERT INTO messages (name, message, status, sex) VALUES ('$name', '$message', 'sanjar', 'litr')";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
$msql = 'SELECT name, message FROM messages';
$mresult = mysqli_query($link, $msql);

$mrows = mysqli_fetch_all($mresult, MYSQLI_ASSOC);
foreach ($mrows as $mrow) {
    echo "<div class=\"shadow rounded card item\">";
    echo "<div class=\"commet-photo\">";
    echo "  <div class=\"row\">";
    echo "<div class=\"col-md-1\">";
    echo "   <a href=\"#\"><img src=\"test-electron/desktop-assets/logan.png\" width=\"100%\"></a>";
    echo "</div>";
    echo "<div class=\"col-md-11\">";
    echo "  <div class=\"name\">";
    echo "      <a href=\"#\">".$mrow['name']."</a>";
    echo "      <p>вчера в 16:00</p>";
    echo "  </div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"commet-des\">";
    echo "  <p>";
    echo  $mrow['message']  ;
    echo "  </p>";
    echo "</div>";
    echo "</div>";
}
// Close connection
mysqli_close($link);

?>