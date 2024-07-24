<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>لیست کار های روزانه</title>
</head>
<?php
include "./save/save.php";

?>

<body class="">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 m-3 align-self-center" id="form">
            <form method="POST">
                <div class="input-group col-3 align-self-center">
                    <input class="form-control ms-5" id="input" type="text" name="name" for="save">
                    <input class="btn btn-outline-primary" id="submit" type="submit" value="ذخیره" id="save">

                </div>
            </form>

            <?php
            include_once "./list/listed.php"; ?>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>

</body>

</html>