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
$res = preg_replace( '#x(ab)+x#', 'slovo', $str);
var_dump( $res);
echo "<hr>";

$str = 'a+x ax aax aaax';
$res = preg_replace( '#a\+x#', 'slovo', $str);
var_dump( $res);
echo "<hr>";


//Напишите регулярку, которая найдет строку 'a.a', не захватив остальные.
$str = 'a.a aba aea';
$res = preg_replace( '#a\.a#', 'changed', $str);
echo "<hr>";