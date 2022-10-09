<?php
    include 'db_connection.php';

    $conn = OpenCon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamer Suggests</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container"></div>
        <div class="wrapper">
                <div class="title">
                    <span class="left-title">Gamer</span>
                    <span class="right-title">Suggests</span>
                </div>
                <ul class="navigation">
                    <li class="parent"><a class="link" href="index.html">Home</a></li>
                    <li class="parent"><a class="link" href="all.html">All Games</a></li>
                    <li class="parent"><a class="link" href="about.html">About</a></li>
                </ul>
            <div class="right-nav">
                <div class="username-picture">
                    <div>Joshua Byrd <img src="images/Portrair_Placeholder.jpg" width="40" height="40"></div>                   
                </div>
            </div>

        </div>

        <div class="info">
        <span class="name">Game: <?php $sql = "SELECT game from video_games";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "<br> Game: ".$row["game"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </span>
        </div>
        
</body>
</html>
 
<?php
    $conn->close();
?>