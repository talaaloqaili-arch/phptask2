<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>
<body>
    <h2>PHP String and String Functions</h2>
    <?php
    echo "<p>==================================Q1=========================================</p>";
    $str = "Twinkle, twinkle, little star.";
    $arr=[
    0 => "Twinkle, ",
    1 => " twinkle,",
    2 => "twinkle",
    3 => " little star."];
    var_dump($arr);
    echo "<p>==================================Q2=========================================</p>";
    $char = 'a';
    $next_char = ++$char;
    echo $next_char;
    $char = 'z';
if ($char === 'z') {
    $next_char = 'a';
 } elseif ($char  === 'Z') {
    $next_char = 'A';
 } else {
    $next_char = ++$char;
}
echo $next_char;
    echo "<p>==================================Q3=========================================</p>";
  $original_string = 'The brown fox<br>';
$insert_string = 'quick ';
$position = 4; 

$new_string = substr_replace($original_string, $insert_string, $position, 0);

echo $new_string; 

$original_string = 'The quick brown fox';
$first_word = strtok($original_string, ' ');

echo $first_word;
    echo "<p>==================================Q4=========================================</p>";
   $original_str= '0000657022.24';
   $result = str_replace(0 , '' ,$original_str);
   echo $result;
       echo "<p>==================================Q5=========================================</p>";
       $original_string = 'The quick brown fox jumps over the lazy dog---';
       $result = rtrim($original_string ,'-');
       echo $result;
       echo "<p>==================================Q6=========================================</p>";
$original_string = 'The quick brown fox jumps over the lazy dog';

$result = implode(' ', array_slice(explode(' ', $original_string), 0, 5));

echo $result;
       echo "<p>==================================Q7=========================================</p>";
$origin_number= '2,543.12'  ;
$new_number = str_replace(','  , '' ,$origin_number);
$result= (float)$new_number;
echo $result;
echo "<h2> LOOP </h2>";
       echo "<p>==================================Q1=========================================</p>";
$n = 10; 

$first = 0;
$second = 1;

for ($i = 0; $i < $n; $i++) {
    if ($i === 0) {
        echo $first;
    } elseif ($i === 1) {
        echo ", " . $second;
    } else {
        $next = $first + $second;
        echo ", " . $next;
        
        $first = $second;
        $second = $next;
    }
}

echo ", …";
       echo "<p>==================================Q2=========================================</p>";
 $n = 5;
 $count =1;
 for($i=1 ; $i<= $n ; $i++){
    for($j=1 ;$j<=$i ;$j++){
        echo $count . " ";
        $count++;
    }
    echo "<br>";
 }
        echo "<p>==================================Q3=========================================</p>";
for ($i = 1; $i <= 5; $i++) {
    for ($space = 1; $space <= (5 - $i); $space++) {
        echo "";
    }

    $char = 'A';
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }

    echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
    for ($space = 1; $space <= (5 - $i); $space++) {
        echo "&nbsp;&nbsp;";
    }

    $char = 'A';
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }

    echo "<br>";
}
echo "<h2> Logical Statements and Operators</h2>";
 echo "<p>=======================================Q1===================================</p>";
 $year = 2013 ;
 if(($year % 4==0 && $year%100 != 0) || ($year % 400 == 0)) {
  
 echo "This year is a leap year";
 }
 else {
    echo "This year is not a leap year";
 }
  echo "<p>=======================================Q2===================================</p>";
$tempreture= 27 ;
if($tempreture < 20 )
    {
        echo "It is wintertime!";
    }
    else {
        echo "It is summertime!";
    }
  echo "<p>=======================================Q3===================================</p>";
$firstInteger = 2;
$secondInteger = 2;

$sum = $firstInteger + $secondInteger;

if ($firstInteger === $secondInteger) {
    $result = $sum * 3;
    echo "( $firstInteger + $secondInteger ) * 3 = $result";
} else {
    echo "Sum = $sum";
}
  echo "<p>=======================================Q4===================================</p>";
  $num =[];
  for($i=200 ; $i<= 250 ; $i++){
    if($i % 4 == 0){
        $num [] =$i ;
    }
  }
    echo implode(',' , $num);
  echo "<p>=======================================Q5===================================</p>";
$min = 11;
$max = 20;
$numbers = range($min , $max);
shuffle($numbers);
$random_numbers = array_slice($numbers , 0 , 10);
echo implode ( '' ,$random_numbers);
?>
</body>
</html>