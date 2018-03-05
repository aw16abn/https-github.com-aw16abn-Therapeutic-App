<html><body> <h1> HTML Header</h1>


<?php
//this is a single line commment

#this is also a single line comment.

/* 
this is a multiline comment 
that spans over multiple lines
*/

echo "Hello world";
?>

<?php

$x = 5; // global scope

function myTest() {
$x = 10;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";


?>

<?php
$num =100;

for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}

}
if( $k == $j )
echo "Prime Number : ", $j, "<br>";
}
?>


</body>


</html>
