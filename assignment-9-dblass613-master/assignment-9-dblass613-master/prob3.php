<?php
    $filename = $_POST["datafile"];
    $destination = "/uploads";
    $test = move_uploaded_file($filename , $destination );
    $num = 0;
    $men = 0;
    $women = 0;

    $myfile = fopen($filename, "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        $num = fgets($myfile);
        $numArray = (explode(" ", $num));

        if(is_numeric(trim($numArray[0])) && is_numeric(trim($numArray[1]))){
            $men += floatval($numArray[0]);
            $women += floatval($numArray[1]);
        }else{
            echo $num . " is ill formed. " . "<br>";
        }
    }

    echo "Men: " . $men . "<br>";
    echo "Women: " . $women . "<br>";


    fclose($myfile);
?>