<?php
echo "<p> Plates \n Towels \n Books <br>";
echo "&nbsp   &nbsp" . $_GET["plates"] ."&nbsp   &nbsp &nbsp" . $_GET["towels"] . "&nbsp &nbsp  &nbsp" . $_GET["books"] . "<br>";
$directions = $_GET["directions"];
echo $directions;
?>