
<?php
//This challenge that involves creating a PHP script that utilises variables, strings, and math:
$width = "10";
$height = "5";

$area = "$width * $height";

echo "The area of a rectangle with width " . $width . " and height " . $height . " is " . $area . " square units.<br><br>";


//Create a PHP program that takes two numbers and outputs the result of adding, subtracting, multiplying, and dividing them. The program should also concatenate the two numbers into a string.
$number1 =10;
$number2 =5;

$sum = $number1 + $number2; //15
$difference = $number1 - $number2; //5
$product = $number1 * $number2; //50
$quotient = $number1 / $number2; //2
$concatenated = $number1 . $number2; // 105

echo "The sum of $number1 and $number2 is $sum.<br>";
echo "The difference of $number1 and $number2 is $difference.<br>";
echo "The product of $number1 and $number2 is $product.<br>";
echo "The quotient of $number1 and $number2 is $quotient.<br>";
echo "The concatenated string of $number1 and $number2 is $concatenated.<br><br>";


//Create a program that uses variables to store the user's age and the number of days, hours, and minutes they have been alive.
echo"Welcome to the Age Calculator<br><br>";

$age = 25;

$daysAlive = $age * 365; 
$hoursAlive = $daysAlive * 24;
$minutesAlive = $hoursAlive * 60;


echo "You have been alive for:<br><br>";


echo $daysAlive . " days<br>";
echo $hoursAlive ." hours<br>";
echo $minutesAlive . " minutes.<br><br>";



//Create and initialise an array variable using a suitable variable name to display the following values:
echo"Seasons of the Year.<br><br>";
$weeklyDays = array( 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday', 'Friday' , 'Saturday' , 'Sunday' ) ;

 echo "<ul>" ; foreach ( $weeklyDays as $value ) { echo "<li> $value </li>" ; } echo "</ul><br><br>" ;



/*Create and initialise an array variable using a suitable variable name to display the following values for climate in Edinburgh:
The “hottest” months in Edinburgh are normally July and August. During summer, the average low temperatures are 52°F (11°C) and average highs are 66°F (19°C)

The coldest months of the year are January and February, with average lows of 33.8°F (1°C) and highs that rarely exceed 44.6°F (7°C).*/

echo"Average Temperature in Edinburgh<br><br>";

$columns = 3;
$EdinburghClimateTemp = array(
    "July-August" => array("Low" => "11°C" , "High" => "19°C"),
    "January-February" => array("Low" => "1°C" , "High" => "7°C"),
    
);

echo "<table>";
echo "<tr>";
echo "<td>Month</td>";
echo "<td>Low</td>";
echo "<td>High</td>";
echo "</tr>";

foreach ($EdinburghClimateTemp as $month => $temps) {
    echo "<tr>";
    echo "<td>$month</td>";
    echo "<td>{$temps['Low']}</td>";
    echo "<td>{$temps['High']}</td>";
    echo "</tr>";
}

echo"</table><br><br>";

echo "Studens Results:<br><br>";

$results = array(
    "Aarron" => array (
        "Phisics" => '74%' ,
        "English" => '69%' ,
        "Biology" => '70%',

    ),
    "Jamie" => array (
        "Phisics" => '64%' ,
        "English" => '79%' ,
        "Biology" => '69%',
    ),
    "Harry" => array (
        "Phisics" => '55%' ,
        "English" => '52%' ,
        "Biology" => '57%',
    ),
);

 echo "Pysics results for Aarron : ";
 echo $results['Aarron']['Phisics']. "
 <br><br>";

 echo "English results for Jamie: ";
 echo $results['Jamie']['English']. "
 <br><br>";

 echo "Maths results for Harry: ";
 echo $results['Harry']['Biology']."
 <br><br>";

?>
