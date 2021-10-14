<?php 
// Array :  PHP array is special type of variable which holds multiple value at a single variable.
// Basicaly we use array to store same kinds of data.
// There are basically 3 types of array:
// 1. Indexed Array
// 2. Associative Array
// 3. Multidimensional Array

$myArray = array(); // Declaring array

// Index array.
$fruits = array('Apple','Mango','Gauva','Banana');
print_r($fruits);
echo '<br>'. $fruits[2];

echo '<br>';
// Associative array

$students = array(
    'name'=>'Shatrudhan',
    'age'=> '20',
    'Phone' => '931559853'
);
print_r($students);
echo "<br>";
echo $students['age'].'<br>';

// multidimensional array.
$arr = array(
    'CS'=>array(
        '1'=>'Shatrudhan',
        '2'=>'Golu',
        '3'=>'Ram'
    ),
    'IT'=>array(
        '4'=>'Rohit',
        '5'=>'Ashish',
        '6'=>'vikash'
    )
);

print_r($arr);
echo "<br>";
echo $arr['IT']['5'];

?>