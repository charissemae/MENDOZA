<?php
include 'db/dbconnect.php';

$aid=$_SESSION['aid'];

$sql ="SELECT * FROM post WHERE aid = $aid";

$result = $con ->query($sql);

while ($row=mysqli_fetch_assoc($result)){
    echo "<div class ='post'>";
        
        echo "<div class ='post-pic'>";
        echo "<img src='views/res/profilee.jpg' class='user-img'>";
        echo $_SESSION['firstname']." ";
        echo "</div>";
        echo "<div class ='post-text'>";
        echo $row['content'];
        echo "</div>";
        echo "<div class='post-actions'>";
            echo "<button class='btn-action'><img src='views/res/thumbs-up.png' class='icon-png'> Like</button>";
            echo "<button class='btn-action'><img src='views/res/speech-bubble.png' class='icon-png'> Comment</button>";
            echo "<button class='btn-action'><img src='views/res/share.png' class='icon-png'> Share</button>";
        echo "</div>";
    echo "</div>";
            
}

$con->close();