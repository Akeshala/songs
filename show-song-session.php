<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'song details');

if (isset($_POST['view'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    
    $query = "SELECT * FROM details WHERE id='$id'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {

        // if row value is "-", replace it by "" .............................

        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['songname'] = $row['songname'];
        $_SESSION['songname1'] = $row['songname1'];
        $_SESSION['album'] = $row['album'];
        $_SESSION['artist'] = $row['artist'];
        $_SESSION['lyricist'] = $row['lyricist'];
        $_SESSION['composer'] = $row['composer'];
        $_SESSION['musician'] = $row['musician'];
        $_SESSION['link'] = $row['link'];
        $_SESSION['link1'] = $row['link1'];
        $_SESSION['genre'] = $row['genre'];
        $_SESSION['meaning'] = $row['meaning'];
        //$_SESSION['position1'] = $row['position1'];
        //$_SESSION['position2'] = $row['position2'];
        //$_SESSION['position3'] = $row['position3'];
        //$_SESSION['position4'] = $row['position4'];
        //$_SESSION['salary'] = $row['salary'];
        //$_SESSION['workexperience'] = $row['workexperience'];
        //$_SESSION['image'] = $row['image'];
    }
    header('location: show-song.php');
}


?>