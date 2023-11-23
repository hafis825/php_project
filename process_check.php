

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมตรวจสอบเลขคู่และเลขคี่</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .num {
        margin: 0 auto;
        margin-top: 210px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 250px;
        border-radius: 12px;
        box-shadow: 2px 5px ;
        font-size: 24px;
    }
</style>

<body>
    <div class="num">
        <!-- <p>2    </p> -->
        <?php

            $num = $_POST['num'];

            if($num % 2 == 0) {
                echo "เลข ".$num." เป็น ";
                echo "เลขคู่";
            }else {
                echo " เลขคี่";
            }    

        ?>
    </div>
</body>
</html>