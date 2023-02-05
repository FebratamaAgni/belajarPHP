<?php
$db = mysqli_connect("localhost", "root", "090807", "phpdasar");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $box = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $box[] = $data;
    }
    return $box;
}
