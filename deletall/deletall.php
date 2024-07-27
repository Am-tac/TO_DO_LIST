<?php
include_once "../conected/conect.php";
if (isset($_GET["id"])) {

    $del_id = $_GET["id"];

    $qury = "TRUNCATE TABLE work";
    $delet = $save->query($qury);

    header("Location:../index.php");
}
