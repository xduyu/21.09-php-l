<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 1
    // $str = 123.45;
    // echo (int)$str . '</br>';
    // echo (float)$str;
    // 2
    // $name = 'John';
    // $age = 25;
    // echo "My name is $name, I'm $age years old."
    // 3
    // $r = 5;
    // echo 'S=' . round(pi() * $r ** 2, 2);
    // 4
    // $t = 18;
    // if ($t <br 0) {
    //     echo 'На улице мороз!';
    // } elseif ($t > 0 && $t <br 15) {
    //     echo 'На улице холодно';
    // } else {
    //     echo 'На улице тепло';
    // }
    // 5
    // $text = "Hello, World!";
    // echo strlen($text) . '</br>';
    // echo strtoupper($text) . '</br>';
    // echo str_replace('World', 'PHP', $text);
    // 6
    // $num = 7;
    // function chet($num)
    // {
    //     return $num % 2 == 0 ? $num ** 2 : $num ** 3;
    // }
    // echo chet($num);
    // function increment(&$num)
    // {
    //     $num++;
    //     echo "$num </br>";
    // }
    // $value = 5;
    // increment($value);
    // echo $value
    // АНОНИМНЫЕ И СТРЕЛОЧНЫЕ ФУНКЦИИ
    // $greet = function ($name) {
    //     echo "Hello, $name";
    // };
    // $greet('123');

    // $addition = fn($a, $b) => $a + $b;
    // echo $addition(3, 5);

    // Массивы

    $arr = [1, 2, 3, 4, 5];
    echo implode(', </br>', $arr) . '</br>';
    print_r($arr[rand(min($arr), max($arr) - 1)]);
    $arr = ['name1', 'name2', 'name3'];
    echo "</br> " . implode(', ', $arr);

    // arrv2
    $arrv2 = [
        "name" => 'ivan',
        "age" => 25,
    ];
    echo $arrv2["name"]
    ?>
</body>

</html>