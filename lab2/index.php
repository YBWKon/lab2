<?php
//Task1
 $vv_name = "2 bottles of water";
 // Write your code here:
 $order = &$vv_name;
 $order .= "yee";
 // Don't change the line below
 echo "\nYour order is: $vv_name.";
//endregion


//Task2
<?php
 $IntNumber = 303;
 echo nl2br("$IntNumber");
 echo nl2br("\n");
 $FNumber = 206.37;
 echo nl2br("$FNumber");
 echo nl2br("\n");
 echo nl2br($IntNumber - 291);
 echo nl2br("\n");
 $last_month = 1187.23;
 $this_month = 1089.98;
 echo nl2br($last_month - $this_month);
//endregion


//Task11
<?php
 $num_languages = 4;
 $months = 11;
 $days = $months * 16;
 $days_per_language = $days / $num_languages;
 echo $days_per_language;
//endregion


//Task12
echo "eight squared is equel to " . (8 ** 2);
// endregion


//Task13
<?php
 $my_num = 37;
 $answer = $my_num;
 $answer += 2;
 $answer *= 2;
 $answer -= 2;
 $answer /= 2;
 $answer -= $my_num;
 echo $answer;]
// endregion


//Task14 
<?php
 $a = 10;
 $b = 3;
 echo nl2br("a % b equels to ". $a % $b . "\n\n");
 $a = 303;
 $b = 12;
 if ($a % $b === 0) {
     echo nl2br("Divided without remainder. Result: " . ($a / $b) . "\n");
 }
 else {
     echo nl2br("Divided with remainder. Result: " . ($a % $b) . "\n\n");
 }
 $st = pow(2, 10);
 echo nl2br($st . "\n");
 echo nl2br(sqrt(245) . "\n");
 $arr = [4, 2, 5, 19, 13, 0, 10];
 $sum_sqr = 0;
 foreach ($arr as $value) {
     $sum_sqr += $value ** 2;
 }
 echo nl2br(sqrt($sum_sqr) . "\n\n");
 $roundNymb = sqrt(379);
 echo nl2br(round($roundNymb, 0) . "\n");
 echo nl2br(round($roundNymb, 1) . "\n");
 echo nl2br(round($roundNymb, 2) . "\n");
 $roundNymb2 = sqrt(587);
 $arr = [
     "floor" => floor($roundNymb2),
     "ceil" => ceil($roundNymb2)
 ];
 echo nl2br("Floor is " . $arr['floor'] . ". Ceil is " . $arr['ceil'] . "\n\n");
 $mnmxar = [4, -2, 5, 19, -130, 0, 1];
 echo nl2br("Min is equels to" . min($mnmxar) . ". Max is equels to" . max($MaxM) . "\n\n");
 echo nl2br(rand(1, 100) . "\n");
 $randAr = [];
 for ($i = 0; $i < 10; $i++) {
     $randAr[$i] = rand(1, 100);
     echo $randAr[$i] . ', ';
 }
 echo nl2br("\n\n");
 $a = 13;
 $b = 88;
 echo nl2br(abs($a - $b) . "\n");
 $a = 55;
 $b = 55;
 echo nl2br(abs($a - $b) . "\n") ;
 $a = 33;
 $b = 3;
 echo nl2br(abs($a - $b) . "\n");
 $modarrV1 = [1, 2, -1, -2, 3, -3];
 $moodarrV2 = [];
 for ($i = 0; $i < 6; $i++) {
     $moodarrV2[$i] = abs($modarrV1[$i]);
     echo $moodarrV2[$i] . ", ";
 }
 echo nl2br("\n\n");
 $divnum = 30;
 $index = 0;
 $divar = [];
 for ($i = 1; $i <= $divnum; $i++) {
     if ($divnum % $i == 0) {
         $divar[$index] = $i;
         $index += 1;
     }
 }
 for ($i = 0; $i < sizeof($divar); $i++) {
     echo $divar[$i] . ', ';
 }
 echo nl2br("\n");
 $oarr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $osum = 0;
for ($i = 0; $i < 10; $i++) {
     $osum += $oarr[$i];
     $osum++;
     if ($osum > 10) {
         break;
     }
 }
 echo($osum);
// endregion


//Task15
<?php

 function printStringReturnNumber() {
     echo nl2br("String \n");
     return 303;
 }
 $my_num = printStringReturnNumber();
 echo($my_num);
//endregion


