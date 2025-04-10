<?php 
    //1
    echo("Hello World!"); //echo - функція для виведення значень на сторінку
    echo("<br>");
    //2
    $string_val = "~Some text~";
    $int_val = 25;
    $float_val = 3.14;
    $bool_val = false;
    echo $string_val, " ", $int_val, " ", $float_val, " ", $bool_val;
    echo("<br>");
    var_dump($string_val, $int_val, $float_val, $bool_val);
    echo("<br>");
    //3
    $text_1 = "Learning ";
    $text_2 = "PHP!";
    echo $text_1 . $text_2 . "<br>";
    //4
    $num = random_int(1, 100);
    if($num % 2 == 0){
        echo $num, " - парне число! <br>";
    }
    else{
        echo $num, " - непарне число! <br>";
    }
    //5
    for($i = 1; $i <= 10; $i++){
        echo $i . " ";
    }
    echo("<br>");
    $i = 10;
    while($i >= 1 ){
        echo $i . " ";
        $i--;
    }
    echo("<br>");
    //6
    $student = array(
        "first_name" => "Іван", 
        "last_name" => "Петренко", 
        "age" => 22, 
        "specialty" => "Інформаційні технології"
    );


    echo "<br>Ім'я: " . $student['first_name'] . "<br>";
    echo "Прізвище: " . $student['last_name'] . "<br>";
    echo "Вік: " . $student['age'] . "<br>";
    echo "Спеціальність: " . $student['specialty'] . "<br>";

    $student['average_grade'] = 4.5;
    echo "Оновлений масив студента:<br>";
    var_dump($student);

?>