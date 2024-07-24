<?php

if (isset($_POST["name"])) {
    if ($_POST['name'] !== "") {

        $name = $_POST["name"];

        include "./conected/conect.php";

        $sql = 'INSERT INTO work (name) VALUES(:NAME)';
        $statment = $save->prepare($sql);

        $statment->execute(["NAME" => $name]);

        header("Location:index.php");
        // exit();
    } elseif ($_POST['name'] == '') { ?>
        <div class="alert alert-danger" role="alert">
            مقداری را وارد کنید...!
        </div>
<?php }
} ?>