//Task16
<?php

 function increaseEnthusiasm(string $value) {
     return $value . "!";
 }
 echo nl2br(increaseEnthusiasm("Hello World") . "\n");

 function repeatThreeTimes(string $value) {
     return $value . $value . $value;
 }
 echo nl2br(repeatThreeTimes("World")  . "\n");

 echo nl2br(increaseEnthusiasm(repeatThreeTimes("Hello")) . "\n");

 function cut(string $value, int $count = 10) {
     $value2 = "";
     for ($i = 0; $i < $count; $i++) {
         $value2 .= $value[$i];
     }
     return $value2;
 }
 echo nl2br(cut("World", 3) . "\n");

 $arrGlobal = [1,2,3,4,5,6];
 function Recursion($arr, $now) {
     echo $arr[$now] . " ";
     if ($now + 1 < sizeof($arr)) {
         req ($arr, $now + 1);
     }
 }
 echo nl2br(Recursion($arrGlobal, 0) . "\n");

 $number = 303;
 function Summorize(int $num) {
     $sum = 0;
     while ($num != 0) {
         $sum += $num % 10;
         $num /= 10;
     }
     if ($sum > 9) {
         return Summorize($sum);
     }
     else {
         return $sum;
     }
 }
 echo Summorize($number);
//endregion


//Task17
<?php
 $Arr = [];
 $Str = "x";
 for ($i = 0; $i < 8; $i++) {
     $Arr[$i] = $Str;
     $Str .= "x";
     echo $Arr[$i] . " ";
 }
 echo nl2br("\n");
 function arrayFill($str, $num) {
     $res = [];
     for ($i = 0; $i < $num; $i++) {
         $res[$i] = $str;
     }
     return $res;
 }
 $arr = arrayFill("a", 6);
 for ($i = 0; $i < sizeof($arr); $i++) {
     echo $arr[$i] . " ";
 }
 echo nl2br("\n");
 $arr = array(array(1,2,3),array(4,5),array(6));
 $sum = 0;
 foreach ($arr as $value) {
     foreach ($value as $value2){
         $sum += $value2;
     }
 }
 echo($sum . "\n");
 $num = 1;
 for ($i = 0; $i < 3; $i++){
     for ($j = 0; $j < 3; $j++){
         $arr[$i][$j] = $num++;
     }
 }
 $arr = array(2,5,3,9);
 $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
 echo($result . "\n");
 $user = [
     "surname" => "Pak",
     "name" => "Konstantin",
     "patronymic" => "Evgenyevich",
 ];
 foreach ($user as $value){
     echo $value, " ";
 }
 echo nl2br("\n");
 $date = [
     "year" => "1996",
     "month" => "04",
     "day" => "01",
 ];
 echo($date["year"] . "-" . $date["month"] . "-" . $date["day"] . "\n" );
 $arr = ['a', 'b', 'c', 'd', 'e'];
 echo(count($arr) . "\n");
 $arr = ['a', 'b', 'c', 'd', 'e'];
 echo(end($arr) . "\n");
 echo(prev($arr) . "\n\n");
//endregion


//Task18
<?php
 function More(int $a, int $b): bool {
     if ($a + $b > 10) {
         return true;
     }
     else {
         return false;
     }
 }
 function Equal(int $a, int $b): bool {
     if ($a === $b) {
         return true;
     }
     else {
         return false;
     }
 }
 $test = 0;
 echo ($test == 0) ? "True" : "False";
 $age = 54;
 if ($age > 10 && $age < 99){
     $sum = 0;
     while($age > 0){
         $sum += $age % 10;
         $age /= 10;
     }
     if ($sum < 10){
         echo "Single digit sum";
     }
     else{
         echo "Double digit sum";
     }
 }
 else{
     if ($age < 10){
         echo "Age lower than 10";
     }
     else{
         echo "Age higher than 99";
     }
 }
 echo nl2br("\n");
 $arr = array(2,5,3);
 $sum = 0;
 if (count($arr) === 3){
     foreach ($arr as $value){
         $sum += $value;
     }
     echo($sum . "\n");
 }
//endregion


//Task19
<?php
 for ($i=1; $i<=20; $i++){
     for ($j=1; $j<=$i; $j++){
         echo "x";
     }
     echo nl2br("\n");
 }
 echo nl2br("\n");
//endregion


//Task20
<?php

 $arr = array(12,2,3,12);
 echo(array_sum($arr)/sizeof($arr) . "\n");
 echo(array_sum(range(1, 100)) . "\n");
 $arr = array_map('sqrt', $arr);
 print_r($arr);
 echo nl2br("\n");
 $keys = range("a", "z");
 $nums = range(1, 26);
 $arr = array_combine($keys, $nums);
 print_r($arr);
 echo nl2br("\n");
 $str = "1234567890";
 $arr = str_split($str, 2);
 echo array_sum($arr);
//endregion