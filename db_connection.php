<?php

    function OpenCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "hk4HE.J]bwUmDfBe";
            $db = "vidgames";


            $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn -> error);


            return $conn;
        }

    function CloseCon ($conn)
        {
            $conn -> close();
        }

?>