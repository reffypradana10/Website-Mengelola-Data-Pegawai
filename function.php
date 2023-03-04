<?php

$conn = mysqli_connect('localhost','root','','wpuphp');

function query($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $nol = [];
    while($r = mysqli_fetch_assoc($result)){
        $nol[] = $r;
    }
    return $nol;
}