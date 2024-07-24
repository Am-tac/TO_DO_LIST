<?php


include_once "./conected/conect.php";


$select = " SELECT * FROM WORK;";
$select_run = $save->query($select);
$name = $select_run->fetchAll(PDO::FETCH_ASSOC); ?>
<table class="table m-5">
    <thead>
        <th style="text-align: center;">نام کار</th>

    </thead>
    <?php
    // $names = $_POST["NAME"];
    foreach ($name as $i => $x) {
    ?>

        <tr>
            
                <td class="mb-3"  id="<?php echo ($x['id']) ?>"> <?php echo ($x['name'])  ?></td>
            
            <td class="mb-3">
                <a href="./edit/edit.php?id= <?php echo $x['id'] ?>&&name=<?php echo $x['name'] ?>" class="btn btn-outline-info ms-5 p-1">ویرایش</a>
                <a href="./delet/delet.php?action=delete&id= <?php echo $x['id'] ?>" class="btn btn-outline-danger ms-2 p-1">حذف</a>
                <!-- <a href="./yes/yes.php?id= <?php //echo $x['id'] ?>" class="btn btn-outline-success ms-2 p-0 style">تایید</a> -->
            </td>
        </tr>


    <?php
    }; ?>
    <table>