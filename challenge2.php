<?php
//1.Create a PHP function that takes in a string as an argument and returns the string with all vowels replaced with the character "x"
//using str_replace example from W3 tutorial page
$text = "Hello World!";

$newtext = str_replace(
    ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], 
    'x', 
    $text
);

echo $text . "<br><br>";
echo $newtext . "<br><br>";

//using function replaceVowelsWithX
function replaceVowelsWithX($str){
    $vowels=['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    return str_replace($vowels, 'x', $str);

}
$text = "Hello World";
$newtext = replaceVowelsWithX($text);

echo $text . "<br><br>";
echo $newtext."<br><br>";


//2.Create a simple calculator program that takes two numbers as input and performs basic arithmetic operations on them using PHP operators. The program should display the results of each operation.

$number1 = 15;
$number2 = 6;


function subtractnumber($number1, $number2)

    {
    $difference = $number1 - $number2 ;
    return $difference;
    }
    
$result = subtractnumber($number1, $number2);
echo $result."<br><br>";

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
   
    Number 1: <input type="number" name="number1"required><br><br>
    Number 2: <input type="number" name="number2"required><br><br>
    <button type="submit" name="operation" value="multiply">Multiply</button>
    <button type="submit" name="operation" value="add">Add</button>

</form>

<?php

if (isset($_GET['number1']) && isset($_GET['number2'])&& isset($_GET['operation'])) {
    $number1 = $_GET['number1']; 
    $number2 = $_GET['number2']; 
    $operation = $_GET['operation'];
   
    //multiply
    function multiplyNumbers($number1, $number2) {
        return $number1 * $number2; 
    }
    //sum
    function addNumbers($number1, $number2){
        return $number1 + $number2;        
    }

    if ($operation == "multiply") {
        $result = multiplyNumbers($number1, $number2);
        echo "The product of $number1 and $number2 is: $result.<br><br>";
    } elseif ($operation == "add") {
        $result = addNumbers($number1, $number2);
        echo "The sum of $number1 and $number2 is: $result.<br><br>";
    }

}
//3.Write a PHP program that displays the multiplication table of a given number using a for loop   

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
   
  Multiplication table of: <input type="number" name="number"required><br><br>
    <button type="submit" name="operation" value="multiply">Multiply</button>
</form>

<?php
if (isset($_GET['number'])) {
    $number = (int)$_GET['number'];

    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i; 
        echo "$number x $i = $result<br><br>";
    }   
}   
   


//4.else Statements 

$age= 104;

if ($age < 13) {
    echo "You are a child"."<br><br>";
    
} else if ($age >= 13 && $age <= 17) {
    echo "You are a teenager"."<br><br>";

} else if ($age >= 18 && $age <= 64) {
    echo "You are an adult"."<br><br>";

} else {
    echo "You are a senior citizen"."<br><br>";
} 

?>