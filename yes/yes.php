<?php

include_once "../conected/conect.php" ;
if (isset($_GET["id"])) {

    $yes_id = $_GET["id"];

    $qury = "UPDATE `work` SET `action`='1' WHERE id=:id";

    $yes = $save->prepare($qury);
    

    $qury_set="SELECT FROM `work` WHERE id=:id";
    $yes_set = $save->prepare($qury_set);
    $yes_set->fetch();
    if($yes_set['action'] !== '' ){
    ?>
    <script> <style>
          font-style  italic 
      </style>
      </script>

 <?php
    }

    header("Location:../index.php");
}