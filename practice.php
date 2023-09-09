<?php

//
///*Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' по шаблону: буква 'a', любой символ, буква 'b'.*/
//
//$str = 'ahb acb aeb aeeb adcb axeb';
//$res = preg_replace( '#a.b#', 'slovo', $str );
//var_dump( $res );
//
///*Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'.*/
//
//
//$str = 'ahb acb aeb aeeb adcb axeb';
//$res = preg_replace( '##', 'slovo', $res );
//var_dump( $str );
//
//$str = 'xx xax xaax xaaax xbx';
//$res = preg_replace( '#xa+x#', 'slovo', $str );
//var_dump( $res );
//
////Найдем все подстроки по шаблону буква 'x', буква 'a' ноль или более раз, буква 'x':
//$str = 'xx xax xaax xaaax xbx';
//$res = preg_replace( '#xa*x#', 'slovo', $str );
//var_dump( $res );
//
//
////Найдем все подстроки по шаблону буква 'x', буква 'a' ноль или один раз, буква 'x':
//$str = 'xx xax xaax xbx';
//$res = preg_replace( '#xa?x#', 'slovo', $str );
//var_dump( $res );
//
////Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' один или более раз, буква 'a'.
//$str = 'aa aba abba abbba abca abea';
//$res = preg_replace( '#ab+a#', 'slovo', $str );
//var_dump( $res );
//
////Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' ноль или более раз, буква 'a'.
//$str = 'aa aba abba abbba abca abea';
//var_dump( preg_replace( '#ab?a#', 'slovo', $str ) );
//
////Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.
//$str = 'aa aba abba abbba abca abea';
//var_dump( preg_replace( '#ab?a#', 'slovo', $str ) );
//
////Напишите регулярку, которая найдет строки 'aa', 'aba', 'abba', 'abbba', не захватив 'abca' и 'abea'.
//$str = 'aa aba abba abbba abca abea';
//var_dump( preg_replace( '#ab*a#', 'slovo', $str ) );
//
///*В предыдущих примерах операторы повторения действовали только на один символ, который стоял перед ними . Что делать, если мы хотим подействовать им на несколько символов ? Для этого существуют группирующие скобки '(' и ')' . Они работают так: если что - то стоит в группирующих скобках и сразу после ')' стоит оператор повторения - он подействует на все, что стоит внутри скобок .
//В следующем примере шаблон поиска выглядит так: буква 'x', далее строка 'ab' один или более раз, потом буква 'x':*/
//
//$str = 'xabx xababx xaabbx';
//$res = preg_replace( '#x(ab)+x#', 'slovo', $str );
//var_dump( $res );
//echo "<hr>";
//
//$str = 'a+x ax aax aaax';
//$res = preg_replace( '#a\+x#', 'slovo', $str );
//var_dump( $res );
//echo "<hr>";
//
//
////Напишите регулярку, которая найдет строку 'a.a', не захватив остальные.
//$str = 'a.a aba aea';
//$res = preg_replace( '#a\.a#', 'changed', $str );
//var_dump( $res );
//echo "<hr>";
//
////Напишите регулярку, которая найдет строку '2+3', не захватив остальные.
//$str = '2+3 223 2223';
//$str = preg_replace( '#2\+3#', 'changed', $str );
//var_dump( $res );
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки '2+3', '2++3', '2+++3', не захватив остальные (+ может быть любое количество)
//$str = '23 2+3 2++3 2+++3 345 567';
//$res = preg_replace( '#2\++3#', 'changed', $str );
//var_dump( $res );
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки '23', '2+3', '2++3', '2+++3', не захватив остальные.
//$str = '23 2+3 2++3 2+++3 445 677';
//$res = preg_replace( '#2\+*3#', 'slovo', $str );
//var_dump( $res );
//echo "<hr>";
//
//
////Напишите регулярку, которая найдет строки '*q+', '*qq+', '*qqq+', не захватив остальные.
//$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
//$res = preg_replace( '#\*q+\+#', 'Tienam', $str );
//var_dump( $res );
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки в квадратных скобках и заменят их на '!'.
//$str = '[abc] {abc} abc (abc) [abc]';
//$res = preg_replace( '#\[\w{3}\]#', 'Tienam', $str );
//var_dump( $res );
//echo "<hr>";
//
///*Операторы +, *, ? хороши, однако, с их помощью нельзя указать конкретное число повторений. В этом случае вам на помощь придет оператор {}.
//Работает он следующим образом: {5} - пять повторений, {2,5} - повторяется от двух до пяти (оба включительно), {2,} - повторяется два и более раз.*/
//
////Напишите регулярку, которая найдет строки 'abba', 'abbba', 'abbbba' и только их.
//$str = 'aa aba abba abbba abbbba abbbbba';
//$res = preg_replace( '#ab{2,4}a#' , 'Slovo', $str);
//var_dump( $res);
//echo "<hr>";
//
//
////Напишите регулярку, которая найдет строки вида 'aba', в которых 'b' встречается менее трех раз (включительно).
//$str = 'aa aba abba abbba abbbba abbbbba';
//$res = preg_replace( '#ab{1,3}a#', 'Tienam', $str);
//var_dump( $res);
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки вида 'aba', в которых 'b' встречается более четырех раз (включительно).
//$str = 'aa aba abba abbba abbbba abbbbba';
//$res = preg_replace( '#ab{4,}a#', 'Tienam', $str);
//var_dump( $res);
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а между ними одна цифра.
//$str = 'a1a a2a a3a a4a a5a aba aca';
//$res = preg_replace( '#a\da#','replace with the one number', $str);
//var_dump( $res);
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а между ними любое количество цифр.
//
//$str = 'a1a a22a a333a a4444a a55555a aba aca';
//$res = preg_replace( '#a\d{0,}a#', '!', $str);
//var_dump( $res);
//echo "<hr>";
//
////Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а между ними любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').
//$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
//$res = preg_replace( '#a[0-9]*a#', '!', $str);
//var_dump( $res);
//echo "<hr>";
////Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b', а между ними - не число.
//$str = 'avb a1b a2b a3b a4b a5b abb acb';
//$res = preg_replace( '#a\Db#', '!', $str);
//var_dump( $res);
//echo "<hr>";
////Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.
//$str = 'ave a#b a2b a$b a4b a5b a-b acb';
//$res = preg_replace( '#a\W+b#', '!', $str);
//var_dump( $res)
//;
//Напишите регулярку, которая заменит все пробелы на '!'.
//$str = 'ave a#a a2a a$a a4a a5a a-a aca';
//$res = preg_replace( '#\s+#', '!', $str);
//var_dump( $res);
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - буква 'b', 'e' или 'x'.
$str1 = 'aba aea aca aza axa';
$result1 = preg_replace( '#a[abx]a#', 'Tienam', $str1);
var_dump( $result1);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - цифра от 3-х до 6-ти.
$str2 = 'a1a a3a a7a a9a aba';
$result2= preg_replace( '#a[3-6]a#', 'slovo', $str2);
var_dump( $result2);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - буква от a до g.
$str3 = 'aba aea afa aha aga';
$result3 = preg_replace( '#a[a-g]a#', 'slovo', $str3);
var_dump( $result3);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - буква от a до f и от j до z.
$str4 = 'aba aea afa aha aga';
$result4 = preg_replace( '#a[a-zj-z]a#', 'slovo', $str4);
var_dump( $result4);
echo "<hr>";

//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - буква от a до f и от A до D.
$str5 = 'aAa aea aEa aJa a3a';
$result5 = preg_replace( '#a[a-fA-D]a#', '!', $str5);
var_dump( $result5);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - маленькие латинские буквы, не затронув остальных.
$str6 = 'aAXa aeffa aGha aza ax23a a3sSa';
$result6 = preg_replace( '#a[a-z]+a#', 'no variable', $str6);
var_dump( $result6);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - маленькие и большие латинские буквы, не затронув остальных.
$str7 = 'aAXa aeffa aGha aza ax23a a3sSa';
$result7 = preg_replace( '#a[a-zA-Z]+a#', 'no-variable', $str7);
var_dump( $result7);
echo "<hr>";
//Напишите регулярку, которая найдет по следующему шаблону: по краям стоят буквы 'a', а между ними - маленькие латинские буквы и цифры, не затронув остальных.
$str8 = 'aAXa aeffa aGha aza ax23a a3sSa';
$result8 = preg_replace( '#a[0-9a-z]+a#', 'no-variable', $str8);
var_dump( $result8);
echo "<hr>";
Окончен урок наборы символов в регулярных  выражениях №193