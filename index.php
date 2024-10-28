<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Reverse Number
    </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: aqua;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: linear-gradient(gray ,black);
        }
        div{
            margin: 35px;
        }
        .outer-container1,
        .outer-container2{
            border: 2px solid red;
            border-radius: 30px;
            padding: 10px;
            box-shadow: 0px 0px 20px 20px red;
        }
        .inner-container1,
        .inner-container2{
            border: 2px solid aqua;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 0px 20px 15px aqua;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="outer-container1">
        <div class="inner-container1">
            <?php
                $num = 2419;
                echo $num;
            ?>
        </div>
    </div>
    <div class="outer-container2">
        <div class="inner-container2">
            <?php
                for($i = 1 ; $i <= 4 ; $i++){
                    $num1 = $num % 10;
                    echo $num1;
                    $num2 = $num / 10;
                    $num = (int)$num2;
                }
            ?>
        </div>
    </div>
</body>
</html>