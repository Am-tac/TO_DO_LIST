<?php
include_once "../conected/conect.php" ;
if (isset($_GET["id"])) {

    $del_id = $_GET["id"];

    $qury = "DELETE FROM `work` WHERE id=:id";
    $delet = $save->prepare($qury);
    $delet->execute(['id' => $del_id]) ;
    header("Location:../index.php");
}

?>