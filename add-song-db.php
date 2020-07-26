<?php
session_start();

// initializing variables
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'song details');

///add song
if (isset($_POST['add_song'])) {

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $songname = mysqli_real_escape_string($db, $_POST['songname']);
    $songname1 = mysqli_real_escape_string($db, $_POST['songname1']);
    $album = mysqli_real_escape_string($db, $_POST['album']);
    $artist = mysqli_real_escape_string($db, $_POST['artist']);
    $lyricist = mysqli_real_escape_string($db, $_POST['lyricist']);
    $composer = mysqli_real_escape_string($db, $_POST['composer']);
    $musician = mysqli_real_escape_string($db, $_POST['musician']);
    $link = mysqli_real_escape_string($db, $_POST['link']);
    $link1 = mysqli_real_escape_string($db, $_POST['link1']);
    $genre = mysqli_real_escape_string($db, $_POST['genre']);
    $meaning = mysqli_real_escape_string($db, $_POST['meaning']);
    //$salary = mysqli_real_escape_string($db, $_POST['salary']);
    //$workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);

    if (empty($songname)) {
        array_push($errors, "Song name is required");
    }
    if (empty($artist)) {
        array_push($errors, "Artist is required");
    }
    if (empty($lyricist)) {
        array_push($errors, "Lyricist is required");
    }
    if (empty($composer)) {
        array_push($errors, "Composer is required");
    }
    if ($songname == $songname1) {
        array_push($errors, "Song name and other name are the same");
    }
    if (empty($name)) {
       $name= "-";
    }
    if (empty($email)) {
        $email= "-";
    }
    if (empty($songname1)) {
        $songname1= "-";
    }
    if (empty($album)) {
        $album= "-";
    }
    if (empty($musician)) {
        $musician= "-";
    }
    if (empty($link)) {
        $link= "-";
    }
    if (empty($link1)) {
        $link1= "-";
    }
    if (empty($genre)) {
        $genre= "-";
    }
    if (empty($meaning)) {
        $meaning= "-";
    }

    if (count($errors) == 0) {

        $query = "INSERT INTO details (name, email, songname, songname1, album, artist, lyricist, composer, musician, link, link1, genre, meaning, confirmed) 
          VALUES('$name', '$email', '$songname','$songname1', '$album','$artist','$lyricist', '$composer','$musician','$link','$link1','$genre','$meaning' ,'unconfirmed')";

        mysqli_query($db, $query);
        header('location: add-song.php');
    }
}
