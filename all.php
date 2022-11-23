<?php
    include 'db_connection.php';

    $conn = OpenCon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamer Suggests</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container"></div>
        <div class="wrapper">
                <div class="title">
                    <span class="left-title">Gamer</span>
                    <span class="right-title">Suggests</span>
                </div>
                <ul class="navigation">
                    <li class="parent"><a class="link" href="index.php">Home</a></li>
                    <li class="parent"><a class="link" href="all.php">All Games</a></li>
                    <li class="parent"><a class="link" href="about.php">About</a></li>
                </ul>
            <div class="right-nav">
                <div class="username-picture">
                    <div><?php
                            session_start();

							if (isset($_SESSION['loggedin']) ?? null) {
								echo $_SESSION['name'];
                            }
							else {
								echo '<a class="link" href="login.php">Login to view</a>';
                            };
                        ?>
                                
                            <img src="images/Portrair_Placeholder.jpg" width="40" height="40"></div>                   
                </div>
            </div>

        </div>

        <div class="info">
            <span class="name">
                <?php $sql = "SELECT * from vidgames ORDER by year desc";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                       while($row = $result->fetch_assoc()) {
                        echo '<ul class="all">';
                            echo '<li class ="pic_style">'.'<img name ="pic" src="'.$row['picture'].'" width="300" height="300"/></li>';
                            echo '<li class="game_style">'.'Game: '.$row['game'].'</li>';
                            echo '<li class="genre_style">'.'Genre: '.$row['genre'].'</li>';
                            echo '<li class="all_style">'.'Publisher: '.$row['publisher'].'</li>';
                            echo '<li class="all_style">'.'Year Published: '.$row['year'].'</li>';
                            echo '<li class="all_style">'.'Platform(s): '.$row['platform'].'</li>';
                            echo '<button class="interested" onClick="intClickFunction()" id="inter" type="button">Interested</button>';
                            echo '<button class="not_interested" onClick="nintClickFunction()" id="notinter" type="button">Not Interested</button>';
                        echo '</ul>';
                        
                    }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </span>
        </div>
        
</body>
</html>
<script type="text/javascript">
    function intClickFunction() {
        alert("Function not implemented yet");
    }

    function nintClickFunction() {
        alert("Function not implemented yet");
    }
</script>

<?php
    $conn->close();
?>