<?php
    if(isset($_POST["btnsend"])){
        if (empty(($_POST["jpname"])) || empty(($_POST["jploc"])) || empty(($_POST["jpdes"])) || empty(($_POST["a"])) ) {
            echo "Please Fill All Data";
        }
        else{
            $nm = htmlspecialchars($_POST["jpname"]);
            $lc = htmlspecialchars($_POST["jploc"]);
            $ds = htmlspecialchars($_POST["jpdes"]);
            $ed = htmlspecialchars($_POST["a"]);
            $coo = new mysqli("localhost", "root", "", "cisjops");
            $st = $coo->query("INSERT INTO `jops`
            ( `jname`, `jloc`, `jdescr`, `edu`)
            VALUES ('$nm','$lc','$ds','$ed')");
            echo"Data Added Successfully";
            $coo->close();
        }
    }
    header('Location: frstpr.php');
    
    ?>