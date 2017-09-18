<!doctype html>

 <head>
 <title>proj1c</title>
 </head>

 <body>

 <?php


 /* Name: Paula Stutzman
 Date: 02/03/2017
 File Name: proj1c.php
 Purpose: Modify the program so that the user can enter 3 numbers
 and it displays the 3 numbers.
 */
 ?>

 <h1>Paula Stutzman - Project #1 part c<br /> "Extra Credit"</h1>
 <p><em>The purpose of this program is for the user to be able to enter 3 numbers <br />
and for the 3 numbers to be displayed after the submit button is clicked.</em></p>

 <?php
 //Here, I'll assign a few variables
 $x = -4;
 $y = 22.2;
 $z = pi();

 //In PHP, you need to decide which type of quotes to user_error
 //for strings, single ' or double "
 print 'Variables contents: $x = ' . $x . ', $y = '. $y;
 print ", and \$z = $z \n\n";

 //Perform some calculations
 $sum = $x + $y + $z;
 $product = $x * $y * $z;
 $xcube = pow($x,3);
 $average = $sum/3;

 ?>


 <!-- add a space to the end of each line below -->

<p>Sum is: <?= $sum . "\n"; ?><br />
 Product is: <?= $product . "\n"; ?><br />
 Cube of x: <?= $xcube . "\n"; ?><br />
 Average is: <?= $average . "\n"; ?><br /></p>


 <p><em>A decimal converted to binary to octal to hexadecimal</em></p>

 <?php
 print '<p><strong>Decimal</strong></p> ' . bindec('111001') . "\n";
 print '<p><strong> Binary </strong></p>' . decbin(57) . "\n";
 print '<p><strong>Octal </strong></p>' . decoct(57) . "\n";
 print '<p><strong>Hexaecimal </strong></p>' .dechex(57). "\n";
 ?>
 <p><em>A decimal converted to binary to octal to hexadecimal</em></p>


 <?php

 print '<p><strong>Decimal</strong></p> ' . bindec('1100001') . "\n";
 print '<p><strong>Binary</strong> </p> ' . decbin(97) . "\n";
 print '<p><strong>Octal</strong> </p>' . decoct(97) . "\n";
 print '<p><strong>Hexadecimal</strong> </p>' .dechex(97) . "\n";
 ?>

 <form action=proj1c.php method=get><br />
 <p><em>Please enter a number into each box.</em></p>
 Enter 1st Number: <input type=text name=num1><br />
 Enter 2nd Number: <input type=text name=num2><br />
 Enter 3rd Number: <input type=text name=num3><br />
 <input type = "submit">
</form>

 <?php
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 $num3 = $_GET['num3'];
 print "<p>Number 1 is : $num1</p>\n";
 print "<p>Number 2 is : $num2</p>\n";
 print "<p>Number 3 is : $num3</p>\n";
?>
 </body>
