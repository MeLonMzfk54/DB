<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewports" content="width=device-width,initial-scale=1">
    <title>Ex6DB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
  <div class="container">
   <h2>Написать функцию Procent, которая возвращает процент от полученного в качестве аргумента числа.</h2>
    <form class="procent" action="index-6.php" method="post">
        <p class="procent__txt">Здесь число <input class = "procent__text" type="text" name="value1"></p>
        <p class="procent__txt">Здесь процент <input class = "procent__text" type="text" name="valuePr"></p>
        <input name = "btn"class="procent__btn" type="submit" value="Высчитать процент">
    <?php
    if(isset($_POST["btn"])){
        $number = $_POST["value1"];
        $percent = $_POST["valuePr"];    
    }  
    
        function procentOfNumber($number,$percent){
            return $percent*(1/100)*$number;
        }
    $result = procentOfNumber($number,$percent);
        
    ?>
        <p class="procent__txt">А здесь процент от этого числа <input class = "procent__text" type="text" name="valueOutput" value ="<?php echo $result ?>"></p>
        <?php $result = 0?>
     </form>
     <h2>Написать функцию, которая для введенной даты выводит ее в удобном виде. Например, для даты «26-01-2010» выводит «26 января 2010 года»</h2>
     <?php
        function dateFormat($strData) {        
    $y=substr($strData, 0, 4);       
    $m=substr($strData, 5, 2);    
    $d=substr($strData, 8, 2);
    $month=array("января","февраля","марта","апреля","мая","июня","июля", "августа", "сентября","октября","ноября","декабря"); 
    $str=$d." ".$month[$m-1]." ".$y;    
    return $str; 
}   
    $dat=date("Y-m-d");
    $str=dateFormat($dat);   
    echo "<p class = 'date'>".$str."<p>";
      ?>
      <h2>Написать функцию, которая для введенного трехзначного числа выводит его пропись. Например: для 234, функция выведет «двести тридцать четыре».</h2>
      <form action="index-6.php" method="post">
          <p class = "procent__txt">Введите трёхзначное число<input class = "procent__text" type="text" name="number"></p>
          <input type="submit" name="btn__1" class = "procent__btn" value="Первести в пропись">
      </form>
      <?php
            if(isset($_POST["btn__1"])){
                $number1 = $_POST["number"];
            }
        if(strlen($number1) == 3 && substr($number1,0,1)!= "0"){        
                $ch1 = substr($number1,0,1);
                $ch2 = substr($number1,1,1);
                $ch3 = substr($number1,-1);
                switch($ch1){
                    case "1":
                    $res1 = "сто";    
                        break;
                    case "2":
                    $res1 = "двести";    
                        break;
                    case "3":
                    $res1 = "триста";    
                        break;
                    case "4":
                    $res1 = "четыреста";    
                        break;
                    case "5":
                    $res1 = "пятьсот";    
                        break;
                    case "6":
                    $res1 = "шестьсот";    
                        break;
                    case "7":
                    $res1 = "семьсот";    
                        break;
                    case "8":
                    $res1 = "восемьсот";    
                        break;
                    case "9":
                    $res1 = "девятьсот";    
                        break;
                }
            switch($ch2){
                    case "1":
                    $res2 = "десять";    
                        break;
                    case "2":
                    $res2 = "двадцать";    
                        break;
                    case "3":
                    $res2 = "тридцать";    
                        break;
                    case "4":
                    $res2 = "сорок";    
                        break;
                    case "5":
                    $res2 = "пятьдесят";    
                        break;
                    case "6":
                    $res2 = "шестьдесят";    
                        break;
                    case "7":
                    $res2 = "семьдесят";    
                        break;
                    case "8":
                    $res2 = "восемьдесят";    
                        break;
                    case "9":
                    $res2 = "девяноста";    
                        break;
                case "0":
                    $res2 = " ";
                    break;
                }
            switch($ch3){
                    case "1":
                    $res3 = "один";    
                        break;
                    case "2":
                    $res3 = "два";    
                        break;
                    case "3":
                    $res3 = "три";    
                        break;
                    case "4":
                    $res3 = "четыре";    
                        break;
                    case "5":
                    $res3 = "пять";    
                        break;
                    case "6":
                    $res3 = "шесть";    
                        break;
                    case "7":
                    $res3 = "семь";    
                        break;
                    case "8":
                    $res3 = "восемь";    
                        break;
                    case "9":
                    $res3 = "девять";    
                        break;
                case "0":
                    $res2 = " ";
                    break;
                }
            if($res2 == "десять"){
                $res2 = " ";
                switch($res3){
                    case "один":
                        $res3 = "одиннадцать";
                        break;
                    case "два":
                        $res3 = "двенадцать";
                        break;
                    case "три":
                        $res3 = "тринадцать";
                        break;
                    case "четыре":
                        $res3 = "четырнадцать";
                        break;
                    case "пять":
                        $res3 = "пятнадцать";
                        break;
                    case "шесть":
                        $res3 = "шестнадцать";
                        break;
                    case "семь":
                        $res3 = "семнадцать";
                        break;
                    case "восемь":
                        $res3 = "восемнадцать";
                        break;
                    case "девять":
                        $res3 = "девятнадцать";
                        break;
                }
            }
            echo $res1." ".$res2." ".$res3;
        }else{
            echo "Ваше число не трёхзначное или начинается с нуля!";
        }
      ?>
    </div>
    </div>
</body>
</html>