<?php

include_once "../conected/conect.php";

if (isset($_GET["id"])&& isset($_GET['name'])) {

    $list_id = $_GET["id"];

    $qury = "SELECT * FROM work WHERE id = :id";
    $edit = $save->prepare($qury);
    $edit->execute(['id' => $list_id]) ;
    $edit = $edit->fetch();
}
if (isset($_POST['edited'])) {
    if (trim($_POST['name']) !== '') {

        $edited = $_POST["name"];
        $set = "UPDATE Work SET name =:name WHERE id=:id";
        $edit_update = $save->prepare($set);
        $edit_update->execute([ 'id' => $list_id , 'name' => $edited ]);

        header("Location:../index.php");
        // exit();
    } else {
        header("Location:edit.php?id=$list_id&EROE_MASAIGE= مقدار هارا کامل کنید");
        exit();
    }
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>لیست کار های روزانه</title>
</head>

<body>

    <div>
        <div class="row">
            <div>
                <h3>ویرایش کار</h3>
            </div>
            <div>
                <?php
                if (isset($_GET['EROE_MASAIGE'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['EROE_MASAIGE'] ?>
                    </div>
                <?php
                }
                ?>
            </div>

            <form method="post">
                <div class="form-group">
                    <label for="editor">عنوان کار: </label>
                    <input type="text" class="form-control" value="<?php echo $edit['name'] ?>" name="name" id="editor">
                </div>
                <button type="submit" name="edited" class="btn btn-outline-primary">ویرایش</button>
            </form>
        </div>
    </div>

</body>