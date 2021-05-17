<?php

if(isset($_POST["btnOK"])){
    $date=$_POST["dob"];
    $date_arr = preg_split ("/\//", $dob);
    echo "<h3>When you were born</h3>";
    echo "Year: ".$date_arr[0]."<br/>";
    echo "Month: ".$date_arr[1]."<br/>";
    echo "Day: ".$date_arr[2]."<br/>";
}
?>