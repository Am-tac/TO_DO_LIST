
<?php


include_once "./conected/conect.php";


$select = " SELECT * FROM WORK;";
$select_run = $save->query($select);
$name = $select_run->fetchAll(PDO::FETCH_ASSOC); ?>
<table class="m-5  table table-success table-hover">
    <thead>
        <th class="th" colspan="3" style="text-align: center;">نام کار</th>

    </thead>
    <?php
    // $names = $_POST["NAME"];
    foreach ($name as $i => $x) {

    ?>

        <tr>
            <td class="mb-3 text table-primary text-align" id="<?php echo ($x['id']) ?>" colspan="2">
            <input class="form-check-input me-2 p-1 " type="checkbox">
                <label class="mychek form-check-label ms-5"><span class="handel"> <?php echo ($x['name'])  ?></span> </label>
            </td>

            <td class="mb-3 table-primary">
                <a href="./edit/edit.php?id= <?php echo $x['id'] ?>&&name=<?php echo $x['name'] ?>" class="btn btn-outline-info ms-5 p-1">
                    <img src="./img/edit.png" id="img"></a>
                <a href="./delet/delet.php?action=delete&id= <?php echo $x['id'] ?>" class="btn btn-outline-danger ms-2 p-1">
                    <img src="./img/delet.png" id="img"></a>
               
            </td>
        </tr>


    <?php
    }; ?>
    <tr>
        <td colspan="3"><a href="./deletall/deletall.php?action=delete&id=work" id="deletall" class="btn btn-outline-danger">حذف کردن تمامی مقادیر</a></td>
    </tr>
    <table>
