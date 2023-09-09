<?php


/*Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' по шаблону: буква 'a', любой символ, буква 'b'.*/

$str = 'ahb acb aeb aeeb adcb axeb';
$res = preg_replace( '#a.b#', 'slovo', $str );
var_dump( $res );

/*Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'.*/


$str = 'ahb acb aeb aeeb adcb axeb';
$res = preg_replace( '##', 'slovo', $res );
var_dump( $str );

$str = 'xx xax xaax xaaax xbx';
$res = preg_replace( '#xa+x#', 'slovo', $str );
var_dump( $res );

//Найдем все подстроки по шаблону буква 'x', буква 'a' ноль или более раз, буква 'x':
$str = 'xx xax xaax xaaax xbx';
$res = preg_replace( '#xa*x#', 'slovo', $str );
var_dump( $res );


//Найдем все подстроки по шаблону буква 'x', буква 'a' ноль или один раз, буква 'x':
$str = 'xx xax xaax xbx';
$res = preg_replace( '#xa?x#', 'slovo', $str );
var_dump( $res );

//Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' один или более раз, буква 'a'.
$str = 'aa aba abba abbba abca abea';
$res = preg_replace( '#ab+a#', 'slovo', $str );
var_dump( $res );

//Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' ноль или более раз, буква 'a'.
$str = 'aa aba abba abbba abca abea';
var_dump( preg_replace( '#ab?a#', 'slovo', $str ) );

//Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.
$str = 'aa aba abba abbba abca abea';
var_dump( preg_replace( '#ab?a#', 'slovo', $str ) );

//Напишите регулярку, которая найдет строки 'aa', 'aba', 'abba', 'abbba', не захватив 'abca' и 'abea'.
$str = 'aa aba abba abbba abca abea';
var_dump( preg_replace( '#ab*a#', 'slovo', $str ) );

/*В предыдущих примерах операторы повторения действовали только на один символ, который стоял перед ними . Что делать, если мы хотим подействовать им на несколько символов ? Для этого существуют группирующие скобки '(' и ')' . Они работают так: если что - то стоит в группирующих скобках и сразу после ')' стоит оператор повторения - он подействует на все, что стоит внутри скобок .
В следующем примере шаблон поиска выглядит так: буква 'x', далее строка 'ab' один или более раз, потом буква 'x':*/

$str = 'xabx xababx xaabbx';
$res = preg_replace( '#x(ab)+x#', 'slovo', $str );
var_dump( $res );
echo "<hr>";

$str = 'a+x ax aax aaax';
$res = preg_replace( '#a\+x#', 'slovo', $str );
var_dump( $res );
echo "<hr>";


//Напишите регулярку, которая найдет строку 'a.a', не захватив остальные.
$str = 'a.a aba aea';
$res = preg_replace( '#a\.a#', 'changed', $str );
var_dump( $res );
echo "<hr>";

//Напишите регулярку, которая найдет строку '2+3', не захватив остальные.
$str = '2+3 223 2223';
$str = preg_replace( '#2\+3#', 'changed', $str );
var_dump( $res );
echo "<hr>";

//Напишите регулярку, которая найдет строки '2+3', '2++3', '2+++3', не захватив остальные (+ может быть любое количество)
$str = '23 2+3 2++3 2+++3 345 567';
$res = preg_replace( '#2\++3#', 'changed', $str );
var_dump( $res );
echo "<hr>";

//Напишите регулярку, которая найдет строки '23', '2+3', '2++3', '2+++3', не захватив остальные.
$str = '23 2+3 2++3 2+++3 445 677';
$res = preg_replace( '#2\+*3#', 'slovo', $str );
var_dump( $res );
echo "<hr>";


//Напишите регулярку, которая найдет строки '*q+', '*qq+', '*qqq+', не захватив остальные.
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$res = preg_replace( '#\*q+\+#', 'Tienam', $str );
var_dump( $res );
echo "<hr>";

//Напишите регулярку, которая найдет строки в квадратных скобках и заменят их на '!'.
$str = '[abc] {abc} abc (abc) [abc]';
$res = preg_replace( '#\[\w{3}\]#', 'Tienam', $str );
var_dump( $res );
echo "<hr>";

/*Операторы +, *, ? хороши, однако, с их помощью нельзя указать конкретное число повторений. В этом случае вам на помощь придет оператор {}.
Работает он следующим образом: {5} - пять повторений, {2,5} - повторяется от двух до пяти (оба включительно), {2,} - повторяется два и более раз.*/

//Напишите регулярку, которая найдет строки 'abba', 'abbba', 'abbbba' и только их.
$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace( '#ab{2,4}a#' , 'Slovo', $str);
var_dump( $res);
echo "<hr>";


//Напишите регулярку, которая найдет строки вида 'aba', в которых 'b' встречается менее трех раз (включительно).
$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace( '#ab{1,3}a#', 'Tienam', $str);
var_dump( $res);
echo "<hr>";

//Напишите регулярку, которая найдет строки вида 'aba', в которых 'b' встречается более четырех раз (включительно).
$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace( '#ab{4,}a#', 'Tienam', $str);
var_dump( $res);
echo "<hr>";